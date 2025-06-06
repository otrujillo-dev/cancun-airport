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
                            <h1>Cancun Airport Terminal B</h1>
                            <p>Terminal B of the Cancun Airport offers arrivals and departures of both domestic and international flights. It has areas such as pharmacy, hard rock store, duty-free stores, food court, ATM's and more.</p>
                            <p>See this and more information below</p>
                            <ul>
                                <li>DFA Arrivals</li>
                                <li>Parking</li>
                                <li>Duty-free stores</li>
                                <li>Transit zone/connections</li>
                                <li>Children's play area next to Gate 1.</li>
                                <li>Wi-Fi</li>
                                <li>VIP Lounge</li>
                                <li>Restaurants and coffee shops</li>
                            </ul>
                        @else
                            <p>Terminales</p>
                            <h1>Terminal B del Aeropuerto de Punta Cana</h1>
                            <p>La Terminal B del Aeropuerto de Punta Cana ofrece llegadas y salidas de vuelos tanto nacionales como internacionales. Cuenta con zonas como farmacia, hard rock store, tiendas duty free, zona de comida, ATM’s y más. Conoce esta y más información a continuación</p>
                            <p>Terminal B - Servicios y zonas</p>
                            <ul>
                                <li>DFA Llegadas</li>
                                <li>Estacionamiento</li>
                                <li>Tiendas libres de impuestos</li>
                                <li>Zona de tránsito/conexiones</li>
                                <li>Espacio de recreo infantil junto a la puerta 1.</li>
                                <li>Wifi</li>
                                <li>Zona VIP</li>
                                <li>Restaurantes y cafeterías</li>
                            </ul>
                        @endif
                    </div>
                    <div class="right">
                        <picture>
                            <source srcset="/assets/img/terminals/transfers-from-terminals.webp" type="image/webp">
                            <img src="/assets/img/terminals/transfers-from-terminals.jpg" alt="Terminal B" title="Terminal B" width="500" height="500" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="container middle-information">
                <div class="wrapper">
                    <div class="left">
                        @if(app()->getLocale() == "en")
                            <p>General</p>
                            <h2>General information, gates, and accesses at Terminal B of Cancun Airport</h2>
                            <p>Terminal B has a total of 7 aircraft gates, distributed as follows:</p>
                        @else
                            <p>General</p>
                            <h2>Información general, puertas y accesos en la Terminal B del aeropuerto de Punta Cana</h2>
                            <p>La Terminal B cuenta con un total de 18 puertas de embarque para aeronaves, distribuidas del siguiente modo:</p>
                        @endif
                    </div>
                    <div class="right">
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/satelite.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Satellite Building</h3>
                                <p>The Satellite Building has 9 gates on the second floor: A14-A21. It operates domestic and international flights for large aircraft.</p>
                            @else
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/doors.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Main Building Doors</h3>
                                <p>The Main Building has 22 gates on the first floor: B1-B22. It operates domestic and international flights.</p>
                            @else
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/plane.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Airport Amenities</h3>
                                <p>It has banks and cafeterias in the documentation area and several stores, restaurants, fast food and duty-free stores in the boarding area.</p>
                            @else
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/facilities.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Customs facilities</h3>
                                <p>This terminal houses Migration and Customs facilities.</p>
                            @else
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/globe.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Customs facilities</h3>
                                <p>This terminal houses Migration and Customs facilities.</p>
                            @else
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="container terminal-map">
                <div class="wrapper">
                    <div class="top">
                        @if(app()->getLocale() == "en")
                            <h2>Map of Terminal B of Cancun Airport</h2>
                        @else
                            <h2>Mapa de la Terminal B del Aeropuerto de Punta Cana</h2>
                        @endif
                    </div>
                    <div class="bottom">
                        <picture>
                            <source srcset="/assets/img/terminals/terminal-b.webp" type="image/webp">
                            <img src="/assets/img/terminals/terminal-b.jpg" alt="" title="" width="500" height="500" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="container bottom-information">
                <div class="wrapper">
                    <div class="top">
                        @if(app()->getLocale() == "en")                        
                            <p>Airlines</p>
                            <h2>Airlines - Terminal B</h2>
                            <p>Punta Cana Terminal B - Airlines</p>
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
                                    <td>American Airlines</td>
                                    <td>Avianca</td>
                                    <td>British Airways</td>
                                    <td>Copa Airlines</td>
                                </tr>
                                <tr>
                                    <td>Frontier Airlines</td>
                                    <td>Delta Airlines</td>
                                    <td>Iberojet España</td>
                                    <td>Southwest Airlines</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>

    @include('layouts.footer.general')
@endsection