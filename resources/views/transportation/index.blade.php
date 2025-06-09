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
                            <h1>Cancun Airport Transportation</h1>
                            <p>Comfortable and safe transportation to any destination in Cancun</p>
                        @else
                            <h1>Transportación en el Aeropuerto de Cancún</h1>
                            <p>Transportación cómoda y segura a cualquier destino en Cancún</p>
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
                        <p>Our Services</p>
                        <h2>Reliable and Safe Cancun Airport Transportation</h2>
                    @else
                        <p>Nuestros Servicios</p>
                        <h2>Transporte confiable y seguro en el Aeropuerto de Cancún</h2>
                    @endif
                    <div>
                        <div>
                            <svg width="20" height="25"><use xlink:href="/assets/img/transportation/icons.svg#taxi"></use></svg>
                            <div>
                                @if(app()->getLocale() == "en")
                                    <p>Private Transportation</p>
                                    <p>Book your Cancun airport transportation in advance to ensure a smooth start to your vacation. Relax knowing your transfer is arranged as soon as you land at Cancun International Airport (CUN). As a trusted provider of ground transportation in Mexico, we are committed to delivering a safe, comfortable, and hassle-free experience.</p>
                                @else
                                    <p>Transporte Privado</p>
                                    <p>Reserve su transporte desde el aeropuerto de Cancún con anticipación para garantizar un inicio perfecto de sus vacaciones. Relájese sabiendo que su traslado estará listo tan pronto como aterrice en el Aeropuerto Internacional de Cancún (CUN). Como proveedor confiable de transporte terrestre en México, nos comprometemos a brindarle una experiencia segura, cómoda y sin complicaciones.</p>
                                @endif
                            </div>
                        </div>
                        <div>
                            <svg width="20" height="20"><use xlink:href="/assets/img/transportation/icons.svg#suitcase"></use></svg>
                            <div>
                                @if(app()->getLocale() == "en")
                                    <p>Professional Service</p>
                                    <p>A professional, uniformed representative will be waiting for you at the exit of the CUN terminal, easily recognizable with our branded shirt or sign. After a warm welcome, our experienced drivers will assist with your luggage and escort you to your designated vehicle. Once you're settled in, we'll take you directly to your hotel in Cancun’s Hotel Zone or Riviera Maya—swiftly and safely.</p>
                                @else
                                    <p>Servicio Profesional</p>
                                    <p>Un representante profesional y uniformado lo estará esperando a la salida de la terminal de CUN, fácilmente identificable por nuestra camisa o cartel con logo. Después de una cálida bienvenida, nuestros conductores expertos lo asistirán con su equipaje y lo acompañarán hasta su vehículo asignado. Una vez instalados, los llevaremos directamente a su hotel en la Zona Hotelera de Cancún o la Riviera Maya de manera rápida y segura.</p>
                                @endif
                            </div>
                        </div>
                        <div>
                            <svg width="20" height="20"><use xlink:href="/assets/img/transportation/icons.svg#taxi"></use></svg>
                            <div>
                                @if(app()->getLocale() == "en")
                                    <p>Reliable Airport Shuttle</p>
                                    <p>Choosing our shuttle service ensures a comfortable and cost-effective transfer compared to taxis. Skip the long waits and head straight to paradise without delays. Your time in Cancun should be spent enjoying pristine beaches and vibrant nightlife—not waiting for transportation.</p>
                                @else
                                    <p>Transporte compartido confiable</p>
                                    <p>Elegir nuestro servicio de transporte compartido garantiza un traslado cómodo y económico en comparación con los taxis. Evite las largas esperas y diríjase directamente al paraíso sin demoras. Su tiempo en Cancún debe dedicarse a disfrutar de playas paradisíacas y una vibrante vida nocturna, ¡no a esperar el transporte!</p>
                                @endif
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="right">
                    <picture>
                        <source srcset="/assets/img/transportation/locations.webp" type="image/webp">
                        <img src="/assets/img/transportation/locations.jpg" alt="Cancun Airport Transportation" title="Cancun Airport Transportation" width="713" height="514" loading="lazy">
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
                                <p>Playa del Carmen</p>
                            </div>
                            <div class="bottom">
                                @if(app()->getLocale() == "en")
                                    <p>$90 USD</p>
                                    <p>$69 USD <span>@lang('transportation/main.per_vehicle')</span></p>
                                @else
                                    <p>$1,727 MXN</p>
                                    <p>$1,329 MXN <span>@lang('transportation/main.per_vehicle')</span></p>
                                @endif
                                <a href="#transportation-bookingbox" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/assets/img/transportation/destinations/bavaro.webp')">
                            <div class="top">
                                <div><div class="five"></div>5/5</div>
                                <p>Tulum</p>
                            </div>
                            <div class="bottom">
                                @if(app()->getLocale() == "en")
                                    <p>$165 USD</p>
                                    <p>$127 USD <span>@lang('transportation/main.per_vehicle')</span></p>
                                @else
                                    <p>$3,309 MXN</p>
                                    <p>$2,546 MXN <span>@lang('transportation/main.per_vehicle')</span></p>
                                @endif
                                <a href="#transportation-bookingbox" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/assets/img/transportation/destinations/cap-cana.webp')">
                            <div class="top">
                                <div><div class="five"></div>5/5</div>
                                <p>
                                    @if(app()->getLocale() == "en")
                                        Cancun Hotel Zone
                                    @else
                                        Cancun Zona Hotelera
                                    @endif
                                </p>
                            </div>
                            <div class="bottom">
                                @if(app()->getLocale() == "en")
                                    <p>$39 USD</p>
                                    <p>$29 USD <span>@lang('transportation/main.per_vehicle')</span></p>
                                @else
                                    <p>$739 MXN</p>
                                    <p>$569 MXN <span>@lang('transportation/main.per_vehicle')</span></p>
                                @endif
                                <a href="#transportation-bookingbox" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/assets/img/transportation/destinations/bayahibe.webp')">
                            <div class="top">
                                <div><div class="four"></div>4/5</div>
                                <p>Puerto Morelos</p>
                            </div>
                            <div class="bottom">
                                @if(app()->getLocale() == "en")
                                    <p>$65 USD</p>
                                    <p>$50 USD <span>@lang('transportation/main.per_vehicle')</span></p>
                                @else
                                    <p>$1,235 MXN</p>
                                    <p>$950 MXN <span>@lang('transportation/main.per_vehicle')</span></p>
                                @endif
                                <a href="#transportation-bookingbox" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/assets/img/transportation/destinations/uvero-alto.webp')">
                            <div class="top">
                                <div><div class="four"></div>5/5</div>
                                <p>Puerto Aventuras</p>
                            </div>
                            <div class="bottom">
                                @if(app()->getLocale() == "en")
                                    <p>$114 USD</p>
                                    <p>$88 USD <span>@lang('transportation/main.per_vehicle')</span></p>
                                @else
                                    <p>$2,173 MXN</p>
                                    <p>$1,672 MXN <span>@lang('transportation/main.per_vehicle')</span></p>
                                @endif
                                <a href="#transportation-bookingbox" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/assets/img/transportation/destinations/punta-gorda.webp')">
                            <div class="top">
                                <div><div class="four"></div>5/5</div>
                                <p>Akumal</p>
                            </div>
                            <div class="bottom">
                                @if(app()->getLocale() == "en")
                                    <p>$133 USD</p>
                                    <p>$103 USD <span>@lang('transportation/main.per_vehicle')</span></p>
                                @else
                                    <p>$2,544 MXN</p>
                                    <p>$1,957 MXN <span>@lang('transportation/main.per_vehicle')</span></p>
                                @endif
                                <a href="#transportation-bookingbox" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('/assets/img/transportation/destinations/cabeza-de-toro.webp')">
                            <div class="top">
                                <div><div class="four"></div>5/5</div>
                                <p>Holbox Ferry</p>
                            </div>
                            <div class="bottom">
                                @if(app()->getLocale() == "en")
                                    <p>$312 USD</p>
                                    <p>$240 USD <span>@lang('transportation/main.per_vehicle')</span></p>
                                @else
                                    <p>$5,928 MXN</p>
                                    <p>$4,560 MXN <span>@lang('transportation/main.per_vehicle')</span></p>
                                @endif
                                <a href="#transportation-bookingbox" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
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
                            <h2>Visit other destinations near Cancun.</h2>
                            <a href="#transportation-bookingbox" class="btn" title="See all Destinations">See all Destinations</a>
                        @else
                            <p>Destinos</p>
                            <h2>Visita otros destinos cerca de Cancun</h2>
                            <a href="#transportation-bookingbox" class="btn" title="Ver todos los destinos">Ver todos los destinos</a>
                        @endif
                    </div>
                    <div class="two">
                        @if(app()->getLocale() == "en")
                            <a href="#transportation-bookingbox" class="btn" title="Cancun Hotel Zone from $29.99 USD">Cancun Hotel Zone from $29.99 USD</a>
                            <a href="#transportation-bookingbox" class="btn" title="Playa del Carmen from $69.99 USD">Playa del Carmen from $69.99 USD</a>
                            <a href="#transportation-bookingbox" class="btn" title="Tulum from $127 USD">Tulum from $127 USD</a>
                        @else
                             <a href="#transportation-bookingbox" class="btn" title="Zona Hotelera de Cancún desde $29.99 USD">Zona Hotelera de Cancún desde $29.99 USD</a>
                            <a href="#transportation-bookingbox" class="btn" title="Playa del Carmen desde $69.99 USD">Playa del Carmen desde $69.99 USD</a>
                            <a href="#transportation-bookingbox" class="btn" title="Tulum desde $127 USD">Tulum desde $127 USD</a>
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
                            <source srcset="/assets/img/transportation/cancun-airport-places.webp" type="image/webp">
                            <img src="/assets/img/transportation/cancun-airport-places.jpg" alt="" title="" width="" height="" loading="lazy">
                        </picture>
                    </div>
                    <div class="right">
                        @if(app()->getLocale() == "en")
                            <p>Cancun Airport Private Transportation</p>
                            <h2>Why Use a Cancun Airport Shuttle Service?</h2>
                            <p>Booking a private shuttle from Cancun International Airport (CUN) is the best way to travel directly to your resort—without unnecessary stops—while ensuring safety and comfort.</p>
                            <p>Cancun Private Transportation is the top choice for travelers, offering premium service at unbeatable prices. Whether you're staying at Hyatt Ziva, Riu Palace, Secrets Maroma, Grand Fiesta Americana, Hard Rock Hotel, TRS Coral, Moon Palace, or Excellence Playa Mujeres, we provide the perfect transfer solution for your needs—starting at just $29.99 USD per vehicle.</p>
                            <p>Skip the hassle of taxis and shared shuttles—arrive at your Cancun getaway smoothly and in style!</p>
                        @else
                            <p>Transporte Privado en el Aeropuerto de Cancún</p>
                            <h2>¿Por qué elegir un servicio de transporte privado en Cancún?</h2>
                            <p>Reservar un transporte privado desde el Aeropuerto Internacional de Cancún (CUN) es la mejor manera de llegar directamente a tu resort —sin paradas innecesarias— garantizando seguridad y comodidad.</p>
                            <p>Un servicio de transporte privado en el Aeropuerto de Cancún es la opción preferida por los viajeros, ofreciendo un servicio premium a precios insuperables. Ya sea que te hospedes en Hyatt Ziva, Riu Palace, Secrets Maroma, Grand Fiesta Americana, Hard Rock Hotel, TRS Coral, Moon Palace o Excellence Playa Mujeres, tenemos la solución de traslado perfecta para tus necesidades —desde solo $569.81 MXN por vehículo.</p>
                            <p>Olvídate de los taxis y los transportes compartidos —¡llega a tu destino en Cancún con estilo y sin complicaciones!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="vehicles-slider">
            <div>
                <div class="left">
                    @if(app()->getLocale() == "en")
                        <h2>World-Class Cancun Airport Transportation</h2>
                        <p>Find the best way to get from Cancun International Airport (CUN) to your hotel or resort with a variety of transportation options: private transfers, shared shuttles, taxis, luxury vans, car rentals, and more.</p>
                        <p>When planning your trip, consider your itinerary—whether you're heading to the Hotel Zone, Riviera Maya, Playa del Carmen, or Tulum—to choose the most convenient transportation for your needs.</p>
                        <p>Why Choose Us? We stand out from other agencies by offering flexible, reliable, and affordable services tailored to your trip. Whether you need:</p>
                        <ul>
                            <li>Private transfers for a fast, direct ride</li>
                            <li>Group shuttles for budget-friendly travel</li>
                            <li>Luxury vehicles for VIP comfort</li>
                            <li>Round-trip service for stress-free airport returns</li>
                        </ul>
                        <p>From the moment you land until your departure, we ensure safe, comfortable, and hassle-free transportation. Book today and start your Cancun vacation the right way!</p>
                        <a href="#top" class="btn" title="See all the Cancun Transportation Options">See all the Cancun Transportation Options</a>
                    @else
                        <h2>Transporte de clase mundial desde el aeropuerto de Cancún</h2>
                        <p>Encuentre la mejor manera de llegar desde el Aeropuerto Internacional de Cancún (CUN) a su hotel o resort con una variedad de opciones de transporte: traslados privados, traslados compartidas, taxis, camionetas de lujo, alquiler de coches, y mucho más.</p>
                        <p>Al planear su viaje, tenga en cuenta su itinerario, ya sea que se dirija a la Zona Hotelera, Riviera Maya, Playa del Carmen o Tulum, para elegir el transporte más conveniente para sus necesidades.</p>
                        <p>¿Por qué elegirnos? Nos distinguimos de otras agencias por ofrecer servicios flexibles, confiables y accesibles adaptados a su viaje. Ya sea que necesite </p>
                        <ul>
                            <li>Traslados privados para un viaje rápido y directo</li>
                            <li>Traslados en grupo para un viaje económico</li>
                            <li>Vehículos de lujo para un confort VIP</li>
                            <li>Servicio de ida y vuelta para regresar al aeropuerto sin estrés</li>
                        </ul>
                        <p>Al planificar tu viaje, considera tu itinerario —ya sea que vayas a la Zona Hotelera, Riviera Maya, Playa del Carmen o Tulum— para elegir el transporte más conveniente.</p>
                        <a href="#top" class="btn" title="Ver todas las opciones de Transporte en Cancún">Ver todas las opciones de Transporte en Cancún</a>
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
                            <h3>
                                @if(app()->getLocale() == "en")
                                    Sedan or similar
                                @else
                                    Sedan o similar
                                @endif
                            </h3>
                            <div class="five">5/5</div>
                            <p>@lang('transportation/main.vehicle_info', ['pax' => 3])</p>
                            <p>@lang('transportation/main.up_to', ['pax' => 3])</p>
                            <p>@lang('transportation/main.price_per_vehicle')</p>
                            @if(app()->getLocale() == "en")
                                <p>$44 USD</p>
                                <p>$34 USD</p>
                            @else
                                <p>$863 MXN</p>
                                <p>$664 MXN</p>
                            @endif
                            <p>@lang('transportation/main.taxes_included')</p>
                            <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                        </div>
                        

                        <div class="swiper-slide">
                            <picture>
                                <source srcset="/assets/img/vehicles/suburban.webp" type="image/webp">
                                <img src="/assets/img/vehicles/suburban.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <p>@lang('transportation/main.private_service')</p>
                            <h3>
                                @if(app()->getLocale() == "en")
                                    SUV Premium or similar
                                @else
                                    SUV Premium o similar
                                @endif
                            </h3>
                            <div class="five">5/5</div>
                            <p>@lang('transportation/main.vehicle_info', ['pax' => 5])</p>
                            <p>@lang('transportation/main.up_to', ['pax' => 5])</p>
                            <p>@lang('transportation/main.price_per_vehicle')</p>
                            @if(app()->getLocale() == "en")
                                <p>$101 USD</p>
                                <p>$78 USD</p>
                            @else
                                <p>$1,926 MXN</p>
                                <p>$1,482 MXN</p>
                            @endif
                            <p>@lang('transportation/main.taxes_included')</p>
                            <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                        </div>

                        <div class="swiper-slide">
                            <picture>
                                <source srcset="/assets/img/vehicles/toyota-hiace.webp" type="image/webp">
                                <img src="/assets/img/vehicles/toyota-hiace.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <p>@lang('transportation/main.private_service')</p>
                            <h3>
                                @if(app()->getLocale() == "en")
                                    Van or similar
                                @else
                                    Van o similar
                                @endif
                            </h3>
                            <div class="five">5/5</div>
                            <p>@lang('transportation/main.vehicle_info', ['pax' => 8])</p>
                            <p>@lang('transportation/main.up_to', ['pax' => 8])</p>
                            <p>@lang('transportation/main.price_per_vehicle')</p>
                            @if(app()->getLocale() == "en")
                                <p>$37 USD</p>
                                <p>$29 USD</p>
                            @else
                                <p>$739 MXN</p>
                                <p>$569 MXN</p>
                            @endif
                            <p>@lang('transportation/main.taxes_included')</p>
                            <a href="#transportation" class="btn" title="@lang('transportation/main.book_now')">@lang('transportation/main.book_now')</a>
                        </div>

                        <div class="swiper-slide">
                            <picture>
                                <source srcset="/assets/img/vehicles/vw-crafter.webp" type="image/webp">
                                <img src="/assets/img/vehicles/vw-crafter.png" alt="" title="" width="150" height="150" loading="lazy">
                            </picture>
                            <p>@lang('transportation/main.private_service')</p>
                            <h3>
                                @if(app()->getLocale() == "en")
                                    Large Van or similar
                                @else
                                    Van Grande o Similar
                                @endif
                            </h3>
                            <div class="five">5/5</div>
                            <p>@lang('transportation/main.vehicle_info', ['pax' => 14])</p>
                            <p>@lang('transportation/main.up_to', ['pax' => 14])</p>
                            <p>@lang('transportation/main.price_per_vehicle')</p>
                            @if(app()->getLocale() == "en")
                                <p>$101 USD</p>
                                <p>$78 USD</p>
                            @else
                                <p>$1,926 MXN</p>
                                <p>$1,482 MXN</p>
                            @endif
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49650.22599307236!2d-86.8956468271571!3d21.04200895905294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e81bb49b57809%3A0xe7f7d44da1f07a06!2sAeropuerto%20Internacional%20de%20Canc%C3%BAn!5e1!3m2!1ses-419!2smx!4v1749161667173!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="right">
                        @if(app()->getLocale() == "en")
                            <p>MAP</p>
                            <h2>Cancun Airport Transportation - Map</h2>
                            <p>Familiarize yourself with Cancun International Airport (CUN) and its surrounding areas, where you can easily arrange transportation to your hotel or resort without any hassle.</p>
                            <p>Below, you'll find essential details about the airport's location, shuttle service schedules, trusted transportation providers, and the amenities included in our Cancun airport transfer services.</p>
                            <a href="#top" class="btn" title="Book Now">Book Now</a>
                        @else
                            <p>MAPA</p>
                            <h2>Transporte al Aeropuerto de Cancún - Mapa</h2>
                            <p>Familiaricese con el Aeropuerto Internacional de Cancún (CUN) y sus alrededores, donde podrá organizar fácilmente el transporte a su hotel o resort sin ningún problema.</p>
                            <p>A continuación, encontrará detalles esenciales sobre la ubicación del aeropuerto, los horarios de los servicios de transporte, los proveedores de transporte de confianza y las comodidades incluidas en nuestros servicios de traslado del aeropuerto de Cancún.</p>
                            <a href="#top" class="btn" title="Reservar ahora">Reservar ahora</a>
                        @endif
                        
                        <table class="vertical">
                            <tbody>
                                <tr>
                                    @if(app()->getLocale() == "en")
                                        <th>Cancun Airport Location</th>
                                        <td>Carr. a Aeropuerto Cancún, 77500 Cancún, Q.R, Mx</td>
                                    @else
                                        <th>Ubicación del Aeropuerto de Cancún</th>
                                        <td>Carr. a Aeropuerto Cancún, 77500 Cancún, Q.R, Mx</td>
                                    @endif
                                </tr>
                                <tr>
                                    @if(app()->getLocale() == "en")
                                        <th>Cancun Airport  Schedule</th>
                                        <td>24/7</td>
                                    @else
                                        <th>Horario del Aeropuerto de Cancún</th>
                                        <td>24/7</td>
                                    @endif
                                </tr>
                                <tr>
                                    @if(app()->getLocale() == "en")
                                        <th>Private transportation service available at the Cancun Airport</th>
                                        <td><a title="Sacbe Transfers" href="https://sacbetransfers.com/">Sacbe Transfers</a></td>
                                    @else
                                        <th>Empresa de transporte privado disponible en el Aeropuerto de Cancún</th>
                                        <td><a title="Sacbe Transfers" href="https://sacbetransfers.com/es">Sacbe Transfers</a></td>
                                    @endif
                                </tr>
                                <tr>
                                    @if(app()->getLocale() == "en")
                                        <th>Cancun Airport Transportation Service Amenities</th>
                                        <td>Meet and greet at airport, 24/7 service, private trips, no continuous stops</td>
                                    @else
                                        <th>Servicios de Transporte en el Aeropuerto de Cancún Amenidades</th>
                                        <td>Recibimiento en el aeropuerto, servicio 24/7, viajes privados, sin paradas continuas.</td>
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
                            Cancun Airport Transfers - FAQ's
                        @else
                            Traslados en el Aeropuerto de Cancún - Preguntas Frecuentes
                        @endif
                    </h2>
                    <div class="faq-items">
                        @if(app()->getLocale() == "en")
                            <div>
                                <h3>Do I need to book my Cancun Airport Transfer in advance?</h3>
                                <div>
                                    <p>Yes! We strongly recommend booking your transfer in advance—whether arriving at or departing from Cancun International Airport (CUN) or traveling to other destinations like Playa del Carmen or Tulum. Pre-booking ensures availability and avoids last-minute price surges.</p>
                                </div>
                            </div>
                            <div>
                                <h3>How do I reserve a shuttle service from Cancun Airport?</h3>
                                <div>
                                    <p>Booking is quick and easy:</p>
                                    <ol>
                                        <li>Visit our Transfers Section</li>
                                        <li>Enter your details in the booking form (your information is secure)</li>
                                        <li>Select your transfer type (private, shared, luxury, etc.)</li>
                                        <li>Complete payment</li>
                                        <li>Check your email (including spam folder) for booking confirmation</li>
                                    </ol>
                                </div>
                            </div>
                            <div>
                                <h3>What types of airport transfer options are available in Cancun?</h3>
                                <div>
                                    <p>Travelers can choose from:</p>
                                    <ul>
                                        <li>Private Transfers - Direct, non-stop service to your hotel</li>
                                        <li>Shared Shuttles - Budget-friendly with possible stops</li>
                                        <li>Taxis - Available at the airport with fixed rates</li>
                                        <li>Luxury &amp; VIP Transfers - Premium vehicles with extra comfort</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3>What if my flight is delayed or early?</h3>
                                <div>
                                    <p>Reputable services track flight statuses and adjust pickup times automatically. If your flight is canceled, we’ll try to reschedule, but availability isn’t guaranteed.</p>
                                </div>
                            </div>
                            <div>
                                <h3>Are child seats available for airport transfers?</h3>
                                <div>
                                    <p>Yes! Most services provide free child seats (one per booking). Additional seats may require a small fee—please specify your child’s age/weight when booking.</p>
                                </div>
                            </div>
                            <div>
                                <h3>How much does a transfers from Cancun Airport cost?</h3>
                                <div>
                                    <p>Taxi fares are fixed by zone:</p>
                                    <ul>
                                        <li>Cancun Airport to Hotel Zone: $29.99 USD</li>
                                        <li>Cancun Airport to Playa del Carmen: $69.99 USD</li>
                                        <li>Cancun Airport to Tulum: $127 USD</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3>Is it safe to take a taxi from Cancun Airport?</h3>
                                <div>
                                    <p>Taxis are generally safe, but pre-booking a private transfer is recommended to avoid overcharging and ensure a smooth ride.</p>
                                </div>
                            </div>
                            <div>
                                <h3>Can I use Uber at Cancun Airport?</h3>
                                <div>
                                    <p>Uber operates in Cancun, but airport pickups are restricted. You may need to walk outside the terminal to meet your driver—inconvenient with luggage.</p>
                                </div>
                            </div>
                            <div>
                                <h3>What payment methods are accepted?</h3>
                                <div>
                                    <p>Most services accept:</p>
                                    <ul>
                                        <li>Credit/debit cards (online booking)</li>
                                        <li>Confirm payment options with your provider in advance.</li>
                                    </ul>
                                </div>
                            </div>
                        @else
                            <div>
                                <h3>¿Necesito reservar mi traslado del aeropuerto con anticipación?</h3>
                                <div>
                                    <p>¡Sí! Recomendamos encarecidamente reservar tu traslado con anticipación, ya sea al llegar o salir del Aeropuerto Internacional de Cancún (CUN) o si viajas a otros destinos como Playa del Carmen o Tulum. Reservar con tiempo garantiza disponibilidad y evita aumentos de último momento.</p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Cómo reservar un servicio de transporte desde el aeropuerto de Cancún?</h3>
                                <div>
                                    <p>El proceso es rápido y sencillo:</p>
                                    <ol>
                                        <li>Visita nuestra sección de Traslados</li>
                                        <li>Ingresa tus datos en el formulario (tu información está protegida)</li>
                                        <li>Selecciona el tipo de traslado (privado, compartido, de lujo, etc.)</li>
                                        <li>Completa el pago</li>
                                        <li>Revisa tu correo (incluida la bandeja de spam) para confirmar tu reservación</li>
                                    </ol>
                                </div>
                            </div>
                            <div>
                                <h3>¿Qué tipos de traslados están disponibles en Cancún?</h3>
                                <div>
                                    <p>Los viajeros pueden elegir entre:</p>
                                    <ul>
                                        <li>Traslados privados: Servicio directo sin paradas a tu hotel</li>
                                        <li>Transporte compartido: Opción económica con posibles paradas</li>
                                        <li>Taxis: Disponibles en el aeropuerto con tarifas fijas</li>
                                        <li>Traslados de lujo/VIP: Vehículos premium con mayor comodidad</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3>¿Cómo encuentro a mi conductor en el aeropuerto de Cancún?</h3>
                                <div>
                                    <p>Después de recoger tu equipaje y pasar por aduanas, tu conductor te estará esperando en la zona de llegadas con un cartel con tu nombre o el logo de nuestra empresa.</p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Qué pasa si mi vuelo se retrasa o llega antes?</h3>
                                <div>
                                    <p>Los servicios confiables monitorean el estado de los vuelos y ajustan automáticamente la hora de recogida. Si tu vuelo es cancelado, intentaremos reprogramar, pero la disponibilidad no está garantizada.</p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Hay sillas para niños disponibles en los traslados?</h3>
                                <div>
                                    <p>¡Sí! La mayoría de los servicios incluyen una silla infantil gratuita por reserva. Si necesitas más, puede haber un costo adicional. Especifica la edad/peso de tu niño al reservar.</p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Cuánto cuesta un traslado desde el aeropuerto de Cancún?</h3>
                                <div>
                                    <p>Las tarifas de taxis son fijas por zona:</p>
                                    <ul>
                                        <li>Aeropuerto a Zona Hotelera: $569.81 MXN</li>
                                        <li>Aeropuerto a Playa del Carmen: $1329.81 MXN</li>
                                        <li>Aeropuerto a Tulum: $2546 MXN</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3>¿Es seguro tomar un taxi en el aeropuerto de Cancún?</h3>
                                <div>
                                    <p>Los taxis son generalmente seguros, pero se recomienda reservar un traslado privado para evitar cobros excesivos y garantizar un viaje sin problemas.</p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Puedo usar Uber en el aeropuerto de Cancún?</h3>
                                <div>
                                    <p>Uber opera en Cancún, pero no puede recoger pasajeros dentro del aeropuerto. Tendrás que caminar fuera del terminal, lo que puede ser incómodo con el equipaje.</p>
                                </div>
                            </div>
                            <div>
                                <h3>¿Qué métodos de pago se aceptan?</h3>
                                <div>
                                    <p>La mayoría de los servicios aceptan:</p>
                                    <ul>
                                        <li>Tarjetas de crédito/débito (en reservas online)</li>
                                        <li>Confirma las opciones de pago con tu proveedor antes del viaje.</li>
                                    </ul>
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
        
        @php
            $review = [];
            if(app()->getLocale() == "en"):
                $review['heading'] = "More than <strong>500+ thousand</strong> customers trust Transportation by Cancun Airport";
                $review['subheading'] = "Discover the best destinations in Cancun";
                $review['client'] = "Marina K.";
                $review['comment'] = "Very well signposted and organized...impeccable bathrooms...good attention in general...and the transportation service offered by the airport was excellent. We loved Cancun...";
            else:
                $review['heading'] = "Más de <strong>500+ mil</strong> clientes confían en Transportación por el Aeropuerto de Cancún";
                $review['subheading'] = "Descubre los mejores destinos en Cancún";
                $review['client'] = "Marina K.";
                $review['comment'] = "Muy bien señalizado y organizado...baños impecables...buena atención en general...y el servicio de transportación que ofrece el aeropuerto fue excelente. Nos encanto Cancún...";
            endif;
        @endphp
        <x-reviews :review="$review"/>          
    </main>

    @include('layouts.footer.general')
@endsection