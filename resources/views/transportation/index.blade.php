@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/transportation/index.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/transportation/index.min.css') }}" rel="stylesheet">    
@endpush
@push("push-bottom")
    <script defer src="{{ mix('/assets/js/transportation/index.min.js') }}"></script>
    <script defer src="{{ mix('/assets/js/bookingbox/transportation.min.js') }}"></script>
@endpush

@section('content')
    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">
        <div class="main-item-bg">
            <div class="container main-items">
                <div class="wrapper">
                    <div class="top">
                        @if(app()->getLocale() == "en")
                            <h1>Punta Cana Airport Transfers</h1>
                            <p>Comfortable and safe <strong>transportation</strong> to any destination in Punta Cana</p>
                        @else
                            <h1>Traslados en Punta Cana</h1>
                            <p><strong>Transporte</strong> cómodo y seguro a cualquier destino en Punta Cana</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="container bookingbox-container">
            <div class="wrapper">

                <x-bookingbox.transportation/>

            </div>
        </div>
        
        <div class="general-information">
            <div>
                <div class="left">
                    @if(app()->getLocale() == "en")
                        <p>Our services</p>
                        <h2>Reliable and Safe Punta Cana Airport Transfers</h2>
                    @else
                        <p>Nuestros servicios</p>
                        <h2>Traslados seguros y confiables del aeropuerto de Punta Cana</h2>
                    @endif
                    <div>
                        <div>
                            <svg width="20" height="25"><use xlink:href="/assets/img/transportation/icons.svg#taxi"></use></svg>
                            <div>
                                @if(app()->getLocale() == "en")
                                    <p>Private transportation</p>
                                    <p>Book your Punta Cana airport transportation in advance to ensure a smooth start to your vacation. You can relax knowing that your transfer is already arranged from the moment you land. As a trusted provider of ground transportation in the Dominican Republic, we are committed to delivering a safe, comfortable, and hassle-free experience.</p>
                                @else
                                    <p>Transporte privado</p>
                                    <p>Reserva tu transporte al aeropuerto de Punta Cana con antelación para asegurarte un comienzo de vacaciones sin problemas. Puedes relajarte sabiendo que tu traslado ya está organizado desde el momento en que aterrices. Como proveedor de confianza de transporte terrestre en la República Dominicana, estamos comprometidos a ofrecer una experiencia segura, cómoda y sin complicaciones.</p>
                                @endif
                            </div>
                        </div>
                        <div>
                            <svg width="20" height="20"><use xlink:href="/assets/img/transportation/icons.svg#suitcase"></use></svg>
                            <div>
                                @if(app()->getLocale() == "en")
                                    <p>Professional service</p>
                                    <p>A professional and uniformed representative will be waiting for you at the exit of the PUJ terminal, easily recognizable with our T-shirt or logo on a palette. After a warm welcome, our experienced drivers will assist with your luggage and escort you to your designated vehicle. Once you're settled in, we'll take you directly to your hotel in Punta Cana, swiftly and safely.</p>
                                @else
                                    <p>Servicio profesional</p>
                                    <p>Un representante profesional y uniformado te estará esperando a la salida de la terminal PUJ, fácilmente reconocible con nuestra camiseta, o logo en paleta. Tras una cálida bienvenida, nuestros experimentados conductores te ayudarán con tu equipaje y te acompañarán al vehículo designado. Una vez instalado, te llevaremos directamente a tu hotel en Punta Cana, de forma rápida y segura.</p>
                                @endif
                            </div>
                        </div>
                        <div>
                            <svg width="20" height="20"><use xlink:href="/assets/img/transportation/icons.svg#taxi"></use></svg>
                            <div>
                                @if(app()->getLocale() == "en")
                                    <p>Reliable Airport Shuttle</p>
                                    <p>Opting for our reliable airport shuttle service ensures a more comfortable and cost-effective transfer compared to taking a taxi. Skip the long waits and get to your vacation destination without delays, because your time in paradise should be spent enjoying the beach, not waiting for transportation.</p>
                                @else
                                    <p>Transporte fiable al aeropuerto</p>
                                    <p>Optar por nuestro fiable servicio de enlace con el aeropuerto le garantiza un traslado más cómodo y rentable que tomar un taxi. Evita largas esperas y llega a tu destino de vacaciones sin retrasos, porque tu tiempo en el paraíso debe ser para disfrutar de la playa, no para esperar el transporte.</p>                                    
                                @endif
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="right">
                    <picture>
                        <source srcset="/assets/img/transportation/locations.webp" type="image/webp">
                        <img src="/assets/img/transportation/locations.jpg" alt="" title="" width="713" height="514" loading="lazy">
                    </picture>
                </div>
            </div>
        </div>

        <div class="destinations-elements">
            <div>
                <div class="left destinationsSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url('/assets/img/transportation/destinations/la-romana.webp')">
                            <div class="top">
                                <div><div class="four"></div>4.5/5</div>
                                <p>La romana</p>
                            </div>
                            <div class="bottom">
                                <p>$114 USD</p>
                                <p>$38 USD <span>@lang('transportation/main.per_person')</span></p>
                                <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/assets/img/transportation/destinations/bavaro.webp')">
                            <div class="top">
                                <div><div class="five"></div>5/5</div>
                                <p>Bavaro</p>
                            </div>
                            <div class="bottom">
                                <p>$30 USD</p>
                                <p>$10 USD <span>@lang('transportation/main.per_person')</span></p>
                                <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/assets/img/transportation/destinations/cap-cana.webp')">
                            <div class="top">
                                <div><div class="five"></div>5/5</div>
                                <p>Cap Cana</p>
                            </div>
                            <div class="bottom">
                                <p>$29 USD</p>
                                <p>$9 USD <span>@lang('transportation/main.per_person')</span></p>
                                <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/assets/img/transportation/destinations/bayahibe.webp')">
                            <div class="top">
                                <div><div class="four"></div>4/5</div>
                                <p>Bayahibe</p>
                            </div>
                            <div class="bottom">
                                <p>$90 USD</p>
                                <p>$30 USD <span>@lang('transportation/main.per_person')</span></p>
                                <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/assets/img/transportation/destinations/uvero-alto.webp')">
                            <div class="top">
                                <div><div class="four"></div>5/5</div>
                                <p>Uvero Alto</p>
                            </div>
                            <div class="bottom">
                                <p>$55 USD</p>
                                <p>$18 USD <span>@lang('transportation/main.per_person')</span></p>
                                <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/assets/img/transportation/destinations/punta-gorda.webp')">
                            <div class="top">
                                <div><div class="four"></div>5/5</div>
                                <p>Punta Gorda</p>
                            </div>
                            <div class="bottom">
                                <p>$30 USD</p>
                                <p>$10 USD <span>@lang('transportation/main.per_person')</span></p>
                                <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/assets/img/transportation/destinations/cabeza-de-toro.webp')">
                            <div class="top">
                                <div><div class="four"></div>5/5</div>
                                <p>Cabeza de toro</p>
                            </div>
                            <div class="bottom">
                                <p>$30 USD</p>
                                <p>$10 USD <span>@lang('transportation/main.per_person')</span></p>
                                <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                            </div>
                        </div>
                    </div>
                    <div class="destinationsSwiperPrev"></div>
                    <div class="destinationsSwiperNext"></div>
                </div>
                <div class="right">
                    <div class="one">
                        @if(app()->getLocale() == "en")
                            <p>Destinations</p>
                            <h2>Visit other destinations near Punta Cana</h2>
                            <a href="#transportation-bookingbox" class="btn" title="See all Destinations">See all Destinations</a>
                        @else
                            <p>Destinos</p>
                            <h2>Visita otros destinos cerca de Punta Cana</h2>
                            <a href="#transportation-bookingbox" class="btn" title="Ver todos los destinos">Ver todos los destinos</a>
                        @endif
                    </div>
                    <div class="two">
                        @if(app()->getLocale() == "en")
                            <a href="#transportation-bookingbox" class="btn" title="Punta Cana from $29 USD">Punta Cana from $29 USD</a>
                            <a href="#transportation-bookingbox" class="btn" title="Bavaro from $30 USD">Bavaro from $30 USD</a>
                            <a href="#transportation-bookingbox" class="btn" title="Santo Domingo from $114 USD">Santo Domingo from $114 USD</a>
                            <a href="#transportation-bookingbox" class="btn" title="Puerto Plata">Puerto Plata</a>
                            <a href="#transportation-bookingbox" class="btn" title="La Romana">La Romana</a>
                        @else
                            <a href="#transportation-bookingbox" class="btn" title="Punta Cana desde $29 USD">Punta Cana desde $29 USD</a>
                            <a href="#transportation-bookingbox" class="btn" title="Bavaro desde $30 USD">Bavaro desde $30 USD</a>
                            <a href="#transportation-bookingbox" class="btn" title="Santo Domingo desde $114 USD">Santo Domingo desde $114 USD</a>
                            <a href="#transportation-bookingbox" class="btn" title="Puerto Plata">Puerto Plata</a>
                            <a href="#transportation-bookingbox" class="btn" title="La Romana">La Romana</a>
                        @endif 
                    </div>
                </div>
            </div>
        </div>

        <div class="gray-bg">
            <div class="container middle-information">
                <div class="wrapper">
                    <div class="left">
                        <picture>
                            <source srcset="/assets/img/transportation/punta-cana-places.webp" type="image/webp">
                            <img src="/assets/img/transportation/punta-cana-places.jpg" alt="" title="" width="" height="" loading="lazy">
                        </picture>
                    </div>
                    <div class="right">
                        @if(app()->getLocale() == "en")
                            <p>Private transportation...</p>
                            <h2>Why use a Punta Cana Airport Shuttle service?</h2>
                            <p>Getting a transportation service from the Punta Cana airport is ideal if you want to move directly to your destination, without continuous stops, and above all, safely.</p>
                            <p>Private transportation in Punta Cana is the #1 choice for all travelers, as it offers first-class services at unbeatable prices.</p>
                            <p>It doesn't matter if you are staying at Paradisus, Dreams, Secrets, Riu, Iberostar, Melia, Barcelo, or Catalonia Resort. With us, you will be able to find the ideal transportation service for your needs, with prices starting at $12 USD per person.</p>
                        @else
                            <p>Paso a paso...</p>
                            <h2>¿Por qué utilizar Traslados en Punta Cana con una agencia de transporte privado?</h2>
                            <p>Obtener un servicio de transporte desde el aeropuerto de Punta Cana es ideal si deseas trasladarte directamente a tu destino, sin continuas paradas, y sobre todo, de forma segura.</p>
                            <p>El transporte privado en Punta Cana es la opción número 1 para todos los viajeros, ya que ofrece servicios de primera clase a precios inmejorables.</p>
                            <p>No importa si te hospedas en Paradisus, Dreams, Secrets, Riu, Iberostar, Meliá, Barceló o Catalonia Resort. Con nosotros, podrás encontrar el servicio de transporte ideal para tus necesidades, con precios desde $12 USD por persona.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="vehicles-slider">
            <div>
                <div class="left">
                    @if(app()->getLocale() == "en")
                        <h2>Word-Class airport transportation service in Punta Cana</h2>
                        <p>Find the best transportation methods to get from the airport to your destination in Punta Cana. Cab, private transportation, group transportation, car rental, bus and more.</p>
                        <p>When planning your trip, take into account the activities you plan to do in or near the city. This will help you choose the ideal method of transportation for you.</p>
                        <p>Why are we the best option for you? We offer a variety of transportation services, which puts us above other agencies, because with us you will be able to find the service that best suits your needs, upon arrival, during your stay, and even when you return to the airport. Contact us today!</p>
                        <a href="#top" class="btn" title="See all Transportation options">See all Transportation options</a>
                    @else
                        <h2>Servicio de transporte al aeropuerto de clase mundial en Punta Cana</h2>
                        <p>Encuentra los mejores métodos de transporte para llegar desde el aeropuerto a tu destino en Punta Cana. Taxi, transporte privado, transporte de grupos, alquiler de coches, autobús y mucho más.</p>
                        <p>Cuando planifiques tu viaje, toma en cuenta las actividades que planeas realizar en la ciudad o cerca de ella. Esto te ayudará a elegir el método de transporte ideal para ti.</p>
                        <h3>¿Por qué somos la mejor opción para ti?</h3>
                        <p>Ofrecemos una gran variedad de servicios de transporte, lo que nos sitúa por encima de otras agencias, ya que con nosotros podrás encontrar el servicio que mejor se adapte a tus necesidades, a tu llegada, durante tu estancia, e incluso cuando regreses al aeropuerto. ¡ Contáctanos hoy mismo!</p>
                        <a href="#top" class="btn" title="Ver todas las opciones de Transporte">Ver todas las opciones de Transporte</a>
                    @endif
                </div>
                <div class="right vehicleSwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <picture>
                                <source srcset="/assets/img/vehicles/kia-k5.webp" type="image/webp">
                                <img src="/assets/img/vehicles/kia-k5.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <p>@lang('transportation/main.private_service')</p>
                            <h3>Kia K5</h3>
                            <div class="five">5/5</div>
                            <p>@lang('transportation/main.vehicle_info', ['pax' => 3])</p>
                            <p>@lang('transportation/main.up_to', ['pax' => 3])</p>
                            <p>@lang('transportation/main.price_per_vehicle')</p>
                            <p>$37 USD</p>
                            <p>$29 USD</p>
                            <p>@lang('transportation/main.taxes_included')</p>
                            <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                        </div>

                        <div class="swiper-slide">
                            <picture>
                                <source srcset="/assets/img/vehicles/hyundai-i20.webp" type="image/webp">
                                <img src="/assets/img/vehicles/hyundai-i20.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <p>@lang('transportation/main.private_service')</p>
                            <h3>Hyundai i20</h3>
                            <div class="five">5/5</div>
                            <p>@lang('transportation/main.vehicle_info', ['pax' => 3])</p>
                            <p>@lang('transportation/main.up_to', ['pax' => 3])</p>
                            <p>@lang('transportation/main.price_per_vehicle')</p>
                            <p>$37 USD</p>
                            <p>$29 USD</p>
                            <p>@lang('transportation/main.taxes_included')</p>
                            <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                        </div>

                        <div class="swiper-slide">
                            <picture>
                                <source srcset="/assets/img/vehicles/hyundai-sonata.webp" type="image/webp">
                                <img src="/assets/img/vehicles/hyundai-sonata.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <p>@lang('transportation/main.private_service')</p>
                            <h3>Hyundai Sonata</h3>
                            <div class="five">5/5</div>
                            <p>@lang('transportation/main.vehicle_info', ['pax' => 4])</p>
                            <p>@lang('transportation/main.up_to', ['pax' => 4])</p>
                            <p>@lang('transportation/main.price_per_vehicle')</p>
                            <p>$42 USD</p>
                            <p>$32 USD</p>
                            <p>@lang('transportation/main.taxes_included')</p>
                            <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                        </div>

                        <div class="swiper-slide">
                            <picture>
                                <source srcset="/assets/img/vehicles/honda-odyssey.webp" type="image/webp">
                                <img src="/assets/img/vehicles/honda-odyssey.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <p>@lang('transportation/main.private_service')</p>
                            <h3>Honda Odyssey</h3>
                            <div class="five">5/5</div>
                            <p>@lang('transportation/main.vehicle_info', ['pax' => 6])</p>
                            <p>@lang('transportation/main.up_to', ['pax' => 6])</p>
                            <p>@lang('transportation/main.price_per_vehicle')</p>
                            <p>$45 USD</p>
                            <p>$35 USD</p>
                            <p>@lang('transportation/main.taxes_included')</p>
                            <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                        </div>

                        <div class="swiper-slide">
                            <picture>
                                <source srcset="/assets/img/vehicles/suburban.webp" type="image/webp">
                                <img src="/assets/img/vehicles/suburban.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <p>@lang('transportation/main.private_service')</p>
                            <h3>Chevrolet Suburban</h3>
                            <div class="five">5/5</div>
                            <p>@lang('transportation/main.vehicle_info', ['pax' => 4])</p>
                            <p>@lang('transportation/main.up_to', ['pax' => 4])</p>
                            <p>@lang('transportation/main.price_per_vehicle')</p>
                            <p>$87 USD</p>
                            <p>$67 USD</p>
                            <p>@lang('transportation/main.taxes_included')</p>
                            <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                        </div>

                        <div class="swiper-slide">
                            <picture>
                                <source srcset="/assets/img/vehicles/hyundai-h1.webp" type="image/webp">
                                <img src="/assets/img/vehicles/hyundai-h1.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <p>@lang('transportation/main.private_service')</p>
                            <h3>Hyundai H-1</h3>
                            <div class="five">5/5</div>
                            <p>@lang('transportation/main.vehicle_info', ['pax' => 8])</p>
                            <p>@lang('transportation/main.up_to', ['pax' => 8])</p>
                            <p>@lang('transportation/main.price_per_vehicle')</p>
                            <p>$65 USD</p>
                            <p>$50 USD</p>
                            <p>@lang('transportation/main.taxes_included')</p>
                            <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                        </div>

                        <div class="swiper-slide">
                            <picture>
                                <source srcset="/assets/img/vehicles/toyota-hiace.webp" type="image/webp">
                                <img src="/assets/img/vehicles/toyota-hiace.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <p>@lang('transportation/main.private_service')</p>
                            <h3>Toyota Hiace</h3>
                            <div class="five">5/5</div>
                            <p>@lang('transportation/main.vehicle_info', ['pax' => 11])</p>
                            <p>@lang('transportation/main.up_to', ['pax' => 11])</p>
                            <p>@lang('transportation/main.price_per_vehicle')</p>
                            <p>$78 USD</p>
                            <p>$60 USD</p>
                            <p>@lang('transportation/main.taxes_included')</p>
                            <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                        </div>

                        <div class="swiper-slide">
                            <picture>
                                <source srcset="/assets/img/vehicles/kia-sedona.webp" type="image/webp">
                                <img src="/assets/img/vehicles/kia-sedona.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <p>@lang('transportation/main.private_service')</p>
                            <h3>Kya Sedona</h3>
                            <div class="five">5/5</div>
                            <p>@lang('transportation/main.vehicle_info', ['pax' => 7])</p>
                            <p>@lang('transportation/main.up_to', ['pax' => 7])</p>
                            <p>@lang('transportation/main.price_per_vehicle')</p>
                            <p>$58 USD</p>
                            <p>$45 USD</p>
                            <p>@lang('transportation/main.taxes_included')</p>
                            <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                        </div>

                        <div class="swiper-slide">
                            <picture>
                                <source srcset="/assets/img/vehicles/toyota-coaster.webp" type="image/webp">
                                <img src="/assets/img/vehicles/toyota-coaster.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <p>@lang('transportation/main.private_service')</p>
                            <h3>Toyota Coaster</h3>
                            <div class="five">5/5</div>
                            <p>@lang('transportation/main.vehicle_info', ['pax' => 25])</p>
                            <p>@lang('transportation/main.up_to', ['pax' => 25])</p>
                            <p>@lang('transportation/main.price_per_vehicle')</p>
                            <p>$143 USD</p>
                            <p>$110 USD</p>
                            <p>@lang('transportation/main.taxes_included')</p>
                            <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                        </div>

                        <div class="swiper-slide">
                            <picture>
                                <source srcset="/assets/img/vehicles/marco-polo-bus.webp" type="image/webp">
                                <img src="/assets/img/vehicles/marco-polo-bus.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <p>@lang('transportation/main.private_service')</p>
                            <h3>Marco Polo</h3>
                            <div class="five">5/5</div>
                            <p>@lang('transportation/main.vehicle_info', ['pax' => 50])</p>
                            <p>@lang('transportation/main.up_to', ['pax' => 50])</p>
                            <p>@lang('transportation/main.price_per_vehicle')</p>
                            <p>$312 USD</p>
                            <p>$240 USD</p>
                            <p>@lang('transportation/main.taxes_included')</p>
                            <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                        </div>

                    </div>
                    <div class="items-controls">
                        <div class="vehicleSwiperPagination"></div>
                        <div class="buttons">
                            <button class="custom-prev"></button>
                            <button class="custom-next"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gray-bg">
            <div class="container information-map">
                <div class="wrapper">
                    <div class="left">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.2600005825207!2d-68.37026112458076!3d18.562313382539408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ea892172ce48f89%3A0x957aa624da170f8c!2sAeropuerto%20de%20Punta%20Cana!5e0!3m2!1ses!2smx!4v1742590743276!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="right">
                        @if(app()->getLocale() == "en")
                            <p>MAP</p>
                            <h2>Punta Cana Airport Transportation - Map</h2>
                            <p>Get to know the map of Punta Cana and the Punta Cana airport, from where you can move by means of a transportation service to your destination, hotel, or resort without complications.</p>
                            <p>Below you will find information about the airport location, airport shuttle service schedules, recommended agencies and amenities included in the shuttle service to/from Punta Cana airport.</p>
                            <a href="#top" class="btn" title="Book Now">Book Now</a>
                        @else
                            <p>MAPA</p>
                            <h2>Transporte Aeropuerto Punta Cana - Mapa</h2>
                            <p>Conoce el mapa de Punta Cana y el aeropuerto de Punta Cana, desde donde podrás desplazarte mediante un servicio de transporte a tu destino, hotel, o resort sin complicaciones.</p>
                            <p>A continuación encontrarás información sobre la ubicación del aeropuerto, los horarios de los servicios de enlace con el aeropuerto, las agencias recomendadas y las comodidades que incluye el servicio de transporte desde/hacia el aeropuerto de Punta Cana.</p>
                            <a href="#top" class="btn" title="Reservar ahora">Reservar ahora</a>
                        @endif
                        
                        <table class="vertical">
                            <tbody>
                                <tr>
                                    @if(app()->getLocale() == "en")
                                        <th>Punta Cana Airport Location</th>
                                        <td>Carr. Aeropuerto, Punta Cana 23000, República Dominicana</td>
                                    @else
                                        <th>Ubicación del aeropuerto de Punta Cana</th>
                                        <td>Carr. Aeropuerto, Punta Cana 23000, República Dominicana</td>
                                    @endif
                                </tr>
                                <tr>
                                    @if(app()->getLocale() == "en")
                                        <th>Punta Cana Airport Schedule</th>
                                        <td>24/7</td>
                                    @else
                                        <th>Horario Aeropuerto Punta Cana</th>
                                        <td>24/7</td>
                                    @endif
                                </tr>
                                <tr>
                                    @if(app()->getLocale() == "en")
                                        <th>Private transportation service available at the Punta Cana airport.</th>
                                        <td><a title="Punta Cana Airport Transfers" href="https://punta-cana-airport-transfers.com">Punta Cana Airport Transfers</a></td>
                                    @else
                                        <th>Servicio de transporte privado disponible en el aeropuerto de Punta Cana.</th>
                                        <td><a title="Traslados en Punta Cana" href="https://punta-cana-airport-transfers.com/es">Traslados en Punta Cana</a></td>
                                    @endif
                                </tr>
                                <tr>
                                    @if(app()->getLocale() == "en")
                                        <th>Punta Cana Airport Transportation Service Amenities</th>
                                        <td>Meet and greet at airport, 24/7 service, private trips, no continuous stops</td>
                                    @else
                                        <th>Amenidades, transporte aeropuerto de Punta Cana</th>
                                        <td>Recepción en el aeropuerto, servicio 24/7, viajes privados, sin paradas continuas</td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        <div class="container faqs-information">
            <div class="wrapper">
                <div class="left">
                    <h2>
                        @if(app()->getLocale() == "en")
                            FAQ’s - Punta Cana Airport Transfers
                        @else
                            Preguntas Frecuentes - Traslados Aeropuerto Punta Cana
                        @endif
                    </h2>
                    <div class="faq-items">
                        @if(app()->getLocale() == "en")
                            <div>
                                <h3>Do I have to book my Punta Cana Airport Transfer service in advance?</h3>
                                <div>
                                    <p>It is advisable to book your transfer in advance, either to or from Punta Cana airport or even to other destinations, this will prevent you from facing low or low availability, or high prices for last minute bookings.</p>
                                </div>
                            </div>
                            <div>
                                <h3>How to reserve a Shuttle service from Punta Cana Airport?</h3>
                                <div>
                                    <p><strong>Step 1 </strong>Login to our site</p>
                                    <p><strong>Step 2 </strong>Enter your data in the booking box</p>
                                    <p><strong>Step 3 </strong>add your information (remember that all your data is protected)</p>
                                    <p><strong>Step 4 </strong>Make your payment</p>
                                    <p><strong>Step 5 </strong>check your email, including your spam folder, where you will receive the confirmation of your reservation.</p>
                                </div>
                            </div>
                            <div>
                                <h3>What types of airport transfer options are available in Punta Cana?</h3>
                                <div>
                                    <p>Travelers can choose from several options:</p>
                                    <ul>
                                        <li>Private Transfers: Non-shared, direct service from the airport to your destination.</li>
                                        <li>Shared Shuttles: Cost-effective but may involve waiting for other passengers and multiple stops.</li>
                                        <li>Taxis: Available at the airport with fixed rates depending on the destination.</li>
                                        <li>Luxury &amp; VIP Transfers: Premium vehicles offering enhanced comfort and amenities.</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3>How do I find my driver upon arrival at Punta Cana International Airport?</h3>
                                <div>
                                    <p>After collecting your luggage and passing through customs, your driver will be waiting in the terminal holding a sign with your name or the logo of the transportation company of your choice. </p>
                                </div>
                            </div>
                            <div>
                                <h3>What should I do if my flight is delayed or arrives early?</h3>
                                <div>
                                    <p>Reputable transfer services monitor flight schedules and adjust pickup times accordingly. If your flight is canceled, they will attempt to reschedule your transfer, though availability cannot be guaranteed. </p>
                                </div>
                            </div>
                            <div>
                                <h3>Are child seats available for airport transfers?</h3>
                                <div>
                                    <p>Yes, many transfer services offer child seats. Typically, one seat is included at no additional charge, with extra seats available for a fee. It's advisable to specify the age and weight of your child when booking.</p>
                                </div>
                            </div>
                            <div>
                                <h3>Do I need to confirm my airport transfer before arrival?</h3>
                                <div>
                                    <p>Once you've received electronic confirmation of your booking, pickups and drop-offs are automatically scheduled, eliminating the need for reconfirmation. </p>
                                </div>
                            </div>
                            <div>
                                <h3>What is the refund policy for canceled transfers?</h3>
                                <div>
                                    <p>You may generally cancel your reservation up to 24 hours prior to your scheduled check-in or check-out time for a full refund. Cancellations made less than eight hours in advance may or may not receive a partial refund. Policies may vary, so it is best to check with each supplier.</p>
                                </div>
                            </div>
                            <div>
                                <h3>How much does a taxi from Punta Cana Airport to local destinations cost?</h3>
                                <div>
                                    <p>Taxi fares are typically fixed based on the destination. For example:</p>
                                    <ul>
                                        <li>Punta Cana Airport to Cap Cana: $30 USD</li>
                                        <li>Punta Cana Airport to Bavaro: $30-$35 USD</li>
                                        <li>Punta Cana Airport to Uvero Alto: $70 USD </li>
                                    </ul>
                                    <p>It is recommended to confirm the fare before starting the trip, in case it is a last minute cab or reservation.</p>
                                </div>
                            </div>
                            <div>
                                <h3>Is it safe to take a taxi from Punta Cana airport?</h3>
                                <div>
                                    <p>Yes, taxis in Punta Cana are generally safe. However, to avoid potential overcharging, consider pre-booking a private transfer with a reputable company that offers fixed pricing.</p>
                                </div>
                            </div>
                            <div>
                                <h3>Can I use Uber from/to Airport in Punta Cana?</h3>
                                <div>
                                    <p>While Uber operates in Punta Cana, pickups from the airport are restricted. Passengers would need to walk outside the airport premises to meet their Uber driver, which can be inconvenient, especially with luggage.</p>
                                </div>
                            </div>
                            <div>
                                <h3>How do I pay for my airport transfer?</h3>
                                <div>
                                    <p>Most transportation services accept different currencies, such as US dollars, Canadian dollars, Euros and pounds sterling, in the case of Punta Cana, payments are processed in Dominican pesos. It is advisable to confirm in advance the payment methods with the chosen supplier and to make a previous currency exchange.</p>
                                </div>
                            </div>
                        @else
                            <div>
                                <h3>¿Tengo que reservar mi servicio de traslado al aeropuerto de Punta Cana con antelación?</h3>
                                <div>
                                    <p>Es recomendable reservar tu traslado con antelación, ya sea desde o hacia el aeropuerto de Punta Cana o incluso a otros destinos, esto evitará que te encuentres con poca o baja disponibilidad, o altos precios por reservas de última hora.</p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Cómo reservar un servicio de transporte desde el aeropuerto de Punta Cana?</h3>
                                <div>
                                    <p><strong>Paso 1</strong> Inicia sesión en nuestro sitio</p>
                                    <p><strong>Paso 2 </strong>Introduce tus datos en la casilla de reserva</p>
                                    <p><strong>Paso 3 </strong>Añade tu información (recuerda que todos tus datos están protegidos)</p>
                                    <p><strong>Paso 4 </strong>Realiza tu pago</p>
                                    <p><strong>Paso 5</strong> Revisa tu correo electrónico, incluida la carpeta de spam, donde recibirás la confirmación de tu reserva.</p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Qué tipos de traslados hay disponibles en Punta Cana?</h3>
                                <div>
                                    <p>Los viajeros pueden elegir entre varias opciones:</p>
                                    <ul>
                                        <li>Traslados privados: Servicio directo no compartido desde el aeropuerto a cualquier destino.</li>
                                        <li>Traslados compartidos: Rentables pero pueden implicar la espera de otros pasajeros y múltiples paradas.</li>
                                        <li>Taxis: Disponibles en el aeropuerto con tarifas fijas según el destino.</li>
                                        <li>Traslados de lujo y VIP: Vehículos de alta gama que ofrecen mayor comodidad y servicios.</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3>¿Cómo encontrar a mi conductor al llegar al Aeropuerto Internacional de Punta Cana?</h3>
                                <div>
                                    <p>Tras recoger tu equipaje y pasar por aduanas, tu conductor te estará esperando en la terminal con un cartel con tu nombre o bien con el distintivo de la empresa de transporte que elijas. </p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Qué debo hacer si mi vuelo se retrasa o llega antes de lo previsto?</h3>
                                <div>
                                    <p>Los servicios de traslado acreditados supervisan los horarios de los vuelos y ajustan los horarios de traslado en consecuencia. Si tu vuelo se cancela, intentarán reprogramar tu traslado, aunque no se puede garantizar la disponibilidad. </p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Hay sillas para niños en los traslados al aeropuerto?</h3>
                                <div>
                                    <p>Sí, muchos servicios de traslado ofrecen sillas para niños. Por lo general, se incluye un asiento sin cargo adicional, y se ofrecen asientos adicionales con sobreprecio. Es recomendable especificar la edad y el peso del niño al reservar. </p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Tengo que confirmar mi traslado al aeropuerto antes de llegar?</h3>
                                <div>
                                    <p>Una vez que hayas recibido la confirmación electrónica de tu reserva, se programan automáticamente tus traslados, eliminando la necesidad de reconfirmación. </p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Cuál es la política de reembolso por cancelación?</h3>
                                <div>
                                    <p>En general, puede cancelar su reserva hasta 24 horas antes de la hora prevista de recepción o salida para obtener un reembolso completo. Las cancelaciones realizadas con menos de ocho horas de antelación pueden, o no, recibir un reembolso parcial. Las políticas pueden variar, por lo que es mejor consultar con cada proveedor. </p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Cuánto cuesta un taxi desde el Aeropuerto de Punta Cana a destinos locales?</h3>
                                <div>
                                    <p>Las tarifas de taxi suelen ser fijas en función del destino. Por ejemplo.</p>
                                    <ul>
                                        <li>Aeropuerto de Punta Cana a Cap Cana: 30 USD</li>
                                        <li>Aeropuerto de Punta Cana a Bávaro: $30-$35 USD</li>
                                        <li>De Aeropuerto de Punta Cana a Uvero Alto: 70 USD</li>
                                    </ul>
                                    <p>Se recomienda confirmar la tarifa antes de iniciar el viaje, en caso de ser este taxi o reserva de último minuto.</p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Es seguro tomar un taxi desde el aeropuerto de Punta Cana?</h3>
                                <div>
                                    <p>Sí, los taxis de Punta Cana suelen ser seguros. Sin embargo, para evitar posibles sobreprecios, considera reservar con antelación un traslado privado con una empresa de confianza que ofrezca precios fijos.</p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Puedo utilizar Uber desde/hasta el Aeropuerto en Punta Cana?</h3>
                                <div>
                                    <p>Aunque Uber opera en Punta Cana, están restringidas sus operaciones de transporte desde el aeropuerto. Habrá que salir del aeropuerto para encontrarse con el conductor de Uber, lo que puede resultar incómodo, sobre todo si llevas equipaje. </p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Cómo pago el traslado desde el aeropuerto?</h3>
                                <div>
                                    <p>La mayoría de los servicios de transporte aceptan diferentes divisas, como dólares estadounidenses, dólares canadienses, euros y libras esterlinas, en el caso de punta cana, los pagos se procesan en pesos dominicanos. Es aconsejable confirmar de antemano los métodos de pago con el proveedor elegido y realizar una previa del cambio de divisas.</p>
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
        
        <x-reviews/>        
    </main>

    @include('layouts.footer.general')
@endsection