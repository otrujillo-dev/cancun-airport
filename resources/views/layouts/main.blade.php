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
        <meta name="author" content="Cancun Airport">
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

        <!-- Google tag (gtag.js) Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-QMX670JL6E"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-QMX670JL6E');
        </script>

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "LocalBusiness",
                "name": "Cancun International Airport",
                "priceRange": "$$",
                "description": "Cancun International Airport (CUN) is the busiest and most modern airport in the México, serving as the primary gateway for travelers visiting the country’s world-famous beaches, luxury resorts, and vibrant tourist zones.",
                "image": [
                    "https://cuninternationalairport.com/assets/img/logo.jpg"
                ],
                "hasMap": "https://www.google.com/maps/place/Aeropuerto+Internacional+de+Canc%C3%BAn/@21.0420101,-86.8801971,2663m/data=!3m2!1e3!4b1!4m6!3m5!1s0x8f4e81bb49b57809:0xe7f7d44da1f07a06!8m2!3d21.0419232!4d-86.8743844!16zL20vMDVma3pz?entry=ttu&g_ep=EgoyMDI1MDYwNC4wIKXMDSoASAFQAw%3D%3D",
                "telephone": "+525552840400",
                "url": "https://cuninternationalairport.com",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Carretera Cancun-Chetumal KM.22",
                    "addressLocality": "Cancún",
                    "addressRegion": "Quintana Roo",
                    "postalCode": "77500",
                    "addressCountry": "MX"
                },                    
                "openingHoursSpecification": {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "SUN-MON",
                    "opens": "24 hrs"
                },
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": 21.0417033,
                    "longitude": -86.8740062
                },                
                "Logo": "https://cuninternationalairport.com/assets/img/logo.jpg"
            }
        </script>

        @stack('push-top')
</head>
<body>
    
    @yield('content')
    @stack('push-bottom')
</body>
</html>