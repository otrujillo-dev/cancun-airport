@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/tours/index.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/tours/index.min.css') }}" rel="stylesheet">    
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
                            <h1>Official Cancun Excursions by Cancun Airport</h1>
                            <p>Start Your Vacation with the Best Cancun Experiences</p>
                        @else
                            <h1>Actividades recomendadas por el Aeropuerto de Cancún</h1>
                            <p>Inicia tus vacaciones con las mejores experiencias en Cancún</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="container general-items">
            <div class="wrapper">
                <div class="top">
                    @if(app()->getLocale() == "en")
                        <p>Cancun and the Riviera Maya boast some of the most incredible attractions in the world. Among the top-rated experiences—officially verified by Cancun Airport as trusted providers—are the Xcaret Tour, the Tulum &amp; Xel-Há Tour, the Cozumel Tour, and the legendary Chichén Itzá Tour, renowned as one of the greatest adventures of all time. Picture yourself standing before a New 7 Wonder of the World—an unforgettable moment waiting for you!.</p>
                        <p>These exclusive tours, offered by official suppliers, are now available for booking online at special discounted rates. Don’t miss out—secure your tickets today and let the magic of the Mayan Riviera captivate you!</p>
                    @else
                        <p>Cancún y la Riviera Maya albergan algunos de los atractivos más extraordinarios del mundo. Entre las experiencias mejor calificadas -avaladas oficialmente por el Aeropuerto de Cancún como proveedores confiables- destacan el Tour Xcaret, el Tour Tulum &amp; Xel-Há, el Tour Cozumel y el legendario Tour Chichén Itzá, considerado como una de las mayores aventuras de todos los tiempos. Imagina la emoción de encontrarte frente a una Nueva Maravilla del Mundo, un momento verdaderamente inolvidable que te espera.</p>
                        <p>Estos tours exclusivos, ofrecidos por proveedores autorizados, ahora pueden reservarse en línea con tarifas promocionales especiales. No dejes pasar esta oportunidad - asegura tus boletos hoy mismo y permite que la magia de la Riviera Maya te conquiste por completo.</p>
                    @endif                                    
                </div>
                <div class="bottom">
                    @if(app()->getLocale() == "en")
                        <div data-vi-partner-id=P00086830 data-vi-widget-ref=W-bb322568-60b9-4c68-886c-7a9799f85862 ></div>
                        <script async src="https://www.viator.com/orion/partner/widget.js"></script>
                    @else
                        <div data-vi-partner-id=P00086830 data-vi-widget-ref=W-bb322568-60b9-4c68-886c-7a9799f85862 ></div>
                        <script async src="https://www.viator.com/orion/partner/widget.js"></script>
                    @endif
                </div>
            </div>
        </div>

    </main>

    @include('layouts.footer.general')
@endsection