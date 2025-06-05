@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/transportation/process/error.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/transportation/process/error.min.css') }}" rel="stylesheet">    
@endpush
@push("push-bottom")
    <x-tawk-to.chat/>
@endpush

@section('content')

    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">

        <div class="container main-items">
            <div class="wrapper">
                <div class="top">
                    <div></div>
                    @if(app()->getLocale() == "en")
                        <h2>Payment unsuccessful!</h2>
                        <p>Your payment has not been completed</p>
                        <a href="@lang('links.transportation_process_login')" class="btn" title="Go to your reservation">Go to your reservation</a>
                    @else
                        <h2>¡Pago fallido!</h2>
                        <p>Su pago no se ha completado</p>
                        <a href="@lang('links.transportation_process_login')" class="btn" title="Ir a la reserva">Ir a la reserva</a>
                    @endif                     
                </div>
            </div>
        </main>
    
        @include('layouts.footer.general')
    @endsection