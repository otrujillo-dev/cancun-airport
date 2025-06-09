@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/car-rental/index.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/car-rental/index.min.css') }}" rel="stylesheet">    
@endpush
@push("push-bottom")    
@endpush

@section('content')
    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">
        <div class="main-item-bg">
            <div class="container main-items">
                <div class="wrapper">
                    <div class="top">
                        @if(app()->getLocale() == "en")
                            <p>Search, Compare and Save on</p>
                            <h1>Car Rentals in Cancun Airport</h1>
                            <p>No hidden fees, just easy driving - Rent your car in Cancun today!</p>
                        @else
                            <p>Busque, Compare y Ahorre en</p>
                            <h1>Renta de autos en el Aeropuerto de Cancún</h1>
                            <p>Sin cargos ocultos, solo manejo fácil - ¡Rente su auto en Cancún hoy!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="container booking-container">
            <div class="wrapper">
                <div id="get-a-car-rental">
                    @if(app()->getLocale() == "en")
                        <div><script id="dchwidget" src="https://www.discovercars.com/widget.js?v1" data-dev-env="com" data-location="mexico/cancun" data-lang="en" data-currency="usd" data-utm-source="mapmx" data-utm-medium="widget" data-aff-code="a_aid" data-autocomplete="on" data-style-submit-bg-color="#007ac2" data-style-submit-font-color="#ffffff" data-style-form-bg-color="#fcd34d" data-style-form-font-color="#000000" data-style-submit-text="Search now" data-style-title-color="#000000" data-title-text="Car Rental - Cancun International Airport" async="async" data-style_rounded_corners="on" data-layout_benefits="on" data-layout_description="on" data-layout_description_text="Cheap car rentals at Cancun Airport" data-layout_logo_style="on dark" data-layout_style_form_bg_color="#007ac2" data-layout_title="on"></script></div>
                    @else
                        <div><script id="dchwidget" src="https://www.discovercars.com/widget.js?v1" data-dev-env="com" data-location="mexico/cancun" data-lang="es" data-currency="mxn" data-utm-source="mapmx" data-utm-medium="widget" data-aff-code="a_aid" data-autocomplete="on" data-style-submit-bg-color="#007ac2" data-style-submit-font-color="#ffffff" data-style-form-bg-color="#fcd34d" data-style-form-font-color="#000000" data-style-submit-text="Buscar" data-style-title-color="#000000" data-title-text="Renta de Autos - Aeropuerto Internacional de Cancún" async="async" data-style_rounded_corners="on" data-layout_benefits="on" data-layout_description="on" data-layout_description_text="Ofertas en alquiler de coches baratos en el Aeropuerto de Cancun" data-layout_logo_style="on dark" data-layout_style_form_bg_color="#007ac2" data-layout_title="on"></script></div>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="gray-bg">
            <div class="container general-options">
                <div class="wrapper">
                    <div class="top">
                        @if(app()->getLocale() == "en")
                            <p>Discover</p>
                            <h2>Why Rent a Car in Cancún with Us?</h2>
                        @else
                            <p>Descubra</p>
                            <h2>¿Por qué rentar un auto en Cancún con nosotros?</h2>
                        @endif
                    </div>
                    <div class="bottom">
                        <div>
                            <div>
                                <img src="/assets/img/car-rental/svg/car.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <p>
                                @if(app()->getLocale() == "en")
                                    We have a wide variety of vehicles available for you, from compact cars to spacious SUVs.
                                @else
                                    Tenemos una amplia variedad de vehículos disponibles para usted, desde autos compactos hasta espaciosos SUVs.
                                @endif
                            </p>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/car-rental/svg/house.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <p>
                                @if(app()->getLocale() == "en")
                                    We offer all-inclusive packages with insurance, so you're covered from the moment you book.
                                @else
                                    Ofrecemos paquetes todo incluido con seguro, por lo que estará cubierto desde el momento de la reserva.
                                @endif
                            </p>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/car-rental/svg/callcenter.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Our customer service team is available 24/7 to assist you during your trip.
                                @else
                                    Nuestro equipo de atención al cliente está disponible 24 horas al día, 7 días a la semana, para ayudarle durante su viaje.
                                @endif
                            </p>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/car-rental/svg/car-higlight.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Enjoy 100% flexible reservations—choose the perfect car for your Cancún adventure.
                                @else
                                    Disfrute de reservas 100% flexibles: elija el coche perfecto para su aventura en Cancún.
                                @endif
                            </p>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/car-rental/svg/assistance.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Get exclusive discounts of up to 40% on car rentals in Cancún.
                                @else
                                    Obtenga descuentos exclusivos de hasta el 40% en alquiler de coches en Cancún.
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container vehicles-elements">
            <div class="wrapper">
                <div class="top">
                    @if(app()->getLocale() == "en")
                        <p>From beaches to Hidden Places</p>
                        <h2>Our Car Rentals in Cancun Airport</h2>
                    @else
                        <p>Desde playas hasta Lugares Escondidos</p>
                        <h2>Nuestras Rentas de Autos en Cancun Aeropuerto</h2>
                    @endif
                </div>
                <div class="bottom">
                    
                    <div>
                        <p>$@if(app()->getLocale() == "en") 17 USD @else 335 MXN @endif <sup>@lang('car-rental/index.per_day')</sup></p>
                        <picture>
                            <source srcset="/assets/img/car-rental/vehicles/chevrolet-spark.webp" type="image/webp">
                            <img src="/assets/img/car-rental/vehicles/chevrolet-spark.png" alt="" title="" width="150" height="150" loading="lazy">
                        </picture>
                        <p>@lang('car-rental/index.great_deal')</p>
                        <p>
                            @if(app()->getLocale() == "en")
                                Small or similar
                            @else
                                Pequeño o similar
                            @endif
                        </p>
                        <div>
                            <p>4 @lang('car-rental/index.pax')</p>
                            <p>1-2 @lang('car-rental/index.suitcase')</p>
                        </div>
                        <a href="#get-a-car-rental" class="btn" title="@lang('car-rental/index.view_deal')">@lang('car-rental/index.view_deal')</a>
                    </div>

                    <div>
                        <p>$@if(app()->getLocale() == "en") 18 USD @else 360 MXN @endif <sup>@lang('car-rental/index.per_day')</sup></p>
                        <picture>
                            <source srcset="/assets/img/car-rental/vehicles/nissan-sentra.webp" type="image/webp">
                            <img src="/assets/img/car-rental/vehicles/nissan-sentra.png" alt="" title="" width="150" height="150" loading="lazy">
                        </picture>
                        <p>@lang('car-rental/index.great_deal')</p>
                        <p>
                            @if(app()->getLocale() == "en")
                                Full Size or similar
                            @else
                                Full Size o similar
                            @endif
                        </p>
                        <div>
                            <p>5 @lang('car-rental/index.pax')</p>
                            <p>1-5 @lang('car-rental/index.suitcase')</p>
                        </div>
                        <a href="#get-a-car-rental" class="btn" title="@lang('car-rental/index.view_deal')">@lang('car-rental/index.view_deal')</a>
                    </div>

                    <div>
                        <p>$@if(app()->getLocale() == "en") 20 USD @else 400 MXN @endif <sup>@lang('car-rental/index.per_day')</sup></p>
                        <picture>
                            <source srcset="/assets/img/car-rental/vehicles/suzuki-vitara.webp" type="image/webp">
                            <img src="/assets/img/car-rental/vehicles/suzuki-vitara.png" alt="" title="" width="150" height="150" loading="lazy">
                        </picture>
                        <p>@lang('car-rental/index.great_deal')</p>
                        <p>
                            @if(app()->getLocale() == "en")
                                SUV or similar
                            @else
                                SUV o similar
                            @endif
                        </p>
                        <div>
                            <p>5 @lang('car-rental/index.pax')</p>
                            <p>1-5 @lang('car-rental/index.suitcase')</p>
                        </div>
                        <a href="#get-a-car-rental" class="btn" title="@lang('car-rental/index.view_deal')">@lang('car-rental/index.view_deal')</a>
                    </div>

                    <div>
                        <p>$@if(app()->getLocale() == "en") 107 USD @else 2,100 MXN @endif <sup>@lang('car-rental/index.per_day')</sup></p>
                        <picture>
                            <source srcset="/assets/img/car-rental/vehicles/hyundai-staria.webp" type="image/webp">
                            <img src="/assets/img/car-rental/vehicles/hyundai-staria.png" alt="" title="" width="150" height="150" loading="lazy">
                        </picture>
                        <p>@lang('car-rental/index.great_deal')</p>
                        <p>
                            @if(app()->getLocale() == "en")
                                Vans or similar
                            @else
                                Vans o similar
                            @endif
                        </p>
                        <div>
                            <p>11 @lang('car-rental/index.pax')</p>
                            <p>4 @lang('car-rental/index.suitcase')</p>
                        </div>
                        <a href="#get-a-car-rental" class="btn" title="@lang('car-rental/index.view_deal')">@lang('car-rental/index.view_deal')</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d5361.693445077284!2d-86.87340887914858!3d21.04146117520041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scancun%20airport%20car%20rental!5e1!3m2!1ses-419!2smx!4v1749488218647!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div>
                @if(app()->getLocale() == "en")
                    <h2>Car Rental Locations in Cancun Airport</h2>
                    <h3>Car Rental Cancun Airport</h3>
                    <p>Car Rental Center at Cancun International Airport</p>
                @else
                    <h2>Locaciones de alquiler de autos en el aeropuerto de Cancún</h2>
                    <h3>Renta de Autos en Cancún Aeropuerto</h3>
                    <p>Oficina de Renta de Autos en el Aeropuerto Internacional de Cancún</p>
                @endif
                <div>
                    Aeropuerto Internacional de Cancún, Carr. Cancún - Tulum, 77500 Cancún, Q.R.
                </div>
            </div>
        </div>

        <div class="gray-bg">
            <div class="container higlights-elements">
                <div class="wrapper">
                    <div class="top">
                        @if(app()->getLocale() == "en")
                            <p>Tips for renting a car in Cancun</p>
                            <h2>Best information to rent a car in Cancun</h2>
                        @else
                            <p>Tips para rentar un auto en Cancún</p>
                            <h2>Mejor información para rentar un auto en Cancún</h2>
                        @endif 
                    </div>
                    <div class="middle">
                        @if(app()->getLocale() == "en")
                            <table>
                                <tbody>
                                    <tr>
                                        <th><h3>Most popular agency</h3></th>
                                        <td>Car Rental Cancun Airport</td>
                                    </tr>
                                    <tr>
                                        <th><h3>Type of popular car type</h3></th>
                                        <td>Intermediate</td>
                                    </tr>
                                    <tr>
                                        <th><h3>Average price</h3></th>
                                        <td>$20/day</td>
                                    </tr>
                                    <tr>
                                        <th><h3>Best offer</h3></th>
                                        <td>$17/day</td>
                                    </tr>
                                </tbody>
                            </table>
                        @else
                            <table>
                                <tbody>
                                    <tr>
                                        <th><h3>Agencia más popular</h3></th>
                                        <td>Renta de Autos en Cancún Aeropuerto</td>
                                    </tr>
                                    <tr>
                                        <th><h3>Tipo de Coche más popular</h3></th>
                                        <td>Intermedio</td>
                                    </tr>
                                    <tr>
                                        <th><h3>Precio Promedio</h3></th>
                                        <td>$360 MXN Por Día</td>
                                    </tr>
                                    <tr>
                                        <th><h3>Mejor Oferta</h3></th>
                                        <td>$335 MXN Por Día</td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <table>
                                <caption>
                                    @if(app()->getLocale() == "en")
                                        Price comparison according to how far in advance the reservation is made for Car Rental in Cancun
                                    @else
                                        Comparación de precios según la antelación con la que se realiza la reserva de renta de autos en Cancún
                                    @endif
                                </caption>
                                <tbody>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                90 - 88 days in advance
                                            @else
                                                90 - 88 días de antelación
                                            @endif
                                        </td>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                $40
                                            @else
                                                $335
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                87 - 68 days in advance
                                            @else
                                                87 - 68 días de antelación
                                            @endif
                                        </td>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                $17
                                            @else
                                                $335
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                90 - 88 days in advance
                                            @else
                                                90 - 88 días de antelación
                                            @endif
                                        </td>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                $17
                                            @else
                                                $335
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                               67 - 39 days in advance
                                            @else
                                                67 - 39 días de antelación
                                            @endif
                                        </td>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                $17
                                            @else
                                                $335
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                38 - 29 days in advance
                                            @else
                                                38 - 29 días de antelación
                                            @endif
                                        </td>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                $17
                                            @else
                                                $335
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                28 - 14 days in advance
                                            @else
                                                28 - 14 días de antelación
                                            @endif
                                        </td>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                $17
                                            @else
                                                $335
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                13 - 5 days in advance
                                            @else
                                                13 - 5 días de antelación
                                            @endif
                                        </td>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                $17
                                            @else
                                                $335
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                3 - 0 days in advance
                                            @else
                                                3 - 0 días de antelación
                                            @endif
                                        </td>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                $18
                                            @else
                                                $360
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            @if(app()->getLocale() == "en")
                                <p>Precios en USD*</p>
                            @else
                                <p>Precios en MXN*</p>
                            @endif
                        </div>
                        <div class="right">
                            <table>
                                <caption>
                                    @if(app()->getLocale() == "en")
                                        Best rates per month on Car Rentals in Cancun
                                    @else
                                        Las mejores tarifas por mes en Renta de Autos en Cancun
                                    @endif
                                </caption>
                                <tbody>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                January
                                            @else
                                                Enero
                                            @endif
                                        </td>
                                        <td>$@if(app()->getLocale() == "en") 17 @else 335 @endif </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                February
                                            @else
                                                Febrero
                                            @endif
                                        </td>
                                        <td>$@if(app()->getLocale() == "en") 18 @else 360 @endif </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                March
                                            @else
                                                Marzo
                                            @endif
                                        </td>
                                        <td>$@if(app()->getLocale() == "en") 19 @else 360 @endif </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                April
                                            @else
                                                Abril
                                            @endif
                                        </td>
                                        <td>$@if(app()->getLocale() == "en") 20 @else 400 @endif </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                May
                                            @else
                                                Mayo
                                            @endif
                                        </td>
                                        <td>$@if(app()->getLocale() == "en") 17 @else 335 @endif </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                June
                                            @else
                                                Junio
                                            @endif
                                        </td>
                                        <td>$@if(app()->getLocale() == "en") 18 @else 360 @endif </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                July
                                            @else
                                                Julio
                                            @endif
                                        </td>
                                        <td>$@if(app()->getLocale() == "en") 19 @else 380 @endif </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                August
                                            @else
                                                Augosto
                                            @endif
                                        </td>
                                        <td>$@if(app()->getLocale() == "en") 18 @else 360 @endif </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                September
                                            @else
                                                Septiembre
                                            @endif
                                        </td>
                                        <td>$@if(app()->getLocale() == "en") 17 @else 335 @endif </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                October
                                            @else
                                                Octubre
                                            @endif
                                        </td>
                                        <td>$@if(app()->getLocale() == "en") 18 @else 360 @endif </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                November
                                            @else
                                                Noviembre
                                            @endif
                                        </td>
                                        <td>$@if(app()->getLocale() == "en") 19 @else 380 @endif </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                December
                                            @else
                                                Diciembre
                                            @endif
                                        </td>
                                        <td>$@if(app()->getLocale() == "en") 20 @else 400 @endif </td>
                                    </tr>
                                </tbody>
                            </table>
                            @if(app()->getLocale() == "en")
                                <p>Precios en USD*</p>
                            @else
                                <p>Precios en MXN*</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container top-tips-elements">
            <div class="wrapper">
                <div class="left">
                    @if(app()->getLocale() == "en")
                        <p>Cancun Car Rental Tips</p>
                        <h2>The best tips for renting a car in Cancún</h2>
                    @else
                        <p>Consejos para rentar un auto en Cancún</p>
                        <h2>Los mejores tips para rentar un auto en Cancún</h2>                        
                    @endif
                </div>
                <div class="right">
                    @if(app()->getLocale() == "en")
                        <div>Exploring Cancún is effortless with a rental car. Whether you want to visit nearby attractions or take a road trip along the Riviera Maya, having your vehicle gives you the freedom to travel on your schedule.</div>
                        <div>Cancun International Airport (CUN) has multiple international car rental agencies located in all terminals, making it easy to pick up your car as soon as you arrive.</div>
                        <div>Cancun is famous for its stunning beaches, vibrant nightlife, and rich Mayan culture. Before booking your hotel, check if it offers parking facilities—many resorts in the Hotel Zone provide spaces for guests with rental cars.</div>
                        <div>Peak traffic hours in Cancún are from 7:00 AM to 9:00 AM and 5:00 PM to 7:00 PM, especially along Kukulcán Boulevard in the Hotel Zone. Planning your drives outside these times can help avoid delays.</div>
                        <div>The average cost of renting a car in Cancún is around 17 usd -110 usd per day, depending on the vehicle type. Renting a car is ideal for travelers who want to explore beyond the resorts—visit Tulum, Chichén Itzá, or the cenotes at your own pace.</div>
                        <div>
                            <p>Speed limits in Cancún vary:</p>
                            <ul>
                                <li>40-60 km/h (11-16 m/h) in urban areas</li>
                                <li>80-100 km/h (22-27 m/h) on highways</li>
                                <li>Always follow traffic laws, watch for speed bumps (topes), and drive cautiously, especially at night.</li>
                            </ul>
                        </div>
                    @else
                        <div>Explorar Cancún es muy fácil con un auto rentado. Ya sea que quieras visitar atracciones cercanas o hacer un viaje por la Riviera Maya, tener tu propio vehículo te da la libertad de viajar a tu propio ritmo.</div>
                        <div>El Aeropuerto Internacional de Cancún (CUN) cuenta con varias agencias internacionales de renta de autos ubicadas en todas las terminales, lo que facilita recoger tu auto al llegar.</div>
                        <div>Cancún es famoso por sus impresionantes playas, su vibrante vida nocturna y su rica cultura maya. Antes de reservar tu hotel, verifica si ofrece estacionamiento; muchos resorts en la Zona Hotelera proporcionan espacios para huéspedes con autos rentados.</div>
                        <div>Las horas pico de tráfico en Cancún son de 7:00 AM a 9:00 AM y de 5:00 PM a 7:00 PM, especialmente en el Bulevar Kukulcán, en la Zona Hotelera. Planear tus recorridos fuera de estos horarios puede ayudarte a evitar retrasos.</div>
                        <div>El costo promedio de rentar un auto en Cancún es de aproximadamente $335 MXN a $2200 MXN por día, dependiendo del tipo de vehículo. Renta un auto es ideal para viajeros que quieran explorar más allá de los resorts, como visitar Tulum, Chichén Itzá o los cenotes a su propio ritmo.</div>
                        <div>
                            <p>Los límites de velocidad en Cancún varían:</p>
                            <ul>
                                <li>40-60 km/h en zonas urbanas</li>
                                <li>80-100 km/h en carreteras</li>
                            </ul>
                            <p>Siempre sigue las leyes de tránsito, presta atención a los topes y maneja con precaución, especialmente de noche.</p>
                        </div>
                    @endif
                </div>
            </div>            
        </div>
        
        @php
            $review = [];
            if(app()->getLocale() == "en"):
                $review['heading'] = "More than <strong>190 thousand</strong> customers trust <strong>Cancun Airport</strong> to rent a car.";
                $review['subheading'] = "Find out what our customers say.";
                $review['client'] = "Marina K.";
                $review['comment'] = "An exceptional rental service, very friendly and attentive to the needs of the client, with incredible speed, the vehicle is in perfect condition, impeccably clean without annoying noises or odors with enough space for all the luggage.";
            else:
                $review['heading'] = "Más de <strong>190 mil clientes</strong> confían en <strong>Cancún Aeropuerto</strong> para rentar un auto.";
                $review['subheading'] = "Conozca la opinión de nuestros clientes.";
                $review['client'] = "Marina K.";
                $review['comment'] = "Un servicio de renta excepcional, muy amables y atentos a las necesidades del cliente, con una rapidez increíble, el vehículo en perfectas condiciones, impecablemente limpio sin ruidos ni olores molestos con espacio suficiente para todo el equipaje.";
            endif;
        @endphp
        <x-reviews :review="$review"/>        
    </main>

    @include('layouts.footer.general')
@endsection