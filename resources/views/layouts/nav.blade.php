<nav class="navbar ">
    <input type="checkbox" id="check" onclick="verificarCheck()"/>
    <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars"></i>
    </label>

    <a href="/"><img src="{{asset('assets/img/LOGO.svg')}}" class="logo_head" /></a>

    <ul class="menu">
        <li >
            <a  href="/" id="barra-inicio" style="color: #8C8C8C" >Inicio</a>
           <!--  <div class="barra-equipo" id="barra-equipo"></div> -->
        </li>
        <li >
            <a  href="/equipo" id="barra-equipo" style="color: #8C8C8C" >Equipo</a>
           <!--  <div class="barra-equipo" id="barra-equipo"></div> -->
        </li>
        <li >
            <a  href="/servicios" id="barra-servicios" style="color: #8C8C8C" >Servicios</a>
           <!--  <div  class="barra-servicios" id="barra-servicios"></div> -->
        </li>
        <li > 
            <!-- Temporalmente oculto --> 
            
            <!-- <a  href="/blog"  id="barra-blog" style="color: #8C8C8C" >Blog</a> -->

            <!-- <div class="barra-blog" id="barra-blog"></div> -->
        </li>
        <li >
            <a  href="/contacto"  id="barra-contacto" style="color: #8C8C8C" >Contacto</a>
            <!-- <div class="barra-contacto" id="barra-contacto"></div> -->
        </li>
        <li >
            <a  href="/dudas"  id="barra-dudas" style="color: #8C8C8C" >¿Dudas?</a>
            <!-- <div class="barra-dudas" id="barra-dudas"></div> -->
        </li>
        <li >
            <a  href="/cliente" id="barra-cliente" style="color: #8C8C8C" >Área Cliente</a>
            <!-- <div class="barra-cliente" id="barra-cliente"></div> -->
        </li>
        @if(Auth::guard('cliente')->check())
        <!-- <li >
            <a  href="/cliente" id="barra-libercosultas" style="color: #8C8C8C" >Consultas</a> -->
            <!-- <div class="barra-cliente" id="barra-cliente"></div> -->
     <!--    </li> -->
        @endif
        <li>
            <button type="button" class="boton_llamada" >
                <label class="texto-boton-llamada_menu" >Agenda una llamada</label>
            </button>
        </li>
        @if(Auth::guard('cliente')->check())
            <li>
                <button type="button" class="close_sesion" >
                    <a href="/logout" title="Cerrar Sesión">
                        <i  class="fa fa-fw fa-power-off" ></i>
                    </a>
                </button>
            </li>
        @endif
       
    </ul>

