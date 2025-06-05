@extends('layouts.main')

@push("push-top")
    <link href="{{ mix('/assets/css/website/contact.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/contact.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
@endpush

@section('content')
    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">
        <div class="container">
            <div class="wrapper">
                <div class="contact-items">
                    <div class="left">
                        <div class="left-wrapper">
                            <h1>
                                @if(app()->getLocale() == "en")
                                    Contact Us
                                @else
                                    Contáctanos
                                @endif
                            </h1>
                            @if(app()->getLocale() == "en")
                                <a href="javascript:void(Tawk_API.toggle())" class="btn" title="Take me to the help center">Take me to the help center</a>
                            @else
                                <a href="javascript:void(Tawk_API.toggle())" class="btn" title="Llévame al centro de ayuda">Llévame al centro de ayuda</a>
                            @endif
                            <div>
                                @if(app()->getLocale() == "en")
                                    <p><strong>Headquarters</strong></p>
                                    <p>Los Cabos</p>
                                    <p><strong>Do you have any doubts?</strong></p>
                                    <p><a href="tel:{{ App\Traits\GeneralTrait::phone( config('services.phones.MX') ) }}" title="{{ config('services.phones.MX') }}">{{ config('services.phones.MX') }}</a></p>
                                @else
                                    <p><strong>Sede</strong></p>
                                    <p>Los Cabos</p>
                                    <p><strong>¿Tiene alguna duda?</strong></p>
                                    <p><a href="tel:{{ App\Traits\GeneralTrait::phone( config('services.phones.MX') ) }}" title="{{ config('services.phones.MX') }}">{{ config('services.phones.MX') }}</a></p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        @if(app()->getLocale() == "en")
                            <h2>Get support from our team</h2>
                            <div class="chat-content">
                                <div class="chat-content-top">
                                    <h6>Chat with us</h6>
                                    <p>We’ll reply to you in a few minutes.</p>
                                    <p>We are in touch 24/7</p>
                                </div>
                                <div class="chat-content-middle">
                                    <a href="javascript:void(Tawk_API.toggle())" class="btn">
                                        Live chat
                                    </a>
                                </div>
                                <div class="chat-content-bottom">
                                    <h6>Do you have any questions?</h6>
                                    <p>Send an email to customer service.</p>
                                    <p>We’ll reply to you in 24 hours</p>
                                    <a href="mailto:{{ config('services.email.main') }}" target="_blank">{{ config('services.email.main') }}</a>
                                </div>
                            </div>
                        @else
                            <h2>Reciba ayuda de nuestro equipo</h2>
                            <div class="chat-content">
                                <div class="chat-content-top">
                                    <h6>Chatea con nosotros</h6>
                                    <p>Le responderemos en unos minutos.</p>
                                    <p>Estamos en contacto 24/7</p>
                                </div>
                                <div class="chat-content-middle">
                                    <a href="javascript:void(Tawk_API.toggle())" class="btn">
                                        Live chat
                                    </a>
                                </div>
                                <div class="chat-content-bottom">
                                    <h6>¿Tiene alguna otra pregunta?</h6>
                                    <p>Envíenos un correo electrónico.</p>
                                    <p>Te responderemos en 24 horas</p>
                                    <a href="mailto:{{ config('services.email.main') }}" target="_blank">{{ config('services.email.main') }}</a>
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