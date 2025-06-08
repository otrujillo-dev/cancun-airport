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
                            <h1>Cancun Airport Terminal 4</h1>
                            <p>Terminal 4 at Cancun International Airport is the newest and most modern terminal, designed to enhance the travel experience for international passengers with state-of-the-art facilities and premium services.</p>
                            <p>Services and Amenities:</p>
                            <ul>
                                <li>Information Desks</li>
                                <li>Flight Information Displays</li>
                                <li>ATMs &amp; Banking Services</li>
                                <li>Free Wi-Fi</li>
                                <li>VIP Lounges</li>
                                <li>Public Telephones</li>
                                <li>Luggage Protection</li>
                                <li>Dining Options</li>
                                <li>Family &amp; Accessible Restrooms</li>
                                <li>Retail Stores &amp; Duty-Free Shops</li>
                                <li>Car Rental Agencies</li>
                                <li>Parking Facilities</li>
                                <li>Ground Transportation</li>
                                <li>Mobile Charging Stations</li>
                                <li>Currency Exchange</li>
                            </ul>
                        @else
                            <p>Terminals</p>
                            <h1>Aeropuerto de Cancún Terminal 4</h1>
                            <p>La Terminal 4 del Aeropuerto Internacional de Cancún es la terminal más nueva y moderna, diseñada para mejorar la experiencia de viaje de los pasajeros internacionales con instalaciones de última generación y servicios de primera calidad.</p>
                            <p>Servicios e instalaciones:</p>
                            <ul>
                                <li>Mostradores de información</li>
                                <li>Pantallas de información de vuelos</li>
                                <li>Cajeros automáticos y servicios bancarios</li>
                                <li>Wi-Fi gratuito</li>
                                <li>Salas VIP</li>
                                <li>Teléfonos públicos</li>
                                <li>Protección de equipajes</li>
                                <li>Opciones de restauración</li>
                                <li>Baños familiares y accesibles</li>
                                <li>Tiendas minoristas y tiendas libres de impuestos</li>
                                <li>Agencias de alquiler de coches</li>
                                <li>Aparcamientos</li>
                                <li>Transporte terrestre</li>
                                <li>Estaciones de carga de móviles</li>
                                <li>Cambio de divisas</li>
                            </ul>
                        @endif
                    </div>
                    <div class="right">
                        <picture>
                            <source srcset="/assets/img/terminals/transfers-from-terminals.webp" type="image/webp">
                            <img src="/assets/img/terminals/transfers-from-terminals.jpg" alt="Terminal 4" title="Terminal 4" width="500" height="500" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="container middle-information">
                <div class="wrapper">
                    <div class="left">
                        @if(app()->getLocale() == "en")
                            <p>Terminal</p>
                            <h2>General Information, Gates, and Access at Cancun Airport Terminal 4</h2>
                            <p>Terminal 4 at Cancún International Airport (CUN) is the airport's newest and most advanced terminal, designed to handle a high volume of international travelers with efficiency and comfort. As the primary hub for long-haul and premium flights, it features state-of-the-art facilities and serves major airlines from the U.S., Canada, Europe, and Latin America.</p>
                            <h3>Airlines Operating at Terminal 4</h3>
                            <p>Terminal 4 primarily serves the following airlines:</p>
                            <ul>
                                <li>S. &amp; Canadian Carriers: American Airlines, Delta Air Lines, United Airlines, Southwest Airlines, Air Canada</li>
                                <li>European Airlines: British Airways, Lufthansa, TUI Airways, Condor, Edelweiss Air</li>
                                <li>Latin American &amp; Other International: Aeroméxico, Copa Airlines, Volaris (select international routes)</li>
                            </ul>
                        @else
                            <p>General</p>
                            <h2>Información General, Puertas y Acceso en la Terminal 4 del Aeropuerto de Cancún</h2>
                            <h3>Aerolíneas que Operan en la Terminal 4</h3>
                            <p>La Terminal 4 sirve principalmente a las siguientes aerolíneas:</p>
                            <ul>
                                <li>Aerolíneas de EE.UU. y Canadá:<br /> American Airlines, Delta Air Lines, United Airlines, Southwest Airlines, Air Canada</li>
                                <li>Aerolíneas Europeas:<br /> British Airways, Lufthansa, TUI Airways, Condor, Edelweiss Air</li>
                                <li>Latinoamérica y Otras Internacionales:<br /> Aeroméxico, Copa Airlines, Volaris (algunas rutas internacionales)</li>
                            </ul>
                        @endif
                    </div>
                    <div class="right">
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/satelite.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Gates & Layout</h3>
                                <p>Terminal 4 features 22 gates (D1-D22), strategically divided for smooth passenger flow:</p>
                                <p>North Concourse (Gates D1-D12):</p>
                                <ul>
                                    <li>Major U.S. carriers (American, Delta, United)</li>
                                    <li>Canadian flights (Air Canada, WestJet)</li>
                                    <li>Some Latin American routes (Aeroméxico, Copa)</li>
                                </ul>
                                <p>South Concourse (Gates D13-D22):</p>
                                <ul>
                                    <li>European airlines (British Airways, Lufthansa, TUI)</li>
                                    <li>Seasonal long-haul charters (Condor, Edelweiss)</li>
                                </ul>
                            @else
                                <h3>Puertas y Distribución</h3>
                                <p>La Terminal 4 cuenta con 22 puertas (D1-D22), distribuidas estratégicamente para un flujo eficiente de pasajeros:</p>
                                <ul>
                                    <li>Área Norte (Puertas D1-D12):
                                        <ul>
                                            <li>Aerolíneas principales de EE.UU. (American, Delta, United)</li>
                                            <li>Vuelos canadienses (Air Canada, WestJet)</li>
                                            <li>Algunas rutas latinoamericanas (Aeroméxico, Copa)</li>
                                        </ul>
                                    </li>
                                    <li>Área Sur (Puertas D13-D22):
                                        <ul>
                                            <li>Aerolíneas europeas (British Airways, Lufthansa, TUI)</li>
                                            <li>Vuelos chárter estacionales de larga distancia (Condor, Edelweiss)</li>
                                        </ul>
                                    </li>
                                </ul>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/plane.svg" width="25" height="25" alt="" title="" loading="lazy">                                                                
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Terminal Amenities</h3>
                                <p>Pre-Security Area (Check-in &amp; Arrivals)</p>
                                <ul>
                                    <li>ATMs &amp; Currency Exchange - Competitive rates for USD, EUR, CAD</li>
                                    <li>Dining Options - Starbucks, Subway, local Mexican cafés</li>
                                    <li>Information Desks - Multilingual staff available</li>
                                    <li>Baggage Wrapping (Secure Wrap) - Protect your luggage before check-in</li>
                                </ul>
                                <p>Post-Security (Boarding Area)</p>
                                <ul>
                                    <li>Duty-Free Shopping - Luxury brands, premium liquor, fragrances</li>
                                    <li>Local Souvenirs - Authentic Mexican crafts, tequila, apparel</li>
                                    <li>Full-Service Restaurants &amp; Bars - Margaritaville, Heineken Bar, sushi &amp; Mexican cuisine</li>
                                    <li>VIP Lounges - Priority Pass, Lounge Key, and airline-exclusive lounges (showers, premium food/drinks)</li>
                                </ul>
                            @else
                                <h3>Servicios de la Terminal</h3>
                                <p>Área Pre-Seguridad (Check-in y Llegadas)</p>
                                <ul>
                                    <li>Cajeros automáticos y casas de cambio: Tarifas competitivas para USD, EUR, CAD</li>
                                    <li>Opciones gastronómicas: Starbucks, Subway, cafés mexicanos locales</li>
                                    <li>Módulos de información: Personal multilingüe disponible</li>
                                    <li>Envoltorio de equipaje (Secure Wrap): Protege tu maleta antes del check-in</li>
                                </ul>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/doors.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Immigration & Customs</h3>
                                <ul>
                                    <li>Automated Passport Control (APC) -For eligible travelers (U.S., Canada, Mexico)</li>
                                    <li>Global Entry &amp; APEC Lanes - Expedited clearance for pre-approved passengers</li>
                                    <li>Efficient Customs Process - Located on the ground floor for quick exit</li>
                                </ul>
                            @else
                                <h3>Inmigración y Aduanas</h3>
                                <ul>
                                    <li>Control Automatizado de Pasaportes (APC): Para viajeros elegibles (EE.UU., Canadá, México)</li>
                                    <li>Carriles Global Entry y APEC: Proceso acelerado para pasajeros preaprobados</li>
                                    <li>Proceso aduanal eficiente: Ubicado en planta baja para salida rápida</li>
                                </ul>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/facilities.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Access & Connectivity</h3>
                                <ul>
                                    <li>Free Shuttle Service - Connects to Terminals 2 &amp; 3 (every 10-15 minutes)</li>
                                    <li>Parking Options - Short-term ($4 USD/hour) and long-term covered parking</li>
                                </ul>
                            @else
                                <h3>Acceso y Conexiones</h3>
                                <ul>
                                    <li>Servicio gratuito de transporte: Conexión con Terminales 2 y 3 (cada 10-15 minutos)</li>
                                    <li>Opciones de estacionamiento:
                                        <ul>
                                            <li>Corto plazo: $4 USD/hora</li>
                                            <li>Largo plazo: Estacionamiento cubierto</li>
                                        </ul>
                                    </li>
                                </ul>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/globe.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Ground Transportation:</h3>
                                <ul>
                                    <li>Taxis (Authorized 24/7) - Fixed rates to Hotel Zone &amp; Riviera Maya</li>
                                    <li>Private Transfers - Pre-booked luxury &amp; shared shuttles</li>
                                    <li>ADO Buses - Direct service to Cancún Hotel Zone &amp; Playa del Carmen</li>
                                </ul>
                            @else
                                <h3>Transporte terrestre:</h3>
                                <ul>
                                    <li>Taxis autorizados (24/7): Tarifas fijas a Zona Hotelera y Riviera Maya</li>
                                    <li>Traslados privados: Servicios de lujo y compartidos (reserva previa)</li>
                                    <li>Autobuses ADO: Servicio directo a Zona Hotelera de Cancún y Playa del Carmen</li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container terminal-map">
            <div class="wrapper">
                <div class="top">
                    @if(app()->getLocale() == "en")
                        <h2>Cancun Airport Terminal 4 Map</h2>
                    @else
                        <h2>Cancún Aeropuerto Terminal 4 Mapa</h2>
                    @endif
                </div>
                <div class="bottom">
                    <picture>
                        <img src="/assets/img/terminals/cancun-airport-terminal-4-map.svg" alt="" title="" width="500" height="500" loading="lazy">
                    </picture>
                </div>
            </div>
        </div>

        <div class="gray-bg">
            <div class="container bottom-information">
                <div class="wrapper">
                    <div class="top">
                        @if(app()->getLocale() == "en")
                            <p>Airlines</p>
                            <h2>Airlines - Terminal 4</h2>
                            <p>Cancun Airport Terminal 4 - Airlines</p>
                        @else
                            <p>Aerolíneas</p>
                            <h2>Aerolíneas - Terminal 4</h2>
                            <p>Aeropuerto de Cancún Terminal 4 - Aerolíneas</p>
                        @endif
                    </div>
                    <div class="bottom">

                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>@lang('terminals/general.airline')</th>
                                    <th></th>
                                    <th>@lang('terminals/general.alliance')</th>
                                    <th>@lang('terminals/general.phone')</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Aeroméxico</td>
                                    <td>
                                        <img src="/assets/img/airlines/Aeromexico.png" alt="Aeroméxico" title="Aeroméxico" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Skyteam</td>
                                    <td data-label="@lang('terminals/general.phone')">(55) 5133 4000</td>                                    
                                </tr>
                                <tr>
                                    <td>Air Europa</td>
                                    <td>
                                        <img src="/assets/img/airlines/Air-Europa.png" alt="Air Europa" title="Air Europa" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Skyteam</td>
                                    <td data-label="@lang('terminals/general.phone')">(55) 8840 9543</td>                                    
                                </tr>
                                <tr>
                                    <td>Air France</td>
                                    <td>
                                        <img src="/assets/img/airlines/Air-France.png" alt="Air France" title="Air France" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Skyteam</td>
                                    <td data-label="@lang('terminals/general.phone')">	(55) 5091 2421</td>                                    
                                </tr>
                                <tr>
                                    <td>Austrian Airlines</td>
                                    <td>
                                        <img src="/assets/img/airlines/Austrian.png" alt="Austrian Airlines" title="Austrian Airlines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Star Alliance</td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Condor</td>
                                    <td>
                                        <img src="/assets/img/airlines/Condor.png" alt="Condor" title="Condor" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Discover Airlines</td>
                                    <td>
                                        <img src="/assets/img/airlines/Discover-Airlines.png" alt="Discover Airlines" title="Discover Airlines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Edelweiss Air</td>
                                    <td>
                                        <img src="/assets/img/airlines/Edelweiss.png" alt="Edelweiss Air" title="Edelweiss Air" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Flair Airlines</td>
                                    <td>
                                        <img src="/assets/img/airlines/Flair.png" alt="Flair Airlines" title="Flair Airlines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Frontier Airlines</td>
                                    <td>
                                        <img src="/assets/img/airlines/Frontier.png" alt="Frontier Airlines" title="Frontier Airlines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>JetBlue Airways</td>
                                    <td>
                                        <img src="/assets/img/airlines/JetBlue.png" alt="JetBlue Airways" title="JetBlue Airways" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>KLM</td>
                                    <td>
                                        <img src="/assets/img/airlines/KLM.png" alt="KLM" title="KLM" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Skyteam</td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Lufthansa</td>
                                    <td>
                                        <img src="/assets/img/airlines/Lufthansa.png" alt="Lufthansa" title="Lufthansa" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Star Alliance</td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Southwest Airlines</td>
                                    <td>
                                        <img src="/assets/img/airlines/Southwest.png" alt="Southwest Airlines" title="Southwest Airlines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Sun Country Airlines</td>
                                    <td>
                                        <img src="/assets/img/airlines/Sun-Country.png" alt="Sun Country Airlines" title="Sun Country Airlines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>TAP Air Portugal</td>
                                    <td>
                                        <img src="/assets/img/airlines/TAP.png" alt="TAP Air Portugal" title="TAP Air Portugal" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Star Alliance</td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Turkish Airlines</td>
                                    <td>
                                        <img src="/assets/img/airlines/Turkish.png" alt="Turkish Airlines" title="Turkish Airlines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Star Alliance</td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>WestJet</td>
                                    <td>
                                        <img src="/assets/img/airlines/Westjet.png" alt="WestJet" title="WestJet" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="container additional-information">
            <div class="wrapper">
                <div class="items">
                    <div>
                        <div>
                            <img src="/assets/img/terminals/svg/utensils.svg" width="25" height="25" alt="Dining" title="Dining" loading="lazy">
                        </div>
                        @if(app()->getLocale() == "en")
                            <h2>Dining Options at Cancun Airport Terminal 4</h2>
                            <p>Cancún International Airpor's Terminal 4 offers a diverse selection of restaurants and quick-service eateries to satisfy every traveler's cravings.</p>
                            <p>Popular Restaurants &amp; Cafés</p>
                            <ul>
                                <li>Johnny Rockets - Classic American burgers &amp; shakes</li>
                                <li>Wolfgang Puck Kitchen - Gourmet pizzas &amp; international cuisine</li>
                                <li>Guy's Pizza Joint - New York-style pizza by the slice</li>
                                <li>Air Margaritaville Cancún - Tropical cocktails &amp; casual dining</li>
                                <li>Panda Express - Quick-service Chinese-American favorites</li>
                                <li>Maison Kayser - French bakery &amp; coffee</li>
                                <li>Sushi Tequila - Fresh sushi with a Mexican twist</li>
                                <li>Hacienda Montejo - Authentic Yucatecan dishes</li>
                                <li>Star Island Café - Light bites &amp; coffee</li>
                                <li>Welcome Bar - Cocktails &amp; snacks</li>
                                <li>Guacamole Grill - Mexican street food &amp; tacos</li>
                                <li>Guacamole Andele - Quick Mexican flavors</li>
                                <li>Starbucks - Coffee, pastries &amp; sandwiches</li>
                            </ul>
                        @else
                            <h2>Opciones Gastronómicas en la Terminal 4 del Aeropuerto de Cancún</h2>
                            <p>La Terminal 4 del Aeropuerto Internacional de Cancún ofrece una variada selección de restaurantes y establecimientos de comida rápida para satisfacer todos los gustos.</p>
                            <p>Restaurantes y Cafés Populares</p>
                            <ul>
                                <li>Johnny Rockets - Hamburguesas clásicas americanas y malteadas</li>
                                <li>Wolfgang Puck Kitchen - Pizzas gourmet y cocina internacional</li>
                                <li>Guy's Pizza Joint - Pizza estilo Nueva York por rebanadas</li>
                                <li>Air Margaritaville Cancún - Cócteles tropicales y comida casual</li>
                                <li>Panda Express - Comida rápida china-americana</li>
                                <li>Maison Kayser - Panadería francesa y café</li>
                                <li>Sushi Tequila - Sushi fresco con toque mexicano</li>
                                <li>Hacienda Montejo - Auténticos platillos yucatecos</li>
                                <li>Star Island Café - Bocadillos ligeros y café</li>
                                <li>Welcome Bar - Cócteles y snacks</li>
                                <li>Guacamole Grill - Comida callejera mexicana y tacos</li>
                                <li>Guacamole Andele - Sabores mexicanos rápidos</li>
                                <li>Starbucks - Café, pasteles y sándwiches</li>
                            </ul>
                        @endif
                    </div>
                    <div>
                        <div>
                            <img src="/assets/img/terminals/svg/store.svg" width="25" height="25" alt="Retail" title="Retail" loading="lazy">
                        </div>
                        @if(app()->getLocale() == "en")
                            <h2>Shopping at Terminal 4</h2>
                            <p>Terminal 4 features an impressive variety of shops, from luxury boutiques to travel essentials. Whether you need last-minute souvenirs, designer fashion, or tech accessories, you’ll find it all here.</p>
                            <p>Top Shops to Explore</p>
                            <ul>
                                <li>Los Cinco Soles - Authentic Mexican crafts &amp; souvenirs</li>
                                <li>Tere Cazola - Handmade jewelry &amp; accessories</li>
                                <li>International Fashion - Designer clothing &amp; sunglasses</li>
                                <li>Abito - Trendy apparel &amp; accessories</li>
                                <li>Bloomish - Beauty &amp; skincare products</li>
                                <li>Tous - Luxury jewelry &amp; accessories</li>
                                <li>Miniso - Affordable tech gadgets &amp; lifestyle products</li>
                                <li>Portia - High-end perfumes &amp; cosmetics</li>
                                <li>Tawa - Mexican artisanal goods</li>
                                <li>Panama Jack - Stylish hats &amp; beachwear</li>
                                <li>Pineda Covalin - Iconic Mexican designer fashion</li>
                                <li>New Era - Sports caps &amp; branded headwear</li>
                            </ul>
                        @else
                            <h2>Compras en la Terminal 4</h2>
                            <p>La Terminal 4 cuenta con una impresionante variedad de tiendas, desde boutiques de lujo hasta artículos de viaje esenciales. Ya sea que busques souvenirs de último momento, moda de diseñador o accesorios tecnológicos, aquí lo encontrarás todo.</p>
                            <p>Mejores Tiendas para Explorar</p>
                            <ul>
                                <li>Los Cinco Soles - Artesanías y souvenirs mexicanos auténticos</li>
                                <li>Tere Cazola - Joyería y accesorios hechos a mano</li>
                                <li>International Fashion - Ropa de diseñador y lentes de sol</li>
                                <li>Abito - Ropa y accesorios modernos</li>
                                <li>Bloomish - Productos de belleza y cuidado de la piel</li>
                                <li>Tous - Joyería y accesorios de lujo</li>
                                <li>Miniso - Gadgets tecnológicos y productos de estilo de vida económicos</li>
                                <li>Portia - Perfumes y cosméticos de alta gama</li>
                                <li>Tawa - Productos artesanales mexicanos</li>
                                <li>Panama Jack - Sombreros elegantes y ropa de playa</li>
                                <li>Pineda Covalin - Moda icónica de diseñadores mexicanos</li>
                                <li>New Era - Gorras deportivas y de marcas reconocidas</li>
                            </ul>
                        @endif
                    </div>
                    <div>
                        <div>
                            <img src="/assets/img/terminals/svg/star.svg" width="25" height="25" alt="VIP Lounge" title="VIP Lounge" loading="lazy">
                        </div>
                        @if(app()->getLocale() == "en")
                            <h2>Airport Lounges in Terminal 4</h2>
                            <p>For travelers seeking comfort and exclusivity, Terminal 4 offers premium lounges where you can relax, enjoy complimentary food and drinks, and even freshen up before your flight.</p>
                            <p>Available Lounges</p>
                            <ul>
                                <li>MERA Business Lounge (Domestic) - Located near Gate 54, next to Maison Kayser</li>
                                <li>MERA Business Lounge (International) - Near Gate 76A, beside Pineda Covalin boutique</li>
                                <li>Access Fee: $33 USD per person (subject to change)</li>
                                <li>Operating Hours: Daily from 6:00 AM - 9:00 PM</li>
                                <li>Amenities: Premium food, open bar, Wi-Fi, showers (international lounge)</li>
                                <li>Contact: +52 (998) 848-8989 (for reservations or inquiries)</li>
                            </ul>
                        @else
                            <h2>Salas VIP en la Terminal 4</h2>
                            <p>Para viajeros que buscan comodidad y exclusividad, la Terminal 4 ofrece salas premium donde pueden relajarse, disfrutar de comida y bebidas gratuitas, e incluso refrescarse antes de su vuelo.</p>
                            <p>Salas Disponibles</p>
                            <ul>
                                <li>Sala de Negocios MERA (Vuelos Nacionales) - Ubicada cerca de la Puerta 54, junto a Maison Kayser</li>
                                <li>Sala de Negocios MERA (Vuelos Internacionales) - Cerca de la Puerta 76A, al lado de la boutique Pineda Covalin</li>
                                <li>Costo de Acceso: $33 USD por persona (sujeto a cambios)</li>
                                <li>Horario de Operación: Diario de 6:00 AM a 9:00 PM</li>
                                <li>Servicios: Comida premium, bar abierto, Wi-Fi, regaderas (sala internacional)</li>
                                <li>Contacto: +52 (998) 848-8989 (para reservaciones o consultas)</li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    @include('layouts.footer.general')
@endsection