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
                            <h1>Punta Cana Airport Parking</h1>
                            <p>Punta Cana is one of the most popular vacation destinations, and if you're looking to save time and money, the Punta Cana Airport parking is a convenient and affordable option.</p>
                            <p>The parking lot is located close to the terminals, with 24/7 security to give you peace of mind. There's no need to worry about shuttle services, as the parking areas are within walking distance. Rates are available by the hour or per day, making it a flexible choice whether you&rsquo;re parking short-term or for an extended stay.</p>
                            <p>Payment is simple and can be made at kiosks inside the terminal, ensuring a smooth experience. The Punta Cana Airport parking is ideal for long trips or simply for dropping off and picking up passengers with ease.</p>                        
                            <div>
                                <p><strong>Security 24 hours:</strong> Service every day all year</p>
                                <p><strong>An affordable option:</strong> Prices per hour and per day</p>
                                <p><strong>Parking lots in each terminal:</strong> Easy as that, takes just a few minutes</p>
                            </div>
                        @else
                            <p>Todo lo que debe saber</p>
                            <h1>Estacionamiento del Aeropuerto de Punta Cana</h1>
                            <p>Punta Cana es uno de los destinos vacacionales más populares, y si buscas ahorrar tiempo y dinero, el estacionamiento del Aeropuerto de Punta Cana es una opción conveniente y económica.</p>
                            <p>El estacionamiento está ubicado cerca de las terminales, con vigilancia las 24 horas para tu tranquilidad. No hay necesidad de preocuparse por servicios de transporte, ya que las áreas de estacionamiento están a poca distancia caminando. Las tarifas están disponibles por hora o por día, lo que lo convierte en una opción flexible, ya sea que necesites estacionar por poco tiempo o por una estadía prolongada.</p>
                            <p>El pago es sencillo y puede realizarse en los quioscos dentro de la terminal, garantizando una experiencia sin complicaciones. El estacionamiento del Aeropuerto de Punta Cana es ideal para viajes largos o simplemente para dejar y recoger pasajeros con facilidad.</p>
                            <div>
                                <p><strong>Seguridad 24 horas:</strong> Servicio disponible todos los días del año.</p>
                                <p><strong>Una opción económica:</strong> Precios por hora y por día.</p>
                                <p><strong>Estacionamientos en cada terminal:</strong> Así de fácil, solo toma unos minutos.</p>
                            </div>
                        @endif
                    </div>
                    <div class="right">
                        <div>
                            @if(app()->getLocale() == "en")
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Time Parked:</th>
                                            <th>Rates: (Dominican Pesos)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0-30 Minutes</td>
                                            <td>$50 DOP</td>
                                        </tr>
                                        <tr>
                                            <td>First Day</td>
                                            <td>$750 DOP</td>
                                        </tr>
                                        <tr>
                                            <td>Additional Days</td>
                                            <td>$750 DOP</td>
                                        </tr>
                                        <tr>
                                            <td>Lost Ticket Fee</td>
                                            <td>$750 DOP</td>
                                        </tr>
                                        <tr>
                                            <td>Tire Lock</td>
                                            <td>$1000 DOP</td>
                                        </tr>
                                        <tr>
                                            <td>Damage to the bars</td>
                                            <td>$3500 DOP</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>Prices are in Dominican pesos*</p>
                            @else
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Time Parked:</th>
                                            <th>Rates: (Dominican Pesos)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0-30 Minutos</td>
                                            <td>$50 DOP</td>
                                        </tr>
                                        <tr>
                                            <td>Primer Día</td>
                                            <td>$750 DOP</td>
                                        </tr>
                                        <tr>
                                            <td>Días Adicionales</td>
                                            <td>$750 DOP</td>
                                        </tr>
                                        <tr>
                                            <td>Tasa por Ticket Perdido</td>
                                            <td>$750 DOP</td>
                                        </tr>
                                        <tr>
                                            <td>Bloqueo de neumáticos</td>
                                            <td>$1000 DOP</td>
                                        </tr>
                                        <tr>
                                            <td>Daños a las barras</td>
                                            <td>$3500 DOP</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>Precios en pesos dominicanos*.</p>
                            @endif 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    @include('layouts.footer.general')
@endsection