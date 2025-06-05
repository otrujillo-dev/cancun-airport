@php 
    use App\Traits\functionsTrait;    
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">        
        <title>{{ $seo['meta']['title'] }}</title>
        <meta name="description" content="{{ $seo['meta']['description'] }}">
        <meta name="keywords" content="{{ $seo['meta']['keywords'] }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="application-name" content="Website">
        <meta name="author" content="Punta Cana Airport">
        @if( config('services.no_follow') == 1 || $seo['nofollow'] == true)
            <meta name="robots" content="noindex,nofollow">
        @else
            <meta name="robots" content="index,follow">
        @endif        
        <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="canonical" href="{{ url()->current() }}">
        <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">
        @if(sizeof($seo['alternate']) > 0)
            @foreach($seo['alternate'] as $key => $value)
                <link rel="alternate" hreflang="{{$key}}" href="{{ url('/') }}{{$value}}">
            @endforeach
        @endif
        
        <link rel="preconnect" href="https://www.googletagmanager.com">
        <link rel="dns-prefetch" href="https://www.googletagmanager.com">

        <meta name="og:url" content="{{ url()->current() }}">
        <meta name="og:type" content="website">
        <meta name="og:title" content="{{ $seo['meta']['title'] }}">
        <meta name="og:description" content="{{ $seo['meta']['description'] }}">
        <meta name="og:image" content="/assets/img/social/facebook.jpg">
        <meta property="og:locale" content="es-MX">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $seo['meta']['title'] }}">
        <meta name="twitter:description" content="{{ $seo['meta']['description'] }}">
        <meta name="twitter:image" content="/assets/img/social/twitter.jpg">

        <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/icon/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="/assets/img/icon/favicon.ico">
        <link rel="manifest" href="/assets/site.webmanifest.json">
        
        <link href="{{ mix('/assets/css/base.min.css') }}" rel="preload" as="style" >
        <link href="{{ mix('/assets/css/base.min.css') }}" rel="stylesheet">        
        <script defer src="{{ mix('/assets/js/base/index.min.js') }}"></script>

        <!-- Start Google ADS Script-->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16715849430"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'AW-16715849430');
        </script>
        <!-- END Google ADS Script-->

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "LocalBusiness",
                "name": "Punta Cana International Airport",
                "priceRange": "$$",
                "description": "Punta Cana International Airport (PUJ) is the busiest and most modern airport in the Dominican Republic, serving as the primary gateway for travelers visiting the country’s world-famous beaches, luxury resorts, and vibrant tourist zones.",
                "image": [
                    "https://puntacanaairport.com/assets/img/logo.jpg"
                ],
                "hasMap": "https://www.google.com/maps/place/Punta+Cana+International+Airport/@18.5623134,-68.3676862,17z/data=!3m1!4b1!4m6!3m5!1s0x8ea892172ce48f89:0x957aa624da170f8c!8m2!3d18.5623134!4d-68.3676862!16zL20vMDdxNTVm?entry=tts&g_ep=EgoyMDI1MDQwOS4wIPu8ASoASAFQAw%3D%3D&skid=c77bca6e-ad14-4119-8519-7f03b0b03396",
                "telephone": "+18099592376",
                "url": "https://puntacanaairport.com",
                "sameAs": [
                    "https://www.facebook.com/PuntaCanaInternationalAirport",
                    "https://www.instagram.com/puntacanaairport/"
                ],
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Carr. Aeropuerto",
                    "addressLocality": "Punta Cana",
                    "addressRegion": "La Altagracia",
                    "postalCode": "23000",
                    "addressCountry": "DO"
                },                    
                "openingHoursSpecification": {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "SUN-MON",
                    "opens": "24 hrs"
                },
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": 18.56232,
                    "longitude": -68.36768
                },                
                "Logo": "https://puntacanaairport.com/assets/img/logo.jpg"
            }
        </script>

        <!-- Hotjar Tracking Code for Punta Cana Airport -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:5099977,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>

        @stack('push-top')
</head>
<body>
    
    @yield('content')
    @stack('push-bottom')
</body>
</html>