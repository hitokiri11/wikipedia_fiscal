@extends('template.main')
@section('content')
<section class="page-section"  id="servicios" >
    <div class="col-md-12 col-lg-12 mb- mb-md-0" >
        <div>
            <img src="assets/img/servicios/servicios.jfif"   class="img-fluid d-block banner_servicio" alt="..."> 
            <div class=" titulo_banner" >
                <h1>Autónomos y pymes</h1>
                <h1 style="color:#17BA9C;font-style: italic;">100% protegidos</h1>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5"  >

        <div class="container">
            <ul class="nav nav-tabs tabs_banner">
              <li class="nav-item tab1_long">
                <a class="nav-link active" href="#tab1" id="login-tab" data-bs-toggle="tab">
                    <img src="assets/img/servicios/email.png"   class="img-fluid d-block tab_img" alt="..."> 
                    <h6>Área Contable</h6>
                </a>
              </li>
              <li class="nav-item tab2_long"">
                <a class="nav-link" href="#tab2" id="register-tab" data-bs-toggle="tab">
                    <img src="assets/img/servicios/email.png"   class="img-fluid d-block tab_img" alt="..."> 
                    <h6>Área Fiscal</h6>
                </a>
              </li>
            </ul>

            <div class="tab-content">
              <div id="tab1" class="tab-pane active">
                    <div class="list_servicios">
                            <ul>
                                <li>
                                    Nos encargamos de la contabilidad de autónomos y sociedades para que no pierdas tiempo y tengas las 
                                    cuentas claras.
                                </li>
                                <li>
                                    Elaboramos y legalizamos tus libros contables.
                                </li>
                                <li>
                                    Presentamos por ti las cuentas anuales de tu negocio en el Registro Mercantil.
                                </li>
                                <li>
                                    Emitimos los balances, los diarios y las cuentas de resultados.
                                </li>
                                <li>
                                    Confeccionamos cuadros de amortización.
                                </li>
                                <li>
                                    Hacemos un seguimiento trimestral de balances y cuentas contables.
                                </li>
                                <li>
                                    Llevamos el libro registro de IVA soportado y repercutido y el libro de registro de bienes de inversión.
                                </li>
                            </ul>
                     </div>
              </div>
              <div id="tab2" class="tab-pane fade"> 
                    <div class="list_servicios">
                        <ul>
                            <li>
                                En espera por información.
                            </li>
                        </ul>
                    </div>
                    
              </div>
            </div>
          </div>
    </div>

    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5" style="text-align: center">
        <h4>Tu trabajo será supervisar y dar el consentimiento.</h4>
    </div>

    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5 " >
        <div class="card tarjeta_servicio">
            <div class="card-body">
                    <label class="mb-2">
                        <h4 >
                            <em style="color:#17BA9C;"> Suscripción Mensual</em> a Liberfy incluye:
                        </h4>
                    </label>
                    <ul>
                        <li>
                            Consultorías estrátegicas ilimitadas enfocadas en tu negocio.
                        </li>
                        <li>
                            Atención personalizada y directa con tu gestor.
                        </li>
                        <li>
                            Sistema prioritario de emergencias por teléfono.
                        </li>
                        <li>
                            Soluciones a tiempo para problemas de cualquier tipo.
                        </li>
                        <li>
                            Creación y presentación de modelos impositivos.
                        </li>
                        <li>
                            Contabilidad.
                        </li>
                        <li>
                            Control de ingresos y gastos.
                        </li>
                        <li>
                            Contestaciones y recursos de la Agencia Tributaria.
                        </li>
                    </ul>
            </div>
          </div>
    </div>

    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5 adicional_servico" style="text-align: center">
        <h6>Adicionalmente podrás ir sumando servicios de forma puntual</h6>
    </div>

    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5" >
        <div class="container">
            <ul class="nav nav-tabs tabs_banner2">

                <li class="nav-item tab_small">
                    <a class="nav-link active" href="#laboral" id="lab" data-bs-toggle="tab">
                        <img src="assets/img/servicios/email.png"   class="img-fluid d-block tab_img2" alt="..."> 
                        <strong class="strong_tab2">Área Laboral</strong>
                    </a>
                </li>
                <li class="nav-item tab_small">
                    <a class="nav-link" href="#legal" id="leg" data-bs-toggle="tab">
                        <img src="assets/img/servicios/email.png"   class="img-fluid d-block tab_img2" alt="..."> 
                        <strong class="strong_tab2">Área Legal</strong>
                    </a>
                </li>
                <li class="nav-item tab_small">
                    <a class="nav-link" href="#propiedad" id="prop" data-bs-toggle="tab">
                        <img src="assets/img/servicios/email.png"   class="img-fluid d-block tab_img2" alt="..."> 
                        <strong class="strong_tab2">Propiedad Intelectual</strong>
                    </a>
                </li>
                <li class="nav-item tab_small">
                    <a class="nav-link" href="#desarrollo" id="des" data-bs-toggle="tab">
                        <img src="assets/img/servicios/email.png"   class="img-fluid d-block tab_img2" alt="..."> 
                        <strong s class="strong_tab2">Desarrollo Contractual</strong>
                    </a>
                </li>

            </ul>
            <div class="tab-content">
                <div id="laboral" class="tab-pane active">
                    <div class="list_servicios">
                        <ul>
                            <li>
                                Realizamos altas y bajas en la Seguridad Social.
                            </li>
                            <li>
                                Nos encargamos de los contratos y las nóminas.
                            </li>
                            <li>
                                Te ayudamos con la Ley de Prevención de Riesgos Laborales.
                            </li>
                            <li>
                                Presentamos los Seguros Sociales.
                            </li>
                        </ul>
                    </div>
                </div>  
                <div id="legal" class="tab-pane fade">
                    <div class="list_servicios">
                        <ul>
                            <li>
                                En espera por información.
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="propiedad" class="tab-pane fade">
                    <div class="list_servicios">
                        <ul>
                            <li>
                                En espera por información.
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="desarrollo" class="tab-pane fade">
                    <div class="list_servicios">
                        <ul>
                            <li>
                                En espera por información.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    
    </div>

</section>
@endsection