@extends('layouts.main')

@push("push-top")
    <link href="{{ mix('/assets/css/website/privacy-policy.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/privacy-policy.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
@endpush

@section('content')
    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">        
        <div class="black-background">
            <div class="container">
                @if(app()->getLocale() == "en")
                    <h1>Cancun Airport Privacy Policy</h1>
                @else
                    <h1>Política de Privacidad del Aeropuerto de Cancún</h1>
                @endif
            </div>
        </div>
        <div class="container items">
            @if(app()->getLocale() == "en")
                <h2>Learn more about our privacy policy</h2>
                <p>
                    Cancun Airport is committed to protecting your privacy. This Privacy Policy describes how we collect, use, disclose and protect your personal information when you use our website and transportation services. In compliance with the
                    Federal Law of Protection of Personal Data Held by Private Parties of Mexico, Cancun Airport is responsible for the processing of your personal data.
                </p>
                <h3>1. Information we collect</h3>
                <ul>
                    <li><strong>Personal Information:</strong> Collect personal information that you provide directly to us, such as your name, email address, phone number, pick-up and delivery address, and payment details.</li>
                    <li><strong>Automatic Information:</strong> Collect information automatically when you use our website, such as your IP address, browser type, pages visited, and the date and time of your visit.</li>
                    <li>
                        <strong>Means of Collection:</strong> The information you voluntarily provide must be truthful. We are not responsible if you provide incorrect or false information. Information is collected and stored when you make a reservation
                        with us online, by telephone, at one of our counters or offices, or by any other means.
                    </li>
                    <li><strong>Additional Sources: </strong>We may also obtain data from telephone, directories, employment services, and social networks, such as first name, last name, telephone, email, and physical address.</li>
                </ul>
                <h3>2. How we use your information</h3>
                <ul>
                    <li><strong>Provision of Services: </strong>Use your personal information to process and manage your reservations, communicate with you about your reservations, and provide you with our transportation services.</li>
                    <li><strong>Service Improvement:</strong> We will use the information collected to improve and personalize your experience on our website and services, analyze trends, and conduct research.</li>
                    <li><strong>Communications:</strong> Use your contact information to send notifications, updates, and promotional communications related to our services. You may opt out of receiving these communications at any time.</li>
                    <li>
                        <strong>Use of Requested Information:</strong> Use your personal information to expedite the vehicle reservation process, provide requested services and products, monitor, update, cancel, notify about new products or services
                        related to those already contracted, modify or confirm the contracted service; for promotional purposes; for financial and credit purposes; to fulfill obligations to our customers; to evaluate the quality of service; and to conduct
                        surveys on preferences and consumer habits.
                    </li>
                </ul>
                <h3>3. Disclosure of Information</h3>
                <ul>
                    <li>
                        <strong>Third-Party Service Providers:</strong> We share your information with third parties who help us operate our website, process payments, and provide our transportation services. These third parties are obligated to protect
                        your personal information.
                    </li>
                    <li>
                        <strong>Legal Compliance:</strong> We will disclose your personal information when necessary to comply with applicable laws, regulations, legal processes, or governmental requests. We may also disclose your information when
                        necessary to safeguard the public interest, pursue justice, or when required by national or international authorities to investigate illegal or fraudulent acts.
                    </li>
                </ul>
                <h3>4. Information Security</h3>
                <p>
                    Implement reasonable security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no data transmission over the Internet or storage system can be guaranteed to be
                    100% secure.
                </p>
                <h3>5. Data Retention</h3>
                <p>Retain your personal information only for as long as necessary to fulfill the purposes described in this Privacy Policy, unless an applicable law requires or permits a longer retention period.</p>
                <h3>6. Your Rights</h3>
                <ul>
                    <li><strong>Access and Correction: </strong>You have the right to access and correct your personal information in our possession.</li>
                    <li><strong>Deletion: </strong>Request the deletion of your personal information, subject to certain legal exceptions.</li>
                    <li><strong>Objection and Restriction:</strong> Object to the processing of your personal information or request the restriction of such processing in certain circumstances.</li>
                </ul>
                <h3>7. Cookies and similar technologies</h3>
                <p>Use cookies and similar technologies to collect information about your use of our website, improve your user experience, and perform analytics. You can manage your cookie preferences through your browser settings.</p>
                <h3>8. Links to other websites</h3>
                <p>
                    Our website <a href="https://cuninternationalairport.com/">https://cuninternationalairport.com/</a> may contain links to other websites that are not operated by us. We are not responsible for the privacy practices of these third-party sites. We encourage
                    you to review the privacy policies of each site you visit.
                </p>
                <h3>9. Changes to this privacy policy</h3>
                <p>
                    <a href="https://cuninternationalairport.com">https://cuninternationalairport.com</a> reserves the right to update this Privacy Policy at any time. We will notify you of any significant changes by posting the new Privacy Policy on our website and
                    updating the effective date.
                </p>
                <h3>10. Contact</h3>
                <ul>
                    <li>If you have any questions or concerns about this Privacy Policy or our privacy practices, you may contact us at:</li>
                </ul>
                <p>
                    <strong>Cancun Airport</strong><br />
                    <strong>Address:</strong> Aeropuerto Internacional de Cancún, Carr. Cancún - Tulum, 77500 Cancún, Q.R.<br />
                    <strong>Mail:</strong> {{ config('services.email.main') }}<br />
                    <strong>Phone: </strong>{{ config('services.phones.MX') }}
                </p>
                <h3>11. National and international data transfer</h3>
                <p>Your personal data may be transferred and/or shared by Cabo Airport Shuttl with business partners, affiliates, suppliers, financial, banking and credit institutions to confirm your reservations and comply with this Privacy Policy.</p>
                <h3>12. Exercising ARCO Rights (Access, Rectification, Cancellation, Opposition)</h3>
                <p>
                    Have the right to request access to your personal data at any time to know their status; rectification in case they are incorrect or outdated; cancellation of the data when you consider that they are not being used for the purposes set
                    forth in this Privacy Notice; or opposition to the processing of your personal data with respect to any of the purposes set forth in this Privacy Notice, clearly stating, with respect to the personal data that concern you.
                </p>
                <h3>13. Right to Revoke your Consent to Data Processing</h3>
                <p>
                    At any time, you may revoke your consent to the processing of your personal data in order for us to stop using them. To exercise this right, you must submit a written request in Spanish to the following email address:
                    {{ config('services.email.main') }}.
                </p>
                <p>
                    <strong>This request must contain:</strong> full name with last name, copy of official identification, e-mail address or physical address designated for notifications, and a contact number. It must clearly describe the personal data
                    with respect to which you wish to exercise any of the ARCO rights.
                </p>
                <p>Within 20 business days of receipt of your revocation request, we will respond to you regarding the merits of your revocation request by emailing the address provided or a letter to the physical address provided.</p>
                <h3>14. Security</h3>
                <p>
                    Understand the importance of information security and the techniques needed to protect it. Protect your data using technical and administrative security measures that reduce the risks of loss, misuse, unauthorized access, disclosure,
                    and alteration. Some of the security measures we use are firewalls and data encryption, physical access controls to our data centers, and authorization controls for access to information. However, no data transmission over the Internet
                    is entirely secure, so we cannot guarantee that the processing of your personal data will be free from damage, loss, alteration, destruction, or unauthorized use, access, or processing.
                </p>
                <p>By using our services, you agree to the terms of this Privacy Policy.</p>
            
            @else
                <h2>Conoce nuestra política de Privacidad</h2>
                <p>
                    Cancun Airport se compromete a proteger tu privacidad. Esta Política de Privacidad describe cómo recopilamos, utilizamos, divulgamos y protegemos tu información personal cuando utilizas nuestro sitio web y servicios de transportación.
                    En cumplimiento con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares de México, Cancun Airport es responsable del tratamiento de tus datos personales.
                </p>
                <h3>1. Información que Recopilamos</h3>
                <ul>
                    <li><strong>Información Personal: </strong>Recopilar información personal que nos proporcionas directamente, como tu nombre, dirección de correo electrónico, número de teléfono, dirección de recogida y entrega, y detalles del pago.</li>
                    <li><strong>Información Automática:</strong> Recopilar información automáticamente cuando utilizas nuestro sitio web, como tu dirección IP, tipo de navegador, páginas visitadas, y la fecha y hora de tu visita.</li>
                    <li>
                        <strong>Medios de Obtención: </strong>La información que proporcionas voluntariamente debe ser veraz. No nos responsabilizamos si proporcionas información incorrecta o falsa. La información se recopila y almacena cuando realizas una
                        reserva con nosotros a través de internet, teléfono, en uno de nuestros mostradores u oficinas, o por cualquier otro medio.
                    </li>
                    <li><strong>Fuentes Adicionales: </strong>También podemos obtener datos de directorios telefónicos, servicios laborales y redes sociales, como nombres, apellidos, teléfono, correo electrónico y dirección física.</li>
                </ul>
                <h3>2. Cómo Utilizamos tu Información</h3>
                <ul>
                    <li><strong>Provisión de Servicios:</strong> Utilizar tu información personal para procesar y gestionar tus reservas, comunicarnos contigo sobre tus reservas, y proporcionarte nuestros servicios de transportación.</li>
                    <li><strong>Mejora del Servicio:</strong> Utilizar la información recopilada para mejorar y personalizar tu experiencia en nuestro sitio web y servicios, analizar tendencias y realizar investigaciones.</li>
                    <li>
                        <strong>Comunicaciones:</strong> Utilizar tu información de contacto para enviarte notificaciones, actualizaciones, y comunicaciones promocionales relacionadas con nuestros servicios. Puedes optar por no recibir estas comunicaciones
                        en cualquier momento.
                    </li>
                    <li>
                        <strong>Uso de la Información Solicitada:</strong> Utilizar tus datos personales para acelerar el proceso de reserva de vehículos, proporcionar los servicios y productos solicitados, monitorear, actualizar, cancelar, notificar sobre
                        nuevos productos o servicios relacionados con los ya contratados, modificar o confirmar el servicio contratado; para fines promocionales; para fines financieros y crediticios; para cumplir con obligaciones hacia nuestros clientes;
                        para evaluar la calidad del servicio; y para realizar encuestas sobre preferencias y hábitos de consumo.
                    </li>
                </ul>
                <h3>3. Divulgación de Información</h3>
                <ul>
                    <li>
                        <strong>Terceros Proveedores de Servicios:</strong> Compartir tu información con terceros que nos ayudan a operar nuestro sitio web, procesar pagos, y proporcionar nuestros servicios de transportación. Estos terceros están obligados
                        a proteger tu información personal.
                    </li>
                    <li>
                        <strong>Cumplimiento Legal:</strong> Divulgar tu información personal cuando sea necesario para cumplir con las leyes aplicables, regulaciones, procesos legales o solicitudes gubernamentales. También podremos divulgar tu información
                        cuando sea necesario para la salvaguarda del interés público o para la persecución de la justicia, o cuando sea requerido por autoridades nacionales o internacionales para investigar actos ilegales o fraudulentos.
                    </li>
                </ul>
                <h3>4. Seguridad de Información</h3>
                <p>
                    Implementar medidas de seguridad razonables para proteger tu información personal contra el acceso no autorizado, la alteración, la divulgación o la destrucción. Sin embargo, ninguna transmisión de datos por Internet o sistema de
                    almacenamiento puede garantizar una seguridad del 100%.
                </p>
                <h3>5. Retención de Datos</h3>
                <p>Retener tu información personal solo durante el tiempo necesario para cumplir con los fines descritos en esta Política de Privacidad, a menos que una ley aplicable requiera o permita un período de retención más prolongado.</p>
                <h3>6. Tus Derechos</h3>
                <ul>
                    <li><strong>Acceso y Corrección:</strong> Tener derecho a acceder y corregir tu información personal en nuestro poder.</li>
                    <li><strong>Eliminación: </strong>Solicitar la eliminación de tu información personal, sujeto a ciertas excepciones legales.</li>
                    <li><strong>Objeción y Restricción: </strong>Objetar el procesamiento de tu información personal o solicitar la restricción de dicho procesamiento en determinadas circunstancias.</li>
                </ul>
                <h3>7. Cookies y Tecnologías Similares</h3>
                <p>
                    Utilizar cookies y tecnologías similares para recopilar información sobre tu uso de nuestro sitio web, mejorar tu experiencia de usuario y realizar análisis. Puedes gestionar tus preferencias de cookies a través de la configuración de
                    tu navegador.
                </p>
                <h3>8. Enlaces a Otros Sitios Web</h3>
                <p>
                    Nuestro sitio web <a href="https://cuninternationalairport.com/">https://cuninternationalairport.com/</a> puede contener enlaces a otros sitios web que no están operados por nosotros. No somos responsables de las prácticas de privacidad de estos sitios
                    de terceros. Te recomendamos que revises las políticas de privacidad de cada sitio que visites.
                </p>
                <h3>9. Cambios a esta Política de Privacidad</h3>
                <p>
                    <a href="https://cuninternationalairport.com">https://cuninternationalairport.com</a> se reserva el derecho de actualizar esta Política de Privacidad en cualquier momento. Notificarte sobre cualquier cambio significativo publicando la nueva Política de
                    Privacidad en nuestro sitio web y actualizando la fecha de entrada en vigor.
                </p>
                <h3>10. Contacto</h3>
                <ul>
                    <li>Si tienes alguna pregunta o inquietud sobre esta Política de Privacidad o nuestras prácticas de privacidad, puedes contactarnos a través de:</li>
                </ul>
                <p></p>
                <p>
                    <strong>Cancun Airport</strong><br />
                    <strong>Dirección:</strong> Aeropuerto Internacional de Cancún, Carr. Cancún - Tulum, 77500 Cancún, Q.R.<br />
                    <strong>Correo electrónico:</strong> {{ config('services.email.main') }}<br />
                    <strong>Teléfono: </strong>{{ config('services.phones.MX') }}
                </p>
                <h3>11. Transferencia de Datos Nacional e Internacional</h3>
                <p>
                    Tus datos personales pueden ser transferidos y/o compartidos por Cabo Airport Shuttl con socios comerciales, afiliados, proveedores, instituciones financieras, bancarias y crediticias para confirmar tus reservaciones y cumplir con esta Política de
                    Privacidad.
                </p>
                <h3>12. Ejercicio de Derechos ARCO (Acceso, Rectificación, Cancelación, Oposición)</h3>
                <p>
                    Tener derecho a solicitar acceso a tus datos personales en cualquier momento para conocer su situación; rectificación en caso de que sean incorrectos o estén desactualizados; cancelación de los datos cuando consideres que no se están
                    utilizando para los fines establecidos en este Aviso de Privacidad; u oposición al tratamiento de tus datos personales con respecto a cualquiera de los fines establecidos en este Aviso de Privacidad, debiendo expresar claramente,
                    respecto de los datos personales que te conciernen.
                </p>
                <h3>13. Derecho a Revocar tu Consentimiento para el Tratamiento de Datos</h3>
                <p>
                    En cualquier momento, puedes revocar el consentimiento otorgado para el tratamiento de tus datos personales, con el propósito de que dejemos de utilizarlos. Para ejercer este derecho, debes presentar una solicitud por escrito en español
                    al siguiente correo electrónico: {{ config('services.email.main') }}.
                </p>
                <p>
                    <strong>Esta solicitud debe contener: </strong>nombre completo con apellidos, copia de identificación oficial, dirección de correo electrónico o dirección física designada para notificaciones y algún número de contacto. Debe describir
                    claramente los datos personales respecto de los cuales deseas ejercer alguno de los derechos ARCO.
                </p>
                <p>
                    Dentro de un plazo de 20 días hábiles desde la recepción de tu solicitud de revocación, te responderemos sobre la procedencia de la misma, mediante un correo electrónico dirigido a la dirección indicada o una carta enviada a la
                    dirección física proporcionada.
                </p>
                <h3>14. Seguridad</h3>
                <p>
                    Entender la importancia de la seguridad de la información y las técnicas necesarias para protegerla. Proteger tus datos utilizando medidas de seguridad técnicas y administrativas que reducen los riesgos de pérdida, mal uso, acceso no
                    autorizado, divulgación y alteración. Algunas de las medidas de seguridad que utilizamos son firewalls y cifrado de datos, controles de acceso físico a nuestros centros de datos, y controles de autorización para el acceso a la
                    información. Sin embargo, ninguna transmisión de datos por Internet es completamente segura, por lo que no podemos garantizar que el procesamiento de tus datos personales estará libre de daño, pérdida, alteración, destrucción o uso,
                    acceso o procesamiento no autorizado.
                </p>
                <p>Al utilizar nuestros servicios, aceptas los términos de esta Política de Privacidad.</p>                
            @endif
        </div>
    </main>

    @include('layouts.footer.general')
@endsection