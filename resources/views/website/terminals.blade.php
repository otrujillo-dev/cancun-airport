@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/website/terminals.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/terminals.min.css') }}" rel="stylesheet">    
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
                            <p>Terminals</p>
                            <h1>Cancun Airport Terminals</h1>
                            <p>Cancun International Airport features four terminals, all connected by a free shuttle service. For transportation options to hotels or other destinations, please visit our Transportation page.</p>
                            <ul>
                                <li>Information Desk</li>
                                <li>Flight information</li>
                                <li>Airlines information</li>
                                <li>VIP Lounge</li>
                                <li>Internet &amp; Wi-Fi stations</li>
                                <li>Car Rental</li>
                                <li>Transportation</li>
                                <li>Parking</li>
                                <li>Currency exchanges</li>
                            </ul>
                        @else
                            <p>Terminales</p>
                            <h1>Terminales del Aeropuerto de Cancún</h1>
                            <p>El Aeropuerto Internacional de Cancún cuenta con cuatro terminales, todas conectadas por un servicio de transporte gratuito. Para conocer las opciones de transporte a hoteles u otros destinos, visite nuestra página de Transporte.</p>
                            <ul>
                                <li>Mostrador de información</li>
                                <li>Información sobre vuelos</li>
                                <li>Información sobre líneas aéreas</li>
                                <li>Sala VIP</li>
                                <li>Puestos de Internet y Wi-Fi</li>
                                <li>Alquiler de coches</li>
                                <li>Transporte</li>
                                <li>Aparcamiento</li>
                                <li>Cambio de divisas</li>
                            </ul>
                        @endif
                        <div>
                            <a href="@lang('links.terminal-1')" class="btn" title="Terminal 1">Terminal 1</a>
                            <a href="@lang('links.terminal-2')" class="btn" title="Terminal 2">Terminal 2</a>
                            <a href="@lang('links.terminal-2')" class="btn" title="Terminal 3">Terminal 3</a>
                            <a href="@lang('links.terminal-2')" class="btn" title="Terminal 4">Terminal 4</a>
                        </div>                        
                    </div>
                    <div class="right">
                        <picture>
                            <source srcset="/assets/img/terminals/transfers-from-terminals.webp" type="image/webp">
                            <img src="/assets/img/terminals/transfers-from-terminals.jpg" alt="Terminals" title="Terminals" width="500" height="500" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="container middle-information">
                <div class="wrapper">
                    <div class="left">
                        @if(app()->getLocale() == "en")
                            <p>Info</p>
                            <h2>Information on Cancun Airport Terminals</h2>
                            <p>Cancun International Airport is served by a variety of airlines, including:</p>
                            <ul>
                                <li>Aeroméxico</li>
                                <li>Delta Air Lines</li>
                                <li>American Airlines</li>
                                <li>United Airlines</li>
                                <li>Spirit Airlines</li>
                                <li>Volaris</li>
                            </ul>
                        @else
                            <p>Información</p>
                            <h2>Información sobre las Terminales del Aeropuerto de Cancún</h2>
                            <p>El Aeropuerto Internacional de Cancún cuenta con una gran variedad de aerolíneas, entre las que se incluyen:</p>
                            <ul>
                                <li>Aeroméxico</li>
                                <li>Delta Air Lines</li>
                                <li>American Airlines</li>
                                <li>United Airlines</li>
                                <li>Spirit Airlines</li>
                                <li>Volaris</li>
                            </ul>
                        @endif
                    </div>
                    <div class="right">
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/satelite.svg" width="25" height="25" alt="Terminal 1" title="Terminal 1" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Terminal 1 </h3>
                                <p>(FBO - Fixed Base Operator): Exclusively handles private and charter flights.</p>
                            @else
                                <h3>Terminal 1</h3>
                                <p>FBO - (Operador de base fija): Atiende exclusivamente vuelos privados y chárter.</p>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/doors.svg" width="25" height="25" alt="Terminal 2" title="Terminal 2" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Terminal 2</h3>
                                <p>Serves both domestic (national) and international flights.</p>
                            @else
                                <h3>Terminal 2</h3>
                                <p>Atiende vuelos nacionales e internacionales.</p>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/plane.svg" width="25" height="25" alt="Terminal 3" title="Terminal 3" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Terminal 3</h3>
                                <p>Dedicated to international flights.</p>
                            @else
                                <h3>Terminal 3</h3>
                                <p>Dedicada a vuelos internacionales.</p>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/facilities.svg" width="25" height="25" alt="Terminal 4" title="Terminal 4" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Terminal 4</h3>
                                <p>Primarily operates international flights..</p>
                            @else
                                <h3>Terminal 4</h3>
                                <p>Opera principalmente vuelos internacionales.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="container bottom-information">
                <div class="wrapper">
                    <div class="top">
                        @if(app()->getLocale() == "en")
                            <p>Monitoring</p>
                            <h2>Cancun Airport Terminals - Monitor your flight</h2>
                            <p>Find schedules, changes, dates, times, terminals, and gates where your flight will depart.</p>
                        @else
                            <p>Monitoreo</p>
                            <h2>Terminales del Aeropuerto de Cancún - Monitoree su vuelo</h2>
                            <p>Encuentre horarios, cambios, fechas, tiempos, terminales y puertas donde saldrá su vuelo.</p>
                        @endif
                    </div>
                    <div class="bottom">
                        <iframe width="100%" height="700px" frameborder="0" src='https://www.avionio.com/widget/{{ app()->getLocale() }}/cun/arrivals?style=2' loading="lazy"></iframe>
                        @if(app()->getLocale() == "en")
                            <p>Be sure to verify your flight details and assigned terminal in advance, allowing ample time to reach the correct departure area and complete check-in procedures smoothly</p>
                        @else
                            <p>Asegúrese de verificar los detalles de su vuelo y la terminal asignada con antelación, para disponer de tiempo suficiente para llegar a la zona de salidas correcta y completar los trámites de facturación sin problemas.</p>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <div class="container faqs-information">
            <div class="wrapper">
                <div class="left">
                    <h2>
                        @if(app()->getLocale() == "en")
                            Cancun International Airport - Terminal Services & Amenities
                        @else
                            Aeropuerto Internacional de Cancún – Servicios y Amenidades
                        @endif
                    </h2>
                    <div class="faq-items">
                        @if(app()->getLocale() == "en")
                            <div>
                                <h3>Terminals 2, 3 & 4 Facilities:</h3>
                                <div>
                                    <p>Passengers at Cancun International Airport (CUN) can enjoy the following amenities across Terminals 2, 3, and 4:</p>
                                    <ul>
                                        <li>Real-time flight information displays</li>
                                        <li>ATMs &amp; banking services</li>
                                        <li>Baggage wrapping stations</li>
                                        <li>Currency exchange offices</li>
                                        <li>Dining &amp; shopping options (available in check-in and gate areas)</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3>Terminal Connectivity</h3>
                                <div>
                                    <p>A free shuttle service operates between all four terminals, allowing passengers to transfer with or without luggage.</p>
                                    <ul>
                                        <li>Shuttle stops are located in each terminal, with staffed information points for assistance.</li>
                                        <li>Frequency: Shuttles run regularly, but wait times may reach 15-20 minutes—plan accordingly.</li>
                                        <li>Accessibility: Air-conditioned vehicles with wheelchair ramps are available.</li>
                                    </ul>
                                    <p>Note: This shuttle is for terminal transfers only. For hotel or destination transportation, visit our Transportation Options page.</p>
                                </div>
                            </div>
                            <div>
                                <h3>Airport Parking</h3>
                                <div>
                                    <ul>
                                        <li>Hourly parking is available at Terminals 2, 3, and 4 for $2 USD per hour.</li>
                                        <li>Process: Take a ticket upon entry and pay at a kiosk inside the terminal before exiting.</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3>Airport Lounges</h3>
                                <div>
                                    <p>Relax before your flight at VIP Lounge by Mera, located in Terminals 2, 3, and 4. Enjoy premium seating, refreshments, and a quiet atmosphere.</p>
                                </div>
                            </div>
                            <div>
                                <h3>Free Airport Wi-Fi</h3>
                                <div>
                                    <ul>
                                        <li>Network: "CUN_Free_WiFi" (provided by Prodigy Mobile)</li>
                                        <li>Availability: All terminals, no time restrictions.</li>
                                        <li>For connection details, visit our Wi-Fi Information page.</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3>Currency Exchange</h3>
                                <div>
                                    <ul>
                                        <li>Money exchange kiosks are available in Terminals 2, 3, and 4.</li>
                                        <li>Recommendation: While USD is widely accepted, carrying Mexican pesos (MXN) is advisable for smaller vendors and taxis.</li>
                                    </ul>
                                    <p>For additional assistance, check the airport’s information desks or visit our Passenger Services section.</p>
                                </div>
                            </div>
                        @else
                            <div>
                                <h3>Instalaciones en las Terminales 2, 3 y 4:</h3>
                                <div>
                                    <p>Los pasajeros del Aeropuerto Internacional de Cancún (CUN) pueden disfrutar de las siguientes amenidades en las Terminales 2, 3 y 4:</p>
                                    <ul>
                                        <li>Pantallas con información de vuelos en tiempo real</li>
                                        <li>Cajeros automáticos (ATMs) y servicios bancarios</li>
                                        <li>Estaciones para envolver equipaje</li>
                                        <li>Casas de cambio</li>
                                        <li>Opciones de comida y compras (disponibles en zonas de check-in y embarque)</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3>Conectividad entre Terminales</h3>
                                <div>
                                    <ul>
                                        <li>Un servicio gratuito de transporte en shuttle opera entre las cuatro terminales, permitiendo a los pasajeros trasladarse con o sin equipaje.</li>
                                        <li>Las paradas del shuttle están ubicadas en cada terminal, con puntos de información atendidos para asistencia.</li>
                                        <li>Frecuencia: Los shuttles pasan regularmente, pero los tiempos de espera pueden ser de 15-20 minutos (planifica con anticipación).</li>
                                        <li>Accesibilidad: Hay vehículos con aire acondicionado y rampas para sillas de ruedas.</li>
                                        <li>Nota: Este servicio solo es para traslados entre terminales. Para transporte a hoteles u otros destinos, visita nuestra página de Opciones de Transporte.</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3>Estacionamiento en el Aeropuerto</h3>
                                <div>
                                    <ul>
                                        <li>Estacionamiento por horas disponible en las Terminales 2, 3 y 4 por $40 MXN por hora.</li>
                                        <li>Proceso: Toma un ticket al entrar y paga en un kiosco dentro de la terminal antes de salir.</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3>Salas VIP (Lounges)</h3>
                                <div>
                                    <p>Relájate antes de tu vuelo en la VIP Lounge by Mera, ubicada en las Terminales 2, 3 y 4. Disfruta de asientos premium, refrigerios y un ambiente tranquilo.</p>
                                </div>
                            </div>
                            <div>
                                <h3>Wi-Fi Gratis en el Aeropuerto</h3>
                                <div>
                                    <ul>
                                        <li>Red: "CUN_Free_WiFi" (proporcionada por Prodigy Mobile)</li>
                                        <li>Disponibilidad: En todas las terminales, sin restricciones de tiempo.</li>
                                        <li>Para más detalles de conexión, visita nuestra página de Información de Wi-Fi.</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3>Casas de Cambio</h3>
                                <div>
                                    <ul>
                                        <li>Hay kioscos de cambio de divisas en las Terminales 2, 3 y 4.</li>
                                        <li>Recomendación: Aunque el USD es ampliamente aceptado, es conveniente llevar pesos mexicanos (MXN) para compras pequeñas y taxis.</li>
                                        <li>Para asistencia adicional, consulta los mostradores de información del aeropuerto o visita nuestra sección de Servicios al Pasajero.</li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="right">
                    <div class="top">
                        @if(app()->getLocale() == "en")
                            <h2>Our News</h2>
                            @if(false)
                                <a href="@lang('links.blog')" title="All articles">All articles</a>
                            @endif
                        @else
                            <h2>Nuestras Noticias</h2>
                            @if(false)
                                <a href="@lang('links.blog')" title="Todos nuestros artículos">Todos nuestros artículos</a>
                            @endif
                        @endif
                    </div>
                    <div class="bottom">
                        <x-blog.general/>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    @include('layouts.footer.general')
@endsection