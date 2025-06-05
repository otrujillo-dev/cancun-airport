@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/transportation/process/login.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/transportation/process/login.min.css') }}" rel="stylesheet">    
@endpush
@push("push-bottom")
@endpush

@section('content')

    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">

        <div class="container main-items">
            <div class="wrapper">
                <div class="top">
                    @if(app()->getLocale() == "en")
                        <h1>Find Bookings</h1>
                        <p><strong>Please enter your booking email and code ej: PUJ-PCA-XXX</strong></p>
                        <ul>
                            <li>Find your confirmation email</li>
                            <li>Enter your booking code</li>
                        </ul>
                    @else
                        <h1>Buscar Reservación</h1>
                        <p><strong>Por favor, introduzca su e-mail de reserva y el código ej: PUJ-PCA-XXX</strong></p>
                        <ul>
                            <li>Encuentra tu correo electrónico de confirmación</li>
                            <li>Introduzca su código de reserva</li>
                        </ul>
                    @endif
                    @if(isset( $_GET['code'] ))
                        <div class="error">
                            [{{ $_GET['code'] }}] {{ $_GET['message'] }}
                        </div>
                    @endif
                </div>
                <form class="bottom" action="@lang('links.transportation_process_login')" method="POST">
                    <div>
                        <input type="text" class="form__input" id="booking_code" placeholder="Booking code" name="code" required>
                        <label for="booking_code" class="form__label">
                            @if(app()->getLocale() == "en")
                                Booking code
                            @else
                                Código de reserva
                            @endif
                        <span>*</span></label>
                    </div>
                    <div>
                        <input type="email" class="form__input" id="booking_email" placeholder="Booking email" name="email" required>
                        <label for="booking_email" class="form__label">
                            @if(app()->getLocale() == "en")
                                Booking email
                            @else
                                Correo electrónico de reserva
                            @endif
                        <span>*</span></label>
                    </div>
                    @csrf
                    <button class="btn" type="submit">Search</button>
                </form>
            </div>
        </main>
    
        @include('layouts.footer.general')
    @endsection