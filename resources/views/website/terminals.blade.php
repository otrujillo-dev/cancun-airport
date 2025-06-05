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
                            <h1>Punta Cana Airport Terminals</h1>
                            <p>Punta Cana Airport Terminals, A, B, VIP, FBO, and more. Find all the information about Terminals in Punta Cana International Airport (PUJ).</p>
                            <ul>
                                <li>Information desk</li>
                                <li>Flight information</li>
                                <li>Airlines information</li>
                                <li>VIP Lounge</li>
                                <li>Internet & Wi-Fi stations</li>
                                <li>Car Rental</li>
                                <li>Transportation</li>
                                <li>Parking</li>
                            </ul>
                        @else
                            <p>Terminales</p>
                            <h1>Punta Cana Airport Terminals</h1>
                            <p>Terminales del aeropuerto de Punta Cana, A, B, VIP, FBO, y más. Encuentra toda la información que necesitas saber sobre las Terminales en el Aeropuerto Internacional de Punta Cana (PUJ).</p>
                            <ul>
                                <li>Mostrador de información</li>
                                <li>Información de vuelos</li>
                                <li>Información sobre aerolíneas</li>
                                <li>Sala VIP</li>
                                <li>Puestos de Internet y Wi-Fi</li>
                                <li>Renta de autos</li>
                                <li>Transportación</li>
                                <li>Estacionamiento</li>
                            </ul>
                        @endif
                        <div>
                            <a href="@lang('links.terminal-a')" class="btn" title="Terminal A">Terminal A</a>
                            <a href="@lang('links.terminal-b')" class="btn" title="Terminal B">Terminal B</a>
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
                            <h2>Information on Punta Cana Airport Terminals</h2>
                            <p>The airlines that operate flights to and from Punta Cana Airport are:</p>
                            <ul>
                                <li>Sunwing Airlines</li>
                                <li>American Airlines</li>
                                <li>Air Europa</li>
                                <li>Iberojet</li>
                                <li>TUI Airways</li>
                            </ul>
                        @else
                            <p>Info</p>
                            <h2>Información sobre las Terminales del Aeropuerto de Punta Cana</h2>
                            <p>Las compañías aéreas que operan vuelos desde y hacia el Aeropuerto de Punta Cana son:</p>
                            <ul>
                                <li>Sunwing Airlines</li>
                                <li>American Airlines</li>
                                <li>Air Europa</li>
                                <li>Iberojet</li>
                                <li>TUI Airways</li>
                            </ul>
                        @endif
                    </div>
                    <div class="right">
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/satelite.svg" width="25" height="25" alt="Terminal A" title="Terminal A" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Terminal A</h3>
                                <p>International flights</p>
                            @else
                                <h3>Terminal A</h3>
                                <p>Vuelos internacionales</p>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/doors.svg" width="25" height="25" alt="Terminal B" title="Terminal B" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Terminal B</h3>
                                <p>International flights</p>
                            @else
                                <h3>Terminal B</h3>
                                <p>Vuelos internacionales</p>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/plane.svg" width="25" height="25" alt="FBO" title="FBO" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>FBO</h3>
                                <p>General Aviation</p>
                            @else
                                <h3>FBO</h3>
                                <p>Aviación general</p>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/facilities.svg" width="25" height="25" alt="Terminal VIP" title="Terminal VIP" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Terminal VIP</h3>
                                <p>It is located in Terminal B and has an infinity pool overlooking the runways.</p>
                            @else
                                <h3>Terminal VIP</h3>
                                <p>Está situado en la Terminal B y cuenta con una piscina infinita con vistas a las pistas.</p>
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
                            <h2>Monitor your flight</h2>
                            <p>Find schedules, changes, dates, times, terminals, and gates where your flight will depart.</p>
                        @else
                            <p>Monitoring</p>
                            <h2>Monitorea tu vuelo</h2>
                            <p>Encuentra horarios, cambios, fechas, horas, terminales y puertas de embarque desde donde saldrá tu vuelo.</p>
                        @endif
                    </div>
                    <div class="bottom">
                        @if(app()->getLocale() == "en")
                            <iframe width="100%" height="700px" frameborder="0" src='https://www.avionio.com/widget/en/puj/arrivals?style=2' loading="lazy"></iframe>
                        @else
                            <iframe width="100%" height="700px" frameborder="0" src='https://www.avionio.com/widget/es/puj/arrivals?style=2' loading="lazy"></iframe>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </main>

    @include('layouts.footer.general')
@endsection