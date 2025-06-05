@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/transportation/process/list.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/transportation/process/list.min.css') }}" rel="stylesheet">    
@endpush
@push("push-bottom")
    <x-tawk-to.chat/>
    <script defer src="{{ mix('/assets/js/bookingbox/transportation.min.js') }}"></script>
    <script>
        const toggle = document.getElementById("toggleModifySearch");
        const modifyBtn = document.getElementById("modifySearch");

        modifyBtn.addEventListener("click", function() {
            if (toggle.style.display === "none" || toggle.style.display === "") {
                toggle.style.display = "block";
            } else {
                toggle.style.display = "none";
            }
        });

        window.addEventListener("resize", function() {
            if (window.innerWidth > 767) {
                toggle.style.display = "block";
            }else{
                toggle.style.display = "none";
            }
        });
    </script>
@endpush

@section('content')
    
    <div class="base-bg"></div>

    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">
        <div class="page-mask">
            <div class="page-mask-header"></div>
            <div class="page-mask-middle"></div>
        </div>

        <div class="container main-items">
            <div class="wrapper">
                <div class="top">
                    <button class="btn" id="modifySearch">
                        @if(app()->getLocale() == "en")
                            Modify search
                        @else
                            Modificar búsqueda
                        @endif
                    </button>
                    <div class="two" id="toggleModifySearch">
                        <x-bookingbox.transportation/>
                    </div>
                </div>
                <div class="bottom">

                    <div class="left">
                        
                        <div class="higlights">
                            <h2>
                                @if(app()->getLocale() == "en")
                                    Why book with us?
                                @else
                                    ¿Por qué reservar con nosotros?
                                @endif
                            </h2>
                            <div>
                                <img src="/assets/img/transportation/process/icon_addservice.png" alt="" title="" width="20" height="20" loading="lazy">
                                <div>
                                    @if(app()->getLocale() == "en")
                                        <p>One price covers everything</p>
                                        <p>No additional fees during your trip</p>
                                    @else
                                        <p>Un precio lo cubre todo</p>
                                        <p>Sin cargos adicionales durante tu viaje</p>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <img src="/assets/img/transportation/process/icon_addservice.png" alt="" title="" width="20" height="20" loading="lazy">
                                <div>
                                    @if(app()->getLocale() == "en")
                                        <p>Flight delayed? Don't worry!</p>
                                        <p>Your driver will be waiting for you</p>                                        
                                    @else
                                        <p>¿Vuelo retrasado? ¡No te preocupes!</p>
                                        <p>Tu conductor te esperará</p>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <img class="icon-img" src="/assets/img/transportation/process/icon_addservice.png" alt="" title="" width="20" height="20" loading="lazy">
                                <div>
                                    @if(app()->getLocale() == "en")
                                        <p>Courtesy included</p>
                                        <p>For your convenience, in all our services we offer a bottle of cold water. A detail designed to make your experience even more enjoyable.</p>
                                    @else
                                        <p>Cortesía incluida</p>
                                        <p>Para tu comodidad, en todos nuestros servicios ofrecemos una botella de agua fría. Un detalle pensado para que tu experiencia sea aún más agradable.</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="right">
                        @if(!isset( $data['error'] ))
                            <div class="info-search">
                                <p>
                                    @if(app()->getLocale() == "en")
                                        Information about your transfer
                                    @else
                                        Información de tu traslado
                                    @endif
                                </p>
                                <p>{{$data['places']['one_way']['init']['name']}} @ {{ date("m/d H:i", strtotime($data['places']['one_way']['init']['time'])) }}</p>
                                <p>
                                    {{$data['places']['one_way']['end']['name']}} 
                                    @if( $data['places']['config']['round_trip'] == true )
                                        @ {{ date("m/d H:i", strtotime($data['places']['round_trip']['init']['time'])) }}
                                    @endif
                            </div>                        
                        @endif
                        
                        @if(!isset( $data['error'] ))
                            <div class="info">
                                <img src="/assets/img/transportation/process/info.png" alt="" title="" width="22" height="22" loading="lazy">
                                <p>
                                    @if(app()->getLocale() == "en")
                                        Service you can count on! You'll receive detailed instructions about your service before your trip.                                        
                                    @else
                                        ¡Cuenta con este servicio! Recibirás instrucciones detalladas sobre tu servicio antes del viaje.                                         
                                    @endif
                                </p>
                            </div>

                            <div class="vehicles">
                                @foreach($data['items'] as $key => $value)
                                    @php
                                        $before = (( $value['price']  * 100 ) / 70);
                                    @endphp
                                    <div class="item">
                                        <div class="one">
                                            <img src="{{ $value['image'] }}" alt="{{ $value['name'] }}" title="{{ $value['name'] }}" width="22" height="22" loading="lazy">
                                        </div>
                                        <div class="two">
                                            <h2>{{ $value['name'] }}</h2>
                                            <p>
                                                @if(app()->getLocale() == "en")
                                                    Travel comfortably in a totally private service, with no waiting time or continuous stops.
                                                @else
                                                    Viaje cómodamente en un servicio totalmente privado, sin tiempo de espera, ni paradas continuas.
                                                @endif
                                            </p>
                                            <ul>
                                                @if(sizeof($value['whats_include']) > 0)
                                                    @foreach($value['whats_include'] as $keyI => $valueI)
                                                        <li>{{ $valueI['text'] }}</li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="three">
                                            <div class="top">
                                                <p>
                                                    @if(app()->getLocale() == "en")
                                                        Price from
                                                    @else
                                                        Precio desde
                                                    @endif
                                                </p>
                                                <p>${{ number_format($before,2) }} {{ $value['currency'] }}</p>
                                                <p>${{ $value['price'] }} {{ $value['currency'] }}</p>
                                                <p>{{ $value['vehicles'] }} 
                                                    @if(app()->getLocale() == "en")
                                                        vehicle(s)
                                                    @else
                                                        vehículo(s)
                                                    @endif
                                                </p>
                                            </div>
                                            <form class="bottom" action="@lang('links.transportation_process_detail')" method="POST">                                                
                                                <input type="hidden" name="id" value="{{ $value['id'] }}">
                                                @csrf
                                                <button class="btn">
                                                    @if(app()->getLocale() == "en")
                                                        Book
                                                    @else
                                                        Reservar
                                                    @endif
                                                </button>
                                                <p>
                                                    @if(app()->getLocale() == "en")
                                                        Includes airport taxes and travel insurance*.
                                                    @else
                                                        Incluye impuestos del Aeropuerto y Seguro de Viajero*
                                                    @endif
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if(isset( $data['error'] ))
                            <div class="not-found-message">
                                <div class="top">
                                    <div class="loader"></div>
                                </div>
                                <div class="bottom">
                                    @if(app()->getLocale() == "en")
                                        <p>Sorry we did not find any results, but don't worry</p>
                                        <p>Chat wit us, we can help you!</p>
                                    @else
                                        <p>Sentimos no haber encontrado ningún resultado, pero no te preocupes</p>
                                        <p>Chatea con nosotros, ¡podemos ayudarle!.</p>
                                    @endif
                                </div>
                            </div>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.footer.general')
@endsection