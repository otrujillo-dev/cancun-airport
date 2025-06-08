@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/website/home.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/home.min.css') }}" rel="stylesheet">    
@endpush
@push("push-bottom")
    <script defer src="{{ mix('/assets/js/home/index.min.js') }}"></script>
@endpush

@section('content')
    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">
        
        <div class="main-item-bg">
            <div class="container main-items">
                <div class="wrapper">
                    <div class="top">
                        <img src="/assets/img/logo/isologo-white.svg" alt="" title="" width="70" height="50" loading="lazy">
                        @if(app()->getLocale() == "en")
                            <h1>Welcome to Cancun International Airport (CUN)</h1>
                            <a href="@lang('links.transportation')" class="btn" title="Book Your Cancun Airport Transportation">Book Your Cancun Airport Transportation</a>
                        @else
                            <h1>Bienvenido al Aeropuerto Internacional de Cancún (CUN)</h1>
                            <a href="@lang('links.transportation')" class="btn" title="Reserve su Transportación en el Aeropuerto de Cancún">Reserve su Transportación en el Aeropuerto de Cancún</a>
                        @endif
                    </div>
                    <div class="bottom">
                        @if(app()->getLocale() == "en")
                            <a href="@lang('links.transportation')" class="transportation" title="@lang('main.airport_transfers')">@lang('main.airport_transfers')</a>
                            <a href="@lang('links.car_rental')" class="cars" title="@lang('main.car_rental')">@lang('main.car_rental')</a>
                            <a href="@lang('links.airport_parking')" class="tourist" title="@lang('main.airport_parking')">@lang('main.airport_parking')</a>
                            <a href="@lang('links.arrivals')" class="terminals" title="@lang('main.arrivals')">@lang('main.arrivals')</a>
                            <a href="@lang('links.departures')" class="fbo" title="@lang('main.departures')">@lang('main.departures')</a>
                            @if(false)
                                <a href="#" class="blog" title="Blog">Blog</a>
                            @endif
                        @else
                            <a href="@lang('links.transportation')" class="transportation" title="@lang('main.airport_transfers')">@lang('main.airport_transfers')</a>
                            <a href="@lang('links.car_rental')" class="cars" title="@lang('main.car_rental')">@lang('main.car_rental')</a>
                            <a href="@lang('links.airport_parking')" class="tourist" title="@lang('main.airport_parking')">@lang('main.airport_parking')</a>
                            <a href="@lang('links.arrivals')" class="terminals" title="@lang('main.arrivals')">@lang('main.arrivals')</a>
                            <a href="@lang('links.departures')" class="fbo" title="@lang('main.departures')">@lang('main.departures')</a>
                            @if(false)
                                <a href="#" class="blog" title="Blog">Blog</a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="gray-bg">
            <div class="container general-information">
                <div class="wrapper">
                    <div class="left">
                        @if(app()->getLocale() == "en")
                            <p>The IATA code for Cancun International Airport is: <strong>CUN</strong></p>
                            <h2>General Information about Cancun International Airport</h2>
                            <p>Cancun International Airport (CUN) is the second busiest airport in Mexico and the main gateway to the Mexican Caribbean. Its modern design, inspired by Mayan architecture and its vibrant atmosphere, welcomes travelers to one of the world’s most popular beach destinations.</p>
                            <p>Cancun International Airport is located at:</p>
                            <p>Carretera Mérida - Cancún Km. 22, 77565 Cancún, Quintana Roo, México.</p>
                            <p>Getting to Cancun Airport is simple and convenient. You can choose from several transportation options, including: Private Transfers, Taxis, ADO buses, Rental cars, Ride-hailing apps.</p>
                            <p>Whether you're heading to Cancun's Hotel Zone, Playa del Carmen, Tulum, or the Riviera Maya, there are plenty of efficient ways to start your vacation smoothly!</p>
                        @else
                            <p>El código IATA del aeropuerto Internacional de Cancún es:: <strong>CUN</strong></p>
                            <h2>Información General sobre el Aeropuerto Internacional de Cancún</h2>
                            <p>El Aeropuerto Internacional de Cancún (CUN) es el segundo aeropuerto más concurrido de México y la principal puerta de entrada al Caribe Mexicano. Su diseño moderno, inspirado en la arquitectura maya, y su ambiente vibrante dan la bienvenida a los viajeros a uno de los destinos de playa más populares del mundo.</p>
                            <p>El Aeropuerto Internacional de Cancún está ubicado en: Carretera Mérida - Cancún Km. 22, 77565 Cancún, Quintana Roo, México.</p>
                            <p>Llegar al aeropuerto de Cancún es sencillo y conveniente. Puedes elegir entre varias opciones de transporte, que incluyen: traslados privados, taxis, autobuses ADO, alquiler de autos, aplicaciones de transporte (con ciertas restricciones).</p>
                            <p>¡Ya sea que te dirijas a la Zona Hotelera de Cancún, Playa del Carmen, Tulum o la Riviera Maya, hay muchas formas eficientes de comenzar tus vacaciones sin complicaciones!</p>
                        @endif
                        <div class="images">
                            <picture>
                                <source srcset="/assets/img/home/one.webp" type="image/webp">
                                <img src="/assets/img/home/one.jpg" alt="" title="" width="100" height="75" loading="lazy">
                            </picture>
                            <picture>
                                <source srcset="/assets/img/home/two.webp" type="image/webp">
                                <img src="/assets/img/home/two.jpg" alt="" title="" width="100" height="75" loading="lazy">
                            </picture>
                            <picture>
                                <source srcset="/assets/img/home/three.webp" type="image/webp">
                                <img src="/assets/img/home/three.jpg" alt="" title="" width="100" height="75" loading="lazy">
                            </picture>
                        </div>
                    </div>
                    <div class="right">
                        @if(app()->getLocale() == "en")
                            <h2>Important Information About Cancun International Airport (CUN)</h2>
                            <table class="vertical">
                                <tbody>
                                    <tr>
                                        <th>IATA Code</th>
                                        <td>CUN</td>
                                    </tr>
                                    <tr>
                                        <th>ICAO Code</th>
                                        <td>MMUN</td>
                                    </tr>
                                    <tr>
                                        <th>Airport Location</th>
                                        <td>Carretera Mérida - Cancún Km. 22, 77565 Cancún, Quintana Roo, Mexico.</td>
                                    </tr>
                                    <tr>
                                        <th>Coordinates</th>
                                        <td>21°02′12″N 86°52′37″W / 21.03667, -86.87694</td>
                                    </tr>
                                    <tr>
                                        <th>Country Code (Phone)</th>
                                        <td>+52 (Mexico)</td>
                                    </tr>
                                    <tr>
                                        <th>Local Area Code</th>
                                        <td>998 (Cancún)</td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <td>(998) 848-72-00</td>
                                    </tr>
                                    <tr>
                                        <th>Time Zone</th>
                                        <td>Eastern Standard Time (EST, UTC-5)</td>
                                    </tr>
                                    <tr>
                                        <th>Operating Hours</th>
                                        <td>24/7</td>
                                    </tr>
                                    <tr>
                                        <th>Terminals</th>
                                        <td>Terminal 2, Terminal 3, Terminal 4 (Main international flights use Terminals 3 & 4)</td>
                                    </tr>
                                    <tr>
                                        <th>FBO (Private Aviation)</th>
                                        <td>Mayaland FBO (for private/charter flights)</td>
                                    </tr>
                                </tbody>
                            </table>
                        @else
                            <h2>Información importante sobre el Aeropuerto Internacional de Cancún (CUN)</h2>
                            <table class="vertical">
                                <tbody>
                                    <tr>
                                        <th>Código IATA</th>
                                        <td>CUN</td>
                                    </tr>
                                    <tr>
                                        <th>Código ICAO</th>
                                        <td>MMUN</td>
                                    </tr>
                                    <tr>
                                        <th>Ubicación del Aeropuerto</th>
                                        <td>Carretera Mérida - Cancún Km. 22, 77565 Cancún, Quintana Roo, Mexico.</td>
                                    </tr>
                                    <tr>
                                        <th>Coordenadas</th>
                                        <td>21°02′12″N 86°52′37″W / 21.03667, -86.87694</td>
                                    </tr>
                                    <tr>
                                        <th>Código de País (Teléfono)</th>
                                        <td>+52 (México)</td>
                                    </tr>
                                    <tr>
                                        <th>Código de Área Local</th>
                                        <td>998 (Cancún)</td>
                                    </tr>
                                    <tr>
                                        <th>Número de Teléfono</th>
                                        <td>(998) 848-72-00</td>
                                    </tr>
                                    <tr>
                                        <th>Zona Horaria</th>
                                        <td>Hora del Este (EST, UTC-5)</td>
                                    </tr>
                                    <tr>
                                        <th>Horario de Operación</th>
                                        <td>24/7</td>
                                    </tr>
                                    <tr>
                                        <th>Terminales</th>
                                        <td>Terminal 2, Terminal 3, Terminal 4 (Los vuelos internacionales principales usan las Terminales 3 y 4)</td>
                                    </tr>
                                    <tr>
                                        <th>FBO (Aviación Privada)</th>
                                        <td>Mayaland FBO (para vuelos privados/chárter)</td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-right">
            <div>
                <div class="left">
                    @if(app()->getLocale() == "en")
                        <h2>Cancun Airport Transportation to your destination</h2>
                        <p>Find and compare prices among different transportation services to and from Cancun International Airport, including hotel-to-hotel transportation or from your hotel to your preferred tourist destination.</p>
                        <a href="@lang('links.transportation')" class="btn" title="Book Now">Book Now</a>
                    @else
                        <h2>Transporte desde el Aeropuerto de Cancún a tu destino</h2>
                        <p>Encuentra y compara precios entre diferentes servicios de transporte hacia y desde el Aeropuerto Internacional de Cancún, incluyendo traslados de hotel a hotel o desde tu hotel hasta tu destino turístico preferido.</p>
                        <a href="@lang('links.transportation')" class="btn" title="Reserva ahora">Reserva ahora</a>
                    @endif
                </div>
                <div class="right vehicleSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>$78.00 USD</p>
                            <picture>
                                <source srcset="/assets/img/vehicles/suburban.webp" type="image/webp">
                                <img src="/assets/img/vehicles/suburban.png" alt="Vip Suburban" title="Vip Suburban" width="150" height="150" loading="lazy">
                            </picture>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Luxury Service
                                @else
                                    Servicio de Lujo
                                @endif
                            </p>
                            <p>SUV Premium o similar</p>
                        </div>
                        <div class="swiper-slide">
                            <p>$34.98 USD</p>
                            <picture>
                                <source srcset="/assets/img/vehicles/kia-k5.webp" type="image/webp">
                                <img src="/assets/img/vehicles/kia-k5.png" alt="Kia K5" title="Kia K5" width="150" height="150" loading="lazy">
                            </picture>                            
                            <p>
                                @if(app()->getLocale() == "en")
                                    Business Service
                                @else
                                    Servicio de negocios
                                @endif
                            </p>
                            <p>Sedan or similar</p>
                        </div>

                        <div class="swiper-slide">
                            <p>$29.99 USD</p>
                            <picture>
                                <source srcset="/assets/img/vehicles/toyota-hiace.webp" type="image/webp">
                                <img src="/assets/img/vehicles/toyota-hiace.png" alt="Toyota Hiace" title="Toyota Hiace" width="150" height="150" loading="lazy">
                            </picture>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Group Service
                                @else
                                    Servicio para grupos
                                @endif
                            </p>
                            <p>Van or similar</p>
                        </div> 
    
                        <div class="swiper-slide">
                            <p>$78 USD</p>
                            <picture>
                                <source srcset="/assets/img/vehicles/vw-crafter.webp" type="image/webp">
                                <img src="/assets/img/vehicles/vw-crafter.png" alt="Hyundai Sonata" title="Hyundai Sonata" width="150" height="150" loading="lazy">
                            </picture>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Group Service
                                @else
                                    Servicio para grupos
                                @endif
                            </p>
                            <p>Large Van or similar</p>
                        </div>
                        
                                               
                    </div>
                    <div class="items-controls">
                        <div class="vehicleSwiperPagination"></div>
                        <div class="buttons">
                            <button class="custom-prev" title="Back"></button>
                            <button class="custom-next" title="Next"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gray-bg">
            <div class="container flights-information">
                <div class="wrapper">
                    <iframe width="100%" height="500px" frameborder="0" src='https://www.avionio.com/widget/{{ app()->getLocale() }}/cun/arrivals?style=2' loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <div class="container faqs-information">
            <div class="wrapper">
                <div class="left">
                    <h2>
                        @if(app()->getLocale() == "en")
                            Cancun International Airport (CUN) - FAQs
                        @else
                            Preguntas frecuentes del Aeropuerto Internacional de Cancún (CUN)
                        @endif
                    </h2>
                    <div class="faq-items">
                        @if(app()->getLocale() == "en")
                            <div>
                                <h3>How many terminals does Cancun Airport have?</h3>
                                <div>
                                    <p>Cancun International Airport (CUN) has four terminals:</p>
                                    <ul>
                                        <li>Terminal 2: Mainly domestic and some international flights.</li>
                                        <li>Terminal 3: Handles international flights, especially from the U.S. and Canada.</li>
                                        <li>Terminal 4: The newest and largest terminal, serving major international airlines (U.S., Europe, Latin America).</li>
                                        <li>FBO Terminal: Private aviation (Mayaland FBO).</li>
                                    </ul>
                                    <p>Each terminal offers amenities like restaurants, duty-free shops, VIP lounges, and currency exchange to make your travel comfortable.</p>
                                </div>
                            </div>
                            <div>
                                <h3>Do I need a tourist card (FMM) to enter Cancun?</h3>
                                <div>
                                    <p>Good news for travelers! If you're flying IN and OUT of these Mexican airports:</p>
                                    <ul>
                                        <li>Cancún International Airport (CUN)</li>
                                        <li>Cozumel International Airport (CZM)</li>
                                        <li><a title="Los Cabos International Airport" href="https://los-cabos-airport.com">Los Cabos International Airport</a> (SJD)</li>
                                        <li>Puerto Vallarta International Airport (PVR)</li>
                                        <li>Mexico City International Airport (MEX)</li>
                                    </ul>
                                    <p>You NO LONGER NEED to complete the paper Forma Migratoria Múltiple (FMM/Tourist Card) for your trip.</p>
                                    <p>Important Exceptions to Note:</p>
                                    <ol>
                                        <li>If you're traveling to/from other Mexican airports not listed above, you may still need to fill out the immigration form manually</li>
                                        <li>Visitors from countries requiring a Mexican visa must still complete the FMM upon arrival</li>
                                        <li>Non-tourist travelers (permanent residents, temporary workers, etc.) must follow standard immigration procedures</li>
                                    </ol>
                                    <p>What You Should Know:</p>
                                    <ul>
                                        <li>Blank FMM forms remain available at all arrival terminals if needed</li>
                                        <li>Immigration officers will indicate if you need to complete one</li>
                                        <li>The process is now faster and more efficient at participating airports</li>
                                    </ul>
                                    <p>Already completed an online FMM? Don't worry - the system will automatically cancel it for you.</p>
                                    <p>This streamlined process makes clearing immigration quicker and easier when arriving at Cancún Airport and other major Mexican gateways.</p>
                                </div>
                            </div>
                            <div>
                                <h3>How far in advance should I arrive at Cancun Airport?</h3>
                                <div>
                                    <ul>
                                        <li>Domestic flights (within Mexico): 2 hours before departure.</li>
                                        <li>International flights (U.S., Canada, Europe, etc.): 3 hours before departure.</li>
                                    </ul>
                                    <p>Cancun Airport can get very busy, especially during peak seasons (December-April), so arriving early helps with security and check-in lines.</p>
                                </div>
                            </div>
                            <div>
                                <h3>Can I rent a car at Cancun Airport?</h3>
                                <div>
                                    <p>Yes! Cancun Airport has multiple car rental agencies (both international and local), including:</p>
                                    <p>You can compare prices and book in advance for the best deals. Tip: Check if your rental includes mandatory Mexican insurance.</p>
                                </div>
                            </div>
                            <div>
                                <h3>What Can I Bring to Cancun?</h3>
                                <div>
                                    <p>When packing for Cancun, you may bring:</p>
                                    <ul>
                                        <li>Sealed bottled food</li>
                                        <li>Medications (controlled substances require a prescription)</li>
                                        <li>Clothing &amp; personal items</li>
                                        <li>Valuables (jewelry, electronics, etc.)</li>
                                    </ul>
                                    <p>Customs &amp; Luggage Inspection</p>
                                    <ul>
                                        <li>All luggage is subject to inspection by Mexican customs (Aduana).</li>
                                        <li>If cleared, you’ll retrieve your belongings and proceed.</li>
                                        <li>If flagged, you may be detained for further inspection.</li>
                                    </ul>
                                    <p>Consult the<a title=" Mexican consulate directory" href="http://directorio.sre.gob.mx/index.php/consulados-de-mexico-en-el-exterior"> Mexican consulate directory</a> for more information.</p>
                                </div>
                            </div>
                        @else
                            <div>
                                <h3>¿Cuántas terminales tiene el Aeropuerto de Cancún?</h3>
                                <div>
                                    <p>El Aeropuerto Internacional de Cancún (CUN) tiene cuatro terminales:</p>
                                    <ul>
                                        <li>Terminal 2: Principalmente vuelos nacionales y algunos internacionales.</li>
                                        <li>Terminal 3: Maneja vuelos internacionales, especialmente de EE.UU. y Canadá.</li>
                                        <li>Terminal 4: La más nueva y grande, atiende aerolíneas internacionales importantes (EE.UU., Europa, Latinoamérica).</li>
                                        <li>Terminal FBO: Aviación privada (Mayaland FBO).</li>
                                    </ul>
                                    <p>Cada terminal ofrece servicios como restaurantes, tiendas duty-free, salas VIP y casas de cambio para que tu viaje sea cómodo.</p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Necesito una tarjeta de turista (FMM) para entrar a Cancún?</h3>
                                <div>
                                    <p>¡Buenas noticias para los viajeros! Si vuelas ENTRANDO y SALIENDO de estos aeropuertos mexicanos:</p>
                                    <ul>
                                        <li>Aeropuerto Internacional de Cancún (CUN)</li>
                                        <li>Aeropuerto Internacional de Cozumel (CZM)</li>
                                        <li>Aeropuerto Internacional de Los Cabos (SJD)</li>
                                        <li>Aeropuerto Internacional de Puerto Vallarta (PVR)</li>
                                        <li>Aeropuerto Internacional de la Ciudad de México (MEX)</li>
                                    </ul>
                                    <p>YA NO ES NECESARIO completar el formato en papel de la Forma Migratoria Múltiple (FMM/Tarjeta de Turista) para tu viaje.</p>
                                    <p>Excepciones importantes a considerar:</p>
                                    <ul>
                                        <li>Si viajas desde/hacia otros aeropuertos mexicanos no incluidos en la lista, aún podrías necesitar llenar el formulario migratorio manualmente.</li>
                                        <li>Visitantes de países que requieren visa mexicana deben completar la FMM al llegar.</li>
                                        <li>Viajeros no turísticos (residentes permanentes, trabajadores temporales, etc.) deben seguir los procedimientos migratorios estándar.</li>
                                    </ul>
                                    <p>Lo que debes saber:</p>
                                    <ul>
                                        <li>Los formatos FMM en blanco siguen disponibles en todas las terminales de llegada por si se necesitan.</li>
                                        <li>Los oficiales de migración indicarán si debes completar uno.</li>
                                        <li>El proceso ahora es más rápido y eficiente en los aeropuertos participantes.</li>
                                    </ul>
                                    <p>¿Ya completaste una FMM en línea? No te preocupes, el sistema la cancelará automáticamente.</p>
                                    <p>Este proceso simplificado agiliza el paso por migración al llegar al Aeropuerto de Cancún y otros aeropuertos principales de México.</p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Con cuánta anticipación debo llegar al Aeropuerto de Cancún?</h3>
                                <div>
                                    <ul>
                                        <li>Vuelos nacionales (dentro de México): 2 horas antes del vuelo.</li>
                                        <li>Vuelos internacionales (EE.UU., Canadá, Europa, etc.): 3 horas antes del vuelo.</li>
                                    </ul>
                                    <p>El Aeropuerto de Cancún puede estar muy concurrido, especialmente en temporada alta (diciembre-abril), por lo que llegar con anticipación ayuda con las filas de seguridad y check-in.</p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Puedo rentar un auto en el Aeropuerto de Cancún?</h3>
                                <div>
                                    <p>¡Sí! El Aeropuerto de Cancún tiene múltiples agencias de renta de autos (internacionales y locales).</p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Qué puedo llevar a Cancún?</h3>
                                <div>
                                    <p>Al empacar para Cancún, puedes llevar:</p>
                                    <ul>
                                        <li>Alimentos envasados y sellados</li>
                                        <li>Medicamentos (sustancias controladas requieren receta médica)</li>
                                        <li>Ropa y artículos personales</li>
                                        <li>Objetos de valor (joyería, electrónicos, etc.)</li>
                                    </ul>
                                    <p>Aduana e inspección de equipaje:</p>
                                    <ul>
                                        <li>Todo el equipaje está sujeto a inspección por parte de la aduana mexicana.</li>
                                        <li>Si es aprobado, podrás recuperar tus pertenencias y continuar.</li>
                                        <li>Si es marcado, podrías ser retenido para una revisión más detallada.</li>
                                    </ul>
                                    <p>Consulta el directorio de <a title="consulados mexicanos" href="http://directorio.sre.gob.mx/index.php/consulados-de-mexico-en-el-exterior">consulados mexicanos</a> para más información.</p>
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
                        <x-blog.latest :post="$post"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="container featured-information">            
            <div class="wrapper">
                <div class="top">
                    <div class="top">
                        <h2>
                            @if(app()->getLocale() == "en")
                                Featured Services at Cancun International Airport (CUN)
                            @else
                                Servicios destacados en el Aeropuerto Internacional de Cancún (CUN)
                            @endif
                        </h2>
                    </div>
                    <div class="bottom">
                        <div>
                            <picture>
                                <source srcset="/assets/img/home/car-rental.webp" type="image/webp">
                                <img src="/assets/img/home/car-rental.png" alt="Car Rental" title="Car Rental" width="150" height="150" loading="lazy">
                            </picture>
                            <div>
                                @if(app()->getLocale() == "en")
                                    <h3>Car Rental</h3>
                                    <p>Explore the Riviera Maya at your own pace! Cancun Airport offers car rentals from trusted international and local agencies, including:</p>
                                @else
                                    <h3>Renta de autos</h3>
                                    <p>Explora la Riviera Maya a tu propio ritmo con las opciones de renta de autos disponibles en el aeropuerto.</p>
                                @endif
                            </div>
                        </div>
                        <div>
                            <picture>
                                <source srcset="/assets/img/home/shuttle.webp" type="image/webp">
                                <img src="/assets/img/home/shuttle.webp" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <div>
                                @if(app()->getLocale() == "en")
                                    <h3>Private Transportation</h3>
                                    <p>Skip the hassle—arrange private or shared transfers directly to your hotel or resort. Options include:</p>
                                @else
                                    <h3>Transporte privado</h3>
                                    <p>Organiza traslados cómodos y directos a tu hotel o resort con servicios de transporte privado.</p>
                                @endif
                            </div>
                        </div>
                        <div>
                            <picture>
                                <source srcset="/assets/img/home/flight-monitoring.webp" type="image/webp">
                                <img src="/assets/img/home/flight-monitoring.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <div>
                                @if(app()->getLocale() == "en")
                                    <h3>Flight Monitoring</h3>
                                    <p>Stay updated with real-time flight tracking on screens throughout Cancun Airport’s terminals. You can also check your flight status online via:</p>
                                @else
                                    <h3>Monitoreo de vuelos</h3>
                                    <p>Consulta el estado de los vuelos en tiempo real a través de las pantallas disponibles en todas las terminales.</p>
                                @endif
                            </div>
                        </div>
                        <div>
                            <picture>
                                <source srcset="/assets/img/home/customs.webp" type="image/webp">
                                <img src="/assets/img/home/customs.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <div>
                                @if(app()->getLocale() == "en")
                                    <h3>Customs & Immigration</h3>
                                    <p>Ensure a smooth entry by preparing the following:</p>
                                    <ul>
                                        <li>Passport (valid for your entire stay)</li>
                                        <li>FMM Tourist Card (if required—currently waived for many travelers at CUN)</li>
                                        <li>Customs declaration (completed onboard before landing)</li>
                                    </ul>
                                @else
                                    <h3>Aduana e inmigración</h3>
                                    <p>Para una entrada sin problemas, asegúrate de tener:</p>
                                    <ul>
                                        <li>Pasaporte vigente</li>
                                        <li>Documentación migratoria requerida</li>
                                        <li>Declaración de aduana completada</li>
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <div class="top">
                        <h2>
                            @if(app()->getLocale() == "en")
                                Discover Cancún
                            @else
                                Descubre Cancún
                            @endif
                        </h2>
                    </div>
                    <div class="bottom">
                        <div>
                            @if(app()->getLocale() == "en")
                                <h3>Paradise Beaches</h3>
                                <p>Cancún is home to some of the world's most stunning beaches, known for their white sand and turquoise waters. Don't miss: Playa Delfines, Playa Norte, Playa Maroma.</p>
                            @else
                                <h3>Playas paradisíacas</h3>
                                <p>Disfruta de las famosas playas de arena blanca y aguas cristalinas que hacen de Cancún un destino único.</p>
                            @endif
                        </div>
                        <div>
                            @if(app()->getLocale() == "en")
                                <h3>Exciting Activities</h3>
                                <p>Cancún offers adventures for every type of traveler: Snorkeling and Scuba Diving, Chichén Itzá Day Trips, Cenote Swimming, Xcaret and Xel-Há Parks.</p>
                            @else
                                <h3>Actividades emocionantes</h3>
                                <p>Desde snorkel en el arrecife hasta visitas a sitios arqueológicos, Cancún ofrece aventuras para todos los gustos.</p>
                            @endif
                        </div>
                        <div>
                            @if(app()->getLocale() == "en")
                                <h3>Luxury Resorts & Hotels</h3>
                                <p>Stay in Cancún's world-class accommodations, featuring: All-inclusive beachfront resorts: Hyatt Ziva, Riu Palace, Secrets The Vine. Boutique hotels in the Hotel Zone or downtown and private villas for an exclusive getaway.</p>
                            @else
                                <h3>Resorts y hoteles de lujo</h3>
                                <p>Encuentra alojamientos de primer nivel con servicios exclusivos y ubicaciones privilegiadas.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>            
        </div>

        <x-reviews/>
        
    </main>

    @include('layouts.footer.general')
@endsection