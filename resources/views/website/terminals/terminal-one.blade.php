@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/website/terminal-particular.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/terminal-particular.min.css') }}" rel="stylesheet">    
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
                            <h1>Cancun Airport Terminal 1</h1>
                            <p>Designed specifically for private aviation, Terminal 1 operates as an exclusive FBO (Fixed Base Operator) facility featuring:</p>
                            <ul>
                                <li>5 private boarding gates (A1-A5)</li>
                                <li>2 dedicated helicopter pads</li>
                                <li>A premium VIP lounge with concierge services</li>
                                <li>Full customs and immigration processing for international arrivals</li>
                            </ul>
                        @else
                            <p>Terminals</p>
                            <h1>Terminal 1 del Aeropuerto de Cancún</h1>
                            <p>Diseñada exclusivamente para aviación privada, la Terminal 1 funciona como una instalación FBO (Operador de Base Fija) con los siguientes servicios:</p>
                            <ul>
                                <li>5 puertas de embarque privadas (A1-A5)</li>
                                <li>2 plataformas exclusivas para helicópteros</li>
                                <li>Sala VIP premium con servicio de conserjería</li>
                                <li>Trámites completos de aduana e inmigración para vuelos internacionales</li>
                            </ul>
                        @endif
                    </div>
                    <div class="right">
                        <picture>
                            <source srcset="/assets/img/terminals/transfers-from-terminals.webp" type="image/webp">
                            <img src="/assets/img/terminals/transfers-from-terminals.jpg" alt="Terminal 1" title="Terminal 1" width="500" height="500" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="container middle-information">
                <div class="wrapper">
                    <div class="left">
                        @if(app()->getLocale() == "en")
                            <p>General</p>
                            <h2>Cancun International Airport - Terminal 1 Overview</h2>
                            <p>Following extensive renovations after Hurricane Wilma's impact, the terminal was upgraded and reopened in 2013 to better serve the growing private aviation market. Today, it handles approximately 50 private flights daily, catering to business executives, celebrities, and high-net-worth travelers seeking discretion and efficiency.</p>
                            <p>The terminal offers streamlined services including:</p>
                            <ul>
                                <li>Expedited security screening</li>
                                <li>Private limousine coordination</li>
                                <li>Aircraft catering and fueling services</li>
                                <li>Crew rest facilities</li>
                            </ul>
                            <p>For private flight arrangements or FBO services, please contact our concierge desk available 24/7.</p>
                        @else
                            <p>General</p>
                            <h2>Aeropuerto Internacional de Cancún - Resumen de la Terminal 1</h2>
                            <p>Después de extensas renovaciones tras el impacto del Huracán Wilma, la terminal fue modernizada y reabierta en 2013 para atender mejor el creciente mercado de aviación privada. Hoy en día, maneja aproximadamente 50 vuelos privados diarios, atendiendo a ejecutivos, celebridades y viajeros de alto poder adquisitivo que buscan discreción y eficiencia.</p>
                            <p>La terminal ofrece servicios ágiles, como:</p>
                            <ul>
                                <li>Control de seguridad prioritario</li>
                                <li>Coordinación de limusinas privadas</li>
                                <li>Servicios de catering y abastecimiento de combustible para aeronaves</li>
                                <li>Áreas de descanso para tripulaciones</li>
                            </ul>
                            <p>Para arreglos de vuelos privados o servicios FBO, contacta a nuestro mostrador de conserjería, disponible 24/7.</p>
                        @endif
                    </div>
                    <div class="right">
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/satelite.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Building</h3>
                                <p>Terminal 1 is an FBO and is only used for private flights.</p>
                                @else
                                <h3>Edificio</h3>
                                <p>La Terminal 1 es un FBO y sólo se utiliza para vuelos privados.</p>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/plane.svg" width="25" height="25" alt="" title="" loading="lazy">                                                                
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Type of flights</h3>
                                <p>It operates exclusively private, charter, and general aviation flights.</p>
                            @else
                                <h3>Tipo de vuelos</h3>
                                <p>Opera exclusivamente vuelos privados, chárter y aviación general.</p>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/doors.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Available services</h3>
                                <p>It offers VIP lounges, immigration and customs services, and personalized attention for private passengers.</p>
                            @else
                                <h3>Servicios disponibles</h3>
                                <p>Cuenta con salas VIP, servicio de migración y aduanas, y atención personalizada para pasajeros privados.</p>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/facilities.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Location</h3>
                                <p>It is separated from the commercial terminals, with exclusive access for private operators.</p>
                            @else
                                <h3>Ubicación</h3>
                                <p>Se encuentra separada de las terminales comerciales, con acceso exclusivo para operadores privados.</p>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/globe.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Ground access</h3>
                                <p>It has a dedicated area for private transportation and transfers coordinated directly with flight operators.</p>
                            @else
                                <h3>Acceso terrestre</h3>
                                <p>Dispone de un área especial para transporte privado y traslados coordinados directamente con los operadores de vuelo.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="container terminal-map">
                <div class="wrapper">
                    <div class="top">
                        @if(app()->getLocale() == "en")
                            <h2>Map of Terminal 1 of Cancun Airport</h2>
                        @else
                            <h2>Mapa de la Terminal 1 del Aeropuerto de Cancún</h2>
                        @endif
                    </div>
                    <div class="bottom">
                        <picture>
                            <img src="/assets/img/terminals/cancun-airport-terminal-1-map.svg" alt="" title="" width="500" height="500" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>

            @if(false)
                <div class="container bottom-information">
                    <div class="wrapper">
                        <div class="top">
                            @if(app()->getLocale() == "en")
                                <p>Airlines</p>
                                <h2>Map of Terminal 1 of Cancun Airport</h2>
                                <p>Cancun Airport Terminal A - Airlines</p>
                            @else
                                <p>Aerolíneas</p>
                                <h2>Airlines - Terminal A</h2>
                                <p>Punta Cana Terminal A - Aerolíneas</p>
                            @endif
                        </div>
                        <div class="bottom">
                            <table class="table table-striped table-responsive">
                                <tbody>
                                    <tr>
                                        <td>Frontier</td>
                                        <td>Spirit</td>
                                        <td>AirTransat</td>
                                        <td>SouthWest</td>
                                    </tr>
                                    <tr>
                                        <td>Delta</td>
                                        <td>United</td>
                                        <td>AirCanada</td>
                                        <td>Air Caraibes</td>
                                    </tr>
                                    <tr>
                                        <td>Gol</td>
                                        <td>SunWing</td>
                                        <td>Latam</td>
                                        <td>American Airlines</td>
                                    </tr>
                                    <tr>
                                        <td>Allegiant</td>
                                        <td>Aeroregional</td>
                                        <td>Avianca</td>
                                        <td>Condor</td>
                                    </tr>
                                    <tr>
                                        <td>Discover Airlines</td>
                                        <td>Flair Airlines</td>
                                        <td>Global X</td>
                                        <td>IberoJet</td>
                                    </tr>
                                    <tr>
                                        <td>JetBlue</td>
                                        <td>Neos</td>
                                        <td>Sky Airlines</td>
                                        <td>Sky Cana</td>
                                    </tr>
                                    <tr>
                                        <td>Sky High</td>
                                        <td>Sun Country</td>
                                        <td>Swiftair</td>
                                        <td>Swoop</td>
                                    </tr>
                                    <tr>
                                        <td>TUI</td>
                                        <td>WestJet</td>
                                        <td>Wingo</td>
                                        <td>WorldFly</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </main>

    @include('layouts.footer.general')
@endsection