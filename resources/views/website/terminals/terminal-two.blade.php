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
                            <h1>Cancun Airport Terminal 2</h1>
                            <p>Cancun International Airport's Terminal 2 primarily serves domestic flights within Mexico, along with select international routes to the U.S., Canada, Central America, and Europe. Designed for passenger convenience, the terminal features a variety of amenities to enhance your travel experience.</p>
                            <ul>
                                <li>Dining &amp; Cafés</li>
                                <li>Restaurants</li>
                                <li>Bars</li>
                                <li>Snack kiosks</li>
                                <li>VIP Lounge by Mera</li>
                                <li>Shopping</li>
                                <li>ATMs</li>
                                <li>Currency exchange</li>
                                <li>Free Wi-Fi</li>
                            </ul>
                        @else
                            <p>Terminals</p>
                            <h1>Terminal 2 del Aeropuerto de Cancún</h1>
                            <p>La Terminal 2 del Aeropuerto Internacional de Cancún sirve principalmente vuelos nacionales dentro de México, junto con rutas internacionales selectas a los EE.UU., Canadá, América Central y Europa. Diseñado para la comodidad de los pasajeros, la terminal cuenta con una variedad de servicios para mejorar su experiencia de viaje.</p>
                            <ul>
                                <li>Restaurantes y cafeterías</li>
                                <li>Restaurantes</li>
                                <li>Bares</li>
                                <li>Quioscos de aperitivos</li>
                                <li>Sala VIP by Mera</li>
                                <li>Compras</li>
                                <li>Cajeros automáticos</li>
                                <li>Cambio de divisas</li>
                                <li>Wi-Fi gratuito</li>
                            </ul>
                        @endif
                    </div>
                    <div class="right">
                        <picture>
                            <source srcset="/assets/img/terminals/transfers-from-terminals.webp" type="image/webp">
                            <img src="/assets/img/terminals/transfers-from-terminals.jpg" alt="Terminal 2" title="Terminal 2" width="500" height="500" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>

            <div class="container middle-information">
                <div class="wrapper">
                    <div class="left">
                        @if(app()->getLocale() == "en")
                            <p>Terminal</p>
                            <h2>General Information, Gates, and Access at Cancun Airport Terminal 2</h2>
                            <p>Terminal 2 at Cancun International Airport serves as a vital hub for both domestic and international air traffic. As the airport's oldest operational terminal, it specializes in flights to Central and South America while also accommodating select European routes. The facility features 22 gates distributed between two distinct areas: the satellite building (Gates A1-A11) and the main terminal building (Gates B12-B22). This layout efficiently handles the terminal's diverse flight operations while maintaining passenger convenience.</p>
                        @else
                            <p>General</p>
                            <h2>Información General, Puertas y Accesos en la Terminal 2 del Aeropuerto de Cancún</h2>
                            <p>La Terminal 2 del Aeropuerto Internacional de Cancún es un centro neurálgico para el tráfico aéreo nacional e internacional. Se trata de la terminal operativa más antigua del aeropuerto y está especializada en vuelos a Centroamérica y Sudamérica, además de acoger algunas rutas europeas. Cuenta con 22 puertas de embarque distribuidas en dos zonas distintas: el edificio satélite (puertas A1-A11) y el edificio de la terminal principal (puertas B12-B22). Esta disposición permite gestionar con eficacia las diversas operaciones de vuelo de la terminal, manteniendo al mismo tiempo la comodidad de los pasajeros.</p>
                        @endif
                    </div>
                    <div class="right">
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/satelite.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Gates & Layout</h3>
                                <p>Terminal 2 features 22 gates strategically distributed for efficient passenger flow:</p>
                                @else
                                <h3>Puertas y disposición</h3>
                                <p>La Terminal 2 cuenta con 22 puertas distribuidas estratégicamente para un flujo eficiente de pasajeros:</p>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/plane.svg" width="25" height="25" alt="" title="" loading="lazy">                                                                
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Main Concourse (Domestic & International Flights):</h3>
                                <p>Gates B12-B22 - Primarily handle domestic Mexican flights (Aeroméxico, Volaris)</p>
                            @else
                                <h3>Pasillo principal (vuelos nacionales e internacionales):</h3>
                                <p>Puertas B12-B22 - Atienden principalmente vuelos nacionales mexicanos (Aeroméxico, Volaris)</p>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/doors.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Satellite Area (Large Aircraft Operations):</h3>
                                <p> The satellite building (Gates A1-A11) – Used for wide-body international flights (e.g., charter and seasonal European routes).</p>
                            @else
                                <h3>Área Satélite (Operaciones de Aeronaves de Gran Tamaño):</h3>
                                <p>El edificio satélite (Puertas A1-A11) - Se utiliza para vuelos internacionales de fuselaje ancho (por ejemplo, chárter y rutas europeas estacionales).</p>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/facilities.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Terminal Amenities</h3>
                                <p>Pre-Security Area (Check-in &amp; Documentation):</p>
                                <ul>
                                    <li>ATMs &amp; banking services</li>
                                    <li>Currency exchange booths</li>
                                    <li>Cafés &amp; quick-service restaurants</li>
                                </ul>
                                <p>Post-Security (Boarding Area):</p>
                                <ul>
                                    <li>Duty-free shopping (perfumes, liquor, cosmetics)</li>
                                    <li>Souvenir &amp; convenience stores</li>
                                    <li>Full-service restaurants &amp; bars</li>
                                    <li>VIP Lounge by Mera (accessible via priority pass or paid entry)</li>
                                </ul>
                            @else
                                <h3>Servicios de la terminal</h3>
                                <p>Los pasajeros pueden disfrutar de una gran variedad de servicios, entre los que se incluyen:</p>
                                <ul>
                                    <li>Área de pre-seguridad (facturación y documentación):</li>
                                    <li>Cajeros automáticos y servicios bancarios</li>
                                    <li>Cabinas de cambio de divisas</li>
                                    <li>Cafeterías y restaurantes de servicio rápido</li>
                                    <li>Post-Security (Boarding Area):</li>
                                    <li>Tiendas libres de impuestos (perfumes, licores, cosméticos)</li>
                                    <li>Tiendas de recuerdos y de conveniencia</li>
                                    <li>Restaurantes y bares de servicio completo</li>
                                    <li>Sala VIP by Mera (accesible mediante pase prioritario o entrada de pago)</li>
                                </ul>
                            @endif
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/terminals/svg/globe.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            @if(app()->getLocale() == "en")
                                <h3>Immigration & Customs</h3>
                                <ul>
                                    <li>International Arrivals: Dedicated immigration halls with automated passport control (for eligible travelers)</li>
                                    <li>Customs Clearance: Located on the ground floor for inbound passengers</li>
                                    <li>Global Entry &amp; APEC lanes available for expedited processing</li>
                                </ul>
                            @else
                                <h3>Inmigración y aduanas</h3>
                                <ul>
                                    <li>Transporte gratuito a la terminal: Conecta con las Terminales 3 y 4 (aproximadamente cada 15-20 minutos)</li>
                                    <li>Aparcamiento: Aparcamiento de corta y larga estancia (desde 2 USD/hora)</li>
                                    <li>Transporte terrestre: Taxis, traslados privados y autobuses ADO al centro de Cancún</li>
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
                        <h2>Cancun Airport Terminal 2 Map</h2>
                    @else
                        <h2>Mapa de la Terminal 2 del Aeropuerto de Cancún</h2>
                    @endif
                </div>
                <div class="bottom">
                    <picture>
                        <img src="/assets/img/terminals/cancun-airport-terminal-2-map.svg" alt="" title="" width="500" height="500" loading="lazy">
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
                            <h2>Airlines - Terminal 2</h2>
                            <p>Cancun Airport Terminal 2 - Airlines</p>
                        @else
                            <p>Aerolíneas</p>
                            <h2>Aerolíneas - Terminal 2</h2>
                            <p>Aeropuerto de Cancún Terminal 2 - Aerolíneas</p>
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
                                    <td>Aerolíneas Argentinas</td>
                                    <td>
                                        <img src="/assets/img/airlines/Aerolineas-Argentinas.png" alt="Aerolíneas Argentinas" title="Aerolíneas Argentinas" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Skyteam</td>
                                    <td data-label="@lang('terminals/general.phone')">+54 (11) 5199 3555</td>                                    
                                </tr>
                                <tr>
                                    <td>Aerus</td>
                                    <td>
                                        <img src="/assets/img/airlines/Aerus.png" alt="Aerus" title="Aerus" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>
                                </tr>
                                <tr>
                                    <td><a href="https://alaskaair.com">Alaska Airlines</a></td>
                                    <td>
                                        <img src="/assets/img/airlines/Alaska-Arilines.png" alt="Alaska Airlines" title="Alaska Airlines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Oneworld</td>
                                    <td data-label="@lang('terminals/general.phone')">001 (880) 252 7522</td>
                                    
                                </tr>
                                <tr>
                                    <td>Arajet</td>
                                    <td>
                                        <img src="/assets/img/airlines/Arajet.png" alt="Arajet" title="Arajet" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')">(800) 283 3461</td>                                    
                                </tr>
                                <tr>
                                    <td>Avianca</td>
                                    <td>
                                        <img src="/assets/img/airlines/Avianca.png" alt="Avianca" title="Avianca" width="150" height="51" loading="lazy">
                                    </td>
                                    <td>Star Alliance</td>
                                    <td data-label="@lang('terminals/general.phone')">(800) 953 2753</td>                                    
                                </tr>
                                <tr>
                                    <td>Avianca Costa Rica</td>
                                    <td>
                                        <img src="/assets/img/airlines/Avianca.png" alt="Avianca Costa Rica" title="Avianca Costa Rica" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Star Alliance</td>
                                    <td data-label="@lang('terminals/general.phone')">(800) 953 2753</td>                                    
                                </tr>
                                <tr>
                                    <td>Avianca El Salvador</td>
                                    <td>
                                        <img src="/assets/img/airlines/Avianca.png" alt="Avianca El Salvador" title="Avianca El Salvador" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Star Alliance</td>
                                    <td data-label="@lang('terminals/general.phone')">(800) 953 2753</td>                                    
                                </tr>
                                <tr>
                                    <td>Conviasa</td>
                                    <td>
                                        <img src="/assets/img/airlines/Conviasa.png" alt="Conviasa" title="Conviasa" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Copa Airlines</td>
                                    <td>
                                        <img src="/assets/img/airlines/Copa-Airlines.png" alt="Copa Airlines" title="Copa Airlines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')">Star Alliance</td>
                                    <td data-label="@lang('terminals/general.phone')">(55) 1516 3319</td>                                
                                </tr>
                                <tr>
                                    <td>Copa Airlines Colombia</td>
                                    <td>
                                        <img src="/assets/img/airlines/Copa-Airlines.png" alt="Copa Airlines Colombia" title="Copa Airlines Colombia" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')">(55) 1516 3319</td>                                    
                                </tr>
                                <tr>
                                    <td>Gol Líneas Aéreas</td>
                                    <td>
                                        <img src="/assets/img/airlines/GOL.png" alt="Gol Linhas Aereas" title="Gol Linhas Aereas" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>LATAM Chile</td>
                                    <td>
                                        <img src="/assets/img/airlines/LATAM.png" alt="LATAM Chile" title="LATAM Chile" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>LATAM Perú</td>
                                    <td>
                                        <img src="/assets/img/airlines/LATAM.png" alt="LATAM Perú" title="LATAM Perú" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Magnicharters</td>
                                    <td>
                                        <img src="/assets/img/airlines/Magni-Charters.png" alt="Magnicharters" title="Magnicharters" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Neos</td>
                                    <td>
                                        <img src="/assets/img/airlines/NEOS.png" alt="Neos" title="Neos" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Sky Airlines Perú</td>
                                    <td>
                                        <img src="/assets/img/airlines/SKY.png" alt="Sky Airlines Perú" title="Sky Airlines Perú" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Sunwing Airlines</td>
                                    <td>
                                        <img src="/assets/img/airlines/Sunwing.png" alt="Sunwing Airlines" title="Sunwing Airlines" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>TUI Airways</td>
                                    <td>
                                        <img src="/assets/img/airlines/TUI.png" alt="TUI Airways" title="TUI Airways" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>TUI Airlines Nederlands</td>
                                    <td>
                                        <img src="/assets/img/airlines/TUI.png" alt="TUI Airlines Nederlands" title="TUI Airlines Nederlands" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>
                                </tr>
                                <tr>
                                    <td>TUI Fly Belgium</td>
                                    <td>
                                        <img src="/assets/img/airlines/TUI.png" alt="TUI Fly Belgium" title="TUI Fly Belgium" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')"></td>                                    
                                </tr>
                                <tr>
                                    <td>Viva Aerobus</td>
                                    <td>
                                        <img src="/assets/img/airlines/viva-aerobus.png" alt="Viva Aerobus" title="Viva Aerobus" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')">
                                        <a href="tel:8182150150" target="_blank" rel="noreferrer noopener"><br /></a>(81) 8215 0150
                                    </td>                                    
                                </tr>
                                <tr>
                                    <td><a href="https://volaris.com">Volaris</a></td>
                                    <td>
                                        <img src="/assets/img/airlines/volaris.png" alt="Volaris" title="Volaris" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')">(55) 1102 8000</td>                                    
                                </tr>
                                <tr>
                                    <td>Volaris Costa Rica</td>
                                    <td>
                                        <img src="/assets/img/airlines/volaris.png" alt="Volaris Costa Rica" title="Volaris Costa Rica" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')">(55) 1102 8000</td>                                    
                                </tr>
                                <tr>
                                    <td>Volaris El Salvador</td>
                                    <td>
                                        <img src="/assets/img/airlines/volaris.png" alt="Volaris El Salvador" title="Volaris El Salvador" width="150" height="51" loading="lazy">
                                    </td>
                                    <td data-label="@lang('terminals/general.alliance')"></td>
                                    <td data-label="@lang('terminals/general.phone')">(55) 1102 8000</td>
                                </tr>
                                <tr>
                                    <td>Wingo</td>
                                    <td>
                                        <img src="/assets/img/airlines/Wingo.png" alt="Wingo" title="Wingo" width="150" height="51" loading="lazy">
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
                            <h2>Cancun Airport Terminal 2 Dining Options</h2>
                            <p>Cancun International Airport's Terminal 2 features diverse dining establishments throughout the facility, with restaurants located both in the check-in area and boarding gates. Travelers can enjoy these popular options:</p>
                            <ul>
                                <li>Casual Dining: Bubba Gump, Johnny Rockets, TGI Fridays</li>
                                <li>Quick Bites: Guacamole Grill, Star Island Cafe, Welcome Bar</li>
                                <li>Coffee &amp; Cafés: Starbucks, Petit Gourmet</li>
                                <li>Specialty Cuisine: Wolfgang Puck Kitchen, Panda Express</li>
                                <li>Premium Experience: VIP Lounge by Mera</li>
                            </ul>
                        @else
                            <h2>Restaurantes en la Terminal 2 del Aeropuerto de Cancún</h2>
                            <p>La Terminal 2 del Aeropuerto Internacional de Cancún cuenta con diversos establecimientos gastronómicos en toda la instalación, con restaurantes situados tanto en la zona de facturación como en las puertas de embarque. Los viajeros pueden disfrutar de estas opciones populares:</p>
                            <ul>
                                <li>Comida informal: Bubba Gump, Johnny Rockets, TGI Fridays</li>
                                <li>Aperitivos rápidos: Guacamole Grill, Star Island Cafe, Welcome Bar</li>
                                <li>Cafés y cafeterías: Starbucks, Petit Gourmet</li>
                                <li>Cocina especializada: Wolfgang Puck Kitchen, Panda Express</li>
                                <li>Experiencia Premium: Sala VIP de Mera</li>
                            </ul>
                        @endif
                    </div>
                    <div>
                        <div>
                            <img src="/assets/img/terminals/svg/store.svg" width="25" height="25" alt="Retail" title="Retail" loading="lazy">
                        </div>
                        @if(app()->getLocale() == "en")
                            <h2>Cancun Airport Terminal 2 Retail </h2>
                            <p>Terminal 2 boasts an exceptional shopping experience with stores offering:</p>
                            <ul>
                                <li>Local Souvenirs: Los Cinco Soles, Ay Guey</li>
                                <li>Fashion &amp; Accessories: Victoria's Secret, Sunglass Hut, Abito</li>
                                <li>Beauty &amp; Fragrance: Cancun Duty-Free, Bloomish</li>
                                <li>Tech Essentials: Mobo</li>
                                <li>Convenience Stores: Miniso, Mumuso</li>
                            </ul>
                        @else
                            <h2>Compras en la Terminal 2 del Aeropuerto de Cancún</h2>
                            <p>Terminal 2 cuenta con una excepcional experiencia de compras con tiendas que ofrecen:</p>
                            <ul>
                                <li>Recuerdos Locales: Los Cinco Soles, Ay Guey</li>
                                <li>Moda y Accesorios: Victoria's Secret, Sunglass Hut, Abito</li>
                                <li>Belleza y fragancias: Cancún Duty-Free, Bloomish</li>
                                <li>Tecnología Esencial: Mobo</li>
                                <li>Tiendas de conveniencia: Miniso, Mumuso</li>
                            </ul>
                        @endif
                    </div>
                    <div>
                        <div>
                            <img src="/assets/img/terminals/svg/star.svg" width="25" height="25" alt="VIP Lounge" title="VIP Lounge" loading="lazy">
                        </div>
                        @if(app()->getLocale() == "en")
                            <h2>Cancun Airport Terminal 2 Airport Lounge</h2>
                            <p>Enhance your pre-flight experience at the:</p>
                            <p>MERA VIP Lounge</p>
                            <ul>
                                <li>Location: Near Gates A (Departures area)</li>
                                <li>Hours: Daily 6:00 - 21:00 (subject to change)</li>
                                <li>Rate: $33 USD per person</li>
                                <li>Contact: (998) 848-8989</li>
                                <li>Amenities: Comfortable seating, refreshments, and premium services</li>
                            </ul>
                        @else
                            <h2>Aeropuerto de Cancún Terminal 2 Airport Lounge</h2>
                            <p>Mejore su experiencia previa al vuelo en la:</p>
                            <p>MERA VIP Lounge</p>
                            <ul>
                                <li>Ubicación: Cerca de las Puertas A (área de Salidas)</li>
                                <li>Horario: Diario 6:00 - 21:00 (sujeto a cambios)</li>
                                <li>Tarifa: $33 USD por persona</li>
                                <li>Contacto: (998) 848-8989</li>
                                <li>Servicios: Asientos cómodos, refrescos y servicios premium</li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    @include('layouts.footer.general')
@endsection