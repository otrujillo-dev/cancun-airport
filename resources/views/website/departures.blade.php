@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/website/departures.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/departures.min.css') }}" rel="stylesheet">    
@endpush
@push("push-bottom")
    
@endpush

@section('content')
    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">
            <div class="gray-bg">
                <div class="container main-information">
                    <div class="wrapper">
                        <div class="left">
                            @if(app()->getLocale() == "en")
                                <p>Everything you need to know</p>
                                <h1>Cancun Airport Departures</h1>
                                <p>Cancun International Airport: Departures & Flight Status</p>
                                <p>Departures Information: All you need to know before leaving Cancun</p>
                            @else
                                <p>Todo lo que necesitas saber</p>
                                <h1>Salidas del Aeropuerto de Cancún</h1>
                                <p>Aeropuerto Internacional de Cancún: Salidas y Estado de Vuelos</p>
                                <p>Información de salidas: Todo lo que debes saber antes de partir de Cancún</p>
                            @endif
                        </div>
                        <div class="right">
                            <picture>
                                <source srcset="/assets/img/arrivals-and-departures/flight.webp" type="image/webp">
                                <img src="/assets/img/arrivals-and-departures/flight.jpg" alt="Departures" title="Departures" width="500" height="500" loading="lazy">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container flights-information">
                <div class="wrapper">
                    <iframe width="100%" height="600px" frameborder="0" src='https://www.avionio.com/widget/{{ app()->getLocale() }}/cun/departures?style=2' loading="lazy"></iframe>
                </div>
            </div>

            @if(false)
                <div class="container middle-information">
                    <div class="wrapper">
                        <div class="left">
                            <picture>
                                <source srcset="/assets/img/arrivals-and-departures/luggage.webp" type="image/webp">
                                <img src="/assets/img/arrivals-and-departures/luggage.jpg" alt="" title="" width="500" height="500" loading="lazy">
                            </picture>
                        </div>
                        <div class="right">                        
                            <p>Important Information</p>
                            <h2>What is a tourist card?</h2>
                            <p>Upon arrival at the Cancun airport, you must present your passport to the Mexican immigration agent. You will then be able to claim your luggage and then go through customs to declare your goods. To do this, you must press a button next to a light that looks like a traffic signal (security can also press this button while you unload your belongings into the inspection garbage cans. A green light indicates that your bags can pass through without inspection, while a red light means they will be checked.</p>
                            <p>Please do not stop to talk to screeners or security personnel. Instead, walk down the aisle and meet your transportation company outside. If you have pre-booked a Cancun airport shuttle, it will wait for you outside the terminal where you arrive to take you quickly to your destination. Otherwise, you will need to get an off-airport shuttle. Waiting time for off-airport transportation without a reservation can be 30 to 40 minutes.</p>
                            <p>After checking in with a representative, he/she will take you to the loading area. Then, you will meet the van that will take you to your destination there.</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="gray-bg">
                <div class="container bottom-information">
                    <div class="wrapper">
                        <div class="left">    
                            @if(app()->getLocale() == "en")
                                <p>Departures</p>
                                <h2>Cancun Airport (CUN) Flight Status & Departures</h2>
                            @else
                                <p>Salidas</p>
                                <h2>Estado de Vuelos y Salidas del Aeropuerto de Cancún (CUN)</h2>
                            @endif
                            <div>
                                <div>
                                    <p>+30.5 MM</p>
                                    <p>
                                        @if(app()->getLocale() == "en")
                                            Millions of passengers per year
                                        @else
                                            Millones de pasajeros al año
                                        @endif
                                    </p>
                                </div>
                                <div>
                                    <p>+100 Airport</p>
                                    <p>
                                        @if(app()->getLocale() == "en")
                                            There are more than 100 airports in 100 destinations worldwide, including major cities in the U.S., Canada, Europe, and Latin America.
                                        @else
                                            Hay más de 100 aeropuertos en 100 destinos alrededor del mundo, incluyendo ciudades principales en EE.UU., Canadá, Europa y Latinoamérica.
                                        @endif
                                    </p>
                                </div>
                                <div>
                                    <p>+50K</p>
                                    <p>
                                        @if(app()->getLocale() == "en")
                                            Transfers
                                        @else
                                            Traslados 
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            @if(app()->getLocale() == "en")
                                <h3>Cancún Airport Departures - Live Flight Status</h3>
                                <p>Track real-time departures and live flight updates for Cancún International Airport (CUN) below. In the event of airport disruptions, the latest schedule changes will be displayed instantly.</p>
                                <p>All flight delays, cancellations, and operational adjustments are automatically updated in the departure table for accurate, up-to-the-minute information.</p>
                            @else
                                <h3>Salidas del Aeropuerto de Cancún - Estado de Vuelos en Tiempo Real</h3>
                                <p>Consulta en tiempo real las salidas y actualizaciones de vuelos del Aeropuerto Internacional de Cancún (CUN) a continuación. En caso de interrupciones en el aeropuerto, los cambios de horario más recientes se mostrarán al instante.</p>
                                <p>Todos los retrasos, cancelaciones y ajustes operativos se actualizan automáticamente en la tabla de salidas para brindar información precisa y al minuto.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            @if(false)
                <div class="container faqs-information">
                    <div class="wrapper">
                        <div class="left">
                            <h2>FAQ's</h2>
                            <div class="faq-items">
                                <div>
                                    <h3>Are pets allowed in the vehicles?</h3>
                                    <div>
                                        <p>Yes, we accept small pets as long as they are informed during the reservation.</p>
                                    </div>
                                </div>
                                <div>
                                    <h3>Are pets allowed in the vehicles?</h3>
                                    <div>
                                        <p>Yes, we accept small pets as long as they are informed during the reservation.</p>
                                    </div>
                                </div>
                                <div>
                                    <h3>Are pets allowed in the vehicles?</h3>
                                    <div>
                                        <p>Yes, we accept small pets as long as they are informed during the reservation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="top">
                                <h2>Or News</h2>
                                <a href="#" title="Todos los articulos">Todos los articulos</a>
                            </div>
                            <div class="bottom">
                                <x-blog.latest/>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        
    </main>

    @include('layouts.footer.general')
@endsection