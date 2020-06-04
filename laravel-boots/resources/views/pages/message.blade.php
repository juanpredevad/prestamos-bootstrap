@extends('layout.app')

@section('content')

@extends('layout.app')
@section('content')
    <div class=" container-info">
        <h2 class="text-center">¡Gracias por contar con nosotros! </h2>
        <div class="steps-info">
            <div class="row">
                <div class="step">
                    <img src="{{ asset('/assets/img/one.png') }}" alt="">
                    <p>Estudio crediticio en proceso </p>
                </div>
                <div class="step">
                    <img src="{{ asset('/assets/img/two.png') }}" alt="">
                    <p>Informe del resultado del estudio</p>
                </div>
                <div class="step">
                    <img src="{{ asset('/assets/img/three.png') }}" alt="">
                    <p>Solicitud de su foto y de su cédula</p>
                </div>
                <div class="step">
                    <img src="{{ asset('/assets/img/four.png') }}" alt="">
                    <p>Firma de su contrato desde su celular</p>
                </div>
                
            </div>
            <div class="row">
                <div class="final-step">
                    <img src="{{ asset('/assets/img/five.png') }}" alt="">
                    <div class="final-step-info">
                        <h3>¡Felicidades!</h3>
                        <h2>Le tranferimos el dinero directamente a su cuenta bancaria</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@endsection