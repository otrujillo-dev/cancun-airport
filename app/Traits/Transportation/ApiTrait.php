<?php

namespace App\Traits\Transportation;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

trait ApiTrait
{   
    public static $env = "live";
    public static $channel = 12;
    public static $rate_group = 1;
    public static $api_key = 'JKLQETGVC1';

    public static $enviroments = [
        "dev" => [
            "URL" => "http://127.0.0.1:10000"
        ],
        "live" => [
            "URL" => "https://api.sacbetransfers.com"
        ]
    ];
    
    public static $types = [
        "OW" => "one-way",
        "RT" => "round-trip",
    ];

    public static function autocomplete($keyword){        
        $headers[] = 'x-api-key: ' . self::$api_key;
        return self::sendRequest('/api/v1/autocomplete', 'POST', ['keyword' => $keyword], $headers);
    }

    public static function sendRequest($end_point, $method = 'GET', $data = null, $headers_merge = []) {
        $headers = array(
            'Content-Type: application/json',
        );

        $headers = array_merge($headers, $headers_merge);

        $url = self::$enviroments[ self::$env ]['URL'].$end_point;
        
        $ch = curl_init($url);

        if ($method == 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);
            if ($data) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            }
        }

        if ($method == 'GET') {
            if ($data) {
                $url .= '?' . http_build_query($data);
            }
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        }

        curl_close($ch);

        return json_decode($response, true);
    }

    public static function empty(){        
        $tpv = [
            "type" => "one-way",
            "start" => [
                "place" => "",
                "lat" => "",
                "lng" => "",
                "pickup" => date("Y-m-d H:i"),
            ],
            "end" => [
                "place" => "",
                "lat" => "",
                "lng" => "",
                "pickup" => NULL,
            ],
            "language" => "en",
            "passengers" => 1,
            "currency" => "USD",
            "rate_group" => self::$rate_group, //Grupo de tarifa por defecto...
        ];

        return $tpv;
    }

    public static function quote($quote = []){

        $headers[] = 'x-api-key: ' . self::$api_key;
        
        $data = [
            'type' => self::$types[ $quote['type'] ],
            'language' => app()->getLocale(),
            'passengers' => $quote['passengers'],
            'currency' => $quote['currency'],
            'rate_group' => self::$rate_group,
            'start' => [
                'place' => $quote['from'],
                'lat' => $quote['from_latitude'],
                'lng' => $quote['from_longitude'],
                'pickup' => $quote['from_pickup_date'],
            ],
            'end' => [
                'place' => $quote['to'],
                'lat' => $quote['to_latitude'],
                'lng' => $quote['to_longitude'],
            ]
        ];

        if($quote['type'] == "RT"):
            $data['end']['pickup'] = $quote['to_pickup_date'];
        endif;
        
        return self::sendRequest('/api/v1/quote', 'POST', $data, $headers);
    }

    public static function create($request){        
        $data = [
            "channel" => self::$channel,
            "token" => $request->token,
            "first_name" => trim(ucwords($request->client_name)),
            "last_name" => trim(ucwords(strtolower($request->client_last_name))),
            "email_address" => trim(strtolower($request->client_email)),
            "phone" => "+".$request->client_phone_code." ".$request->client_phone,
            "special_request" => $request->client_comment,
            "country" => $request->client_country,
            "flight_number" => $request->client_airline." ".$request->client_flight_number,
        ];

        if($request->payment_type == "CASH"){
            $data['pay_at_arrival'] = 1;
        }
        
        if( isset( $_COOKIE['affiliate'] ) ){
            $data['affiliate_id'] = $_COOKIE['affiliate'];
        }

        if( isset( $_COOKIE['is_add'] ) ){
            $data['data']['origin'] = 22;
        }  
        
        $headers[] = 'x-api-key: ' . self::$api_key;
        return self::sendRequest('/api/v1/create', 'POST', $data, $headers);
    }

    public static function paymentLink($data = []){
        $headers[] = 'x-api-key: ' . self::$api_key;
        return self::sendRequest('/api/v1/reservation/payment', 'GET', $data, $headers);
    }

    public static function paymentStripeIntent($data = []){
        $headers[] = 'x-api-key: ' . self::$api_key;        
        return self::sendRequest('/api/v1/reservation/payment/stripe-elements/payment-intent', 'GET', $data, $headers);
    }

    public static function paymentPayPalCaptureOrder($id){
        $data = [
            "id" => $id
        ];

        return self::sendRequest('/api/v1/reservation/payment/paypal/order/capture', 'GET', $data, []);
    }

    public static function checkReservation($data){        
        return self::sendRequest('/api/v1/reservation/get', 'POST', $data, []);
    }

    public static function getCountries(){
        $headers[] = 'x-api-key: ' . self::$api_key;
        return self::sendRequest('/api/v1/countries', 'GET', [], $headers);        
    }

    
}