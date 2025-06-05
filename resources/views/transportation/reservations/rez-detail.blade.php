@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/transportation/process/rez-detail.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/transportation/process/rez-detail.min.css') }}" rel="stylesheet">    
@endpush
@push("push-bottom")
    <x-tawk-to.chat/>
@endpush

@section('content')
    
    <div class="base-bg"></div>

    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])
    
    <main class="main">
        <div class="container main-items">
            <div class="wrapper">
                <div class="left">

                    <div class="one">
                        <div class="top">
                            @if($rez['status'] == "PENDING")
                                <h2>@lang('transportation/reservations/rez_detail.awaiting_payment')</h2>
                                <p>
                                    @if(app()->getLocale() == "en")
                                        Payment has not been received for this booking. Booking will be canceled if payment is not received by the required time.
                                    @else
                                        No se ha recibido el pago de esta reserva. La reserva se cancelará si no se recibe el pago en el plazo requerido.
                                    @endif
                                </p>
                            @endif

                            @if($rez['status'] == "CONFIRMED")
                                @if(app()->getLocale() == "en")
                                    <h2>Confirmed</h2>
                                    <p>Thank you for your payment, your reservation has been confirmed.</p>
                                @else
                                    <h2>Confirmado</h2>
                                    <p>Gracias por su pago, su reserva ha sido confirmada.</p>
                                @endif
                            @endif
                            @if(false)
                                <h2>Canceled</h2>
                                <p>Your booking has been canceled due to time</p>
                            @endif
                        </div>
                        <div class="bottom">
                            @if($rez['status'] == "PENDING")
                                <a href="@lang('links.transportation_process_payment', ['uuid' => $rez['config']['uuid']])" class="btn payment" title="@lang('transportation/reservations/rez_detail.make_payment')">@lang('transportation/reservations/rez_detail.make_payment')</a>
                            @endif
                            <a href="@lang('links.transportation_process_reservation', ['uuid' => $rez['config']['uuid']])?logout=true" class="btn logout">Logout</a>
                        </div>
                        <div class="alert">
                            @if($rez['status'] == "PENDING")
                                <div>
                                    @if(app()->getLocale() == "en")
                                        If you have already made your payment and your reservation has not been updated please click <a href="@lang('links.transportation_process_reservation', ['uuid' => $rez['config']['uuid']])" title="here">here</a> or contact us via chat.
                                    @else
                                        Si ya ha realizado el pago y su reserva no se ha actualizado, haga clic en <a href="@lang('links.transportation_process_reservation', ['uuid' => $rez['config']['uuid']])" title="aquí">aquí</a> o contacte con nosotros a través del chat.
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="two">
                        @foreach( $rez['items'] as $key => $value )
                            <div class="item">
                                <div class="rez">
                                    <div class="top">
                                        <h2>{{ date("H:i, M d, Y", strtotime( $value['pickup'] )) }} · {{ $value['code'] }}</h2>
                                        <p>@lang('transportation/reservations/rez_detail.times')</p>
                                    </div>
                                    <div class="bottom">
                                        <p>{{ $value['from']['name'] }}</p>
                                        <div></div>
                                        <p>{{ $value['to']['name'] }}</p>
                                        @if($value['is_round_trip'] == true)
                                            <p>@lang('transportation/reservations/rez_detail.return'): {{ date("H:i, M d, Y", strtotime( $value['departure_pickup'] )) }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="vehicle">
                                    <div class="top">
                                        <h2>{{ $value['service_type_name'] }}</h2>
                                        <p>
                                            @if(app()->getLocale() == "en")
                                                Service provided by Sacbe Transfers
                                            @else
                                                Servicio prestado por Sacbe Transfers
                                            @endif
                                        </p>
                                    </div>
                                    <div class="bottom">
                                        <div class="left">
                                            <p>Pax. {{ $value['passengers'] }}</p>
                                            <p>Max. {{ $value['luggage'] }}</p>
                                        </div>
                                        <div class="right">
                                            <img src="{{ $value['service_type_image'] }}" width="" height="" alt="" title="" loading="lazy">
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        @endforeach
                    </div>

                    <div class="three">
                        <div class="top">
                            <h2>@lang('transportation/reservations/rez_detail.contact_information')</h2>                                
                        </div>
                        <div class="bottom">
                            <p><strong>{{ $rez['client']['first_name'] }} {{ $rez['client']['last_name'] }}</strong></p>
                            <div>
                                <p>@lang('transportation/reservations/rez_detail.phone'): {{ $rez['client']['phone'] }}</p>
                                <p>Email: {{ $rez['client']['email'] }}</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="right">
                    <div class="information">
                        <div class="top">
                            <h2>@lang('transportation/reservations/rez_detail.booking_info')</h2>
                        </div>
                        <div class="price">
                            <p>Total <span>{{ $rez['config']['currency'] }}${{ number_format($rez['sales']['total'], 2) }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.footer.general')
@endsection