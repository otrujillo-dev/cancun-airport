@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/press/index.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/press/index.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
@endpush

@section('content')
    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">

        <div class="container blog-top">
            <div class="wrapper">
                @if(app()->getLocale() == "en")
                    <div class="top">
                        <h1>News About Cancun Airport</h1>
                        <div>
                            <p>Welcome to Cancun International Airport, your gateway to sun, sand, and unforgettable adventures. Find everything you need about flights, top-notch services, and premium amenities. Plan your journey with us and dive into the vibrant beauty of Cancun and the Riviera Maya. Your perfect tropical escape starts here!</p>
                        </div>
                    </div>
                @else
                    <div class="top">
                        <h1>Novedades sobre el Aeropuerto de Cancún</h1>
                        <div>
                            <p>Bienvenido al Aeropuerto Internacional de Cancún, tu puerta de entrada al sol, la arena y aventuras inolvidables. Encuentra aquí todo lo que necesitas sobre vuelos, servicios de primera clase y amenidades premium. Planea tu viaje con nosotros y sumérgete en la vibrante belleza de Cancún y la Riviera Maya. ¡Tu escape tropical perfecto comienza aquí!</p>
                        </div>
                    </div>
                @endif
                <div class="bottom">
                    @if( $categories['status'] )
                        @foreach($categories['data'] as $key => $value)
                            <a href="@lang('links.blog_category', ['slug' => $value['seo']['slug'] ])" title="{{ $value['name'] }}">{{ $value['name'] }}</a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="container blog">
            <div class="wrapper">

                @if( $post['top']['status'] )
                    <div class="top">
                        <a href="@lang('links.blog_post',['category' => $post['top']['data']['fixed_tag']['slug'], 'slug' => $post['top']['data']['seo']['slug']])" title="">                            
                            <img src="{{ \App\Traits\GeneralTrait::makeImageURI( $post['top']['data']['blog_image']['asset']['_ref'] ) }}?w=3840&q=70&fit=clip&auto=format" srcset="{{ \App\Traits\GeneralTrait::makeImageURI( $post['top']['data']['blog_image']['asset']['_ref'] ) }}?w=3840&q=70&fit=clip&auto=format 1x" alt="{{ $post['top']['data']['heading'] }}" title="{{ $post['top']['data']['heading'] }}" loading="lazy" width="2500" height="450">
                        </a>
                        <div class="elements">
                            <h2><a href="@lang('links.blog_post',['category' => $post['top']['data']['fixed_tag']['slug'], 'slug' => $post['top']['data']['seo']['slug']])" title="">{{ $post['top']['data']['heading'] }}</a></h2>
                            <h3><a href="@lang('links.blog_post',['category' => $post['top']['data']['fixed_tag']['slug'], 'slug' => $post['top']['data']['seo']['slug']])" title="">{{ $post['top']['data']['fixed_tag']['name'] }}</a></h3>
                            <p>@lang("blog/main.best_for"): <span>{{ $post['top']['data']['best_for'] }}</span></p>
                            <a href="@lang('links.blog_post',['category' => $post['top']['data']['fixed_tag']['slug'], 'slug' => $post['top']['data']['seo']['slug']])" title="@lang("blog/main.read_more")">@lang("blog/main.read_more")</a>
                        </div>
                    </div>
                @endif
                
                @if( $post['items']['status'] )
                    <div class="middle">
                        @foreach($post['items']['data'] as $key => $value)
                            <a href="@lang('links.blog_post',['category' => $value['fixed_tag']['slug'], 'slug' => $value['seo']['slug']])" title="">
                                <div class="top">
                                    <img src="{{ \App\Traits\GeneralTrait::makeImageURI( $value['blog_image']['asset']['_ref'] ) }}?w=828&q=65&fit=clip&auto=format" srcset="{{ \App\Traits\GeneralTrait::makeImageURI( $value['blog_image']['asset']['_ref'] ) }}?w=640&q=65&fit=clip&auto=format 1x, {{ \App\Traits\GeneralTrait::makeImageURI( $value['blog_image']['asset']['_ref'] ) }}?w=828&q=65&fit=clip&auto=format 2x" alt="{{ $value['fixed_tag']['name'] }}" title="{{ $value['fixed_tag']['name'] }}" loading="lazy" width="414" height="276">
                                </div>
                                <div class="bottom">
                                    <p>{{ $value['fixed_tag']['name'] }}</p>
                                    <h2>{{ $value['heading'] }}</h2>
                                    <p>@lang("blog/main.best_for"): <span>{{ $value['best_for'] }}</span></p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif

                <div class="bottom">
                    @if(app()->getLocale() == "en")
                        <h2>Services</h2>
                        <p>Cancún International Airport (CUN) offers world-class amenities to enhance your travel experience. Enjoy a variety of dining options, from local Mexican flavors to international cuisine, along with duty-free shopping, luxury boutiques, and VIP lounges. Whether you're arriving, departing, or connecting, our facilities are designed for your comfort and convenience.</p>
                        <h2>Plan Your Trip - Discover Cancun</h2>
                        <p>Check real-time flight schedules, explore the airlines serving our airport, and learn about the services available before your trip. We’re here to help you organize every detail, so you can enjoy Cancún’s stunning beaches, vibrant nightlife, and Mayan cultural treasures when you arrive. Destinations, attractions, travel tips, safety, and more.</p>
                        <h2>Contact and More Information</h2>
                        <p>For details on airport facilities, updated flight information, or directions, visit our official website or contact us directly. At Cancún International Airport, we’re committed to making your journey seamless and unforgettable.</p>
                    @else
                        <h2>Servicios</h2>
                        <p>El Aeropuerto Internacional de Cancún (CUN) ofrece instalaciones de clase mundial para mejorar tu experiencia de viaje. Disfruta de variedad de opciones gastronómicas, desde sabores mexicanos hasta cocina internacional, además de compras duty-free, boutiques de lujo y salas VIP. Ya sea que llegues, partas o hagas conexión, nuestras instalaciones están diseñadas para tu comodidad y conveniencia.</p>
                        <h2>Planea tu viaje - Descubre Cancún</h2>
                        <p>Consulta horarios de vuelos en tiempo real, explora las aerolíneas que operan en nuestro aeropuerto y conoce los servicios disponibles antes de tu viaje. Estamos aquí para ayudarte a organizar cada detalle, para que al llegar disfrutes de las playas espectaculares, la vibrante vida nocturna y los tesoros culturales mayas de Cancún. Destinos, atracciones, tips de viaje, seguridad y más. </p>
                        <h2>Contacto y Más Información</h2>
                        <p>Para detalles sobre las instalaciones del aeropuerto, información actualizada de vuelos o indicaciones, visita nuestro sitio web oficial o contáctanos directamente. En el Aeropuerto Internacional de Cancún, estamos comprometidos a hacer tu viaje sin complicaciones e inolvidable.</p>
                    @endif
                </div>
            </div>
        </div>

    </main>

    @include('layouts.footer.general')

@endsection