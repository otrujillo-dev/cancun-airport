<header>
    <div class="container">
        <div class="header-holder">
            <a href="@lang('links.home')" class="logo" title="Cancun Airport" id="top">
                <img src="/assets/img/logo/logo.svg" alt="Cancun Airport" title="Cancun Airport" width="118" height="45" loading="lazy">                
            </a>
            <nav class="nav">
                <div class="nav-drop">
                    <div class="menu-holder">
                        <div class="left">
                            <a href="@lang('links.home')" class="menu_opener" title="@lang('main.home')">@lang('main.home')</a>
                            <a href="@lang('links.transportation')" class="menu_opener" title="@lang('main.airport_transfers')">@lang('main.airport_transfers')</a>
                            <a href="@lang('links.arrivals')" class="menu_opener" title="@lang('main.arrivals')">@lang('main.arrivals')</a>
                            <a href="@lang('links.departures')" class="menu_opener" title="@lang('main.departures')">@lang('main.departures')</a>
                            <a href="@lang('links.car_rental')" class="menu_opener" title="@lang('main.car_rental')">@lang('main.car_rental')</a>                            
                        </div>
                        @if(false)
                        <div class="right">
                            <a href="tel:{{ App\Traits\GeneralTrait::phone( config('services.phones.MX') ) }}" class="menu_opener" title="Whatsapp">
                                <svg width="20" height="20"><use xlink:href="/assets/img/icons.svg#phone"></use></svg>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone={{ App\Traits\GeneralTrait::phone( config('services.phones.WHATSAPP') ) }}&text=Hello" class="menu_opener" title="Whatsapp">
                                <svg width="20" height="20"><use xlink:href="/assets/img/icons.svg#social-whatsapp"></use></svg>
                            </a>                            
                        </div>
                        @endif
                    </div>
                </div>
                <div class="header-buttons">                    
                    <a href="{{ $link }}" class="btn" title="">                        
                        @if(app()->getLocale() == "es")
                            English
                        @else
                            Español
                        @endif                        
                    </a>
                    <a href="@lang('links.transportation_process_login')" class="btn">@lang('main.my_booking')</a>
                     <button class="btn" id="toggleMenu" title="Cancun Airport Menu">
                        <svg width="20" height="20"><use xlink:href="/assets/img/icons.svg#menu"></use></svg>
                    </button>
                </div>
            </nav>
            <div class="nav-opener">
                <div class="one">
                    @if(app()->getLocale() == "es")
                        <a href="{{ $link }}" class="btn" title="Change language to: English">Change language to: English</a>
                    @else
                        <a href="{{ $link }}" class="btn" title="Cambiar idioma a: Español">Cambiar idioma a: Español</a>
                    @endif
                </div>
                <div class="two">
                    <div>
                        <p><svg width="15" height="15"><use xlink:href="/assets/img/icons.svg#globe"></use></svg> @lang('main.destinations')</p>
                        <div>
                            <a href="@lang('links.home')" class="menu_opener" title="@lang('main.home')">@lang('main.home')</a>
                            <a href="@lang('links.transportation')" class="menu_opener" title="@lang('main.airport_transfers')">@lang('main.airport_transfers')</a>                            
                            <a href="@lang('links.arrivals')" class="menu_opener" title="@lang('main.arrivals')">@lang('main.arrivals')</a>
                            <a href="@lang('links.departures')" class="menu_opener" title="@lang('main.departures')">@lang('main.departures')</a>
                            <a href="@lang('links.car_rental')" class="menu_opener" title="@lang('main.car_rental')">@lang('main.car_rental')</a>  
                        </div>
                    </div>
                    <div>
                        <p><svg width="15" height="15"><use xlink:href="/assets/img/icons.svg#legal"></use></svg> Legal</p>
                        <div>
                            <a href="@lang('links.transportation_terms')" title="@lang('main.terms')">@lang('main.terms')</a>
                            <a href="@lang('links.privacy')" title="@lang('main.privacy')">@lang('main.privacy')</a>
                            <a href="@lang('links.cookies')" title="@lang('main.cookie')">@lang('main.cookie')</a>
                        </div>
                    </div>
                </div>
                <div class="three">
                    <a href="@lang('links.transportation_process_login')" class="btn" title="@lang('main.my_booking')">@lang('main.my_booking')</a>                    
                </div>
            </div>
        </div>
    </div>
</header>