@extends('template.main')
@section('content')
<section  >
    <img src="{{asset('assets/img/servicios/banner_servicios.png')}}"   class="banner_servicio" alt="..."> 
    <img src="{{asset('assets/img/servicios/responsive_servicios.png')}}"   class="responsive_servicio" alt="..."> 

    <div class="fondo_tab">
                <div class="titulo_banner" id="titulo_banner">
                    Autónomos y pymes
                </div>
                <div class="titulo_banner_green" id="titulo_banner_green">
                    100% protegidos
                </div>

                <div class="tab" >
                    <button class="tablinks" onclick="openCity(event, '1')" id="boton1">
                        <img src="{{asset('assets/img/servicios/email.png')}}"  id="tab_img_1"  class="tab_img" alt="...">
                        <img src="{{asset('assets/img/servicios/email_opa.png')}}"  id="tab_img_opa_1" style="display: none;"  class="tab_img" alt="...">
                        <div class="titulo_tab_tab">Área Contable</div>
                    </button>

                    <button class="tablinks" onclick="openCity(event, '2')">
                        <img src="{{asset('assets/img/servicios/email.png')}}"  id="tab_img_2" style="display: none;" class="tab_img" alt="..."> 
                        <img src="{{asset('assets/img/servicios/email_opa.png')}}" id="tab_img_opa_2"  class="tab_img" alt="..."> 
                        <div class="titulo_tab_tab">Área Fiscal</div>
                    </button>
                </div> 

                <div id="1" class="tabcontent">
                        <div class="titulo_tab">Área Contable</div>

                        <div class="lista_tab">
                            <div class="punto"></div>
                            <div class="punto_content">
                                Nos encargamos de la contabilidad de autónomos y sociedades para que no pierdas tiempo y tengas las cuentas claras.
                            </div>
                            
                            <div class="punto"></div>
                            <div class="punto_content">
                                Elaboramos y legalizamos tus libros contables.
                            </div>
    
                            <div class="punto"></div>
                            <div class="punto_content">
                                Presentamos por ti las cuentas anuales de tu negocio en el Registro Mercantil.
                            </div>

                            <div class="punto"></div>
                            <div class="punto_content">
                                Emitimos los balances, los diarios y las cuentas de resultados.
                            </div>

                            <div class="punto"></div>
                            <div class="punto_content">
                                Confeccionamos cuadros de amortización.
                            </div>

                            <div class="punto"></div>
                            <div class="punto_content">
                                Hacemos un seguimiento trimestral de balances y cuentas contables. 
                            </div>

                            <div class="punto"></div>
                            <div class="punto_content">
                                Llevamos el libro registro de IVA soportado y repercutido y el libro de registro de bienes de inversión.  
                            </div>
                        </div>
                </div>

                <div id="2" class="tabcontent">
                    <div class="titulo_tab">Área Fiscal</div>

                    <div class="lista_tab">
                            <div class="punto"></div>
                            <div class="punto_content">
                                Realizamos la declaración de la renta y gestionamos las ayudas. 
                            </div>

                            <div class="punto"></div>
                            <div class="punto_content">
                                En tan solo 48 horas te damos de alta como autónomo.
                            </div>

                            <div class="punto"></div>
                            <div class="punto_content">
                                Empleamos tecnología y profesionalismo para poner en orden tu facturación.
                            </div>

                            <div class="punto"></div>
                            <div class="punto_content">
                                Presentamos y confeccionamos los modelos trimestrales y anuales más empleados.
                            </div>

                            <div class="punto"></div>
                            <div class="punto_content">
                                Contestamos a requerimientos de la Agencia Tributaria.
                            </div>

                            <div class="punto"></div>
                            <div class="punto_content">
                                Gestionamos las variaciones censales 036/ 037. 
                            </div>

                            <div class="punto"></div>
                            <div class="punto_content">
                                Hacemos tus declaraciones mensuales trimestrales y anuales. 
                            </div>

                    </div>
                </div>  



                
     </div>
     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     <div class="titulo_supervisar">
        Tu trabajo será supervisar y dar el consentimiento.
    </div>
    <div class="area_suscripcion">
        <div class="titulo_suscripcion">
            Suscripción Mensual  <small class="small_sucripcion">a Liberfy:</small>
        </div>

        <div class="lista_tab_sus">
                <div class="punto_sus"></div>
                <div class="punto_content_sus">
                    Consultorías estratégicas ilimitadas enfocadas en tu negocio.
                </div>

                <div class="punto_sus"></div>
                <div class="punto_content_sus">
                    Atención personalizada y directa con tu gestor.
                </div>

                <div class="punto_sus"></div>
                <div class="punto_content_sus">
                    Sistema prioritario de emergencias por teléfono.
                </div>

                <div class="punto_sus"></div>
                <div class="punto_content_sus">
                    Soluciones a tiempo para problemas de cualquier tipo.
                </div>

                <div class="punto_sus"></div>
                <div class="punto_content_sus">
                    Creación y presentación de modelos impositivos.
                </div>

                <div class="punto_sus"></div>
                <div class="punto_content_sus">
                    Contabilidad.
                </div>

                <div class="punto_sus"></div>
                <div class="punto_content_sus">
                    Control de ingresos y gastos.
                </div>

                <div class="punto_sus"></div>
                <div class="punto_content_sus">
                    Contestaciones y recursos de la Agencia Tributaria. 
                </div>

        </div>

    </div>


    <div class="fondo_tab2">
        <div class="sumando_serv">
            Adicionalmente podrás ir sumando servicios de forma puntual
        </div>

        <div class="tabb2" >
            <button class="tablinks2 active" onclick="openCity2(event, 'tab1')">
                <img src="{{asset('assets/img/servicios/email.png')}}"  id="tab1_img"  class="tab_img2" alt="..."> 
                <img src="{{asset('assets/img/servicios/email_opa.png')}}" id="tab1_opa"  class="tab_img2" style="display: none" alt="..."> 
                <div class="titulo_tab_tab2">Área Laboral</div>
            </button>

            <button class="tablinks2" onclick="openCity2(event, 'tab2')">
                <img src="{{asset('assets/img/servicios/email_opa.png')}}" id="tab2_opa"  class="tab_img2" alt="..."> 
                <img src="{{asset('assets/img/servicios/email.png')}}" id="tab2_img"  style="display: none"  class="tab_img2" alt="..."> 
                <div class="titulo_tab_tab2">Área Legal</div>
            </button>

            <button class="tablinks2" onclick="openCity2(event, 'tab3')">
                <img src="{{asset('assets/img/servicios/email_opa.png')}}" id="tab3_opa"   class="tab_img2" alt="..."> 
                <img src="{{asset('assets/img/servicios/email.png')}}"  id="tab3_img"  style="display: none"  class="tab_img2" alt="..."> 
                <div class="titulo_tab_tab2">Propiedad Intelectual</div>
            </button>

            <button class="tablinks2" onclick="openCity2(event, 'tab4')">
                <img src="{{asset('assets/img/servicios/email_opa.png')}}" id="tab4_opa"   class="tab_img2" alt="..."> 
                <img src="{{asset('assets/img/servicios/email.png')}}" id="tab4_img"   style="display: none"  class="tab_img2" alt="..."> 
                <div class="titulo_tab_tab2">Desarrollo Contractual</div>
            </button>
        </div> 
 
        <div id="tab1" class="tabcontent2" style="display: block;" >
                <div class="lista_tab2"> 
                        <div class="titulo_tab_tab2_resp" id="titulo_tab_tab2_resp1">
                            Área Laboral
                        </div>
                        <div class="punto2"></div>
                        <div class="punto_content2">
                            Altas y bajas en la Seguridad Social.
                        </div>

                        <div class="punto2"></div>
                        <div class="punto_content2">
                            Contratos y nóminas.
                        </div>

                        <div class="punto2"></div>
                        <div class="punto_content2">
                            Prevención de Riesgos Laborales.
                        </div>

                        <div class="punto2"></div>
                        <div class="punto_content2">
                            resentamos los Seguros Sociales.
                        </div>
                </div>
        </div>

        <div id="tab2" class="tabcontent2" > 
                        <div class="titulo_tab_tab2_resp" id="titulo_tab_tab2_resp2">
                            Área Legal
                        </div>
                        <div class="punto2"></div>
                        <div class="punto_content2">
                            Nos encargamos de que tu negocio cumpla hasta la última coma de la legalidad.
                        </div>

                        <div class="punto2"></div>
                        <div class="punto_content2">
                            Te asesoramos ante cualquier duda, problema o situación incierta. 
                        </div>

                        <div class="punto2"></div>
                        <div class="punto_content2">
                            Somos expertos en la Ley de Protección de Datos y de Blanqueo de Capitales. 
                        </div>

                        <div class="punto2"></div>
                        <div class="punto_content2">
                            Servicio de consultoría.
                        </div>
        </div>

        <div id="tab3" class="tabcontent2">
                        <div class="titulo_tab_tab2_resp" id="titulo_tab_tab2_resp3">
                            Propiedad Intelectual
                        </div>
                        <div class="punto2"></div>
                        <div class="punto_content2">
                            Ponemos a salvo el corazón de tu empresa (tu marca) para que nadie robe lo que es tuyo.
                        </div>

                        <div class="punto2"></div>
                        <div class="punto_content2">
                            Registramos y aseguramos tus creaciones y marcas comerciales.
                        </div>
        </div>

        <div id="tab4" class="tabcontent2">
                        <div class="titulo_tab_tab2_resp" id="titulo_tab_tab2_resp4">
                            Desarrollo Contractual
                        </div>
                        <div class="punto2"></div>
                        <div class="punto_content2">
                            Área Mercantil: te ayudamos con todos los contratos que necesites.  
                        </div>

                        <div class="punto2"></div>
                        <div class="punto_content2">
                            Constitución de sociedades: déjanos orientarte y llevar a cabo estos trámites por ti.
                        </div>
        </div>

    </div>
