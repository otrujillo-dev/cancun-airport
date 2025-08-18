@extends('layouts.main')

@push("push-top")
    <link href="{{ mix('/assets/css/website/terms-and-conditions.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/terms-and-conditions.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
@endpush

@section('content')
    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">        
        <div class="black-background">
            <div class="container">
                @if(app()->getLocale() == "en")
                    <h1>Terms and Conditions of Service</h1>
                @else
                    <h1>Terminos y condiciones del servicio</h1>
                @endif
            </div>
        </div>
        <div class="container items">
            @if(app()->getLocale() == "en")
                <p>All services must be cancelled or modified 24 hrs prior to the scheduled time to be eligible for a refund as stipulated in the <strong>Cancellation Policy.</strong></p>
                <p>Cancellations can be requested by mail, call or WhatsApp, where you will receive step-by-step cancellation instructions.</p>
                <p>To request last minute changes it is important to contact a service agent who will proceed with the change according to the availability of our operation.</p>
                <p>Changes must be requested by customers or reservation holders.</p>
                <p>Keep your reservation number for clarifications, cancellations, changes or refund follow-ups.</p>
                <p>Refunds are issued within 7 working days after authorization.</p>
                <p>In case you require a change in the reservation, please contact Customer Service mentioning your reservation number, after the changes make sure that the new reservation voucher contains the correct data.</p>
                <p>Our service includes flight arrival tracking</p>
                <p>It is the customer's responsibility to check all the information on your booking voucher, please read carefully that the information contained is correct and follow the instructions attached to the voucher.</p>
                <p>Changes, cancellations and refunds are evaluated by the Customer Service team, please specify the reason for your cancellation when contacting us.</p>
                <p>Flexibility in our arrival services includes waiting for delayed flights up to 2 hours, waiting for lost luggage and/or immigration problems up to 1 hour.</p>
                <p>The right to service is reserved if denied at specific times: 21:00 hrs - 06:00 hrs.&nbsp;</p>
                <p>Waiting time on departure services: 15 minutes before being marked as No Show.</p>

                <p>Due to heavy traffic, weather conditions and road accidents, whose responsibility is beyond our operation, "The Company" has a maximum waiting time for the unit to reach the customer of 40 minutes after the time agreed on the purchase ticket. After this waiting period, the customer may request a claim for non-compliance of the service.</p>
                <p>The company is not responsible for refunds related to air transportation, lodging, food, entrance fees to tours, activities and/or archaeological sites, any other damage or interest.</p>
                <p>The company has the option to omit reimbursements and instead offer open credits in case of weather conditions, natural disasters, pandemics, wars, total or partial road closures due to strikes, work stoppages or demonstrations, road blockages due to traffic accidents or natural disasters, port and airport closures, Once "the company" has provided the transportation service, it will be considered accepted and used by the client; therefore, this service will not be refundable for any reason.</p>
                <p>The client whose name appears on the purchase ticket will be the only one authorized to present questions, clarifications, cancellations, or request a refund.</p>

                <p><strong>Cancellation Policy</strong></p>
                <p>All cancellation requests must be requested in writing to {{ config('services.email.main') }} with the following content.</p>
                <ul>
                    <li>Reservation ID</li>
                    <li>Client's name</li>
                </ul>
                <p>Reason for cancellation&nbsp;</p>
                <ul>
                    <li>Your service is fully refundable if cancelled 14 days in advance.</li>
                    <li>Your service is refundable with a 25% penalty if cancelled 7 days in advance.</li>
                    <li>Your service is refundable with a 50% penalty if cancelled 1 day in advance.</li>
                </ul>
                <p>Your service is eligible for open credit (non-refundable) by canceling the same day of your service.</p>
                <ul>
                    <li>In case of arrival service the service is cancelled and the open credit is activated within 24 hrs after the confirmed time of arrival*</li>
                    <li>In case of departure services the service is marked as No Show and is not eligible for open credit if not cancelled at least 4 hours in advance</li>
                </ul>
                <p>In case of NO SHOW, no refund will be applied.</p>
                <p>*If the client does not contact us to reschedule the service or confirm the use of the open credit after 24 hrs the reservation is cancelled and marked as No Show (not eligible for refund or open credit).</p>
                <p>No refund will be issued if you are a victim of a scam, please read your service voucher and follow the instructions on it, do not let third parties contact our official telephone numbers for you.</p>
                
                <p><strong>Anti-fraud policy</strong></p>
                <p>For your safety and ours we have developed a new anti-fraud policy in order to support each of our services and offer you the best of us in terms of security and personalization of your service. Therefore it is important that you present your identification at the time of taking your service with us (driver's license, passport, etc.); if you have made a reservation for another person it is important that you send a photo of your identification or a photo of the owner of the credit card with which the payment of the reservation has been made to avoid delays and inconveniences during your service at the destination.</p>
                <p>We know that your security is important so you can consult our privacy policy and use of personal data on our website.</p>

                <p><strong>Lost and Found</strong></p>
                <p>Our drivers are required to help you load and/or unload your luggage from the vehicle however it is the customer's responsibility to verify that their luggage and personal items are with them at all times.</p>
                <p>Our staff is obliged to report forgotten items when performing inspections and cleaning between shifts and services.</p>
                <p>In the event that an item is left behind, the full cost of transportation must be covered in order to return it to the client.</p>
                <p>In some cases there is no charge for forgotten items, please check availability.</p>
            @else
                <p>Todos los servicios deben ser cancelado o modificados 24 hrs antes de lo programado para ser candidato a un reembolso seg&uacute;n lo estipulado en las <strong>Pol&iacute;ticas de Cancelaci&oacute;n</strong></p>
                <p>Las cancelaciones se pueden solicitar por correo, llamada o WhatsApp, donde recibir&aacute; instrucciones de cancelaci&oacute;n paso a paso</p>
                <p>Para solicitar cambios de <strong>&uacute;ltima hora</strong> es importante comunicarse con un agente de servicio quien proceder&aacute; al cambio de <strong>acuerdo a la disponibilidad</strong> de nuestra operaci&oacute;n</p>
                <p>Los cambios deben ser solicitados por los clientes o titulares de las reservas</p>
                <p>Conserve su <strong>n&uacute;mero de reserva</strong> para aclaraciones, cancelaciones, cambios o seguimientos de reembolsos</p>
                <p>Los reembolsos se emiten dentro de los 7 d&iacute;as h&aacute;biles posteriores a la autorizaci&oacute;n</p>
                <p>En caso de requerir un cambio en la reserva comuniquese con el Servicio al Cliente mencionando su n&uacute;mero de reserva, posterior a los cambios aseg&uacute;rese de que el nuevo cup&oacute;n de reserva contenga los datos correctos</p>
                <p>Nuestro servicio incluye seguimiento de vuelos de llegada</p>
                <p>Es responsabilidad del cliente la revisi&oacute;n de todos los datos en su cup&oacute;n de reserva, por favor lea cuidadosamente que la informaci&oacute;n contenida sea correcta y siga las instrucciones anexas en el cup&oacute;n</p>
                <p>Los cambios, cancelaciones y reembolsos son evaluados por el equipo de Servicio al cliente por favor especifique el motivo de su cancelaci&oacute;n cuando se comunique con nosotros</p>
                <p>La flexibilidad en nuestros servicios de llegada incluye espera en vuelos demorados de hasta 2 horas, espera por p&eacute;rdida de equipaje y/o problemas en migraci&oacute;n de hasta 1 hora.</p>
                <p>El derecho al servicio queda reservado de negarse en horarios espec&iacute;ficos: 21:00 hrs - 06:00 hrs</p>
                <p>Tiempo de espera en servicios de <strong>salida</strong>: 15 minutos antes de ser marcado como <strong>No Show</strong></p>

                <p>Ningún reembolso será emitido en caso de ser víctima de estafa, por favor lea su cupón de servicio y siga las indicaciones que vienen en él, no deje que terceras personas se comuniquen por usted a nuestros teléfonos oficiales.</p>
                <p>Debido al tráfico intenso, las condiciones meteorológicas y los accidentes de tráfico, cuya responsabilidad escapa a nuestro control, «la empresa» establece un tiempo máximo de espera para que la unidad llegue al cliente de 40 minutos después de la hora acordada en el ticket de compra. Transcurrido este tiempo de espera, el cliente podrá solicitar una reclamación por incumplimiento del servicio.</p>
                <p>La empresa no se hace responsable de los reembolsos relacionados con el transporte aéreo, transporte marítimo, el alojamiento, la comida, las entradas a excursiones, actividades y/o yacimientos arqueológicos, ni de cualquier otro daño o interés.</p>
                <p>La empresa tiene la opción de omitir los reembolsos y, en su lugar, ofrecer créditos abiertos en caso de condiciones meteorológicas, desastres naturales, pandemias, guerras, cierres totales o parciales de carreteras debido a huelgas, paros laborales o manifestaciones, bloqueos de carreteras debido a accidentes de tráfico o desastres naturales, cierres de puertos y aeropuertos. Una vez que «la empresa» haya prestado el servicio de transporte, se considerará aceptado y utilizado por el cliente; por lo tanto, este servicio no será reembolsable por ningún motivo.</p>
                <p>El cliente cuyo nombre aparece en el ticket de compra será el único autorizado para presentar preguntas, aclaraciones, cancelaciones o solicitar un reembolso.</p>
                
                <p><strong>Pol&iacute;ticas de Cancelaci&oacute;n</strong></p>
                <p>Toda solicitud de cancelaci&oacute;n se debe solicitar por escrito al correo electr&oacute;nico <a href="mailto:{{ config('services.email.main') }}">{{ config('services.email.main') }}</a> con el siguiente contenido.</p>
                <ul>
                    <li>ID de reservaci&oacute;n</li>
                    <li>Nombre del cliente</li>
                </ul>
                <p>Motivo de cancelaci&oacute;n&nbsp;</p>
                <ul>
                    <li>Su servicio es completamente reembolsable cancelando con 14 d&iacute;as de anticipaci&oacute;n</li>
                    <li>Su servicio es reembolsable con penalizaci&oacute;n del 25% cancelando con 7 d&iacute;as de anticipaci&oacute;n</li>
                    <li>Su servicio es reembolsable con penalizaci&oacute;n del 50% cancelando con 1 d&iacute;as de anticipaci&oacute;n</li>
                </ul>
                <p>Su servicio es apto para cr&eacute;dito abierto (sin derecho a reembolso) cancelando el mismo d&iacute;a de su servicio</p>
                <ul>
                    <li>En caso de servicio de <strong>llegadas</strong> el servicio se cancela y el cr&eacute;dito abierto se activa en las primeras 24 hrs posteriores a la hora confirmada de llegada*</li>
                    <li>En caso de servicios de <strong>salida</strong> el servicio se marca como No Show y no es apto para cr&eacute;dito abierto si no es cancelada con por lo menos 4 horas de anticipaci&oacute;n.</li>
                </ul>
                <p>En caso de NO SHOW, ning&uacute;n reembolso ser&aacute; aplicado&nbsp;</p>
                <p>*Si el cliente no se comunica para reagendar el servicio o confirmar el uso del cr&eacute;dito abierto despu&eacute;s de las 24 hrs la reserva se cancela y se marca como No Show (sin derecho a reembolso ni cr&eacute;dito abierto)</p>
                <p>Ning&uacute;n reembolso ser&aacute; emitido en caso de ser v&iacute;ctima de estafa por favor lea su cup&oacute;n de servicio y siga las indicaciones que vienen en &eacute;l, no deje que terceras personas se comuniquen por usted a nuestros tel&eacute;fonos oficiales</p>

                <p><strong>Politica antifraudes</strong></p>
                <p>Por tu seguridad y la nuestra hemos desarrollado una nueva política antifraudes con la finalidad de respaldar cada uno de nuestros servicios y ofrecerte lo mejor de nosotros en cuestiones de seguridad y personalización de tu servicio. Por ello es importante que presentes tu identificación al momento de tomar tu servicio con nosotros (licencia de conducir, pasaporte, etc.); sí has hecho una reserva para otro usuario es importante que envíes foto de tu identificación o en su defecto foto del propietario de la tarjeta de crédito con la que se ha hecho el pago de la reserva para evitar retrasos y molestias durante tu servicio en el destino.</p>
                <p>Sabemos que tu seguridad es importante por ello puedes consultar nuestra política de privacidad y uso de datos personales en nuestro sitio web</p>

                <p><strong>Objetos perdidos</strong></p>
                <p>Nuestros conductores tienen la obligación de ayudarle a subir y/o bajar su equipaje del vehículo sin embargo es responsabilidad del cliente verificar que su equipaje y objetos personales estén con ellos todo el tiempo.</p>
                <p>Nuestro personal tiene la obligación de reportar objetos olvidados en el momento de realizar inspecciones y limpiezas entre turnos y servicios.</p>
                <p>En caso de que algún objeto sea olvidado debe cubrirse el costo de traslado completo para poder llevarlo de vuelta al cliente.</p>
                <p>En algunas ocasiones llevar objetos olvidados no genera costo, consulte disponibilidad.</p>
            @endif
        </div>
    </main>

    @include('layouts.footer.general')
@endsection