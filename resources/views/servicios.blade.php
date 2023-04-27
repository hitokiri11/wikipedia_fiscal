@extends('template.main')
@section('content')
<section  >
    <img src="{{asset('assets/img/servicios/banner_servicios.png')}}"   class="banner_servicio" alt="..."> 
    <img src="{{asset('assets/img/servicios/responsive_servicios.png')}}"   class="responsive_servicio" alt="..."> 

    <div class="fondo_tab">
                <div class="titulo_banner" id="titulo_banner" data-aos="fade-up">
                    Autónomos y pymes
                </div>
                <div class="titulo_banner_green" id="titulo_banner_green" data-aos="fade-up">
                    100% protegidos
                </div>

                <div class="tab" data-aos="fade-down">
                    <button class="tablinks" onclick="openCity(event, '1')" id="boton1">
                        {{-- <img src="{{asset('assets/img/servicios/email.svg')}}"  id="tab_img_1"  class="tab_img" alt="..." onmouseover="areacontable()" > --}}
                        <img src="{{asset('assets/img/servicios/areacontable.gif')}}"  id="areacontable_gif"  class="tab_img" alt="..."  onmouseout="areacontableOut()" >

                        {{-- <img src="{{asset('assets/img/servicios/email_opa.svg')}}"  id="tab_img_opa_1" style="display: none;"  class="tab_img" alt="..."> --}}
                        <div class="titulo_tab_tab">Área Contable</div>
                    </button>

                    <button class="tablinks" onclick="openCity(event, '2')">
                        {{-- <img src="{{asset('assets/img/servicios/email.svg')}}"  id="tab_img_2" style="display: none;" class="tab_img" alt="..." onmouseover="fiscal()" >  --}} 
                        <img src="{{asset('assets/img/servicios/fiscal.gif')}}"  id="fiscal_gif"  class="tab_img" alt="..."  onmouseout="fiscalOut()" >

                        {{-- <img src="{{asset('assets/img/servicios/email_opa.svg')}}" id="tab_img_opa_2"  class="tab_img" alt="...">  --}}
                        <div class="titulo_tab_tab">Área Fiscal</div>
                    </button>
                </div> 

                <div id="1" class="tabcontent" data-aos="fade-right">
                        <div class="titulo_tab">Área Contable</div>

                        <div class="lista_tab"> 
                            <table> 
                                <tr>
                                            <td style="vertical-align: top;">{{-- <div class="punto"></div> --}}<label style="font-size:50px;">.</label></td>
                                            <td >
                                                <div class="punto_content">
                                                Nos encargamos de la contabilidad de autónomos y sociedades para que no pierdas tiempo y tengas las cuentas claras.
                                                </div>
                                            </td>
                                </tr>
                                <tr>

                                            <td style="vertical-align: top;">{{-- <div class="punto"></div> --}}<label style="font-size:50px">.</label></td>
                                            <td>
                                                <div class="punto_content">
                                                    Elaboramos y legalizamos tus libros contables.
                                                </div>
                                            </td>
                                           
                                </tr>
                                <tr>
                                            <td style="vertical-align: top;">{{-- <div class="punto"></div> --}}<label style="font-size:50px">.</label></td>
                                            <td>
                                                <div class="punto_content">
                                                    Presentamos por ti las cuentas anuales de tu negocio en el Registro Mercantil.
                                                </div>
                                            </td>
                                            
                                </tr>
                                <tr>
                                            <td style="vertical-align: top;">{{-- <div class="punto"></div> --}}<label style="font-size:50px">.</label></td>
                                            <td>
                                                <div class="punto_content">
                                                    Emitimos los balances, los diarios y las cuentas de resultados.
                                                </div>
                                            </td>
                                           
                                </tr>
                                <tr>
                                            <td style="vertical-align: top;">{{-- <div class="punto"></div> --}}<label style="font-size:50px">.</label></td>
                                            <td>
                                                <div class="punto_content">
                                                    Confeccionamos cuadros de amortización.
                                                </div>
                                            </td>
                                           
                                </tr>
                                <tr>
                                            <td style="vertical-align: top;">{{-- <div class="punto"></div> --}}<label style="font-size:50px">.</label></td>
                                            <td>
                                                <div class="punto_content">
                                                    Hacemos un seguimiento trimestral de balances y cuentas contables. 
                                                </div>
                                            </td>
                                           
                                </tr>
                                <tr>
                                            <td style="vertical-align: top;">{{-- <div class="punto"></div> --}}<label style="font-size:50px">.</label></td>
                                            <td>
                                                <div class="punto_content">
                                                    Llevamos el libro registro de IVA soportado y repercutido y el libro de registro de bienes de inversión.  
                                                </div>
                                            </td>
                                            
                                </tr>
                            </table>
                        </div>
                </div>

                <div id="2" class="tabcontent">
                    <div class="titulo_tab">Área Fiscal</div>

                    <div class="lista_tab"> 

                            <table>
                                <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                                    <td> 
                                        <div class="punto_content">
                                            Realizamos la declaración de la renta y gestionamos las ayudas. 
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                                    <td>
                                        <div class="punto_content">
                                            En tan solo 48 horas te damos de alta como autónomo.
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                                    <td>
                                        <div class="punto_content">
                                            Empleamos tecnología y profesionalismo para poner en orden tu facturación.
                                        </div>
                                    </td>
                                </tr> 
                                <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                                    <td>
                                        <div class="punto_content">
                                            Presentamos y confeccionamos los modelos trimestrales y anuales más empleados.
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                                    <td>
                                        <div class="punto_content">
                                            Contestamos a requerimientos de la Agencia Tributaria.
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td> 
                                    <td>
                                        <div class="punto_content">
                                            Gestionamos las variaciones censales 036/ 037. 
                                        </div>
                                    </td>
                                </tr>
                                <tr>        
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                                    <td>
                                        <div class="punto_content">
                                            Hacemos tus declaraciones mensuales trimestrales y anuales. 
                                        </div>
                                    </td>
                                </tr>
                            </table>

                    </div>
                </div>  



                
     </div>
     {{-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> --}}
     <div class="titulo_supervisar">
        Tu trabajo será supervisar y dar el consentimiento.
    </div>
    <div class="area_suscripcion" data-aos="flip-left">
        <div class="titulo_suscripcion">
            Suscripción Mensual  <small class="small_sucripcion">a Liberfy:</small>
        </div>

        <div class="lista_tab_sus">
                <table>
                    <tr>
                        <td style="vertical-align: top;"><label style="font-size:50px">.</label></td> 
                        <td>
                            <div class="punto_content_sus">
                                Consultorías estratégicas ilimitadas enfocadas en tu negocio.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;"><label style="font-size:50px">.</label></td> 
                        <td>
                            <div class="punto_content_sus">
                                Atención personalizada y directa con tu gestor.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;"><label style="font-size:50px">.</label></td> 
                        <td>
                            <div class="punto_content_sus">
                                Sistema prioritario de emergencias por teléfono.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;"><label style="font-size:50px">.</label></td> 
                        <td>
                            <div class="punto_content_sus">
                                Soluciones a tiempo para problemas de cualquier tipo.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;"><label style="font-size:50px">.</label></td> 
                        <td>
                            <div class="punto_content_sus">
                                Creación y presentación de modelos impositivos.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;"><label style="font-size:50px">.</label></td> 
                        <td>
                            <div class="punto_content_sus">
                                Contabilidad.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                        <td>
                            <div class="punto_content_sus">
                                Control de ingresos y gastos.
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                        <td>
                            <div class="punto_content_sus">
                                Contestaciones y recursos de la Agencia Tributaria. 
                            </div>
                        </td>
                    </tr>
                </table>

        </div>

    </div>


        <div class="fondo_tab2" data-aos="fade-up"
        data-aos-duration="3000">
        <div class="sumando_serv">
            Adicionalmente podrás ir sumando servicios de forma puntual
        </div>

        <div class="tabb2" >
            <button class="tablinks2 active" onclick="openCity2(event, 'tab1')">
                {{-- <img src="{{asset('assets/img/servicios/email.svg')}}"  id="tab1_img"  class="tab_img2" alt="..."  onmouseover="laboral()"> --}}
                <img src="{{asset('assets/img/servicios/laboral.gif')}}"  id="laboral_gif"  class="tab_img2" alt="..."  onmouseout="laboralOut()" >
                
                {{-- <img src="{{asset('assets/img/servicios/email_opa.svg')}}" id="tab1_opa"  class="tab_img2" style="display: none" alt="...">  --}}
                <div class="titulo_tab_tab2">Área Laboral</div>
            </button>

            <button class="tablinks2" onclick="openCity2(event, 'tab2')">
                {{-- <img src="{{asset('assets/img/servicios/email_opa.svg')}}" id="tab2_opa"  class="tab_img2" alt="..."  >  --}}

              {{--   <img src="{{asset('assets/img/servicios/email.svg')}}" id="tab2_img"  style="display: none"  class="tab_img2" alt="..." >  --}}
                <img src="{{asset('assets/img/servicios/ley.gif')}}"  id="ley_gif"  class="tab_img2" alt="..."  onmouseout="leyOut()" >
                <div class="titulo_tab_tab2">Área Legal</div>
            </button>

            <button class="tablinks2" onclick="openCity2(event, 'tab3')">
                {{-- <img src="{{asset('assets/img/servicios/email_opa.svg')}}" id="tab3_opa"   class="tab_img2" alt="...">  --}}

                {{-- <img src="{{asset('assets/img/servicios/email.svg')}}"  id="tab3_img"  style="display: none"  class="tab_img2" alt="..." onmouseover="intelectual()" > --}}
                <img src="{{asset('assets/img/servicios/intelectual.gif')}}"  id="intelectual_gif"  class="tab_img2" alt="..."  onmouseout="intelectualOut()" > 
                <div class="titulo_tab_tab2">Propiedad Intelectual</div>
            </button>

            <button class="tablinks2" onclick="openCity2(event, 'tab4')">
                {{-- <img src="{{asset('assets/img/servicios/email_opa.svg')}}" id="tab4_opa"   class="tab_img2" alt="...">  --}}

                {{-- <img src="{{asset('assets/img/servicios/email.svg')}}" id="tab4_img"   style="display: none"  class="tab_img2" alt="..." onmouseover="contractual()" >  --}}
                <img src="{{asset('assets/img/servicios/contractual.gif')}}"  id="contractual_gif"  class="tab_img2" alt="..."  onmouseout="contractualOut()" > 
                <div class="titulo_tab_tab2">Desarrollo Contractual</div>
            </button>
        </div> 
 
        <div id="tab1" class="tabcontent2" style="display: block;" >
                <div class="lista_tab2"> 
                        <div class="titulo_tab_tab2_resp" id="titulo_tab_tab2_resp1">
                            Área Laboral
                        </div>

                        <table class="tabla_list">
                            <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td> 
                                    <td>
                                        <div class="punto_content2">
                                            Altas y bajas en la Seguridad Social.
                                        </div>
                                    </td>
                            </tr>
                            <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td> 
                                    <td>
                                        <div class="punto_content2">
                                                Contratos y nóminas.
                                        </div>
                                    </td>
                            </tr>
                            <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                                    <td>
                                        <div class="punto_content2">
                                            Prevención de Riesgos Laborales.
                                        </div>
                                    </td>
                            </tr>
                            <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                                    <td>
                                        <div class="punto_content2">
                                            resentamos los Seguros Sociales.
                                        </div>
                                    </td>
                            </tr>
                        </table>

                </div>
        </div>

        <div id="tab2" class="tabcontent2" > 
                        <div class="titulo_tab_tab2_resp" id="titulo_tab_tab2_resp2">
                            Área Legal
                        </div>

                        <table class="tabla_list">
                            <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                                    <td>
                                        <div class="punto_content2">
                                            Nos encargamos de que tu negocio cumpla hasta la última coma de la legalidad.
                                        </div>
                                    </td>
                            </tr>
                            <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                                    <td>
                                        <div class="punto_content2">
                                            Te asesoramos ante cualquier duda, problema o situación incierta. 
                                        </div>
                                    </td>
                            </tr>
                            <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                                    <td>
                                        <div class="punto_content2">
                                            Somos expertos en la Ley de Protección de Datos y de Blanqueo de Capitales. 
                                        </div>
                                    </td>
                            </tr>
                            <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                                    <td>
                                        <div class="punto_content2">
                                            Servicio de consultoría.
                                        </div>
                                    </td>
                            </tr>
                        </table>
   
                        
        </div>

        <div id="tab3" class="tabcontent2">
                        <div class="titulo_tab_tab2_resp" id="titulo_tab_tab2_resp3">
                            Propiedad Intelectual
                        </div> 

                        <table class="tabla_list">
                            <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td>
                                    <td>
                                        <div class="punto_content2">
                                            Ponemos a salvo el corazón de tu empresa (tu marca) para que nadie robe lo que es tuyo.
                                        </div>
                                    </td>
                            </tr>
                            <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td> 
                                    <td>
                                        <div class="punto_content2">
                                            Registramos y aseguramos tus creaciones y marcas comerciales.
                                        </div>
                                    </td>
                            </tr>
                        </table>
   
        </div>

        <div id="tab4" class="tabcontent2">
                        <div class="titulo_tab_tab2_resp" id="titulo_tab_tab2_resp4">
                            Desarrollo Contractual
                        </div>

                        <table class="tabla_list">
                            <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td> 
                                    <td>
                                            <div class="punto_content2">
                                                Área Mercantil: te ayudamos con todos los contratos que necesites.  
                                            </div>
                                    </td>
                            </tr>
                            <tr>
                                    <td style="vertical-align: top;"><label style="font-size:50px">.</label></td> 
                                    <td>
                                            <div class="punto_content2">
                                                Constitución de sociedades: déjanos orientarte y llevar a cabo estos trámites por ti.
                                            </div>
                                    </td>
                            </tr>
                        </table>

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


     /* área contable */
     function areacontable() {
        document.getElementById('tab_img_1').style.display="none";
        document.getElementById('areacontable_gif').style.display="block"; 
        document.getElementById('areacontable_gif').style.marginLeft="auto"
        document.getElementById('areacontable_gif').style.marginRight="auto"
    }

    function areacontableOut() {
        document.getElementById('areacontable_gif').style.display="none";
        document.getElementById('tab_img_1').style.display="block"; 
        document.getElementById('tab_img_1').style.marginLeft="auto"
        document.getElementById('tab_img_1').style.marginRight="auto"
    }

    /* área fiscal */
    function fiscal() {
        document.getElementById('tab_img_2').style.display="none";
        document.getElementById('fiscal_gif').style.display="block"; 
        document.getElementById('fiscal_gif').style.marginLeft="auto"
        document.getElementById('fiscal_gif').style.marginRight="auto"
    }

    function fiscalOut() {
        document.getElementById('fiscal_gif').style.display="none";
        document.getElementById('tab_img_2').style.display="block"; 
        document.getElementById('tab_img_2').style.marginLeft="auto"
        document.getElementById('tab_img_2').style.marginRight="auto"
    }

    /* área laboral */
    function laboral() {
        document.getElementById('tab1_img').style.display="none";
        document.getElementById('laboral_gif').style.display="block"; 
        document.getElementById('laboral_gif').style.marginLeft="auto"
        document.getElementById('laboral_gif').style.marginRight="auto"
    }

    function laboralOut() {
        document.getElementById('laboral_gif').style.display="none";
        document.getElementById('tab1_img').style.display="block"; 
        document.getElementById('tab1_img').style.marginLeft="auto"
        document.getElementById('tab1_img').style.marginRight="auto"
    }

    /* área legal */
    function ley() {
        document.getElementById('tab2_img').style.display="none";
        document.getElementById('ley_gif').style.display="block"; 
        document.getElementById('ley_gif').style.marginLeft="auto"
        document.getElementById('ley_gif').style.marginRight="auto"
    }

    function leyOut() {
        document.getElementById('ley_gif').style.display="none";
        document.getElementById('tab2_img').style.display="block"; 
        document.getElementById('tab2_img').style.marginLeft="auto"
        document.getElementById('tab2_img').style.marginRight="auto"
    }

    /* propiedad intelectuañ */
    function intelectual() {
        document.getElementById('tab3_img').style.display="none";
        document.getElementById('intelectual_gif').style.display="block"; 
        document.getElementById('intelectual_gif').style.marginLeft="auto"
        document.getElementById('intelectual_gif').style.marginRight="auto"
    }

    function intelectualOut() {
        document.getElementById('intelectual_gif').style.display="none";
        document.getElementById('tab3_img').style.display="block"; 
        document.getElementById('tab3_img').style.marginLeft="auto"
        document.getElementById('tab3_img').style.marginRight="auto"
    }

    /* desarrollo contractual */
    function contractual() {
        document.getElementById('tab4_img').style.display="none";
        document.getElementById('contractual_gif').style.display="block"; 
        document.getElementById('contractual_gif').style.marginLeft="auto"
        document.getElementById('contractual_gif').style.marginRight="auto"
    }

    function contractualOut() {
        document.getElementById('contractual_gif').style.display="none";
        document.getElementById('tab4_img').style.display="block"; 
        document.getElementById('tab4_img').style.marginLeft="auto"
        document.getElementById('tab4_img').style.marginRight="auto"
    }

</script>
@endsection