</section>

<script>

    window.addEventListener("load", function() {
        document.getElementById('boton1').click();
    });

    window.onclick=openCity(event,'1'); 

    function openCity(evt, cityName) { 
                document.getElementById("titulo_tab_tab2_resp1").style.display = "block";
                document.getElementById("titulo_tab_tab2_resp2").style.display = "none";
                document.getElementById("titulo_tab_tab2_resp3").style.display = "none";
                document.getElementById("titulo_tab_tab2_resp4").style.display = "none";

                var i, tabcontent, tablinks;
                tabcontent  = document.getElementsByClassName("tabcontent");
                
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active"; 
               

                if(cityName == 1) {
                    document.getElementById("tab_img_1").style.display = "block";
                    document.getElementById("tab_img_opa_1").style.display = "none";
                    document.getElementById("tab_img_2").style.display = "none";
                    document.getElementById("tab_img_opa_2").style.display = "block";
                } 

                if(cityName == 2) {
                    document.getElementById("tab_img_2").style.display = "block";
                    document.getElementById("tab_img_opa_2").style.display = "none";
                    document.getElementById("tab_img_1").style.display = "none";
                    document.getElementById("tab_img_opa_1").style.display = "block";
                }

               
    }

    function openCity2(evt, cityName) { 

                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent2");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks2");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";

                if(cityName == "tab1") { 

                    document.getElementById("titulo_tab_tab2_resp1").style.display = "block";
                    document.getElementById("titulo_tab_tab2_resp2").style.display = "none";
                    document.getElementById("titulo_tab_tab2_resp3").style.display = "none";
                    document.getElementById("titulo_tab_tab2_resp4").style.display = "none";

                    document.getElementById("tab1_img").style.display = "block";
                    document.getElementById("tab1_opa").style.display = "none";

                    document.getElementById("tab2_opa").style.display = "block";
                    document.getElementById("tab2_img").style.display = "none";

                    document.getElementById("tab3_opa").style.display = "block";
                    document.getElementById("tab3_img").style.display = "none";

                    document.getElementById("tab4_opa").style.display = "block";
                    document.getElementById("tab4_img").style.display = "none";
                }

                if(cityName == "tab2") { 

                    document.getElementById("titulo_tab_tab2_resp1").style.display = "none";
                    document.getElementById("titulo_tab_tab2_resp2").style.display = "block";
                    document.getElementById("titulo_tab_tab2_resp3").style.display = "none";
                    document.getElementById("titulo_tab_tab2_resp4").style.display = "none";

                    document.getElementById("tab1_opa").style.display = "block";
                    document.getElementById("tab1_img").style.display = "none";

                    document.getElementById("tab2_img").style.display = "block";
                    document.getElementById("tab2_opa").style.display = "none";

                    document.getElementById("tab3_opa").style.display = "block";
                    document.getElementById("tab3_img").style.display = "none";

                    document.getElementById("tab4_opa").style.display = "block";
                    document.getElementById("tab4_img").style.display = "none";
                    
                    
                }

                if(cityName == "tab3") { 

                    document.getElementById("titulo_tab_tab2_resp1").style.display = "none";
                    document.getElementById("titulo_tab_tab2_resp2").style.display = "none";
                    document.getElementById("titulo_tab_tab2_resp3").style.display = "block";
                    document.getElementById("titulo_tab_tab2_resp4").style.display = "none";

                    document.getElementById("tab1_opa").style.display = "block";
                    document.getElementById("tab1_img").style.display = "none"; 

                    document.getElementById("tab2_opa").style.display = "block";
                    document.getElementById("tab2_img").style.display = "none"; 

                    document.getElementById("tab3_img").style.display = "block";
                    document.getElementById("tab3_opa").style.display = "none";

                    document.getElementById("tab4_opa").style.display = "block";
                    document.getElementById("tab4_img").style.display = "none";
                }

                if(cityName == "tab4") { 

                    document.getElementById("titulo_tab_tab2_resp1").style.display = "none";
                    document.getElementById("titulo_tab_tab2_resp2").style.display = "none";
                    document.getElementById("titulo_tab_tab2_resp3").style.display = "none";
                    document.getElementById("titulo_tab_tab2_resp4").style.display = "block";

                    document.getElementById("tab1_opa").style.display = "block";
                    document.getElementById("tab1_img").style.display = "none"; 

                    document.getElementById("tab2_opa").style.display = "block";
                    document.getElementById("tab2_img").style.display = "none";  
                    
                    document.getElementById("tab3_opa").style.display = "block";
                    document.getElementById("tab3_img").style.display = "none"; 

                    document.getElementById("tab4_img").style.display = "block";
                    document.getElementById("tab4_opa").style.display = "none";

                }
                
    } 

    function verificarCheck() {
        if(document.getElementById('check').checked) {
            document.getElementById('titulo_banner').style.display = 'none'
            document.getElementById('titulo_banner_green').style.display = 'none'
        } else {
            document.getElementById('titulo_banner').style.display = 'block'
            document.getElementById('titulo_banner_green').style.display = 'block'
        }
    }

</script>
@endsection