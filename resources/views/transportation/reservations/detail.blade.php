@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/transportation/process/detail.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/transportation/process/detail.min.css') }}" rel="stylesheet">    
@endpush
@push("push-bottom")
    <x-tawk-to.chat/>
    <script>
        const item_config = {
            flight_required: `{!! (int) $data['places']['config']['flight_required'] !!}`,
            service_type: `{!! $quote['type'] !!}`
        };
    </script>
    <script defer src="{{ mix('/assets/js/transportation/process/detail.min.js') }}"></script>    
@endpush

@section('content')
    <div class="base-bg"></div>
    
    <header>
        <a href="@lang('links.home')" class="logo" title="">
            <img src="/assets/img/logo/logo.svg" alt="" title="" width="118" height="45" loading="lazy">
        </a>
        <ul>
            <li data-code="1">@lang('transportation/reservations/detail.search')</li>
            <li data-code="2">@lang('transportation/reservations/detail.select_car_type')</li>
            <li data-code="3">@lang('transportation/reservations/detail.customer_info')</li>
            <li data-code="4">@lang('transportation/reservations/detail.pay')</li>
            <li data-code="5">@lang('transportation/reservations/detail.confirm')</li>
        </ul>
        <button class="btn" onClick="javascript:void(Tawk_API.toggle())">@lang('transportation/reservations/detail.customer_support')</button>
    </header>


    <main class="main">
        <div class="container main-items">
            <form class="wrapper" id="items-form" action="@lang('links.transportation_process_book')" method="POST">
                <div class="left">
                    
                    <div class="service-detail">
                        <div class="top">
                            <h2>{{ $data['items']['name'] }} <span>Max. {{ $data['items']['passengers'] }}</span> <span>{{ $data['items']['luggage'] }}</span></h2>
                            <p>@lang('transportation/reservations/detail.per_vehicles', ['total' => $data['items']['vehicles']])</p>
                        </div>
                        <div class="bottom">
                            <div class="left">
                                <div class="items">
                                    <div class="points">
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <p>{{$data['places']['one_way']['init']['name']}} <span>@lang('transportation/reservations/detail.pickup_time'): {{ date("H:i, M d", strtotime($data['places']['one_way']['init']['time'])) }}</span></p>
                                    <p>{{$data['places']['one_way']['end']['name']}}
                                        @if( $data['places']['config']['round_trip'] == true )
                                            <span>@lang('transportation/reservations/detail.departure_time'): {{ date("H:i, M d", strtotime($data['places']['round_trip']['init']['time'])) }}</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="right">
                                <img src="{{ $data['items']['image'] }}" alt="" title="" width="" height="" loading="lazy">
                            </div>
                        </div>
                    </div>

                    <div class="higlight">
                        <p>@lang('transportation/reservations/detail.instant_confirmation')</p>
                    </div>

                    <div class="info">
                        <div class="top">
                            <h2>@lang('transportation/reservations/detail.contact_information')</h2>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Please enter your personal information to keep in direct contact with you.
                                @else
                                    Por favor ingrese su información personal para mantener contacto directo con usted.
                                @endif
                            </p>
                        </div>
                        <div class="bottom">
                            <div>
                                <input type="text" class="form__input" id="first_name" placeholder="First name" name="client_name" value="{{ $form->client_name ?? '' }}"/>
                                <label for="first_name" class="form__label">@lang('transportation/reservations/detail.first_name') <span>*</span></label>
                            </div>
                            <div>
                                <input type="text" class="form__input" id="last_name" placeholder="Last name" name="client_last_name" value="{{ $form->last_name ?? '' }}"/>
                                <label for="last_name" class="form__label">@lang('transportation/reservations/detail.last_name')</label>
                            </div>
                            <div class="phone_">
                                <select name="client_country">
                                    @foreach($countries as $key => $value)
                                            <option value="{{ $value['phone_code'] }}" {{ (( isset( $form->client_phone_code) && $form->client_phone_code ==  $value['phone_code']  )?'selected':'') }} >(+{{ $value['phone_code'] }}) {{ $value['name'] }}</option>
                                    @endforeach
                                </select>
                                <div>
                                    <input type="text" class="form__input" id="phone" placeholder="Phone number" name="client_phone" value="{{ $form->client_phone ?? '' }}"/>
                                    <label for="phone" class="form__label">@lang('transportation/reservations/detail.phone') <span>*</span></label>
                                </div>                                
                            </div>
                            <div>
                                <input type="text" class="form__input" id="email" placeholder="E-mail" name="client_email" {{ $form->client_email ?? '' }}/>
                                <label for="email" class="form__label">Email <span>*</span></label>
                            </div>
                        </div>
                    </div>

                    @if( $data['places']['config']['flight_required'] == true )
                        <div class="flight-info">
                            <div class="top">
                                <h2>@lang('transportation/reservations/detail.flight_info')</h2>
                                <p>
                                    @if(app()->getLocale() == "en")
                                        Your flight information is necessary to track your exact arrival time.
                                    @else
                                        Los datos de su vuelo son necesarios para conocer su hora exacta de llegada.
                                    @endif
                                </p>
                            </div>
                            <div class="bottom">
                                <div>
                                    <input type="text" class="form__input" id="airline" placeholder="Airline" name="client_airline"/>
                                    <label for="airline" class="form__label">@lang('transportation/reservations/detail.airline') <span>*</span></label>
                                </div>
                                <div>
                                    <input type="text" class="form__input" id="flight_number" placeholder="Flight number" name="client_flight_number"/>
                                    <label for="flight_number" class="form__label">@lang('transportation/reservations/detail.flight_number') <span>*</span></label>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="terms">
                        <div class="top">
                            @if(app()->getLocale() == "en")
                                <p>By proceeding, I acknowledge that I have read and agree to cuninternationalairport.com's <a href="@lang('links.transportation_terms')" title="" target="_blank">Terms & Conditions</a> and <a href="@lang('links.privacy')" title="" target="_blank">Policy</a>.</p>
                                <p><strong>Special Circumstances</strong></p>
                                <p>If you have booked an airport transfer service and your flight has been cancelled for reasons beyond your control, you may cancel your reservation at any time prior to the scheduled pick-up time and receive a refund according to the terms and conditions or apply for an open credit for your next trip.</p>
                            @else
                                <p>Al proceder, reconozco que he leído y estoy de acuerdo con cuninternationalairport.com's <a href="@lang('links.transportation_terms')" title="" target="_blank">Términos y condiciones</a> y <a href="@lang('links.privacy')" title="" target="_blank">Políticas</a>.</p>
                                <p><strong>Circunstancias especiales</strong></p>
                                <p>Si ha reservado un servicio de traslado al aeropuerto y su vuelo ha sido cancelado por razones ajenas a su voluntad, puede cancelar su reserva en cualquier momento antes de la hora de recogida programada y recibir un reembolso de acuerdo a los términos y condiciones o aplicar para un crédito abierto para su siguiente viaje.</p>
                            @endif
                            <div class="price">
                                <p>Total <span>{{ $data['items']['currency'] }}${{ number_format($data['items']['price'],2) }}</span></p>
                            </div>
                            <button type="button" class="btn" onclick="handler()" id="book">@lang('transportation/reservations/detail.continue')</button>
                            @csrf
                            <input type="hidden" name="token" value="{{ $data['items']['token'] }}">
                            <input type="hidden" name="type" value="{{ (( $data['places']['config']['round_trip'] == true )?'RT':'OW') }}">
                        </div>
                    </div>

                </div>
                <div class="right">
                    <div class="information">
                        <div class="one">
                            <h2>@lang('transportation/reservations/detail.price_details')</h2>
                            <p>Total <span>{{ $data['items']['currency'] }}${{ number_format($data['items']['price'],2) }}</span></p>
                        </div>
                        <div class="two">
                            @if( $data['places']['config']['flight_required'] == true )                            
                                @if(app()->getLocale() == "en")
                                    <p>Your driver will follow your flight status, and will wait for free for 45 minute(s) after your flight arrival time.</p>
                                @else
                                    <p>Su conductor seguirá el estado de su vuelo, y le esperará gratuitamente durante 45 minuto(s) después de la hora de llegada de su vuelo.</p>
                                @endif
                            @else
                                @if(app()->getLocale() == "en")
                                    <p>Your driver will wait for free for 15 minute(s) from your car booking time.</p>
                                @else
                                    <p>Su conductor le esperará gratuitamente durante 15 minutos a partir de la hora de reserva de su coche.</p>                                    
                                @endif
                            @endif

                            @if(app()->getLocale() == "en")
                                <p>Free cancellation is available.</p>
                            @else
                                <p>Cancelación gratuita está disponible.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <p>Copyright © {{ date("Y") }} cuninternationalairport.com. All rights reserved</p>
    </footer>
@endsection