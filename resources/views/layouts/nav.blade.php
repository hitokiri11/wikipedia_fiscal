<nav class="navbar navbar-expand-lg barraNavegacion fixed-top" id="mainNav">
    <div class="container">
        <a href="/"><img src="{{asset('assets/img/LOGO.svg')}}"  class="logo_liberfy"/></a>
        <a class="navbar-brand" href="#page-top"></a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary rounded boton_nenu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse list-menu" id="navbarResponsive"> 
            <ul class="navbar-nav ms-auto" >
                <li class="nav-item mx-0 mx-lg-1" ><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/equipo" style="color: #8C8C8C;" >Equipo</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/servicios" style="color: #8C8C8C;" >Servicios</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/blog" style="color: #8C8C8C;" >Blog</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/contacto" style="color: #8C8C8C;" >Contacto</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/dudas" style="color: #8C8C8C;" >¿Dudas?</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/cliente" style="color: #8C8C8C;" >Área Cliente</a></li>
                <li class="nav-item mx-0 mx-lg-1" >
                    <button type="button" class="btn btn-primary rounded-pill boton_llamada  nav-list" >
                        <label class="fs-6" style="padding-top:1%;padding-bottom:1%;font-weight: bold;" >Agenda una llamada</label>
                    </button>
                </li>
                @if(Auth::guard('cliente')->check())
                <li class="nav-item mx-0 mx-lg-1 mt-1 close_sesion" >
                    <a href="/logout" type="button" class="btn btn-danger rounded-pill " title="Cerrar Sesión">
                        <i  class="fa fa-fw fa-power-off" ></i>
                        
                    </a>
                </li>
                 @endif
            </ul>
        </div>
    </div>
</nav>