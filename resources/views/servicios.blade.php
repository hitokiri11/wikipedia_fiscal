@extends('template.main')
@section('content')
<section class="page-section"  id="servicios" >
    <div class="col-md-12 col-lg-12 mb- mb-md-0" >
        <div>
            <img src="assets/img/servicios/banner_servicios.png"   class="img-fluid  banner_servicio" alt="..."> 
            <img src="assets/img/servicios/responsive_servicios.png"   class="img-fluid  responsive_servicio" alt="..."> 
            <div >
                <h1 class=" titulo_banner">Autónomos y pymes</h1>
                <h1 class="protegidos" style="font-style:italic;font-weight: bold;" >100% protegidos</h1>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5"  >

        <div class="container">
            <ul class="nav nav-tabs tabs_banner">
              <li class="nav-item tab1_long">
                <a class="nav-link active" href="#tab1" id="login-tab" data-bs-toggle="tab">
                    <img src="assets/img/servicios/email.png"   class="img-fluid d-block tab_img" alt="..."> 
                    <h6 class="titulo_tab">Área Contable</h6>
                </a>
              </li>
              <li class="nav-item tab2_long"">
                <a class="nav-link" href="#tab2" id="register-tab" data-bs-toggle="tab">
                    <img src="assets/img/servicios/email.png"   class="img-fluid d-block tab_img" alt="..."> 
                    <h6 class="titulo_tab">Área Fiscal</h6>
                </a>
              </li>
            </ul>

            <div class="tab-content">
              <div id="tab1" class="tab-pane active">
                    <div class="list_servicios">
                            <h6 class="titulo_tab_inter">Área Contable</h6>
                            <ul>
                                <li>
                                Nos encargamos de la contabilidad de autónomos y sociedades para que no pierdas tiempo y tengas las cuentas claras.
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
                            <h6 class="titulo_tab_inter">Área Fiscal</h6>
                            <ul>
                                <li>
                                Realizamos la declaración de la renta y gestionamos las ayudas. 
                                </li>
                                <li>
                                En tan solo 48 horas te damos de alta como autónomo.
                                </li>
                                <li>
                                Empleamos tecnología y profesionalismo para poner en orden tu facturación.
                                </li>
                                <li>
                                Presentamos y confeccionamos los modelos trimestrales y anuales más empleados.
                                </li>
                                <li>
                                Contestamos a requerimientos de la Agencia Tributaria.
                                </li>
                                <li>
                                Gestionamos las variaciones censales 036/ 037. 
                                </li>
                                <li>
                                Hacemos tus declaraciones mensuales trimestrales y anuales.  
                                </li>
                            </ul>
                    </div>
                    
              </div>
            </div>
          </div>
    </div>

    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5" style="text-align: center">
        <h4 class="tu_trbajo">Tu trabajo será supervisar y dar el consentimiento.</h4>
    </div>

    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5 " >
        <div class="card tarjeta_servicio">
            <div class="card-body">
                    <label class="mb-2">
                        <h4 >
                            <em style="color:#17BA9C;"> Suscripción Mensual</em> a <small>Liberfy</small>:
                        </h4>
                    </label>
                    <ul>
                        <li>
                        Consultorías estratégicas ilimitadas enfocadas en tu negocio.
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
        <h6>Adicionalmente podrás ir sumando servicios de forma puntual </h6>
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
                    <a class="nav-link" href="#propiedad" id="prop" data-bs-toggle="tab">
                        <img src="assets/img/servicios/email.png"   class="img-fluid d-block tab_img2" alt="..."> 
                        <strong class="strong_tab2">Propiedad Intelectual</strong>
                    </a>
                </li>
                <li class="nav-item tab_small">
                    <a class="nav-link" href="#legal" id="leg" data-bs-toggle="tab">
                        <img src="assets/img/servicios/email.png"   class="img-fluid d-block tab_img2" alt="..."> 
                        <strong class="strong_tab2">Área Legal</strong>
                    </a>
                </li>
                <li class="nav-item tab_small">
                    <a class="nav-link" href="#desarrollo" id="des" data-bs-toggle="tab">
                        <img src="assets/img/servicios/email.png"   class="img-fluid d-block tab_img2" alt="..."> 
                        <strong  class="strong_tab2">Desarrollo Contractual</strong>
                    </a>
                </li>

            </ul>
            <div class="tab-content">
                <div id="laboral" class="tab-pane active">
                    <div class="list_servicios">
                        <ul>
                            <li>
                            Altas y bajas en la Seguridad Social.
                            </li>
                            <li>
                            Contratos y nóminas. 
                            </li>
                            <li>
                            Prevención de Riesgos Laborales.
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
                            Nos encargamos de que tu negocio cumpla hasta la última coma de la legalidad.
                            </li>
                            <li>
                            Te asesoramos ante cualquier duda, problema o situación incierta. 
                            </li>
                            <li>
                            Somos expertos en la Ley de Protección de Datos y de Blanqueo de Capitales. 
                            </li>
                            <li>
                            Servicio de consultoría.
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="propiedad" class="tab-pane fade">
                    <div class="list_servicios">
                        <ul>
                            <li>
                            Ponemos a salvo el corazón de tu empresa (tu marca) para que nadie robe lo que es tuyo. 
                            </li>
                            <li>
                            Registramos y aseguramos tus creaciones y marcas comerciales. 
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="desarrollo" class="tab-pane fade">
                    <div class="list_servicios">
                        <ul>
                            <li>
                            Área Mercantil: te ayudamos con todos los contratos que necesites.  
                            </li>
                            <li>
                            Constitución de sociedades: déjanos orientarte y llevar a cabo estos trámites por ti.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    
    </div>
    <hr class="divisor-team" >
</section>
@endsection