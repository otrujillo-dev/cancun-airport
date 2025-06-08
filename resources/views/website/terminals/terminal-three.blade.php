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
                            <h1>Cancun Airport Terminal 3</h1>
                            <p><strong>Terminal 3 at Cancun International Airport</strong> serves as a key hub for international travelers, blending modern conveniences with essential services to ensure a comfortable journey.</p>
                            <ul>
                                <li>Information desks.</li>
                                <li>Flight Information Display.</li>
                                <li>ATMs</li>
                                <li>Internet stations and signal WI-FI Internet.</li>
                                <li>VIP Lounge</li>
                                <li>Public telephone services.</li>
                                <li>Luggage Protection Services.(secure wrap)</li>
                                <li>Areas for food and beverage services.</li>
                                <li>Family and disabled bathrooms.</li>
                                <li>Retail stores.</li>
                                <li>Duty Free Shops</li>
                                <li>Car rental agencies.</li>
                                <li>Ground Transportation</li>
                                <li>Signal for mobile equipment.</li>
                                <li>Money exchange.</li>
                            </ul>
                        @else
                            <p>Terminals</p>
                            <h1>Aeropuerto de Cancún Terminal 3</h1>
                            <p>La Terminal 3 del Aeropuerto Internacional de Cancún sirve como un centro clave para los viajeros internacionales, combinando las comodidades modernas con los servicios esenciales para garantizar un viaje cómodo. </p>
                            <ul>
                                <li>Mostradores de información.</li>
                                <li>Pantalla de información de vuelos.</li>
                                <li>Cajeros automáticos</li>
                                <li>Puestos de Internet y señal Internet WI-FI.</li>
                                <li>Sala VIP</li>
                                <li>Servicios de telefonía pública.</li>
                                <li>Servicios de protección de equipajes.(envoltura segura)</li>
                                <li>Zonas para servicios de comidas y bebidas.</li>
                                <li>Baños familiares y para discapacitados.</li>
                                <li>Tiendas al por menor.</li>
                                <li>Tiendas libres de impuestos</li>
                                <li>Agencias de alquiler de coches.</li>
                                <li></li>
                                <li>Transporte terrestre</li>
                                <li>Señal para equipos móviles.</li>
                                <li>Cambio de moneda.</li>
                            </ul>
                        @endif
                    </div>
                    <div class="right">
                        <picture>
                            <source srcset="/assets/img/terminals/transfers-from-terminals.webp" type="image/webp">
                            <img src="/assets/img/terminals/transfers-from-terminals.jpg" alt="Terminal 3" title="Terminal 3" width="500" height="500" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="container middle-information">
                <div class="wrapper">
                    <div class="left">
                        @if(app()->getLocale() == "en")
                            <p>Terminal</p>
                            <h2>General Information, Gates, and Access at Cancun Airport Terminal 3</h2>
                            <p>Terminal 3 at Cancun International Airport serves as the airport's primary gateway for international travelers, handling flights to major destinations across North America, Europe, and beyond. As one of the airport's most modern facilities, it specializes in accommodating wide-body aircraft and long-haul routes while maintaining efficient passenger flow.</p>
                            <p>Terminal 3 at Cancun International Airport features 28 gates (C1-C28) and primarily serves:</p>
                            <ul>
                                <li>S. Airlines: American Airlines, Delta, United, Southwest, JetBlue, and Spirit</li>
                                <li>Canadian Carriers: Air Canada, Air Transat, WestJet</li>
                                <li>European Airlines: British Airways, Lufthansa, TUI, and seasonal charters (e.g., Wamos Air, Edelweiss Air)</li>
                            </ul>
                        @else
                            <p>General</p>
                            <h2>Información general, puertas y acceso a la Terminal 3 del Aeropuerto de Cancún</h2>
                            <p>La Terminal 3 del Aeropuerto Internacional de Cancún es la principal puerta de entrada del aeropuerto para los viajeros internacionales, con vuelos a los principales destinos de América del Norte, Europa y más allá. Es una de las instalaciones más modernas del aeropuerto y está especializada en aviones de fuselaje ancho y rutas de larga distancia, al tiempo que mantiene un flujo eficiente de pasajeros.</p>
                            <p>La Terminal 3 del Aeropuerto Internacional de Cancún cuenta con 28 puertas de embarque (C1-C28) y presta servicio principalmente a:</p>
                            <ul>
                                <li>Aerolíneas estadounidenses: American Airlines, Delta, United, Southwest, JetBlue y Spirit</li>
                                <li>Compañías aéreas canadienses: Air Canada, Air Transat, WestJet</li>
                                <li>Aerolíneas europeas: British Airways, Lufthansa, TUI, y vuelos chárter de temporada (por ejemplo, Wamos Air, Edelweiss Air)</li>
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
                                <p>Terminal 3 features 28 gates (C1-C28) designed for optimal passenger flow and international operations:</p>
                                <p>North Concourse (U.S./Canada Flights):</p>
                                <ul>
                                    <li>Gates C1-C14 - Handle major U.S. carriers (American, Delta, United) and Canadian airlines (Air Canada, WestJet)</li>
                                </ul>
                                <p>South Concourse (Transatlantic/Long-Haul Flights):</p>
                                <ul>
                                    <li>Gates C15-C28 - Serve European airlines (British Airways, Lufthansa) and charter flights (TUI, Wamos Air)</li>
                                </ul>
                            @else
                                <h3>Puertas y distribución</h3>
                                <p>La Terminal 3 cuenta con 28 puertas (C1-C28) diseñadas para optimizar el flujo de pasajeros y las operaciones internacionales:</p>
                                <p>Explanada Norte (vuelos EE.UU./Canadá):</p>
                                <ul>
                                    <li>Puertas C1-C14 - Atienden a las principales compañías aéreas estadounidenses (American, Delta, United) y canadienses (Air Canada, WestJet)</li>
                                </ul>
                                <p>Explanada sur (vuelos transatlánticos/de larga distancia):</p>
                                <ul>
                                    <li>Puertas C15-C28 - Atienden a aerolíneas europeas (British Airways, Lufthansa) y vuelos chárter (TUI, Wamos Air)</li>
                                </ul>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/plane.svg" width="25" height="25" alt="" title="" loading="lazy">                                                                
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Terminal Amenities</h3>
                                <p>Pre-Security Area (Check-in &amp; Documentation):</p>
                                <ul>
                                    <li>ATMs &amp; currency exchange (competitive rates)</li>
                                    <li>Quick-service dining: Starbucks, Subway, Cinnabon</li>
                                    <li>Information desks with multilingual staff</li>
                                </ul>
                                <p>Post-Security (Boarding Area):</p>
                                <ul>
                                    <li>Duty-free shopping: Luxury perfumes, cosmetics, spirits</li>
                                    <li>Local souvenirs: Mexican crafts, tequila, apparel</li>
                                    <li>Full-service dining: Margaritaville, Heineken Bar</li>
                                    <li>VIP Lounge by Mera (paid access; showers, premium food/drinks)</li>
                                </ul>
                            @else
                                <h3>Servicios de la terminal</h3>
                                <p>Área de pre-seguridad (facturación y documentación):</p>
                                <ul>
                                    <li>Cajeros automáticos y cambio de divisas (tipos competitivos)</li>
                                    <li>Comida Rápida: Starbucks, Subway, Cinnabon</li>
                                    <li>Mostradores de información con personal multilingüe</li>
                                </ul>
                                <p>Post-Security (Boarding Area):</p>
                                <ul>
                                    <li>Tiendas libres de impuestos: Perfumes de lujo, cosméticos, licores</li>
                                    <li>Recuerdos locales: Artesanía mexicana, tequila, ropa</li>
                                    <li>Restaurantes: Margaritaville, Heineken Bar</li>
                                    <li>VIP Lounge by Mera (acceso de pago; duchas, comida/bebidas premium)</li>
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
                                    <li>International Arrivals: Automated passport kiosks for eligible travelers</li>
                                    <li>Customs: Streamlined clearance on the ground floor</li>
                                    <li>Expedited Processing: Global Entry, APEC lanes available</li>
                                </ul>
                            @else
                                <h3>Inmigración y aduanas</h3>
                                <ul>
                                    <li>Llegadas internacionales: Quioscos automáticos de pasaportes para los viajeros que cumplan los requisitos</li>
                                    <li>Aduanas: Despacho simplificado en la planta baja</li>
                                    <li>Tramitación: Global Entry, carriles APEC disponibles</li>
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
                                    <li>Free Shuttle Service: Connects to Terminals 2 &amp; 4 (every 15 mins)</li>
                                    <li>Parking: Short-term ($3 USD/hour) and long-term options</li>
                                </ul>
                            @else
                                <h3>Acceso y conectividad</h3>
                                <ul>
                                    <li>Servicio de transporte gratuito: Conecta con las Terminales 2 y 4 (cada 15 minutos)</li>
                                    <li>Aparcamiento: Opciones a corto plazo (3 USD/hora) y a largo plazo</li>
                                </ul>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/globe.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Ground Transport:</h3>
                                <ul>
                                    <li>Taxis (authorized 24/7)</li>
                                    <li>Private transfers</li>
                                    <li>ADO buses to Cancún Hotel Zone &amp; Playa del Carmen</li>
                                </ul>
                            @else
                                <h3>Transporte terrestre:</h3>
                                <ul>
                                    <li>Taxis (autorizados 24/7)</li>
                                    <li>Traslados privados</li>
                                    <li>Autobuses ADO a la Zona Hotelera de Cancún y Playa del Carmen</li>
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
                        <h2>Cancun Airport Terminal 3 Map</h2>
                    @else
                        <h2>Cancún Aeropuerto Terminal 3 Mapa</h2>
                    @endif
                </div>
                <div class="bottom">
                    <picture>
                        <img src="/assets/img/terminals/cancun-airport-terminal-3-map.svg" alt="" title="" width="500" height="500" loading="lazy">
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
                            <h2>Airlines - Terminal 3</h2>
                            <p>Cancun Airport Terminal 3 - Airlines</p>
                        @else
                            <p>Aerolíneas</p>
                            <h2>Aerolíneas - Terminal 3</h2>
                            <p>Aeropuerto de Cancún Terminal 3 - Aerolíneas</p>
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
                                    <td>Air Canada</td>
                                    <td>
                                        <img src="/assets/img/airlines/Air-Canada.png" alt="Air Canada" title="Air Canada" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Star Alliance</td>
                                    <td data-label="@lang('terminals/general.phone')">001 (514) 939-3333</td>                                    
                                </tr>
                                <tr>
                                    <td>Air Canada Rouge</td>
                                    <td>
                                        <img src="/assets/img/airlines/Rouge.png" alt="Air Canada Rouge" title="Air Canada Rouge" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Air Caraïbes</td>
                                    <td>
                                        <img src="/assets/img/airlines/Air-Caraibes.png" alt="Air Caraïbes" title="Air Caraïbes" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>American Airlines</td>
                                    <td>
                                        <img src="/assets/img/airlines/American-Airlines.png" alt="American Airlines" title="American Airlines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Oneworld</td>
                                    <td data-label="@lang('terminals/general.phone')">(800) 904 6000</td>                                    
                                </tr>
                                <tr>
                                    <td>British Airways</td>
                                    <td>
                                        <img src="/assets/img/airlines/British.png" alt="British Airways" title="British Airways" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Oneworld</td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Delta Air Lines</td>
                                    <td>
                                        <img src="/assets/img/airlines/DELTA.png" alt="Delta Air Lines" title="Delta Air Lines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Skyteam</td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Iberojet</td>
                                    <td>
                                        <img src="/assets/img/airlines/Iberojet.png" alt="Iberojet" title="Iberojet" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>LOT Polish Airlines</td>
                                    <td>
                                        <img src="/assets/img/airlines/LOT.png" alt="LOT Polish Airlines" title="LOT Polish Airlines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Star Alliance</td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Spirit Airlines</td>
                                    <td>
                                        <img src="/assets/img/airlines/Spirit.png" alt="Spirit Airlines" title="Spirit Airlines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>United Airlines</td>
                                    <td>
                                        <img src="/assets/img/airlines/UNITED.png" alt="United Airlines" title="United Airlines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Star Alliance</td>
                                    <td data-label="@lang('terminals/general.phone')">(55) 5283 5500</td>                                    
                                </tr>
                                <tr>
                                    <td>Wamos Air</td>
                                    <td>
                                        <img src="/assets/img/airlines/Wamos.png" alt="Wamos Air" title="Wamos Air" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>World2Fly</td>
                                    <td>
                                        <img src="/assets/img/airlines/World2Fly.png" alt="World2Fly" title="World2Fly" width="150" height="51" loading="lazy">
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
                            <h2>Cancun Airport Terminal 3 Dining Options</h2>
                            <p>Travelers at Terminal 3 will find an excellent variety of dining choices throughout the facility. Before security, the check-in area features quick-service options like Starbucks and Grab'n Go. Past security, passengers can enjoy:</p>
                            <ul>
                                <li>Casual dining: Bubba Gump, Air Margaritaville</li>
                                <li>Celebrity chef concepts: Guy Fieri's American Kitchen, Wolfgang Puck Kitchen</li>
                                <li>Mexican flavors: Guacamole Andele, Baja Grill Cantina</li>
                                <li>Quick bites: Famiglia Pizzeria, The Marketplace</li>
                                <li>Premium experience: VIP Lounge by Mera</li>
                            </ul>
                        @else
                            <h2>Restaurantes en la Terminal 3 del Aeropuerto de Cancún</h2>
                            <p>Los viajeros en la Terminal 3 encontrarán una amplia variedad de opciones gastronómicas. Antes la zona de Área de pre-seguridad (facturación y documentación), la zona de check-in ofrece alternativas rápidas como Starbucks y Grab'n Go. Después de seguridad, los pasajeros pueden disfrutar de:</p>
                            <ul>
                                <li>Comida casual: Bubba Gump, Air Margaritaville</li>
                                <li>Conceptos de chefs famosos: Guy Fieri's American Kitchen, Wolfgang Puck Kitchen</li>
                                <li>Sabores mexicanos: Guacamole Andele, Baja Grill Cantina</li>
                                <li>Bocadillos rápidos: Famiglia Pizzeria, The Marketplace</li>
                                <li>Experiencia premium: Sala VIP Mera</li>
                            </ul>
                        @endif
                    </div>
                    <div>
                        <div>
                            <img src="/assets/img/terminals/svg/store.svg" width="25" height="25" alt="Retail" title="Retail" loading="lazy">
                        </div>
                        @if(app()->getLocale() == "en")
                            <h2>Shop in Terminal 3</h2>
                            <p>The terminal boasts an impressive selection of shopping venues:</p>
                            <ul>
                                <li>Duty-free: Cancun Duty-Free (luxury perfumes, spirits, cosmetics)</li>
                                <li>Mexican souvenirs: Los Cinco Soles (handcrafts), Tere Cazola</li>
                                <li>Fashion &amp; Accessories: Panama Jack, Pineda Covalin, Rogers Boots</li>
                                <li>Beauty &amp; tech: Mac Cosmetics, Mobo Shop (electronics)</li>
                                <li>Travel essentials: International Fashion, Bloomish</li>
                            </ul>
                        @else
                            <h2>Compras en la Terminal 3</h2>
                            <p>La terminal ofrece una destacada selección de tiendas:</p>
                            <ul>
                                <li>Duty-free: Cancun Duty-Free (perfumes de lujo, licores, cosméticos)</li>
                                <li>Souvenirs mexicanos: Los Cinco Soles (artesanías), Tere Cazola</li>
                                <li>Moda y accesorios: Panama Jack, Pineda Covalin, Rogers Boots</li>
                                <li>Belleza y tecnología: Mac Cosmetics, Mobo Shop (electrónicos)</li>
                                <li>Artículos de viaje: International Fashion, Bloomish</li>
                            </ul>
                        @endif
                    </div>
                    <div>
                        <div>
                            <img src="/assets/img/terminals/svg/star.svg" width="25" height="25" alt="VIP Lounge" title="VIP Lounge" loading="lazy">
                        </div>
                        @if(app()->getLocale() == "en")
                            <h2>Premium Lounge Access</h2>
                            <p>The MERA Business Lounge offers a tranquil escape:</p>
                            <ul>
                                <li>Location: Adjacent to Gate C-17 (near Bubba Gump)</li>
                                <li>Hours: Daily 6:00 AM - 9:00 PM (hours subject to change)</li>
                                <li>Rate: $33 USD per person (discounts for children)</li>
                                <li>Amenities: Complimentary snacks/drinks, WiFi, shower facilities</li>
                                <li>Contact: +52 (998) 848-8989</li>
                            </ul>
                        @else
                            <h2>Acceso a la Sala Premium</h2>
                            <p>La Sala de Negocios MERA ofrece un espacio de tranquilidad:</p>
                            <ul>
                                <li>Ubicación: Cerca de la Puerta C-17 (junto a Bubba Gump)</li>
                                <li>Horario: Diario de 6:00 AM a 9:00 PM (sujeto a cambios)</li>
                                <li>Costo: $33 USD por persona (descuentos para niños)</li>
                                <li>Servicios: Snacks/bebidas gratis, WiFi, regaderas</li>
                                <li>Contacto: +52 (998) 848-8989</li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    @include('layouts.footer.general')
@endsection