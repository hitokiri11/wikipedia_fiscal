<nav class="navbar ">
    <input type="checkbox" id="check" onclick="verificarCheck()"/>
    <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars"></i>
    </label>

    <a href="/"><img src="{{asset('assets/img/LOGO.svg')}}" class="logo_head" /></a>

    <ul class="menu">
        
        <li >
            <a  href="/equipo" id="barra-equipo"  >Equipo</a>
           <!--  <div class="barra-equipo" id="barra-equipo"></div> -->
        </li>
        <li >
            <a  href="/servicios" id="barra-servicios"  >Servicios</a>
           <!--  <div  class="barra-servicios" id="barra-servicios"></div> -->
        </li>
        <li >
            <a  href="/blog"  id="barra-blog" >Blog</a>
            <!-- <div class="barra-blog" id="barra-blog"></div> -->
        </li>
        <li >
            <a  href="/contacto"  id="barra-contacto" >Contacto</a>
            <!-- <div class="barra-contacto" id="barra-contacto"></div> -->
        </li>
        <li >
            <a  href="/dudas"  id="barra-dudas" >¿Dudas?</a>
            <!-- <div class="barra-dudas" id="barra-dudas"></div> -->
        </li>
        <li >
            <a  href="/cliente" id="barra-cliente" >Área Cliente</a>
            <!-- <div class="barra-cliente" id="barra-cliente"></div> -->
        </li>
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
        
                    if(URLactual[3] == '') {
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        document.getElementById('barra-blog').style.color ="#8C8C8C"
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                    }
                    
                    if(URLactual[3] == 'equipo') {
                        document.getElementById('barra-equipo').style.color ="#17BA9C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        document.getElementById('barra-blog').style.color ="#8C8C8C"
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"

                    } 
                    if(URLactual[3] == 'servicios') {
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#17BA9C"
                        document.getElementById('barra-blog').style.color ="#8C8C8C"
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                    }
                    if(URLactual[3] == 'blog') {
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        document.getElementById('barra-blog').style.color ="#17BA9C"
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                    }
                    if(URLactual[3] == 'contacto') {
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        document.getElementById('barra-blog').style.color ="#8C8C8C"
                        document.getElementById('barra-contacto').style.color ="#17BA9C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                    }
                    if(URLactual[3] == 'dudas') {
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        document.getElementById('barra-blog').style.color ="#8C8C8C"
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#17BA9C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                    }
                    if(URLactual[3] == 'cliente') {
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        document.getElementById('barra-blog').style.color ="#8C8C8C"
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#17BA9C"
                    }

    } else { 



                    if(URLactual[3] == '') {
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        document.getElementById('barra-blog').style.color ="#8C8C8C"
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                    }
                    
                    if(URLactual[3] == 'equipo') {
                        document.getElementById('barra-equipo').style.color ="#17BA9C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        document.getElementById('barra-blog').style.color ="#8C8C8C"
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"

                    } 
                    if(URLactual[3] === 'servicios') {
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#17BA9C"
                        document.getElementById('barra-blog').style.color ="#8C8C8C"
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                    }
                    if(URLactual[3] === 'blog') {
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        document.getElementById('barra-blog').style.color ="#17BA9C"
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                    }
                    if(URLactual[3] === 'contacto') {
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        document.getElementById('barra-blog').style.color ="#8C8C8C"
                        document.getElementById('barra-contacto').style.color ="#17BA9C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                    }
                    if(URLactual[3] === 'dudas') {
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        document.getElementById('barra-blog').style.color ="#8C8C8C"
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#17BA9C"
                        document.getElementById('barra-cliente').style.color ="#8C8C8C"
                    }
                    if(URLactual[3] === 'cliente') {
                        document.getElementById('barra-equipo').style.color ="#8C8C8C"
                        document.getElementById('barra-servicios').style.color ="#8C8C8C"
                        document.getElementById('barra-blog').style.color ="#8C8C8C"
                        document.getElementById('barra-contacto').style.color ="#8C8C8C"
                        document.getElementById('barra-dudas').style.color ="#8C8C8C"
                        document.getElementById('barra-cliente').style.color ="#17BA9C"

                    } 



    }

</script>