<?php

namespace App\Http\Controllers\Transportation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Traits\SeoTrait;
use App\Traits\Transportation\ApiTrait;
use Illuminate\Support\Facades\Config;

class ProcessController extends Controller{
    use SeoTrait, ApiTrait;

    public function handlerList(Request $request){
        $this->makeSeo("transportation.process.list");

        $validator = Validator::make($request->all(), [
            'type' => 'required|in:OW,RT',
            'currency' => 'required|in:USD,MXN',
            'language' => 'required|in:en,es',

            'from' => 'required|max:150',
            'from_latitude' => 'required',
            'from_longitude' => 'required',
            'from_pickup_date' => 'required|date_format:Y-m-d H:i',
            
            'to' => 'required|max:150',
            'to_latitude' => 'required',
            'to_longitude' => 'required',
            'to_pickup_date' => [
                'required_if:type,RT',
                'date_format:Y-m-d H:i',
            ],
            
            'passengers' => 'required|integer|min:1|max:35',
            'service' => 'integer',
        ]);

        if ($validator->fails()) {
            return redirect( trans('links.transportation') );
        }

        Session::put( 'quote', $request->all() );
        
        $quote = session()->get('quote');
        if( $quote == NULL ):
            return redirect( trans('links.transportation') );
        endif;

        $form = session()->get('client_data');        
        if( $form == NULL ):
            Session::put( 'client_data', [
                'client_name' => '',
                'client_last_name' => '',
                'client_email' => '',
                'client_phone_code' => '',
                'client_phone' =>  '',
                'client_comment' => '',
                'client_country' => '',
                'client_airline' => '',
                'client_flight_number' => '',
            ] );
        endif;
        
        $data = ApiTrait::quote($quote);

        return view('transportation.reservations.list', ['seo' => $this->seo, 'data' => $data]);
    }

    public function list(){
        $this->makeSeo("transportation.process.list");

        $quote = session()->get('quote');
        if( $quote == NULL ):
            return redirect( trans('links.transportation') );
        endif;

        $data = ApiTrait::quote($quote);        
        return view('transportation.reservations.list', ['seo' => $this->seo, 'data' => $data]);
    }    

    public function handlerDetail(Request $request){
        $this->makeSeo("transportation.process.detail");

        $validator = Validator::make($request->all(), [
            'id' => 'integer',
        ]);

        if ($validator->fails()) {            
            return redirect( trans('links.transportation_process_list') );
        }

        $quote = session()->get('quote');
        if( $quote == NULL ):
            return redirect( trans('links.home') );
        endif;

        $data = ApiTrait::quote($quote);

        if(isset( $data['error'] )):
            return redirect( trans('links.home') );
        endif;

        $id = $request->id;
        $item = array_filter($data['items'], function ($item) use ( $id ) {
            return $item['id'] == $id;
        });        
        $item = array_values($item);
        $data['items'] = $item[0];        

        Session::put( 'id', $request->id );

        $form = session()->get('transportation_client_data');
        
        $countries = ApiTrait::getCountries();

        return view('transportation.reservations.detail', ['seo' => $this->seo, 'quote' => $quote, 'data' => $data, 'form' => $form, 'countries' => $countries]);
    }

    public function detail(){
        $this->makeSeo("transportation.process.detail");

        $quote = session()->get('quote');
        if( $quote == NULL ):
            return redirect( trans('links.home') );
        endif;

        $id = session()->get('id');
        if( $id == NULL ):
            return redirect( trans('links.transportation_process_list') );
        endif;

        $data = ApiTrait::quote($quote);

        if(isset( $data['error'] )):
            return redirect( trans('links.home') );
        endif;

        $item = array_filter($data['items'], function ($item) use ( $id ) {
            return $item['id'] == $id;
        });

        $item = array_values($item);

        if( !isset($item[0]) ):
            return redirect( trans('links.transportation_process_list') );
        endif;

        $data['items'] = $item[0];
        
        $form = session()->get('transportation_client_data');

        $countries = ApiTrait::getCountries();

        //dd($data);

        return view('transportation.reservations.detail', ['seo' => $this->seo, 'quote' => $quote, 'data' => $data, 'form' => $form, 'countries' => $countries]);
    }

    public function check(Request $request){        
        $rez = session()->get('transportation_rez');
        if( $rez == NULL ):
            return response()->json([ 'success' => false ]);
        endif;

        return response()->json([ 'success' => true ]);
    }

    public function handlerBook(Request $request){        

        $validator = Validator::make($request->all(), [
            'type' => 'required|in:OW,RT',            
            'client_name' => 'required|max:75',
            'client_last_name' => 'max:75',
            'client_email' => 'required|email|max:80',
            'client_phone' => 'max:45',            
            'token' => 'required',             
            'client_airline' => 'max:100',
            'client_flight_number' => 'max:100'
        ]);

        Session::put( 'transportation_client_data', [
            'client_name' => $request->client_name,
            'client_last_name' => $request->client_last_name,
            'client_email' => trim($request->client_email),
            'client_phone_code' => $request->client_phone_code,
            'client_phone' =>  trim($request->client_phone),
            'client_country' => $request->client_country,
            'client_airline' => $request->client_airline ?? '',
            'client_flight_number' => $request->client_flight_number ?? '',
        ] );

        if ($validator->fails()) {
            return redirect( trans('links.transportation_process_list') );
        }

        $data = ApiTrait::create($request);

        if(isset( $data['error'] )):      
            return redirect()->to(
                trans('links.transportation_process_detail') . '?' . http_build_query([
                    'code' => $data['error']['code'],
                    'message' => $data['error']['message'][0]
                ])
            );
        endif;

        Session::put( 'transportation_rez', $data);
        
        return redirect( trans('links.transportation_process_payment',[ 'uuid' => $data['config']['uuid'] ]) );
    }

