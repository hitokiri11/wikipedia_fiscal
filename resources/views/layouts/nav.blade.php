<nav class="navbar ">
    <input type="checkbox" id="check" />
    <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars"></i>
    </label>

    <a href="/"><img src="{{asset('assets/img/LOGO.svg')}}" class="logo_head" /></a>

    <ul class="menu">
        <li ><a  href="/equipo"  style="color: #8C8C8C;" >Equipo</a></li>
        <li ><a  href="/servicios"  style="color: #8C8C8C;" >Servicios</a></li>
        <li ><a  href="/blog"  style="color: #8C8C8C;" >Blog</a></li>
        <li ><a  href="/contacto"  style="color: #8C8C8C;" >Contacto</a></li>
        <li ><a  href="/dudas"  style="color: #8C8C8C;" >¿Dudas?</a></li>
        <li ><a  href="/cliente" style="color: #8C8C8C;" >Área Cliente</a></li>
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