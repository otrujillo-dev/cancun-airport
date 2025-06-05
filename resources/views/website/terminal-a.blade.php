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
                            <h1>Punta Cana Airport Terminal A</h1>
                            <p>Punta Cana Terminal A offers arrivals and departures of domestic and international flights. It has an information counter, special areas, duty-free shops, Connection area, VIP lounge, and more.</p>
                            <p>Learn more about this and more information below.</p>
                            <ul>
                                <li>Information counter</li>
                                <li>Special Areas</li>
                                <li>Lactation area</li>
                                <li>Duty Free Shop</li>
                                <li>Transit/connections area</li>
                                <li>Children's recreation space next to gate 1</li>
                                <li>Waiting area near gate 9</li>
                                <li>Restaurants and coffee shops</li>
                            </ul>
                        @else
                            <p>Terminals</p>
                            <h1>Terminal A del Aeropuerto de Punta Cana</h1>
                            <p>La Terminal A de Punta Cana ofrece llegadas y salidas de vuelos nacionales e internacionales. Dispone de mostrador de información, zonas especiales, tiendas libres de impuestos, zona de conexión, sala VIP y mucho más.</p>
                            <p>Conoce esto y más información a continuación.</p>
                            <ul>
                                <li>Mostrador de información</li>
                                <li>Zonas especiales</li>
                                <li>Zona de lactancia</li>
                                <li>Tienda libre de impuestos</li>
                                <li>Zona de tránsito/conexiones</li>
                                <li>Espacio de recreo infantil junto a la puerta 1</li>
                                <li>Zona de espera (junto a la puerta 9)</li>
                                <li>Restaurantes y cafeterías</li>
                            </ul>
                        @endif
                    </div>
                    <div class="right">
                        <picture>
                            <source srcset="/assets/img/terminals/transfers-from-terminals.webp" type="image/webp">
                            <img src="/assets/img/terminals/transfers-from-terminals.jpg" alt="" title="" width="500" height="500" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="container middle-information">
                <div class="wrapper">
                    <div class="left">
                        @if(app()->getLocale() == "en")
                            <p>General</p>
                            <h2>General Information, Gates, and access at Terminal A of Punta Cana airport</h2>
                            <p>Terminal A has a total of 18 aircraft gates, distributed as follows:</p>
                            <ul>
                                <li>11 positions to the south</li>
                                <li>5 positions to the north</li>
                                <li>2 auxiliary positions at the former taxiway C</li>
                            </ul>
                        @else
                            <p>General</p>
                            <h2>Información general, puertas y accesos en la Terminal A del aeropuerto de Punta Cana</h2>
                            <p>La Terminal A cuenta con un total de 18 puertas de embarque para aeronaves, distribuidas del siguiente modo:</p>
                            <ul>
                                <li>11 posiciones al sur</li>
                                <li>5 posiciones al norte</li>
                                <li>2 posiciones auxiliares en la antigua calle de rodaje C</li>
                            </ul>
                        @endif
                    </div>
                    <div class="right">
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/satelite.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <h3>Satellite Building</h3>
                            <p>The Satellite Building has 9 gates on the second floor: A14-A21. It operates domestic and international flights for large aircraft.</p>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/doors.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <h3>Main Building Doors</h3>
                            <p>The Main Building has 22 gates on the first floor: B1-B22. It operates domestic and international flights.</p>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/plane.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <h3>Airport Amenities</h3>
                            <p>It has banks and cafeterias in the documentation area and several stores, restaurants, fast food and duty-free stores in the boarding area.</p>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/facilities.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <h3>Customs facilities</h3>
                            <p>This terminal houses Migration and Customs facilities.</p>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/globe.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <h3>Customs facilities</h3>
                            <p>This terminal houses Migration and Customs facilities.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container terminal-map">
                <div class="wrapper">
                    <div class="top">
                        @if(app()->getLocale() == "en")
                            <h2>Map of Terminal A of Punta Cana Airport</h2>
                        @else
                            <h2>Mapa de la Terminal A del Aeropuerto de Punta Cana</h2>
                        @endif
                    </div>
                    <div class="bottom">
                        <picture>
                            <source srcset="/assets/img/terminals/terminal-a.webp" type="image/webp">
                            <img src="/assets/img/terminals/terminal-a.jpg" alt="" title="" width="500" height="500" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="container bottom-information">
                <div class="wrapper">
                    <div class="top">
                        @if(app()->getLocale() == "en")
                            <p>Airlines</p>
                            <h2>Airlines - Terminal A</h2>
                            <p>Punta Cana Terminal A - Airlines</p>
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

        </div>
    </main>

    @include('layouts.footer.general')
@endsection