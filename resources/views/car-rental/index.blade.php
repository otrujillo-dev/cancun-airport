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
                            <h1>Car Rentals in Punta Cana</h1>
                            <p>No hidden fees, just easy driving - Rent your car today!</p>
                        @else
                            <p>Busca, Compara y Ahorra en</p>
                            <h1>Renta de Coches en Punta Cana</h1>
                            <p>Sin cargos ocultos, sólo conducción sencilla: ¡alquile su coche hoy mismo!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="container booking-container">
            <div class="wrapper">
                <div id="get-a-car-rental">
                    @if(app()->getLocale() == "en")
                        <div><script id="dchwidget" src="https://www.discovercars.com/widget.js?v1" data-dev-env="com" data-location="dominican-republic/punta-cana" data-lang="en" data-currency="usd" data-utm-source="mapmx" data-utm-medium="widget" data-aff-code="a_aid" data-autocomplete="on" data-style-submit-bg-color="#007ac2" data-style-submit-font-color="#ffffff" data-style-form-bg-color="#fcd34d" data-style-form-font-color="#000000" data-style-submit-text="Search now" data-style-title-color="#000000" data-title-text="Car Rental at Punta Cana Airport" async="async" data-style_rounded_corners="on" data-layout_benefits="on" data-layout_description="on" data-layout_description_text="We've selected the best deals from our car rental at Punta Cana Airport" data-layout_logo_style="on dark" data-layout_style_form_bg_color="#007ac2" data-layout_title="on"></script></div>
                    @else
                        <div><script id="dchwidget" src="https://www.discovercars.com/widget.js?v1" data-dev-env="com" data-location="dominican-republic/punta-cana" data-lang="es" data-currency="usd" data-utm-source="mapmx" data-utm-medium="widget" data-aff-code="a_aid" data-autocomplete="on" data-style-submit-bg-color="#007ac2" data-style-submit-font-color="#ffffff" data-style-form-bg-color="#fcd34d" data-style-form-font-color="#000000" data-style-submit-text="Buscar" data-style-title-color="#000000" data-title-text="Renta de Autos en Punta Cana Aeropuerto" async="async" data-style_rounded_corners="on" data-layout_benefits="on" data-layout_description="on" data-layout_description_text="Compara ofertas de renta de Carros en el aeropuerto Punta Cana" data-layout_logo_style="on dark" data-layout_style_form_bg_color="#007ac2" data-layout_title="on"></script></div>
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
                            <h2>Why rent a car in Punta Cana with us?</h2>
                        @else
                            <p>Descubre</p>
                            <h2>¿Por qué Alquilar un coche en Punta Cana con nosotros?</h2>
                        @endif
                    </div>
                    <div class="bottom">
                        <div>
                            <div>
                                <img src="/assets/img/car-rental/svg/car.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <p>
                                @if(app()->getLocale() == "en")
                                    We have a wide variety of vehicles available for you.
                                @else
                                    Contamos con una extensa variedad de vehículos disponibles para ti.
                                @endif
                            </p>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/car-rental/svg/house.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <p>
                                @if(app()->getLocale() == "en")
                                    We offer packages with insurance included from the moment of your reservation.
                                @else
                                    Ofrecemos paquetes con seguros incluidos desde el momento de tu reserva.
                                @endif
                            </p>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/car-rental/svg/callcenter.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Service agents available 24 hours a day, 7 days a week.
                                @else
                                    Agentes de servicio disponibles las 24 horas del día, los 7 días de la semana.
                                @endif
                            </p>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/car-rental/svg/car-higlight.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <p>
                                @if(app()->getLocale() == "en")
                                    100% flexible reservations. Choose the car that best suits your needs.
                                @else
                                    Reservas 100% flexibles. Elige el auto que mejor te convenga.
                                @endif
                            </p>
                        </div>
                        <div>
                            <div>
                                <img src="/assets/img/car-rental/svg/assistance.svg" width="25" height="25" alt="" title="" loading="lazy">
                            </div>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Discounts up to 40% on Punta Cana car rentals.
                                @else
                                    Descuentos de hasta 40% en alquiler de coches Punta Cana
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
                        <p>From beaches to hidden gems</p>
                        <h2>Our Car Rental Services in Punta Cana</h2>
                    @else
                        <p>De las playas a las joyas ocultas</p>
                        <h2>Nuestros servicios de Alquiler de Coches en Punta Cana </h2>
                    @endif
                </div>
                <div class="bottom">
                    
                    <div>
                        <p>$97 USD <sup>@lang('car-rental/index.per_day')</sup></p>
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
                        <p>$102 USD <sup>@lang('car-rental/index.per_day')</sup></p>
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
                        <p>$110 USD <sup>@lang('car-rental/index.per_day')</sup></p>
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
                        <p>$142 USD <sup>@lang('car-rental/index.per_day')</sup></p>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3782.259663168033!2d-68.37026112485694!3d18.56232860369164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spunta%20cana%20airport%20car%20rental!5e0!3m2!1ses!2smx!4v1742698260020!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div>
                @if(app()->getLocale() == "en")
                    <h2>Car rental locations in Punta Cana</h2>
                    <h3>Car Rental Punta Cana Airport</h3>
                    <p>Transportation and Aeronautical Control, General Aviation and Air Services.</p>
                @else
                    <h2>Lugares de renta de autos en Punta Cana</h2>
                    <h3>Renta de Autos en Aeropuerto de Punta Cana</h3>
                    <p>Transporte y control aeronáutico, aviación general y servicios aéreos.</p>
                @endif
                <div>
                    Carr. Aeropuerto, Punta Cana 23000, República Dominicana
                </div>
            </div>
        </div>

        <div class="gray-bg">
            <div class="container higlights-elements">
                <div class="wrapper">
                    <div class="top">
                        @if(app()->getLocale() == "en")
                            <p>Tips for renting a car in Punta Cana</p>
                            <h2>What is the best season to rent a car in Punta Cana?</h2>
                        @else
                            <p>Tips para rentar un auto en Punta Cana</p>
                            <h2>¿Cuál es la mejor temporada para rentar un auto en Punta Cana?</h2>
                        @endif 
                    </div>
                    <div class="middle">
                        @if(app()->getLocale() == "en")
                            <table>
                                <tbody>
                                    <tr>
                                        <th><h3>Most popular agency</h3></th>
                                        <td>Punta Cana Airport - Car Rental</td>
                                    </tr>
                                    <tr>
                                        <th><h3>Type of popular car</h3></th>
                                        <td>Economical / Mid size</td>
                                    </tr>
                                    <tr>
                                        <th><h3>Average price</h3></th>
                                        <td>$50/day</td>
                                    </tr>
                                    <tr>
                                        <th><h3>Best offer</h3></th>
                                        <td>$50/day</td>
                                    </tr>
                                </tbody>
                            </table>
                        @else
                            <table>
                                <tbody>
                                    <tr>
                                        <th><h3>Agencia más popular</h3></th>
                                        <td>Punta Cana Airport - Renta de Autos</td>
                                    </tr>
                                    <tr>
                                        <th><h3>Tipo de auto popular</h3></th>
                                        <td>Económico / Mid size</td>
                                    </tr>
                                    <tr>
                                        <th><h3>Precio promedio</h3></th>
                                        <td>$50/día</td>
                                    </tr>
                                    <tr>
                                        <th><h3>Mejor oferta</h3></th>
                                        <td>$50/día</td>
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
                                        Price comparison according to how far in advance the reservation is made.
                                    @else
                                        Comparativa de precios de acuerdo a la antelación con la que se realice la reserva.
                                    @endif
                                </caption>
                                <tbody>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                90 - 88 days in advance
                                            @else
                                                90 - 88 días antes
                                            @endif
                                        </td>
                                        <td>$40</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                87 - 68 days in advance
                                            @else
                                                87 - 68 días antes
                                            @endif
                                        </td>
                                        <td>$40</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                90 - 88 days in advance
                                            @else
                                                90 - 88 días antes
                                            @endif
                                        </td>
                                        <td>$40</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                67 - 39 days in advance
                                            @else
                                                67 - 39 días antes
                                            @endif
                                        </td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                38 - 29 days in advance
                                            @else
                                                38 - 29 días antes
                                            @endif
                                        </td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                28 - 14 days in advance
                                            @else
                                                28 - 14 días antes
                                            @endif
                                        </td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                13 - 5 days in advance
                                            @else
                                                13 - 5 días antes
                                            @endif
                                        </td>
                                        <td>$70</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                3 - 0 days in advance
                                            @else
                                                3 - 0 días antes
                                            @endif
                                        </td>
                                        <td>$80</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="right">
                            <table>
                                <caption>
                                    @if(app()->getLocale() == "en")
                                        Best rates per month on Car Rentals - Punta Cana
                                    @else
                                        Mejores tarifas por mes en Renta de autos - Punta Cana
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
                                        <td>$70</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                February
                                            @else
                                                Febrero
                                            @endif
                                        </td>
                                        <td>$68</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                March
                                            @else
                                                Marzo
                                            @endif
                                        </td>
                                        <td>$70</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                April
                                            @else
                                                Abril
                                            @endif
                                        </td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                May
                                            @else
                                                Mayo
                                            @endif
                                        </td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                June
                                            @else
                                                Junio
                                            @endif
                                        </td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                July
                                            @else
                                                Julio
                                            @endif
                                        </td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                August
                                            @else
                                                Augosto
                                            @endif
                                        </td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                September
                                            @else
                                                Septiembre
                                            @endif
                                        </td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                October
                                            @else
                                                Octubre
                                            @endif
                                        </td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                November
                                            @else
                                                Noviembre
                                            @endif
                                        </td>
                                        <td>$70</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @if(app()->getLocale() == "en")
                                                December
                                            @else
                                                Diciembre
                                            @endif
                                        </td>
                                        <td>$80</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container top-tips-elements">
            <div class="wrapper">
                <div class="left">
                    @if(app()->getLocale() == "en")
                        <p>Punta Cana Car Rental Tips</p>
                        <h2>The best tips for renting a car in Punta Cana</h2>
                    @else
                        <p>Tips de Alquiler de Autos Punta Cana</p>
                        <h2>Los mejores tips para rentar un auto en Punta Cana</h2>                        
                    @endif
                </div>
                <div class="right">
                    @if(app()->getLocale() == "en")
                        <div>Mobility in Punta Cana is really easy. For this, the best option is to rent a car. This option allows you to travel short and long distances in or out of the city, without much worry.</div>
                        <div>Punta Cana International Airport (PUJ) has several international car rental agencies (terminal A).</div>
                        <div>In Punta Cana you will be able to enjoy several beaches, most of the hotels have a view of the beautiful sea. Before booking, we recommend that you check if the hotel you plan to book has parking facilities for guests who wish to rent a car in Punta Cana.</div>
                        <div>Traffic hours in Punta Cana are from 10:00 to 12:00 and from 18:00 to 20:00, when most excursions take place and people move between hotels and other destinations.</div>
                        <div>Renting a car in Punta Cana costs approximately US$50 per day. Renting a car in Punta Cana is ideal for those who plan to move freely within the city.</div>
                        <div>The speed limit in Punta Cana can range from 30 to 100 km/hr. This will depend on the streets and sections you decide to drive on. It is advisable to abide by Punta Cana's traffic laws and drive with caution at all times.</div>
                    @else
                        <div>La movilidad en Punta Cana es realmente sencilla. Para esto, la mejor opción es rentar un coche. Esta opción permite viajar en distancias cortas y largas dentro o fuera de la ciudad, sin mayor preocupación.</div>
                        <div>El aeropuerto Internacional de Punta Cana (PUJ) cuenta con diversas agencias de renta de autos de talla internacional (terminal A).</div>
                        <div>En punta Cana podrás disfrutar de diversas playas, la mayoría de los hoteles gozan de vista al hermoso mar. Antes de reservar, te recomendamos investigar, si en el hotel en el que planeas reservar, disponen de estacionamiento para los huéspedes que deseen alquilar un coche en Punta Cana.</div>
                        <div>Los horarios de tráfico en Punta Cana son de 10:00 a 12:00 y de 18:00 a 20:00, cuando la mayoría de las excursiones se realizan y las personas se trasladan entre hoteles y otros destinos.</div>
                        <div>Rentar un auto en Punta Cana, tiene un costo aproximado de $50 dólares por día. Alquilar un auto en Punta Cana es ideal para los que planean moverse con libertad dentro de la ciudad.</div>
                        <div>El límite de velocidad en punta cana puede ir desde los 30 a los 100 km/hr. Esto dependerá de las calles y secciones en las que decidas conducir. Es recomendable sujetarse a las leyes de tránsito de Punta Cana y conducir con precaución en todo momento.</div>
                    @endif
                </div>
            </div>            
        </div>
        
        @php
            $review = [];
            if(app()->getLocale() == "en"):
                $review['heading'] = "More than <strong>190 thousand</strong> customers trust <strong>Punta Cana Airport to rent a car</strong>.";
                $review['subheading'] = "Find out what our customers say.";
                $review['client'] = "Marina K.";
                $review['comment'] = "We traveled to Punta Cana as a family and decided to rent a car to visit more places, because it is a small city, which was very beneficial for us. I recommend it if it is the first time you visit Punta Cana.";
            else:
                $review['heading'] = "Más de <strong>190 mil</strong> clientes confían en <strong>Punta Cana Airport para rentar un auto</strong>.";
                $review['subheading'] = "Conoce lo que dicen nuestros clientes.";
                $review['client'] = "Marina K.";
                $review['comment'] = "Viajamos a Punta Cana en Familia, decidimos rentar un auto para conocer más lugares, pues es una ciudad muy pequeña, lo cual nos benefició bastante. Lo recomiendo si es la primera vez que visitas Punta Cana.";
            endif;
        @endphp
        <x-reviews :review="$review"/>        
    </main>

    @include('layouts.footer.general')
@endsection