</nav>
<script>
    let URLactual = window.location;
    URLactual = URLactual.toString()
    URLactual = URLactual.split('/')     
    

    if(screen.width >= 769) { 

                     
                     
                    if(URLactual[3] /* URLactual[1] */ == '') {

                        document.getElementById('barra-inicio').style.color ="#17BA9C"
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                       /*  document.getElementById('barra-blog').style.color ="#8C8C8C" */
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C" 
                        document.getElementById('barra-libercosultas').style.color ="#8C8C8C"
                    } else 
                    
                    if(URLactual[3] /* URLactual[1] */ == 'equipo') {
                        document.getElementById('barra-inicio').style.color ="#8C8C8C"
                        document.getElementById('barra-equipo').style.color ="#17BA9C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                       /*  document.getElementById('barra-blog').style.color ="#8C8C8C" */
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                        document.getElementById('barra-libercosultas').style.color ="#8C8C8C"

                    } else 
                    if(URLactual[3] /* URLactual[1] */== 'servicios') { 
                        document.getElementById('barra-inicio').style.color ="#8C8C8C"
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#17BA9C"
                        /* document.getElementById('barra-blog').style.color ="#8C8C8C" */
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C" 
                        document.getElementById('barra-libercosultas').style.color ="#8C8C8C"
                    } else 
                    if(URLactual[3] /* URLactual[1] */ == 'blog') { 
                        document.getElementById('barra-inicio').style.color ="#8C8C8C"
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        /* document.getElementById('barra-blog').style.color ="#17BA9C" */
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                        document.getElementById('barra-libercosultas').style.color ="#8C8C8C"
                    } else 
                    if(URLactual[3]/*  URLactual[1] */== 'contacto') { 
                        document.getElementById('barra-inicio').style.color ="#8C8C8C"
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        /* document.getElementById('barra-blog').style.color ="#8C8C8C" */
                        document.getElementById('barra-contacto').style.color ="#17BA9C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C" 
                        document.getElementById('barra-libercosultas').style.color ="#8C8C8C"
                    } else 
                    if(URLactual[3] /* URLactual[1] */== 'dudas') { 
                        document.getElementById('barra-inicio').style.color ="#8C8C8C"
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        /* document.getElementById('barra-blog').style.color ="#8C8C8C" */
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#17BA9C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                        document.getElementById('barra-libercosultas').style.color ="#8C8C8C"
                    } else 
                    if(URLactual[3] /* URLactual[1] */== 'cliente') { 
                        document.getElementById('barra-inicio').style.color ="#8C8C8C"
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        /* document.getElementById('barra-blog').style.color ="#8C8C8C" */
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#17BA9C"
                        document.getElementById('barra-libercosultas').style.color ="#8C8C8C"
                    } else { 
                        document.getElementById('barra-inicio').style.color ="#8C8C8C"
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        /* document.getElementById('barra-blog').style.color ="#8C8C8C" */
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                        if(document.getElementById('barra-libercosultas'))
                                document.getElementById('barra-libercosultas').style.color ="#17BA9C"
                    }

    } else { 

                    if(URLactual[3] /* URLactual[1] */ == '') { 
                        document.getElementById('barra-inicio').style.color ="#17BA9C"
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                       /*  document.getElementById('barra-blog').style.color ="#8C8C8C" */
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C" 
                        document.getElementById('barra-libercosultas').style.color ="#8C8C8C"
                    } else 
                    
                    if(URLactual[3] /* URLactual[1] */ == 'equipo') { 
                        document.getElementById('barra-inicio').style.color ="#8C8C8C"
                        document.getElementById('barra-equipo').style.color ="#17BA9C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        /* document.getElementById('barra-blog').style.color ="#8C8C8C" */
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                        document.getElementById('barra-libercosultas').style.color ="#8C8C8C"
                    } else 
                    if(URLactual[3]/*  URLactual[1] */ == 'servicios') { 
                        document.getElementById('barra-inicio').style.color ="#8C8C8C"
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#17BA9C"
                        /* document.getElementById('barra-blog').style.color ="#8C8C8C" */
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C" 
                        document.getElementById('barra-libercosultas').style.color ="#8C8C8C"
                    } else 
                    if(URLactual[3] /* URLactual[1] */== 'blog') { 
                        document.getElementById('barra-inicio').style.color ="#8C8C8C"
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        /* document.getElementById('barra-blog').style.color ="#17BA9C" */
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                        document.getElementById('barra-libercosultas').style.color ="#8C8C8C"
                    } else 
                    if(URLactual[3] /* URLactual[1] */ == 'contacto') { 
                        document.getElementById('barra-inicio').style.color ="#8C8C8C"
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        /* document.getElementById('barra-blog').style.color ="#8C8C8C" */
                        document.getElementById('barra-contacto').style.color ="#17BA9C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                        document.getElementById('barra-libercosultas').style.color ="#8C8C8C"
                    } else 
                    if(URLactual[3] /* URLactual[1] */ == 'dudas') { 
                        document.getElementById('barra-inicio').style.color ="#8C8C8C"
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        /* document.getElementById('barra-blog').style.color ="#8C8C8C" */
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#17BA9C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                        document.getElementById('barra-libercosultas').style.color ="#8C8C8C"
                    } else 
                    if(URLactual[3] /* URLactual[1] */ == 'cliente') { 
                        document.getElementById('barra-inicio').style.color ="#8C8C8C"
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        /* document.getElementById('barra-blog').style.color ="#8C8C8C" */
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#17BA9C" 
                        document.getElementById('barra-libercosultas').style.color ="#8C8C8C"

                    }  else {
                        document.getElementById('barra-inicio').style.color ="#8C8C8C"
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        /* document.getElementById('barra-blog').style.color ="#8C8C8C" */
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C" 
                        document.getElementById('barra-libercosultas').style.color ="#17BA9C"
                    }

                   


    }

</script>