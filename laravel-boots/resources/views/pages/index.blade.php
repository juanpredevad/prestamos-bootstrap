@extends('layout.app')

@section('content')
<main>
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-6 order-lg-2">
                <div class="p-1">
                    <form  class="form-loan text-center">
                       <div class="loan-inputs">
                            <div class="form-group">
                                <label for="inputMoney">¿Cuánto necesitás?</label>
                                <input type="range" class="form-control-range" id="inputMoney" min="0" max="99">
                                <div class="ranges">
                                    <span>₡100,000</span><span id="outputMoney"></span><span> ₡1,000,000</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputMonths">¿En cuánto tiempo lo querés pagar?</label>
                                <input type="range" class="form-control-range" id="inputMonths" min="6" max="21" step="3">
                                <div class="ranges">
                                    <span id="minMonth">6 meses</span><span id="outputMonths"></span><span> 24 meses</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputFrecuency">¿En cuánto tiempo lo querés pagar?</label>
                                <input type="range" class="form-control-range" id="inputFrecuency" min="0" max="1">
                                <div class="ranges">
                                    <span>Quincenal</span><span> Mensual</span>
                                </div>
                            </div>
                            <div class="btn btn-primary btn-sm">
                                <h5>Cuota:₡ <span id="toPay"></span></h5>
                            </div>
                        </div>
                        <div class="info-inputs" id="infoimputs">
                            <div class="form-group">
                                <label for="inputIdType" id="label">Tipo de indentificación</label>
                                <select id="inputIdType">
                                    <option value="1">Nacional</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputId">Indentificación <span>(*)</span></label>
                                <input type="text" id="inputId" placeholder="Número de indentificación" required>
                                <span id="nameValue"></span>
                            </div>
                                
                            <div class="form-group">
                                <label for="inputTel">Teléfono <span>(*)</span></label>
                                <input type="tel" id="inputTel" placeholder="Teléfono" required>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Correo electrónico <span>(*)</span></label>
                                <input type="email" id="inputEmail" placeholder="Correo electrónico" required>
                            </div>
                            <button type="button" class="btn btn-primary" id="modalBtn">ENVIAR</button>
                            <div class="modal" id="simpleModal">
                                <div class="modal-content">
                                    <span class="closeBtn" id="closeBtn">&times;</span>
                                    <h2>Verificación</h2>
                                    <div id="modalForm" class="modal-form">
                                        <label for="inputCode">Digitá el pin enviado a su celular <span id="outputTel">61053301</span></label>
                                        <span id="codeMessage">  </span>
                                        <input type="text" name="inputPin" id="inputCode" required>
                                        <div class="btns">
                                            <button  class="btn btn-secundary">REENVIAR</button>
                                            <button type="button" id="confirmBtn" class="btn btn-primary">CONFIRMAR</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-1">
                    <h1>Su crédito en poco tiempo</h1>
                    <a href="#" class="hashtag">#AD</a>
                    <p> Le facilitamos su vida frente a situaciones y deseos imprevistos ofreciéndote el crédito que necesitás de forma rápida, transparente y segura.</p>
                    <div class="mb-2">
                        <h3>Le podemos ayudar si cumplís con:</h3>
                        <div class="ml-3">
                            <!-- check -->
                            <div class="d-flex flex-row ">
                                <div class="mr-3 align-self-center">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <div class="align-self-end">
                                    Ser mayor de edad.
                                </div>
                            </div>
                            <!-- check -->
                            <div class="d-flex flex-row">
                                <div class="mr-3 align-self-center">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <div class="align-self-end">
                                    Sus ingresos superan los ₡ 100.000.
                                </div>
                            </div>
                            <!-- check -->
                            <div class="d-flex flex-row">
                                <div class="mr-3 align-self-center">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <div class="align-self-end">
                                    Tenés una cuenta bancaria a su nombre.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <h3>Para solicitar su crédito necesitamos:</h3>
                        <div class="ml-3">
                            <!-- check -->
                            <div class="d-flex flex-row ">
                                <div class="mr-3 align-self-center">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <div class="align-self-end">
                                    Su número de cédula –Nacional.
                                </div>
                            </div>
                            <!-- check -->
                            <div class="d-flex flex-row">
                                <div class="mr-3 align-self-center">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <div class="align-self-end">
                                    Número telefónico.
                                </div>
                            </div>
                            <!-- check -->
                            <div class="d-flex flex-row">
                                <div class="mr-3 align-self-center">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <div class="align-self-end">
                                    Correo electrónico
                                </div>
                            </div>
                            <!-- check -->
                            <div class="d-flex flex-row">
                                <div class="mr-3 align-self-center">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <div class="align-self-end">
                                    El número de su cuenta bancaria.
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('script')
<script>
        //Validate form
