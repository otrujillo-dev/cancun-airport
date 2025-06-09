

var btn = document.getElementById('book');
var language = document.documentElement.getAttribute('lang');

let formData = {
    client_name: document.getElementsByName('client_name')[0],
    client_last_name: document.getElementsByName('client_last_name')[0],
    client_email: document.getElementsByName('client_email')[0],
    client_phone: document.getElementsByName('client_phone')[0],
    client_comment: document.getElementsByName('client_comment')[0],
    client_airline: document.getElementsByName('client_airline')[0],
    client_flight_number: document.getElementsByName('client_flight_number')[0],
};

window.handler = async function(){
    deleteMessages();    

    let data = {};
    Object.keys(formData).forEach(function(key) {
        if(formData[key]){
            data[key] = formData[key].value;
        }
    });
      
    let rules = {
        client_name: 'required|min:2|max:45',
        client_last_name: 'max:45',
        client_email: 'required|email|max:45',
        client_phone: 'required|max:25',
        client_comment: 'max:150',
        client_airline: 'required|min:2|max:75',
        client_flight_number: 'required|min:2|max:75',
    }

    if(item_config.flight_required == "0"){
        delete rules.client_airline;
        delete rules.client_flight_number;
    }

    if(language === "en"){
        var messages = {
            required: 'This field is required',
            min: 'Min :min characters',
            max: 'Max :max characters',
            email: 'Incorrect email'
        };
    }else{
        var messages = {
            required: 'Este campo es obligatorio',
            min: 'Mínimo :min caracteres',
            max: 'Máximo :max caracteres',
            email: 'E-mail incorrecto'
        };
    }    


    let validation = new Validator(data, rules, messages);

    if (validation.passes()) {
        btn.disabled = true;
        btn.classList.add('loading');
        
        var form = document.getElementById("items-form");

        const hasReservation = await checkReservation();
        if(hasReservation === false){
            form.submit();
        }else{            

            Swal.fire({
                title: "You already have a similar itinerary. Continue booking?",
                showDenyButton: true,    
                confirmButtonText: "Yes, continue booking",
                confirmButtonColor: "#3264ff",
                denyButtonText: `No, Check My Other Booking`,
                cancelButtonColor: "#fff",
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                } else if (result.isDenied) {
                    let rez_continue = document.createElement('input');
                        rez_continue.type = 'hidden';
                        rez_continue.name = 'continue';
                        rez_continue.value = 1;
                        form.appendChild(rez_continue);
                        form.submit();                        
                }
            });
        }
        
    } else {
        
        Object.keys(validation.errors.errors).forEach(function(key) {  
            let span = document.createElement('span');
                span.classList.add("error");
                span.textContent = validation.errors.errors[key];
                if(formData[key]){
                    formData[key].parentNode.insertBefore(span, formData[key].nextSibling);
                }
        });        
        return false;
    }    
}

window.checkReservation = function(){
    return fetch(`${ ((language == "en") ? '/transportation/check' : '/es/transportacion/check') }`, {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error en la respuesta del servidor');
        }
        return response.json();
    })
    .then(data => {        
        return data.success === true;
    })
    .catch(error => {
        console.error('Error al verificar reservación:', error);
        return false;
    });
}

function deleteMessages() {
    Object.keys(formData).forEach(function(key) {
        if(formData[key]){
            let after_span = formData[key].nextSibling;
            if (after_span && after_span.nodeName === 'SPAN') {
                after_span.remove();
            }
        }
    });
}


const items = document.querySelectorAll('.client-payment-method .items div');
const paymentTypeInput = document.getElementsByName('payment_type')[0];

items.forEach(item => {
    item.addEventListener('click', function() {        
        items.forEach(i => i.classList.remove('checked'));        
        this.classList.add('checked');        
        const paymentType = this.getAttribute('data-type');        
        paymentTypeInput.value = paymentType;
    });
});