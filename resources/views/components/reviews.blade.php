<div class="gray-bg">
    <div class="container general-reviews">
        <div class="wrapper">
            <div>
                @if(app()->getLocale() == "en")
                    <p>Reviews</p>
                    <h4>
                        @if( isset( $review['heading'] ) )
                            {!! $review['heading'] !!}
                        @else
                            More than <strong>190+ thousand</strong> customers trust <strong>Punta Cana International Airport</strong>
                        @endif
                    </h4>
                    <p>
                        @if( isset( $review['subheading'] ) )
                            {!! $review['subheading'] !!}
                        @else
                            Discover the best destinations in the Dominican Republic.
                        @endif
                    </p>
                @else
                    <p>Reseñas</p>
                    <h4>Más de <strong>190 mil</strong> clientes confían en el <strong>Aeropuerto Internacional de Punta Cana</strong></h4>
                    <p>Descubre los mejores destinos de República Dominicana.</p>
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
                                I traveled to Punta Cana, got the best recommendations from the Punta Cana Airport page, and my experience was much easier.
                            @endif
                        @else
                            @if( isset( $review['comment'] ) )
                                {!! $review['comment'] !!}
                            @else
                                Viajé a Punta Cana, obtuve las mejores recomendaciones de la página del Aeropuerto de Punta Cana y mi experiencia fue mucho más sencilla.
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