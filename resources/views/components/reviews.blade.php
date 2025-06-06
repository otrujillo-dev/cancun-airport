<div class="gray-bg">
    <div class="general-reviews">
        <div class="wrapper">
            <div>
                @if(app()->getLocale() == "en")
                    <p>Reviews</p>
                    <h4>
                        @if( isset( $review['heading'] ) )
                            {!! $review['heading'] !!}
                        @else
                            More than <strong>32.5 millions</strong> customers trust <strong>Cancun International Airport</strong>
                        @endif
                    </h4>
                    <p>
                        @if( isset( $review['subheading'] ) )
                            {!! $review['subheading'] !!}
                        @else
                            Discover the best destinations in the Riviera Maya.
                        @endif
                    </p>
                @else
                    <p>Reseñas</p>
                    <h4>Más de <strong>32.5 millones</strong> de pasajeros confían en nosotros</h4>
                    <p>El Aeropuerto Internacional de Cancún es tu puerta de entrada a los mejores destinos de la Riviera Maya.</p>
                @endif
                <div class="review">
                    <div>
                        <picture>
                            <source srcset="/assets/img/reviews/client.webp" type="image/webp">
                            <img src="/assets/img/reviews/client.jpg" alt="Reviews" title="Reviews" width="70" height="70" loading="lazy">
                        </picture>
                        <div>
                            <p>
                                @if( isset( $review['client'] ) )
                                    {!! $review['client'] !!}
                                @else
                                    Ritta C.
                                @endif
                            </p>
                            <p>May 9, {{date("Y")}}</p>
                            <div>4.5/5</div>
                        </div>
                    </div>
                    <p>
                        @if(app()->getLocale() == "en")
                            @if( isset( $review['comment'] ) )
                                {!! $review['comment'] !!}
                            @else
                               Cancun International Airport is one of the most modern and busiest airports in Latin America. It stands out for its efficiency, cleanliness, and a wide variety of services for travelers.
                            @endif
                        @else
                            @if( isset( $review['comment'] ) )
                                {!! $review['comment'] !!}
                            @else
                                El Aeropuerto Internacional de Cancún destaca por su eficiencia, limpieza y amplia variedad de servicios para viajeros.
                            @endif                            
                        @endif
                    </p>
                </div>
                @if(app()->getLocale() == "en")
                    <a href="@lang('links.transportation')" class="btn" title="Need a ride?">Need a ride?</a>
                @else
                    <a href="@lang('links.transportation')" class="btn" title="¿Necesitas que te lleven?">¿Necesitas que te lleven?</a>
                @endif
            </div>
        </div>
    </div>
</div>