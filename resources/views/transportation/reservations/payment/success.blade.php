@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/transportation/process/success.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/transportation/process/success.min.css') }}" rel="stylesheet">    
@endpush
@push("push-bottom")
    <x-tawk-to.chat/>
    <!-- Event snippet for purchase punta cana conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-16715849430/v-bMCK6Jr4QaENa93qI-',
            'value': 1.0,
            'currency': 'MXN',
            'transaction_id': ''
        });
    </script>
@endpush

@section('content')

    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">

        <div class="container main-items">
            <div class="wrapper">
                <div class="top">
                    <div></div>
                    @if(app()->getLocale() == "en")
                        <h2>Payment successful!</h2>
                        <p>Your payment has been completed</p>
                        <a href="@lang('links.transportation_process_login')" class="btn" title="Go to your reservation">Go to your reservation</a>
                    @else
                        <h2>¡Pago realizado!</h2>
                        <p>Su pago se ha completado</p>
                        <a href="@lang('links.transportation_process_login')" class="btn" title="Ir a la reserva">Ir a la reserva</a>
                    @endif 
                </div>
            </div>
        </main>
    
        @include('layouts.footer.general')
    @endsection