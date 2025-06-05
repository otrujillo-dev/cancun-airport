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
                            <h1>Welcome to Punta Cana International Airport (PUJ)</h1>
                            <a href="@lang('links.transportation')" class="btn" title="Book your transportation in Punta Cana ">Book your transportation in Punta Cana </a>
                        @else
                            <h1>Bienvenido al Aeropuerto Internacional de Punta Cana (PUJ)</h1>
                            <a href="@lang('links.transportation')" class="btn" title="Reserva tu traslado en Punta Cana">Reserva tu traslado en Punta Cana</a>
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
                            <p>The IATA code for Punta Cana International Airport is: <strong>PUJ</strong></p>
                            <h2>General Information about Punta Cana International Airport</h2>
                            <p>Punta Cana International Airport (PUJ) is one of the busiest airports in the Caribbean. Its tropical-style architecture and palm tree-like roofs reflect the essence of the Dominican Republic, making it one of the most unforgettable first impressions for visitors.</p>
                            <p>Punta Cana International Airport is located on the highway. Airport - Punta Cana 23000, Dominican Republic.</p>
                            <p>Getting to Punta Cana Airport is really easy and fast if you purchase a transportation service, bus, cab, Cabify or Uber.</p>
                        @else
                            <p>El código IATA del aeropuerto Internacional de Punta Cana es: <strong>PUJ</strong></p>
                            <h2>Información General del Aeropuerto Internacional de Punta Cana</h2>
                            <p>El Aeropuerto Internacional de Punta Cana (PUJ) es uno de los aeropuertos m&aacute;s transitados del Caribe. Su arquitectura de estilo tropical y techos que simulan palmeras reflejan la esencia de Rep&uacute;blica Dominicana, convirti&eacute;ndose en una de las primeras impresiones inolvidables para los visitantes.</p>
                            <p>El Aeropuerto Internacional de Punta Cana se encuentra ubicado en la carretera. Aeropuerto - Punta Cana 23000, Rep&uacute;blica Dominicana.</p>
                            <p>Llegar al Aeropuerto de Punta Cana es realmente f&aacute;cil y r&aacute;pido si adquieres un servicio de transporte, bus, taxi, Cabify o Uber</p>
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
                            <h2>Important information about Punta Cana International Airport (PUJ)</h2>
                            <table class="vertical">
                                <tbody>
                                    <tr>
                                        <th>IATA Code</th>
                                        <td>PUJ</td>
                                    </tr>
                                    <tr>
                                        <th>ICAO Code</th>
                                        <td>MDPC, FAA</td>
                                    </tr>
                                    <tr>
                                        <th>Punta Cana Airport Location</th>
                                        <td>Carretera Aeropuerto - Punta Cana 23000, República Dominicana.</td>
                                    </tr>
                                    <tr>
                                        <th>Coordinates</th>
                                        <td>18°34´00″N 68°21´07″O / 18.566666666667, -68.351944444444</td>
                                    </tr>
                                    <tr>
                                        <th>World area code</th>
                                        <td>809</td>
                                    </tr>
                                    <tr>
                                        <th>Time zone</th>
                                        <td>GMT-4</td>
                                    </tr>
                                    <tr>
                                        <th>Schedules</th>
                                        <td>24/7</td>
                                    </tr>
                                    <tr>
                                        <th>Terminals</th>
                                        <td>Terminal A, Terminal B, FBO</td>
                                    </tr>
                                </tbody>
                            </table>
                        @else
                            <h2>Información importante sobre el Aeropuerto Internacional de Punta Cana (PUJ)</h2>
                            <table class="vertical">
                                <tbody>
                                    <tr>
                                        <th>Código IATA</th>
                                        <td>PUJ</td>
                                    </tr>
                                    <tr>
                                        <th>Código  ICAO</th>
                                        <td>MDPC, FAA</td>
                                    </tr>
                                    <tr>
                                        <th>Ubicación Aeropuerto Punta Cana</th>
                                        <td>Carretera Aeropuerto - Punta Cana 23000, República Dominicana.</td>
                                    </tr>
                                    <tr>
                                        <th>Coordenadas</th>
                                        <td>18°34′00″N 68°21′07″O / 18.566666666667, -68.351944444444</td>
                                    </tr>
                                    <tr>
                                        <th>Codigo mundial de área</th>
                                        <td>809</td>
                                    </tr>
                                    <tr>
                                        <th>Zona horaria</th>
                                        <td>GMT-4</td>
                                    </tr>
                                    <tr>
                                        <th>Horarios</th>
                                        <td>24/7</td>
                                    </tr>
                                    <tr>
                                        <th>Terminales</th>
                                        <td>Terminal A, Terminal B, FBO</td>
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
                        <h2>Punta Cana Airport Transfers to your destination</h2>
                        <p>Find and compare prices among different transportation services to and from Punta Cana International Airport, including hotel-to-hotel transportation or from your hotel to your preferred tourist destination.</p>
                        <a href="@lang('links.transportation')" class="btn" title="Book Now">Book Now</a>
                    @else
                        <h2>Transporte Aeropuerto Punta Cana a tu destino</h2>
                        <p>Encuentra y compara precios entre diferentes servicios de transporte desde y hacia el aeropuerto Internacional de Punta Cana, incluso, transporte de hotel a hotel, o de tu hotel a tu destino turístico de preferencia.</p>
                        <a href="@lang('links.transportation')" class="btn" title="Reserva ahora">Reserva ahora</a>
                    @endif
                </div>
                <div class="right vehicleSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>$67.99 USD</p>
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
                            <p>Vip Suburban</p>
                        </div>
                        <div class="swiper-slide">
                            <p>$30.00 USD</p>
                            <picture>
                                <source srcset="/assets/img/vehicles/kia-k5.webp" type="image/webp">
                                <img src="/assets/img/vehicles/kia-k5.png" alt="Kia K5" title="Kia K5" width="150" height="150" loading="lazy">
                            </picture>                            
                            <p>
                                @if(app()->getLocale() == "en")
                                    Luxury Service
                                @else
                                    Servicio de Lujo
                                @endif
                            </p>
                            <p>Kia K5</p>
                        </div>

                        <div class="swiper-slide">
                            <p>$35.00 USD</p>
                            <picture>
                                <source srcset="/assets/img/vehicles/honda-odyssey.webp" type="image/webp">
                                <img src="/assets/img/vehicles/honda-odyssey.png" alt="Honda Odyssey" title="Honda Odyssey" width="150" height="150" loading="lazy">
                            </picture>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Family Service
                                @else
                                    Servicio de Familia
                                @endif
                            </p>
                            <p>Honda Odyssey</p>
                        </div>
                        <div class="swiper-slide">
                            <p>$44.99 USD</p>
                            <picture>
                                <source srcset="/assets/img/vehicles/kia-sedona.webp" type="image/webp">
                                <img src="/assets/img/vehicles/kia-sedona.png" alt="Kia Sedona" title="Kia Sedona" width="150" height="150" loading="lazy">
                            </picture>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Family Service
                                @else
                                    Servicio para Familias
                                @endif
                            </p>
                            <p>Kia Sedona</p>
                        </div>
                        <div class="swiper-slide">
                            <p>$30.00 USD</p>
                            <picture>
                                <source srcset="/assets/img/vehicles/hyundai-i20.webp" type="image/webp">
                                <img src="/assets/img/vehicles/hyundai-i20.png" alt="Hyundai i20" title="Hyundai i20" width="150" height="150" loading="lazy">
                            </picture>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Family Service
                                @else
                                    Servicio para Familias
                                @endif
                            </p>
                            <p>Hyundai i20</p>
                        </div>

    
                        <div class="swiper-slide">
                            <p>$32.00 USD</p>
                            <picture>
                                <source srcset="/assets/img/vehicles/hyundai-sonata.webp" type="image/webp">
                                <img src="/assets/img/vehicles/hyundai-sonata.png" alt="Hyundai Sonata" title="Hyundai Sonata" width="150" height="150" loading="lazy">
                            </picture>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Business Service
                                @else
                                    Servicio de negocios
                                @endif
                            </p>
                            <p>Hyundai Sonata</p>
                        </div>
                        <div class="swiper-slide">
                            <p>$49.99 USD</p>
                            <picture>
                                <source srcset="/assets/img/vehicles/hyundai-h1.webp" type="image/webp">
                                <img src="/assets/img/vehicles/hyundai-h1.png" alt="Hyundai H-1" title="Hyundai H-1" width="150" height="150" loading="lazy">
                            </picture>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Business Service
                                @else
                                    Servicio de negocios
                                @endif
                            </p>
                            <p>Hyundai H-1</p>
                        </div>
                        
                        <div class="swiper-slide">
                            <p>$59.99 USD</p>
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
                            <p>Toyota Hiace</p>
                        </div>
                        <div class="swiper-slide">
                            <p>$110.00 USD</p>
                            <picture>
                                <source srcset="/assets/img/vehicles/toyota-coaster.webp" type="image/webp">
                                <img src="/assets/img/vehicles/toyota-coaster.png" alt="Toyota Coaster" title="Toyota Coaster" width="150" height="150" loading="lazy">
                            </picture>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Group Service
                                @else
                                    Servicio para grupos
                                @endif
                            </p>
                            <p>Toyota Coaster</p>
                        </div>
                        <div class="swiper-slide">
                            <p>$240.00 USD</p>
                            <picture>
                                <source srcset="/assets/img/vehicles/marco-polo-bus.webp" type="image/webp">
                                <img src="/assets/img/vehicles/marco-polo-bus.png" alt="Marco Polo" title="Marco Polo" width="150" height="150" loading="lazy">
                            </picture>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Group Service
                                @else
                                    Servicio para grupos
                                @endif
                            </p>
                            <p>Marco Polo</p>
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
                    <iframe width="100%" height="500px" frameborder="0" src='https://www.avionio.com/widget/en/puj/arrivals?style=2' loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <div class="container faqs-information">
            <div class="wrapper">
                <div class="left">
                    <h2>
                        @if(app()->getLocale() == "en")
                            Punta Cana Airport - FAQ's
                        @else
                            Aeropuerto de Punta Cana - FAQ’s
                        @endif
                    </h2>
                    <div class="faq-items">
                        @if(app()->getLocale() == "en")
                            <div class="hidden">
                                <h3>How many Terminals does Punta Cana Airport have?</h3>
                                <div>
                                    <p><strong>Punta Cana International Airport PUJ</strong> has modern international terminals operating flights to destinations in North America, South America, Europe, and more. Services such as restaurants, duty-free stores, and VIP areas are available to enhance your travel experience.</p>
                                </div>
                            </div>
                            <div class="hidden">
                                <h3>Do I need a tourist card to enter Punta Cana?</h3>
                                <div>
                                    <p>Yes, it is mandatory for all foreign visitors. This form collects personal data and the duration of your stay in the country.</p>
                                </div>
                            </div>
                            <div class="hidden">
                                <h3>How far in advance should I arrive at the airport?</h3>
                                <div>
                                    <p><strong>Domestic flights:</strong> 2 hours before</p>
                                    <p><strong>International flights:</strong> 3 hours before</p>
                                </div>
                            </div>
                            <div class="hidden">
                                <h3>Can I rent a car at Punta Cana Airport?</h3>
                                <div>
                                    <p>Yes, you can find several reputable agencies that offer vehicles for all budgets.</p>
                                </div>
                            </div>
                        @else
                            <div class="hidden">
                                <h3>¿Cuántas terminales tiene el Aeropuerto de Punta Cana?</h3>
                                <div>
                                    <p>PUJ cuenta con modernas terminales internacionales que operan vuelos a destinos en Norteamérica, Sudamérica, Europa y más. Servicios como restaurantes, tiendas libres de impuestos, y áreas VIP están disponibles para mejorar tu experiencia de viaje.</p>
                                </div>
                            </div>
                            <div class="hidden">
                                <h3>¿Necesito una tarjeta de turista para ingresar a Punta Cana?</h3>
                                <div>
                                    <p>Sí, es obligatoria para todos los visitantes extranjeros. Este formulario recopila datos personales y la duración de tu estancia en el país.</p>
                                </div>
                            </div>
                            <div class="hidden">
                                <h3>¿Cuánto tiempo antes debo llegar al aeropuerto?</h3>
                                <div>
                                    <p><strong>Vuelos nacionales:</strong> 2 horas antes</p>
                                    <p><strong>Vuelos internacionales:</strong> 3 horas antes</p>
                                </div>
                            </div>
                            <div class="hidden">
                                <h3>¿Puedo alquilar un coche en el Aeropuerto de Punta Cana?</h3>
                                <div>
                                    <p>Sí, puedes encontrar diversas agencias de renombre que ofrecen vehículos para todos los presupuestos.</p>
                                </div>
                            </div>
                            <div class="hidden">
                                <h3>¿Qué puedo llevar en mi equipaje?</h3>
                                <div>
                                    <p>Puedes llevar alimentos sellados, medicamentos (con receta, si aplica), ropa, y objetos de valor. Todo equipaje será inspeccionado al llegar.</p>
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
                                Featured Services at Punta Cana Airport (PUJ)
                            @else
                                Servicios Destacados en el Aeropuerto de Punta Cana (PUJ)
                            @endif
                        </h2>
                    </div>
                    <div class="bottom">
                        <div>
                            <picture>
                                <source srcset="/assets/img/home/car-rental.webp" type="image/webp">
                                <img src="/assets/img/home/car-rental.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <div>
                                @if(app()->getLocale() == "en")
                                    <h3>Car Rental</h3>
                                    <p>Rent a car with local agencies and enjoy the freedom this means of transportation offers to explore nearby beaches and tourist destinations.</p>
                                @else
                                    <h3>Renta de autos</h3>
                                    <p>Renta un vehículo con agencias locales y disfruta de la libertad que este medio de transporte ofrece para explorar playas y destinos turísticos cercanos.</p>
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
                                    <h3>Private Transprtation</h3>
                                    <p>Book Punta Cana airport transportation from or to your hotel, with private or shared transportation options.</p>
                                @else
                                    <h3>Transporte Privado</h3>
                                    <p>Reserva servicio de Transporte aeropuerto Punta Cana desde o hacia tu hotel, con opciones de transporte privado o compartido.</p>
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
                                    <p>Check updated flight information in real time, for a smooth travel experience.</p>
                                @else
                                    <h3>Monitoreo de Vuelos</h3>
                                    <p>Consulta información actualizada sobre vuelos en tiempo real, para vivir una experiencia de viaje sin contratiempos.</p>
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
                                    <h3>Customs and Immigration</h3>
                                    <p>Make sure you comply with the immigration requirements, including the tourist card, a mandatory document to enter any destination within the Dominican Republic.</p>
                                @else
                                    <h3>Aduana y Migración</h3>
                                    <p>Asegúrate de cumplir con los requisitos migratorios, incluida la Tarjeta de turista, un documento obligatorio para ingresar a cualquier destino dentro de República Dominicana.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <div class="top">
                        <h2>
                            @if(app()->getLocale() == "en")
                                Discover Punta Cana
                            @else
                                Descubre Punta Cana
                            @endif
                        </h2>
                    </div>
                    <div class="bottom">
                        <div>
                            @if(app()->getLocale() == "en")
                                <h3>Paradisiacal Beaches</h3>
                                <p>Bávaro, Macao, and Juanillo are in the top 3 of the best beaches to relax and enjoy the sun in Punta Cana.</p>
                            @else
                                <h3>Playas Paradisíacas</h3>
                                <p>Bávaro, Macao, y Juanillo se encuentran en el top 3 de las mejores playas para relajarte y disfrutar del sol en Punta Cana.</p>
                            @endif
                        </div>
                        <div>
                            @if(app()->getLocale() == "en")
                                <h3>Tourist Activities</h3>
                                <p>From catamaran excursions to visits to the impressive ecological reserves, Punta Cana offers ideal experiences for any traveler's taste.</p>
                            @else
                                <h3>Actividades Turísticas</h3>
                                <p>Desde excursiones en catamarán hasta visitas a las impresionantes reservas ecológicas, Punta Cana ofrece experiencias ideales para cualquier gusto viajero.</p>
                            @endif
                        </div>
                        <div>
                            @if(app()->getLocale() == "en")
                                <h3>World Class Hotels</h3>
                                <p>Book your stay in the best all-inclusive resorts with direct access to the beach and exclusive services.</p>
                            @else
                                <h3>Hoteles de talla Mundial</h3>
                                <p>Reserva tu estancia en los mejores resorts, todo incluido, con acceso directo a la playa y servicios exclusivos.</p>
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