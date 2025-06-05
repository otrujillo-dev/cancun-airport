@extends('layouts.main')

@push("push-top")
    <link href="{{ mix('/assets/css/website/cookies-policy.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/cookies-policy.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
@endpush

@section('content')
    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">        
        <div class="black-background">
            <div class="container">
                <h1>
                    @if(app()->getLocale() == "en")
                        COOKIE POLICY
                    @else
                        POLÍTICA DE COOKIES
                    @endif
                </h1>
            </div>
        </div>
        <div class="container items">
            @if(app()->getLocale() == "en")
                <p>This is the Cookie Policy for Punta Cana Airport, accessible from https://puntacanaairport.com</p>
                <h2>What Are Cookies</h2>
                <p>As is common practice with almost all professional websites this site uses cookies, which are tiny files that are downloaded to your computer, to improve your experience. This page describes what information they gather, how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these cookies from being stored however this may downgrade or ‘break’ certain elements of the sites functionality.</p>

                <h2>How We Use Cookies</h2>
                <p>We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry standard options for disabling cookies without completely disabling the functionality and features they add to this site. It is recommended that you leave on all cookies if you are not sure whether you need them or not in case they are used to provide a service that you use.</p>

                <h2>Disabling Cookies</h2>
                <p>You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for how to do this). Be aware that disabling cookies will affect the functionality of this and many other websites that you visit. Disabling cookies will usually result in also disabling certain functionality and features of the this site. Therefore it is recommended that you do not disable cookies.</p>

                <h2>The Cookies We Set</h2>
                <h3>Account related cookies</h3>
                <p>If you create an account with us then we will use cookies for the management of the signup process and general administration. These cookies will usually be deleted when you log out however in some cases they may remain afterwards to remember your site preferences when logged out.</p>
                <h3>Login related cookies</h3>
                <p>We use cookies when you are logged in so that we can remember this fact. This prevents you from having to log in every single time you visit a new page. These cookies are typically removed or cleared when you log out to ensure that you can only access restricted features and areas when logged in.</p>
                <h3>Site preferences cookies</h3>
                <p>In order to provide you with a great experience on this site we provide the functionality to set your preferences for how this site runs when you use it. In order to remember your preferences we need to set cookies so that this information can be called whenever you interact with a page is affected by your preferences.</p>

                <h2>Third Party Cookies</h2>
                <p>In some special cases we also use cookies provided by trusted third parties. The following section details which third party cookies you might encounter through this site.</p>
                <p>This site uses Google Analytics which is one of the most widespread and trusted analytics solution on the web for helping us to understand how you use the site and ways that we can improve your experience. These cookies may track things such as how long you spend on the site and the pages that you visit so we can continue to produce engaging content. For more information on Google Analytics cookies, see the official Google Analytics page.</p>
                <p>As we sell products it’s important for us to understand statistics about how many of the visitors to our site actually make a purchase and as such this is the kind of data that these cookies will track. This is important to you as it means that we can accurately make business predictions that allow us to monitor our advertising and product costs to ensure the best possible price.</p>
                
                <h2>More Information</h2>
                <p>Hopefully that has clarified things for you and as was previously mentioned if there is something that you aren’t sure whether you need or not it’s usually safer to leave cookies enabled in case it does interact with one of the features you use on our site.</p>
                <p>However if you are still looking for more information then you can contact us through one of our preferred contact methods:</p>
                <p>Email: {{ config('services.email.main') }}</p>
            @else
                <p>Esta es la Política de Cookies de Punta Cana Airport, accesible desde https://puntacanaairport.com</p>
                <h2>¿Qué son las cookies?</h2>
                <p>Como es práctica habitual en casi todos los sitios web profesionales, este sitio utiliza cookies, que son pequeños archivos que se descargan en su ordenador, para mejorar su experiencia. Esta página describe qué información recopilan, cómo la utilizamos y por qué a veces necesitamos almacenar estas cookies. También le explicaremos cómo puede evitar que se almacenen estas cookies, aunque esto puede degradar o «romper» ciertos elementos de la funcionalidad de los sitios web.</p>                

                <h2>Cómo utilizamos las cookies</h2>
                <p>Utilizamos cookies por una variedad de razones que se detallan a continuación. Desafortunadamente, en la mayoría de los casos no hay opciones estándar de la industria para desactivar las cookies sin desactivar completamente la funcionalidad y características que añaden a este sitio. Se recomienda que deje activadas todas las cookies si no está seguro de si las necesita o no en caso de que se utilicen para proporcionar un servicio que usted utilice.</p>                 

                <h2>Desactivar las cookies</h2>
                <p>Puede evitar la instalación de cookies ajustando la configuración de su navegador (consulte la Ayuda de su navegador para saber cómo hacerlo). Tenga en cuenta que desactivar las cookies afectará a la funcionalidad de este y muchos otros sitios web que visite. La desactivación de las cookies suele conllevar también la desactivación de determinadas funciones y características de este sitio. Por lo tanto, se recomienda que no deshabilite las cookies.</p>

                <h2>Las cookies que instalamos</h2>
                <h3>Cookies relacionadas con la cuenta</h3>

                <p>Si crea una cuenta con nosotros, utilizaremos cookies para la gestión del proceso de registro y la administración general. Por lo general, estas cookies se eliminarán cuando cierre la sesión, aunque en algunos casos pueden permanecer después para recordar sus preferencias en el sitio cuando cierre la sesión.</p>
                <h3>Cookies relacionadas con el inicio de sesión</h3>
                
                <h3>Cookies de preferencias del sitio</h3>
                <p>Con el fin de proporcionarle una gran experiencia en este sitio proporcionamos la funcionalidad para establecer sus preferencias sobre cómo funciona este sitio cuando lo utiliza. Con el fin de recordar sus preferencias que necesitamos para establecer cookies para que esta información se puede llamar cada vez que interactúa con una página se ve afectada por sus preferences.</p>

                <h2>Cookies de terceros</h2>
                <p>En algunos casos especiales también utilizamos cookies proporcionadas por terceros de confianza. La siguiente sección detalla qué cookies de terceros puede encontrar a través de este sitio.</p>
                <p>Este sitio utiliza Google Analytics, una de las soluciones analíticas más extendidas y fiables de la web, para ayudarnos a comprender cómo utiliza el sitio y cómo podemos mejorar su experiencia. Estas cookies pueden rastrear cosas como el tiempo que pasa en el sitio y las páginas que visita para que podamos seguir produciendo contenido atractivo. Para obtener más información sobre las cookies de Google Analytics, consulte la página oficial de Google Analytics.</p>
                <p>Como vendemos productos es importante para nosotros entender las estadísticas sobre cuántos de los visitantes de nuestro sitio realmente hacen una compra y, como tal, este es el tipo de datos que estas cookies rastrearán. Esto es importante para usted, ya que significa que podemos hacer predicciones comerciales con precisión que nos permiten controlar nuestros costes de publicidad y productos para asegurar el mejor precio posible.</p>

                <h2>Más Información</h2>
                <p>Esperamos que esto te haya aclarado las cosas y, como se mencionó anteriormente, si hay algo que no estás seguro de si necesitas o no, normalmente es más seguro dejar las cookies habilitadas en caso de que interactúen con alguna de las funciones que utilizas en nuestro sitio.</p> <p>No obstante, si todavía buscas más información, puedes ponerte en contacto con nosotros a través de uno de nuestros métodos de contacto preferidos:</p>
                <p>Sin embargo, si todavía está buscando más información, puede ponerse en contacto con nosotros a través de uno de nuestros métodos de contacto preferidos:</p> 
                <p>Email: {{ config('services.email.main') }}</p>

            @endif            
        </div>
    </main>

    @include('layouts.footer.general')
@endsection