<footer>
    <div class="container">
        <div class="top">
            <div class="logo">
                <img class="logo-header-hidden" src="/assets/img/logo/logo.svg" alt="Punta Cana Airport" title="Punta Cana Airport" loading="lazy" width="130" height="50">
            </div>
            <a href="#top" class="btn" title="@lang('main.go_top')">@lang('main.go_top')</a> 
        </div>
        <div class="middle">
            <div>
                <h2>@lang('main.services')</h2>                
                <a href="@lang('links.transportation')" title="@lang('main.airport_transfers')">@lang('main.airport_transfers')</a>                
                <a href="@lang('links.car_rental')" title="@lang('main.car_rental')">@lang('main.car_rental')</a>
                <a href="@lang('links.airport_parking')" title="@lang('main.airport_parking')">@lang('main.airport_parking')</a>
            </div>
            <div>
                <h2>@lang('main.information')</h2>
                <a href="@lang('links.arrivals')" title="@lang('main.arrivals')">@lang('main.arrivals')</a>
                <a href="@lang('links.departures')" title="@lang('main.departures')">@lang('main.departures')</a>
            </div>
            <div>
                <h2>@lang('main.terminals')</h2>
                <a href="@lang('links.terminals')" title="@lang('main.terminals')">@lang('main.terminals')</a>
                <a href="@lang('links.terminal-a')" title="Terminal A">Terminal A</a>
                <a href="@lang('links.terminal-b')" title="Terminal B">Terminal B</a>
            </div>
            <div>
                <h2>@lang('main.transportation')</h2>
                <a href="@lang('links.transportation_process_login')" title="@lang('main.my_booking')">@lang('main.my_booking')</a>
                <a href="@lang('links.transportation_terms')" title="@lang('main.terms')">@lang('main.terms')</a>                                
                <p>Contact information</p>
                <a href="mailto:{{ config('services.email.main') }}" title="{{ config('services.email.main') }}">{{ config('services.email.main') }}</a>                
            </div>
            <div>
                <h2>Legal</h2>
                <a href="@lang('links.privacy')" title="@lang('main.privacy')">@lang('main.privacy')</a>                
                <a href="@lang('links.cookies')" title="@lang('main.cookie')">@lang('main.cookie')</a>
                <a href="@lang('links.blog')" title="@lang('main.blog')">@lang('main.blog')</a>
            </div>
        </div>
        <div class="bottom">
            <p>{{ date("Y") }} Punta Cana Airport. @lang('main.rights_reserved')</p>
            <div>
                <div>
                    <img src="/assets/img/svg/card-brands/visa.svg" alt="Visa" title="Visa" width="30" height="30" loading="lazy">
                    <img src="/assets/img/svg/card-brands/mastercard.svg" alt="Mastercard" title="Mastercard" width="30" height="30" loading="lazy">
                    <img src="/assets/img/svg/card-brands/amex.svg" alt="AMEX" title="AMEX" width="30" height="30" loading="lazy">
                </div>
                <img src="/assets/img/svg/card-brands/paypal-white.svg" alt="PayPal" title="PayPal" width="60" height="27" loading="lazy">
                <img src="/assets/img/svg/card-brands/stripe-white.svg" alt="Stripe" title="Stripe" width="100" height="48" loading="lazy">
            </div>
        </div>
    </div>
</footer>