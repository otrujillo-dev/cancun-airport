@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/website/airport-parking.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/airport-parking.min.css') }}" rel="stylesheet">    
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
                            <p>Everything you need to know</p>
                            <h1>Cancun Airport Parking</h1>
                            <p>Cancun is one of the world's top vacation destinations, and if you're looking for a hassle-free way to park your car, Cancún International Airport (CUN) offers secure and convenient parking options. Whether you're traveling for a short getaway or an extended trip, the airport’s parking facilities provide flexibility, safety, and easy access to the terminals.</p>
                            <h2>Parking Options at Cancún Airport</h2>
                            <p>Short-Term Parking - Ideal for quick drop-offs and pickups, located steps away from the terminals.</p>
                            <p>Long-Term Parking - Perfect for travelers going on extended trips, with affordable daily rates.</p>
                            <p>Covered Parking - Protects your vehicle from sun and rain for added convenience.</p>
                            <div>
                                <p><strong>24/7 Security :</strong> Monitored parking areas for peace of mind.</p>
                                <p><strong>Walking Distance to Terminals:</strong> No shuttle needed; just a short walk to check-in.</p>
                                <p><strong>Flexible Rates:</strong> Pay by the hour or by the day, depending on your needs.</p>
                                <p><strong>Easy Payment:</strong> Pay at automated kiosks inside the terminal or via mobile options.</p>
                            </div>
                        @else
                            <p>Todo lo que necesita saber</p>
                            <h1>Estacionamiento en el Aeropuerto de Cancún</h1>
                            <p>Cancún es uno de los destinos vacacionales más populares del mundo, y si buscas una forma sencilla de estacionar tu auto, el Aeropuerto Internacional de Cancún (CUN) ofrece opciones de estacionamiento seguras y convenientes. Ya sea que viajes por unos días o por un período más largo, las instalaciones de estacionamiento del aeropuerto brindan flexibilidad, seguridad y fácil acceso a las terminales.</p>
                            <h2>Opciones de Estacionamiento en el Aeropuerto de Cancún</h2>
                            <p>Estacionamiento de corta estancia: Ideal para recoger o dejar pasajeros rápidamente, ubicado a pocos pasos de las terminales.</p>
                            <p>Estacionamiento de larga estancia: Perfecto para viajeros que se ausentan por más tiempo, con tarifas diarias accesibles.</p>
                            <p>Estacionamiento cubierto: Protege tu vehículo del sol y la lluvia para mayor comodidad.</p>
                            <p>Beneficios del Estacionamiento:</p>
                            <div>
                                <p><strong>Vigilancia 24/7:</strong> Áreas de estacionamiento monitoreadas para tu tranquilidad.</p>
                                <p><strong>A poca distancia de las terminales:</strong> No necesitas transporte; solo un corto camino hacia el check-in.</p>
                                <p><strong>Tarifas flexibles:</strong> Paga por hora o por día, según tus necesidades.</p>
                                <p><strong>Pago sencillo:</strong> Realiza tu pago en los kioskos automáticos dentro de la terminal o mediante opciones móviles.</p>
                            </div>
                        @endif
                    </div>
                    <div class="right">
                        <div>
                            @if(app()->getLocale() == "en")
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Rates</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>First hour or fraction</td>
                                            <td>MXN$48</td>
                                        </tr>
                                        <tr>
                                            <td>Fraction of 20 minutes after the first hour</td>
                                            <td>MXN$16</td>
                                        </tr>
                                        <tr>
                                            <td>Maximum rate for 24 hours</td>
                                            <td>MXN$290</td>
                                        </tr>
                                        <tr>
                                            <td>Lost ticket</td>
                                            <td>MXN$290</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p> Prices are in Mexican Pesos*</p>
                            @else
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Descripción</th>
                                            <th>Precios</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Primera hora o fracción</td>
                                            <td>MXN$48</td>
                                        </tr>
                                        <tr>
                                            <td>Fracción de 20 minutos después de la primera hora</td>
                                            <td>MXN$16</td>
                                        </tr>
                                        <tr>
                                            <td>Tarifa máxima durante 24 horas</td>
                                            <td>MXN$290</td>
                                        </tr>
                                        <tr>
                                            <td>Ticket Perdido</td>
                                            <td>MXN$290</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>Precios en pesos mexicanos*.</p>
                            @endif 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container more-information">
            <div class="wrapper">
                <div class="top">
                    @if(app()->getLocale() == "en")
                        <h2>Off-Airport Parking at Cancún International Airport</h2>
                        <p>For travelers seeking a budget-friendly and convenient parking solution, off-site parking near Cancún International Airport (CUN) provides an excellent alternative to on-airport lots. These secure facilities are located just minutes from the terminals, with quick and reliable shuttle services ensuring a smooth connection to your departure gate.</p>
                    @else
                        <h2>Estacionamiento Externo en el Aeropuerto Internacional de Cancún</h2>
                        <p>Para viajeros que buscan una solución económica y conveniente, el estacionamiento externo cerca del Aeropuerto Internacional de Cancún (CUN) ofrece una excelente alternativa a los lotes del aeropuerto. Estas instalaciones seguras se ubican a solo minutos de las terminales, con servicios de transporte rápido y confiable que garantizan una conexión sin problemas hacia tu puerta de embarque.</p>
                    @endif
                </div>
                <div class="bottom">
                    <div class="item">
                        <div>
                            <picture>
                                <source srcset="/assets/img/parking/parkinn.webp" type="image/webp">
                                <img src="/assets/img/home/parkinn.png" alt="Parkinn" title="Parkinn" width="150" height="150" loading="lazy">
                            </picture>
                        </div>
                        <h3>Parkinn</h3>
                        @if(app()->getLocale() == "en")
                            <p>Price: MNX$180 Day</p>
                        @else
                            <p>Precio: MNX$180 Día</p>
                        @endif
                    </div>
                    <div class="item">
                        <div>
                            <picture>
                                <source srcset="/assets/img/parking/ipark.webp" type="image/webp">
                                <img src="/assets/img/home/ipark.png" alt="iPark" title="iPark" width="150" height="150" loading="lazy">
                            </picture>
                        </div>
                        <h3>iPark</h3>
                        @if(app()->getLocale() == "en")
                            <p>Price: MNX$215 Day</p>
                        @else
                            <p>Precio: MNX$215 Día</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    @include('layouts.footer.general')
@endsection