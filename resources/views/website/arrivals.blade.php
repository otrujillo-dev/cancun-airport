@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/website/arrivals.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/arrivals.min.css') }}" rel="stylesheet">    
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
                                <h1>Punta Cana Airport Arrivals</h1>
                                <p>Punta Cana International Airport: Arrivals & Flight Status</p>
                                <p>Arrival Information: All you need to know before arriving in Punta Cana</p>
                            @else
                                <p>Todo lo que debes saber</p>
                                <h1>Llegadas al Aeropuerto de Punta Cana</h1>
                                <p>Aeropuerto Internacional de Punta Cana: Llegadas y Estado de los Vuelos</p>
                                <p>Información de Llegada: Todo lo que necesita saber antes de llegar a Punta Cana</p>
                            @endif
                        </div>
                        <div class="right">
                            <picture>
                                <source srcset="/assets/img/arrivals-and-departures/flight.webp" type="image/webp">
                                <img src="/assets/img/arrivals-and-departures/flight.jpg" alt="" title="" width="500" height="500" loading="lazy">
                            </picture>
                        </div>
                    </div>
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
                            @if(app()->getLocale() == "en")
                                <p>Important Information</p>
                                <h2>What is a tourist card?</h2>
                                <p>Upon arrival at the Cancun airport, you must present your passport to the Mexican immigration agent. You will then be able to claim your luggage and then go through customs to declare your goods. To do this, you must press a button next to a light that looks like a traffic signal (security can also press this button while you unload your belongings into the inspection garbage cans. A green light indicates that your bags can pass through without inspection, while a red light means they will be checked.</p>
                                <p>Please do not stop to talk to screeners or security personnel. Instead, walk down the aisle and meet your transportation company outside. If you have pre-booked a Cancun airport shuttle, it will wait for you outside the terminal where you arrive to take you quickly to your destination. Otherwise, you will need to get an off-airport shuttle. Waiting time for off-airport transportation without a reservation can be 30 to 40 minutes.</p>
                                <p>After checking in with a representative, he/she will take you to the loading area. Then, you will meet the van that will take you to your destination there.</p>
                            @else
                                <p>Important Information</p>
                                <h2>What is a tourist card?</h2>
                                <p>Upon arrival at the Cancun airport, you must present your passport to the Mexican immigration agent. You will then be able to claim your luggage and then go through customs to declare your goods. To do this, you must press a button next to a light that looks like a traffic signal (security can also press this button while you unload your belongings into the inspection garbage cans. A green light indicates that your bags can pass through without inspection, while a red light means they will be checked.</p>
                                <p>Please do not stop to talk to screeners or security personnel. Instead, walk down the aisle and meet your transportation company outside. If you have pre-booked a Cancun airport shuttle, it will wait for you outside the terminal where you arrive to take you quickly to your destination. Otherwise, you will need to get an off-airport shuttle. Waiting time for off-airport transportation without a reservation can be 30 to 40 minutes.</p>
                                <p>After checking in with a representative, he/she will take you to the loading area. Then, you will meet the van that will take you to your destination there.</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
            
            <div class="container flights-information">
                <div class="wrapper">
                    @if(app()->getLocale() == "en")
                        <iframe width="100%" height="600px" frameborder="0" src='https://www.avionio.com/widget/en/puj/arrivals?style=2' loading="lazy"></iframe>
                    @else
                        <iframe width="100%" height="600px" frameborder="0" src='https://www.avionio.com/widget/es/puj/arrivals?style=2' loading="lazy"></iframe>
                    @endif
                </div>
            </div>
            
            <div class="gray-bg">
                <div class="container bottom-information">
                    <div class="wrapper">
                        <div class="left">
                            @if(app()->getLocale() == "en")
                                <p>Arrivals</p>
                                <h2>Punta Cana Airport (PUJ) Flight Status & Arrivals</h2>
                            @else
                                <p>Llegadas</p>
                                <h2>Aeropuerto de Punta Cana (PUJ) Estado del vuelo y llegadas</h2>
                            @endif
                            <div>
                                <div>
                                    <p>+8 MM</p>
                                    <p>
                                        @if(app()->getLocale() == "en")
                                            Millions of passengers per year
                                        @else
                                            Millones de pasajeros al año
                                        @endif
                                    </p>
                                </div>
                                <div>
                                    <p>+81 Airport</p>
                                    <p>
                                        @if(app()->getLocale() == "en")
                                            With more than 81 airports in 28 countries and 76 cities
                                        @else
                                            Con más de 81 aeropuertos en 28 países y 76 ciudades
                                        @endif
                                    </p>
                                </div>
                                <div>
                                    <p>+18k</p>
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
                            <p>Compruebe las últimas llegadas de vuelos en tiempo real y actualizaciones de estado para el Aeropuerto de Punta Cana a continuación. Si el aeropuerto está cerrado, la tabla de llegadas mostrará la información más actualizada.</p>
                            <p>Cualquier retraso, cancelación o cambio operativo se actualizará automáticamente en el horario de llegada del Aeropuerto de Punta Cana.</p>
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