    public function payment(Request $request, ...$args){        
        
        $uuid = $args[0];
        if (count($args) > 1) $uuid = $args[1];

        $this->makeSeo("transportation.process.payment");

        $this->seo['alternate']['en'] = str_replace("{uuid}", $uuid, $this->seo['alternate']['en']);
        $this->seo['alternate']['es'] = str_replace("{uuid}", $uuid, $this->seo['alternate']['es']);

        $item = [
            "uuid" => $uuid,            
            "language" => app()->getLocale()
        ];

        $data = ApiTrait::checkReservation($item);

        if( isset( $data['error'] ) ):
            return redirect()->to(
                trans('links.transportation_process_login') . '?' . http_build_query([
                    'code' => $data['error']['code'],
                    'message' => $data['error']['message']
                ])
            );            
        endif;

        // IMPORTANTE, SI YA NO HAY NADA PENDIENTE DE PAGO, RE DIRIGIR AL DETALLE DE LA RESERVA.
       
        //STRIPE ORDER
        $payment_data = [
            "total" => $data['payments']['pending'],
            "currency" => $data['config']['currency'],
            "id" => $data['config']['id']
        ];

        $stripe = ApiTrait::paymentStripeIntent($payment_data);
        if(!isset( $stripe['id'] )) $stripe['id'] = NULL;

        $payment_data = [
            "id" => $data['config']['id'],
            "type" => 'PAYPAL-ORDERS',
            "language" => app()->getLocale(),
            "success" => Config::get('app.url').trans('links.transportation_process_succcess'),
            "error" => Config::get('app.url').trans('links.transportation_process_error')
        ];        

        $paypal = ApiTrait::paymentLink($payment_data);        
        if(!isset( $paypal['id'] )) $paypal['id'] = NULL;        

        return view('transportation.reservations.payment', [ 'seo' => $this->seo, 'data' => $data, 'stripe_id' => $stripe['id'], 'paypal_id' => $paypal['id'] ]);
    }

    public function payPalCaptureOrder(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                    'error' => [
                        'code' => 'required_params',
                        'message' =>  $validator->errors()->all() 
                    ]
                ], 404);
        }

        $data = ApiTrait::paymentPayPalCaptureOrder($request->id);
        return response()->json($data['data'], 200);
    }

    public function success(){
        $this->makeSeo("transportation.process.payment.success");
        return view('transportation.reservations.payment.success', ['seo' => $this->seo]);
    }

    public function error(){
        $this->makeSeo("transportation.process.payment.error");
        return view('transportation.reservations.payment.error', ['seo' => $this->seo]);
    }

    public function login(){
        $rez = session()->get('transportation_rez');
        if( $rez ):
            return redirect( trans('links.transportation_process_reservation', ['uuid' => $rez['config']['uuid'] ]) );
        endif;

        $this->makeSeo("transportation.login");
        return view('transportation.reservations.login', ['seo' => $this->seo]);
    }

    public function handlerLogin(Request $request){
        $validator = Validator::make($request->all(), [
            'code' => 'required|max:85',
            'email' => 'required|email|max:85',
        ]);

        if ($validator->fails()) {            
            return redirect( trans('links.transportation_process_login') );
        }

        $item = [
            "code" => $request->code,
            "email" => $request->email,
            "language" => app()->getLocale()
        ];

        $rez = ApiTrait::checkReservation($item);

        if( isset( $rez['error'] ) ):
            return redirect()->to(
                trans('links.transportation_process_login') . '?' . http_build_query([
                    'code' => $rez['error']['code'],
                    'message' => $rez['error']['message']
                ])
            );
        endif;

        return redirect( trans('links.transportation_process_reservation', ['uuid' => $rez['config']['uuid'] ]) );

    }

    public function myBooking(Request $request, ...$args){
        $uuid = $args[0];
        if (count($args) > 1) $uuid = $args[1];

        if(isset( $request->logout )):
            session()->forget('transportation_rez');
            return redirect( trans('links.transportation_process_login') );
        endif;

        $item = [
            "uuid" => $uuid,
            "language" => app()->getLocale()
        ];

        $rez = ApiTrait::checkReservation($item);

        if( isset( $rez['error'] ) ):
            return redirect()->to(
                trans('links.transportation_process_login') . '?' . http_build_query([
                    'code' => $rez['error']['code'],
                    'message' => $rez['error']['message']
                ])
            );
        endif;
        
        $this->makeSeo("transportation.process.reservation.details");

        $this->seo['alternate']['en'] = str_replace("{uuid}", $uuid, $this->seo['alternate']['en']);
        $this->seo['alternate']['es'] = str_replace("{uuid}", $uuid, $this->seo['alternate']['es']);
        
        $payment = false;
        if($rez['status'] == 'CONFIRMED'):
            $payment = true;
        endif;

        return view('transportation.reservations.rez-detail', ['seo' => $this->seo, "rez" => $rez, "payment" => $payment ]);
    }
}