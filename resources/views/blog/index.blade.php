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
                        <h1>PRESS - Punta Cana Airport</h1>
                        <div>
                            <p>Located on the east coast of the Dominican Republic, Punta Cana International Airport is your gateway to Caribbean paradise. Known for its efficiency, comfort and world-class services, we are here to make your travel experience unforgettable from the moment you land.</p>
                        </div>
                    </div>
                @else
                    <div class="top">
                        <h1>PRENSA - Aeropuerto de Punta Cana</h1>
                        <div>
                            <p>Ubicado en la costa este de la República Dominicana, el Aeropuerto Internacional de Punta Cana es tu entrada al paraíso caribeño. Conocido por su eficiencia, comodidad y servicios de clase mundial, estamos aquí para hacer que tu experiencia de viaje sea inolvidable desde el momento en que aterrizas.</p>
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
                        <h2>SERVICES</h2>
                        <p>From renowned restaurants to exclusive boutiques and first-class services, Punta Cana International Airport is designed to meet all your needs during your stay. Whether you're passing through or staying for a while, you'll find everything you need to make your trip a pleasant and comfortable experience.</p>
                        <h2>PLAN YOUR TRIP, LEARN MORE ABOUT PUNTA CANA</h2>
                        <p>Learn more about flight schedules, airlines operating at our airport, and services available prior to your arrival. Our goal is to ensure that every detail of your trip is carefully planned so that you can relax and enjoy yourself from the moment you decide to visit us.</p>
                        <p>Destinations, attractions, tips, safety and more.</p>
                        <h2>Contact and More Information</h2>
                        <p>For more details about our facilities, updated flight schedules, and directions, please visit our website or <u>contact us</u> directly. We are here to help you have the perfect travel experience at Punta Cana International Airport.</p>
                    @else
                        <h2>SERVICIOS</h2>
                        <p>Desde restaurantes de renombre hasta boutiques exclusivas y servicios de primer nivel, el Aeropuerto Internacional de Punta Cana está diseñado para satisfacer todas tus necesidades durante tu estancia. Ya sea que estés de paso o te quedes un tiempo, encontrarás todo lo que necesitas para hacer de tu viaje una experiencia placentera y cómoda.</p>
                        <h2>PLANIFICA TU VIAJE, CONOCE MÁS SOBRE PUNTA CANA</h2>
                        <p>Conoce más sobre los horarios de vuelos, aerolíneas que operan en nuestro aeropuerto, y servicios disponibles antes de tu llegada. Nuestro objetivo es asegurar que cada detalle de tu viaje esté cuidadosamente planificado para que puedas relajarte y disfrutar desde el momento en que decidas visitarnos.</p>
                        <p>Destinos, atracciones, consejos, seguridad y mucho más.</p>
                        <h2>Contacto y Más Información</h2>
                        <p>Para más detalles sobre nuestras instalaciones, horarios de vuelo actualizados y cómo llegar, visita nuestro sitio web o <u>contáctanos</u> directamente. Estamos aquí para ayudarte a tener una experiencia de viaje perfecta en el Aeropuerto Internacional de Punta Cana.</p>
                    @endif
                </div>
            </div>
        </div>

    </main>

    @include('layouts.footer.general')

@endsection