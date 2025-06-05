@extends('layouts.main')

@push("push-top")
    <link href="{{ mix('/assets/css/website/reviews.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/reviews.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
@endpush

@section('content')
    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])


    <main class="main">

        <div class="container main-items">
            <div class="wrapper">
                <div class="top">
                    <h1>
                        @if(app()->getLocale() == "en")
                            Our Reviews
                        @else
                            Nuestras reseñas
                        @endif
                    </h1>
                    <div>
                        <div>
                            @if(app()->getLocale() == "en")
                                <p>More than 5,000+ Reviews on Google Maps</p>
                                <p>Trusted by more than 20k customers over the years.</p>
                            @else
                                <p>Más de 5,000 opiniones en Google Maps</p>
                                <p>Con la confianza de más de 20,000 clientes a lo largo de los años.</p>
                            @endif
                        </div>
                        @if(app()->getLocale() == "en")
                            <a href="{{ config('services.social.tripadvisor') }}" class="btn" title="Tell us your experience!">Tell us your experience!</a>
                        @else
                            <a href="{{ config('services.social.tripadvisor') }}" class="btn" title="Cuéntanos sobre tu experiencia!">Cuéntanos sobre tu experiencia!</a>
                        @endif                        
                    </div>
                </div>
                <div class="bottom">
                    <script src="https://static.elfsight.com/platform/platform.js" async></script>
                    <div class="elfsight-app-a0bbb18a-d2a5-4b3f-a279-fb9c539a9ab4" data-elfsight-app-lazy></div>
                </div>
            </div>
        </div>

    </main>

    @include('layouts.footer.general')
@endsection