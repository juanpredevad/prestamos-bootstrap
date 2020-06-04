<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a36d2c8f1b.js" crossorigin="anonymous"></script>
        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.css" integrity="sha256-+bpMasWDxDlsVpNW3oZlL7L4RacwsP70u2fZt6Rxrmc=" crossorigin="anonymous" />
    <body>
        <nav class="navbar sticky-top navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.png') }}" width="64" height="64" alt="" loading="lazy"> Agencia Digital de Costa Rica
            </a>
        </nav>
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
    
    
    
        <!-- Footer -->
        <footer class="py-5 bg-black">
            <div class="container">
                <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2019</p>
            </div>
            <!-- /.container -->
        </footer>
    

          <script src="{{ asset('js/app.js') }}"></script>
          <script type="module" src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
