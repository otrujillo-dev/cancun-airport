@extends('layouts.main')

@push("push-top")
    <link href="{{ mix('/assets/css/website/about.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/about.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")
    <script defer src="{{ mix('/assets/js/destinations/index.min.js') }}"></script> 
@endpush

@section('content')
    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">        
        <div class="black-background">
            <div class="container">
                @if(app()->getLocale() == "en")
                    <h1>About US - Cabo Shuttle</h1>
                    <p>The Cabo Shuttle team is a diverse group of professionals making significant advancements in the airport transportation industry</p>
                @else
                    <h1>Sobre Nosotros - Cabo Shuttle</h1>
                    <p>El equipo de Cabo Shuttle es un grupo diverso de profesionales que hacen avances significativos en la industria del transporte terrestre.</p>
                @endif
            </div>
        </div>
        <div class="container main-items">
            <div class="higlights">
                <div class="top">
                    @if(app()->getLocale() == "en")
                        <h2>Operating Since 2014</h2>
                        <p>Over the past 10 years, we have built a strong global network of partners. We are committed to continuously expanding and reaching new destinations around the world.</p>
                    @else
                        <h2>Operando desde 2014</h2>
                        <p>En los últimos 10 años, hemos construido una sólida red global de socios. Estamos comprometidos a ampliar continuamente y llegar a nuevos destinos en todo el mundo.</p>
                    @endif
                </div>
                <div class="bottom">
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Destinations <span>30</span></p>
                        @else
                            <p>Destinos <span>900</span></p>
                        @endif
                    </div>
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Passengers <span>10 000</span></p>
                        @else
                            <p>Pasajeros <span>10 000</span></p>
                        @endif
                    </div>
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Transfers <span>3000</span></p>
                        @else
                            <p>Traslados <span>3000</span></p>
                        @endif
                    </div>
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Countries <span>1</span></p>
                        @else
                            <p>Países <span>1</span></p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="information">
                <div class="left">
                    @if(app()->getLocale() == "en")
                        <h2>What we do in Cancun Airport</h2>
                        <p>Cabo Shuttle is dedicated to helping customers with the search, selection, and planning of airport transfers anywhere.</p>
                        <p>We provide a fixed-rate pricing model and an exceptional airport taxi booking system. Traveling with Cabo Shuttle is more than just a journey; we treat you like a valued guest or long-time friend. Your complete satisfaction is our top priority. We aim to deliver a distinctive taxi experience, ensuring that every ride with Cabo Shuttle is both dependable and comfortable, getting you safely to your destination.</p>
                    @else
                        <h2>Lo que hacemos en Cancun Airport</h2>
                        <p>Cabo Shuttle se dedica a ayudar a los clientes con la búsqueda, selección y planificación de traslados al aeropuerto en cualquier lugar.</p>
                        <p>Ofrecemos un modelo de precios de tarifa fija y un sistema excepcional de reserva de taxis del aeropuerto. Viajar con Cabo Shuttle es algo más que un viaje, te tratamos como un huésped valioso o un amigo de mucho tiempo. Su completa satisfacción es nuestra máxima prioridad. Nuestro objetivo es ofrecer una experiencia de taxi distintiva, asegurando que cada viaje con Cabo Shuttle es a la vez fiable y confortable, que le llevará con seguridad a su destino.</p>
                    @endif
                </div>
                <div class="right">
                    <picture>
                        <source srcset="/assets/img/about/about.webp" type="image/webp">
                        <img src="/assets/img/about/about.jpg" alt="{{ __('home.transfers_in_cancun') }}" title="{{ __('home.transfers_in_cancun') }}" loading="lazy" width="" height="">
                    </picture>  
                </div>
            </div>

            <div class="more-information">
                <div class="left">
                    <picture>
                        <source srcset="/assets/img/about/core-values.webp" type="image/webp">
                        <img src="/assets/img/about/core-values.jpg" alt="{{ __('home.transfers_in_cancun') }}" title="{{ __('home.transfers_in_cancun') }}" loading="lazy" width="" height="">
                    </picture>  
                </div>
                <div class="right">
                    @if(app()->getLocale() == "en")
                        <h2>Vision</h2>
                        <p>Our goal at Cancun Airport is to become a leading force in the global ground transportation industry, offering a comprehensive range of services from budget-friendly to luxury travel. We are dedicated to making online taxi bookings as simple, convenient, and enjoyable as possible through our modern booking system. Our customers can also easily track their journey in real time using our efficient app.</p>
                        <h2>Mission</h2>
                        <p>At Cancun Airport, we are committed to providing operators and drivers with the tools they need to ensure customers experience safe and seamless transfers. We strive to offer travelers a stress-free, efficient, and cost-effective transportation experience. Our booking platform is designed to save users time and money, allowing them to focus on enjoying their trip. We recognize the importance of reliability for our customers, which is why we consistently provide dependable taxi services at competitive prices.</p>
                    @else
                        <h2>Visión</h2>
                        <p>Nuestro objetivo en Cancun Airport es convertirnos en una fuerza líder en la industria global de transporte terrestre, ofreciendo una amplia gama de servicios de presupuesto ajustado a los viajes de lujo. Estamos dedicados a hacer reservas de taxi en línea tan simple, conveniente y agradable como sea posible a través de nuestro moderno sistema de reservas. Nuestros clientes también pueden seguir fácilmente su viaje en tiempo real utilizando nuestra eficaz aplicación.</p>
                        <h2>Misión</h2>
                        <p>En Cancun Airport, estamos comprometidos a proporcionar a los operadores y conductores con las herramientas que necesitan para asegurar que los clientes experimenten traslados seguros y sin problemas. Nos esforzamos por ofrecer a los viajeros una experiencia de transporte libre de estrés, eficiente y rentable. Nuestra plataforma de reservas está diseñada para ahorrar tiempo y dinero a los usuarios, permitiéndoles centrarse en disfrutar de su viaje. Reconocemos la importancia de la fiabilidad para nuestros clientes, por lo que ofrecemos servicios de taxi fiables a precios competitivos.</p>
                    @endif
                </div>
            </div>

            <div class="core-values">
                <div class="top">
                    @if(app()->getLocale() == "en")
                        <h2>Our  Values</h2>
                        <p>In order to be able to continually improve and innovate in a competitive market, we believe it is imperative to base ourselves off of a strong foundation.</p>
                        <p>The six pillars that make up our core values reflect the ground-up approach we take in everything we do.</p>
                    @else
                        <h2>Nuestros valores</h2>
                        <p>Para poder mejorar e innovar continuamente en un mercado competitivo, creemos que es imprescindible partir de una base sólida.</p>
                        <p>Los seis pilares que conforman nuestros valores fundamentales reflejan el enfoque desde la base que adoptamos en todo lo que hacemos.</p>
                    @endif
                </div>
                <div class="bottom">
                    <div>
                        <img src="/assets/img/about/core-values-customer-focus.svg" alt="" title="" loading="lazy" width="45" height="45">
                        @if(app()->getLocale() == "en")
                            <h3>Customer Focus</h3>
                            <p>At Cancun Airport, our clients are at the heart of our success, and we recognize that. To exceed their expectations every time, we understand the importance of delivering unparalleled customer service.</p>
                        @else
                            <h3>Enfoque al Cliente</h3>
                            <p>En Cancun Airport, nuestros clientes están en el corazón de nuestro éxito, y lo reconocemos. Para superar sus expectativas en todo momento, entendemos la importancia de ofrecer un servicio al cliente sin igual.</p>
                        @endif
                    </div>
                    <div>
                        <img src="/assets/img/about/our-core-values-professionalism.svg" alt="" title="" loading="lazy" width="45" height="45">
                        @if(app()->getLocale() == "en")
                            <h3>Professionalism</h3>
                            <p>The Cancun Airport team is made up of dedicated professionals who are committed to continuous improvement and growth. Even in challenging situations, we always strive to deliver exceptional service to our clients, ensuring that they receive the highest level of care, no matter the circumstances.</p>
                        @else
                            <h3>Profesionalismo</h3>
                            <p>El equipo de Cancun Airport está formado por profesionales dedicados que están comprometidos con la mejora continua y el crecimiento. Incluso en situaciones difíciles, siempre nos esforzamos por ofrecer un servicio excepcional a nuestros clientes, asegurando que reciban el más alto nivel de atención, sin importar las circunstancias.</p>
                        @endif
                    </div>
                    <div>
                        <img src="/assets/img/about/our-core-values-teamwork.svg" alt="" title="" loading="lazy" width="45" height="45">
                        @if(app()->getLocale() == "en")
                            <h3>Teamwork</h3>
                            <p>People are our greatest asset. At Cancun Airport, our team thrives on collaboration and innovation. We believe that our high customer satisfaction is not the result of individual efforts but of the collective strength of our team.</p>
                        @else
                            <h3>Trabajo en equipo</h3>
                            <p>Las personas son nuestro mayor activo. En Cancun Airport, nuestro equipo se nutre de la colaboración y la innovación. Creemos que nuestra alta satisfacción del cliente no es el resultado de esfuerzos individuales, sino de la fuerza colectiva de nuestro equipo.</p>
                        @endif
                    </div>
                    <div>
                        <img src="/assets/img/about/our-core-values-reliability.svg" alt="" title="" loading="lazy" width="45" height="45">
                        @if(app()->getLocale() == "en")
                            <h3>Reliability</h3>
                            <p>Trust is built on reliability, and at Cancun Airport, being trusted by our clients is essential. Our reliability is reinforced through the unwavering support we provide to our clients and partners every step of the way. Transparency in our actions fosters a trusting relationship that allows us to flourish.</p>
                        @else
                            <h3>Fiabilidad</h3>
                            <p>La confianza se basa en la fiabilidad, y en Cancun Airport, la confianza de nuestros clientes es esencial. Nuestra fiabilidad se ve reforzada por el apoyo inquebrantable que ofrecemos a nuestros clientes y socios en cada paso del camino. La transparencia en nuestras acciones fomenta una relación de confianza que nos permite prosperar.</p>
                        @endif
                    </div>
                    <div>
                        <img src="/assets/img/about/our-core-values-innovation.svg" alt="" title="" loading="lazy" width="45" height="45">
                        @if(app()->getLocale() == "en")
                            <h3>Innovation</h3>
                            <p>By leveraging innovative booking technology, we ensure that our service remains at the forefront of the industry. We continuously strive to improve our platform, guaranteeing that Cancun Airport remains the ultimate transportation solution in Cabo.</p>
                        @else
                            <h3>Innovación</h3>
                            <p>Al aprovechar la innovadora tecnología de reservas, nos aseguramos de que nuestro servicio se mantenga a la vanguardia del sector. Nos esforzamos continuamente para mejorar nuestra plataforma, garantizando que Cancun Airport siga siendo la mejor solución de transporte en Cabo.</p>
                        @endif
                    </div>
                    <div>
                        <img src="/assets/img/about/our-core-values-passion.svg" alt="" title="" loading="lazy" width="45" height="45">
                        @if(app()->getLocale() == "en")
                            <h3>Passion</h3>
                            <p>Our passion for providing unique, customizable transportation solutions stems from the belief that every part of a journey should be memorable. By ensuring that the start and finish of each trip are tailored to our client's preferences, we make this belief a reality.</p>
                        @else
                            <h3>Pasión</h3>
                            <p>Nuestra pasión por ofrecer soluciones de transporte únicas y personalizables se deriva de la creencia de que cada parte de un viaje debe ser memorable. Al asegurar que el inicio y el final de cada viaje se adapten a las preferencias de nuestros clientes, hacemos de esta creencia una realidad.</p>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </main>

    @include('layouts.footer.general')
@endsection