@php
    $breadcrumbs = [];
    $breadcrumbs[1] = [
        "URL" => config('app.url').__('links.home'),
        "name" => (( app()->getLocale() == "en" )?'Cancun Airport':'Inicio')
    ];
    $breadcrumbs[2] = [            
        "name" => (( app()->getLocale() == "en" )?'Money Exchange':'Cancún Aeropuerto')
    ];    
@endphp
@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/website/money-exchange.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/money-exchange.min.css') }}" rel="stylesheet">    
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
                        <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
                        @if(app()->getLocale() == "en")
                            <p>Everything you need to know</p>
                            <h1>Cancun Airport Money Exchange</h1>
                            <p>The Mexican Peso is the official currency of Mexico, though the US Dollar is widely accepted in many tourist areas, including Cancún and Playa del Carmen. Before you travel, checking the live exchange rate is crucial to ensure you get fair value for your money. Below, you can see a chart with the latest values for major currencies compared to the Mexican Peso.</p>
                            <h2>Tips for  Currency Exchange & Money services</h2>
                            <p>A common priority for visitors is securing the best possible exchange rate for their currency. Some travelers feel more comfortable exchanging money before they leave home, while others find better rates after arriving in Mexico. Your choice may depend on the length of your stay and your preference for carrying cash. It's useful to know that major currency values typically fluctuate less than 1% daily, making the timing less critical. We’ve prepared a few helpful recommendations to assist you in planning your currency exchange for a smooth and enjoyable trip.</p>                            
                        @else
                            <p>Todo lo que necesita saber</p>
                            <h1>Cambio de Divisas en el Aeropuerto de Cancún</h1>
                            <p>El Peso Mexicano es la moneda oficial de M&eacute;xico, aunque el d&oacute;lar estadounidense es ampliamente aceptado en muchas zonas tur&iacute;sticas, incluyendo Canc&uacute;n y Playa del Carmen. Antes de viajar, es crucial verificar el tipo de cambio en tiempo real para asegurarte de obtener un valor justo por tu dinero. A continuaci&oacute;n, puedes ver una gr&aacute;fica con los &uacute;ltimos valores de las principales monedas comparadas con el Peso Mexicano.</p>
                            <h2>Consejos para el Cambio de Divisas y Servicios Monetarios</h2>
                            <p>Una prioridad com&uacute;n para los visitantes es conseguir el mejor tipo de cambio posible para su moneda. Algunos viajeros se sienten m&aacute;s c&oacute;modos cambiando dinero antes de salir de su pa&iacute;s, mientras que otros encuentran mejores tasas al llegar a M&eacute;xico. Tu elecci&oacute;n puede depender de la duraci&oacute;n de tu estancia y de tu preferencia por llevar efectivo. Es &uacute;til saber que los valores de las principales monedas generalmente fluct&uacute;an menos del 1% diariamente, lo que hace que el momento del cambio sea menos cr&iacute;tico. Hemos preparado algunas recomendaciones &uacute;tiles para ayudarte a planificar el cambio de divisas para un viaje sin contratiempos y agradable.</p>
                        @endif
                    </div>
                    <div class="right">
                        <iframe
                            title="fx"
                            src="https://wise.com/gb/currency-converter/fx-widget/table?sourceCurrency=USD&targetCurrencies=MXN%2CARS%2CBRL%2CCAD%2CCLP%2CCOP%2CHKD%2CNZD%2CRUB"
                            height=500
                            width=340
                            frameBorder="0"
                            allowtransparency="true"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="container more-information">
            <div class="wrapper">
                <div class="bottom">
                    <div class="item">
                        @if(app()->getLocale() == "en")
                            <h3>Before You Leave Home:</h3>
                            <p>Exchanging a small amount of currency before you travel is a convenient way to cover immediate expenses upon arrival. However, it is not recommended to travel with large sums of cash for security reasons.</p>
                        @else
                            <h3>Antes de Viajar:</h3>
                            <p>Cambiar una pequeña cantidad de moneda antes de viajar es una forma conveniente de cubrir los gastos inmediatos al llegar. Sin embargo, no se recomienda viajar con grandes sumas de efectivo por razones de seguridad.</p>
                        @endif
                    </div>
                    <div class="item">
                        @if(app()->getLocale() == "en")
                            <h3>Using ATMs:</h3>
                            <p>This is often the best option for obtaining a favorable exchange rate without carrying too much cash. ATMs are widely available, but be sure to notify your bank of your travel plans to avoid your card being frozen and to understand any associated fees.</p>
                        @else
                            <h3>Uso de Cajeros Automáticos:</h3>
                            <p>Esta suele ser la mejor opción para obtener un tipo de cambio favorable sin llevar demasiado efectivo. Los cajeros automáticos están ampliamente disponibles, pero asegúrate de notificar a tu banco tus planes de viaje para evitar que tu tarjeta sea bloqueada e infórmate sobre las comisiones asociadas.</p>
                        @endif
                    </div>
                    <div class="item">
                        @if(app()->getLocale() == "en")
                            <h3>Using Credit/Debit Cards:</h3>
                            <p>Cards from major providers (Visa, Mastercard, Amex) are widely accepted for payments at most establishments. This method typically offers good exchange rates and easy transaction tracking.</p>
                        @else
                            <h3>Uso de Tarjetas de Crédito/Débito:</h3>
                            <p>Las tarjetas de los principales proveedores (Visa, Mastercard, Amex) son ampliamente aceptadas para pagos en la mayoría de los establecimientos. Este método suele ofrecer buenos tipos de cambio y un fácil seguimiento de las transacciones.</p>
                        @endif
                    </div>
                    <div class="item">
                        @if(app()->getLocale() == "en")
                            <h3>Exchanging at Airports & Hotels:</h3>
                            <p>While convenient, currency exchange kiosks at airports and hotels often have high fees and less favorable rates. They should only be used as a last resort or for small, immediate amounts.</p>
                        @else
                            <h3>Cambio en Aeropuertos y Hoteles:</h3>
                            <p>Aunque convenientes, las casas de cambio en aeropuertos y hoteles suelen tener comisiones altas y tipos de cambio menos favorables. Solo deben usarse como último recurso o para cantidades pequeñas e inmediatas.</p>
                        @endif
                    </div>
                    <div class="item">
                        @if(app()->getLocale() == "en")
                            <h3>Local Banks & Exchange Houses:</h3>
                            <p>Local banks offer competitive rates but may have transaction limits and require your passport. Specialized exchange houses (casas de cambio) can offer good rates but may be harder to find.</p>
                        @else
                            <h3>Bancos Locales y Casas de Cambio:</h3>
                            <p>Los bancos locales ofrecen tipos de cambio competitivos, pero pueden tener límites de transacción y requerir tu pasaporte. Las casas de cambio especializadas pueden ofrecer buenas tasas, pero pueden ser más difíciles de encontrar.</p>
                        @endif
                    </div>
                    <div class="item">
                        @if(app()->getLocale() == "en")
                            <h3>Popular Banks:</h3>
                            <p>Major banks like BBVA, Banamex, and Santander have a strong presence.</p>
                        @else
                            <h3>Bancos Populares:</h3>
                            <p>Grandes bancos como BBVA, Banamex y Santander tienen una fuerte presencia.</p>
                        @endif
                    </div>
                    <div class="item">
                        @if(app()->getLocale() == "en")
                            <h3>Avoid Foreign Coins:</h3>
                            <p>Bring bills only, as foreign coins cannot be used or exchanged in Mexico.</p>
                        @else
                            <h3>Evita las Monedas Extranjeras:</h3>
                            <p>Lleva solo billetes, ya que las monedas extranjeras no se pueden usar ni cambiar en México.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    @include('layouts.footer.general')
@endsection