var idType = document.getElementById('inputIdType');
var id = document.getElementById('inputId');
var tel = document.getElementById('inputTel');
var email = document.getElementById('inputEmail');
var modalBtn = document.getElementById('modalBtn');


function validateLoamForm() {
    if (idType.value === '' || id.value === '' || tel.value === '' || email.value === '') {
        console.log('entra validateform1 if')
        return false;
    } else {
        console.log('entra validateform1 else')
        return true;
    }

}


function clearFields() {
    document.getElementById('inputId').value = '';
    document.getElementById('inputTel').value = '';
    document.getElementById('inputEmail').value = '';
}


//Modal events
var modal = document.getElementById('simpleModal');
var modalBtn = document.getElementById('modalBtn');
var closeBtn = document.getElementById('closeBtn');


modalBtn.addEventListener('click', () => {
    console.log('112as')
    if (validateLoamForm()) {
        console.log('entra validate form if   ')
        openModal();
    } else {
        console.log('entra validate form else 2  ')


    }
});



closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', outsideClick); 

function openModal() {
    console.log('entre   openModel')
    modal.style.display = 'block';
    console.log(tel.value);

}

function closeModal(e) {
    e.preventDefault();
    modal.style.display = 'none';
}

function outsideClick(e) {
    if (e.target == modal) {
        modal.style.display = 'none';
    }
}

id.addEventListener('change', function(e){
    e.preventDefault();
    console.log("Entra event change");
    console.log(id.value);

    getNameByCed(id.value);
    }
  

);

function getNameByCed(ced){
    console.log("Entra GetName");

    axios({
        method: 'GET',
        url: `/api/people/${ced}`
    }).then(res => {
        console.log(res.data.name);
        const nameOutput = document.getElementById('nameValue');
        if(res.data.name == undefined){
            nameOutput.textContent = '';
        }else{
            nameOutput.textContent = `${res.data.name} ${res.data.lastname1} ${res.data.lastname2}`;
        }

    });
}

// send Confirmation
    function sendCode(){
        console.log('entra verificacion')
        let tel = `+506${document.getElementById('inputTel').value}`,
            data = '';
        console.log(typeof(tel))
        

        data = { tel };
        axios.post('{{ route('verification') }}', data)
             .then(response =>{
                console.log(response)
             });
    }


    modalBtn.addEventListener('click', ()=>{
      
        console.log("entre evento send code");
        sendCode();
    });


// Validate Confirmation

var confirm = document.getElementById('confirmBtn');

confirm.addEventListener('click', ()=>{

    let tel = `+506${document.getElementById('inputTel').value}`,
        codeValue = document.getElementById('inputCode').value,
        contentMessage = document.getElementById('codeMessage')
        data = {
            tel,
            codeValue
        }

    axios.get(` verificationcode/${codeValue}/${tel}`, data)
         .then(response=>{
            console.log(response)
            if(codeValue != ''){
                if(response.status == 200){
                    console.log('cod',response)
                    if(response.data.code_confirmation == codeValue){
                        console.log('valido')
                        contentMessage.innerText = 'Codigo valido'
                        sendLoan();
                    }else{
                        contentMessage.innerText = 'Codigo invalido'
                        console.log('INvalido')

                    }
                }
            }
         })

});

function sendLoan(){
    console.log('entra sendLoan')
    let money = document.getElementById('outputMoney').textContent;
    let months = document.getElementById('outputMonths').textContent;
    let frecuency = document.getElementById('inputFrecuency').value;
    let cedType = document.getElementById('inputIdType').value;
    let ced = document.getElementById('inputId').value;
    let tel = document.getElementById('inputTel').value;
    let email = document.getElementById('inputEmail').value;

    data = {
        money, months, frecuency, cedType, ced, tel, email
    };

    axios.post('{{ route('loan')  }}',data)
         .then(response  =>{
            console.log(response)
            window.location.href = "/confirmacion";
         });
}

</script>
@endsection