<section>
    <div class="parte_izquierda" id="parte_izquierda" data-aos="fade-down" >
        <div class="titulo_verde">
            LA MANO DERECHA DEL EMPRENDEDOR DEL SIGLO XXI
        </div> 
        <div class="titulo_section1">
            ¿Te imaginas liberarte de la gestión fiscal, laboral y contable con un solo CLIC?
        </div>
        {{-- <img src="assets/img/home/rectangle4791.png" class="video" alt="..." > --}}
        <video class="video" id="video" src="{{asset('assets/video/WebLiberfy.mp4')}}" type="video/webm" controls poster="{{asset('assets/img/servicios/responsive_contacto.png')}}"   muted  ></video>
    
        <div class="titulo_negro">
        Somos la mano derecha del emprendedor del siglo XXI
        </div>
        <div class="opciones_section1">
            <div class="check_seccion1">
                <i class="far fa-check-circle fa-lg checkClear"></i>
                <i class="fa fa-check-circle fa-lg checkDark"></i>
            </div>
            <div class="opcion1_section1"> 
            Tenemos la fusión perfecta entre tecnología y atención personalizada
            </div>
        </div>
        <div class="espacio_section1"></div>
        <div class="opciones_section2">
            <div class="check_seccion1">
                <i class="far fa-check-circle fa-lg checkClear"></i>
                <i class="fa fa-check-circle fa-lg checkDark"></i>
            </div>
            <div class="opcion1_section1">
            Conocemos la solución a cada uno de tus problemas fiscales, contables y laborales
            </div>
        </div>
        <div class="boton_section1">
            <button type="button" class="boton_llamada_"  onclick="agendaLlamada()">
                <label class="texto-boton-llamada">Agenda una llamada</label>
            </button>
        </div>
    </div>
    
    <div class="parte_derecha" data-aos="fade-up" >
        <video class="video_lg" id="video_lg" src="{{asset('assets/video/WebLiberfy.mp4')}}" type="video/webm" controls  poster="{{asset('assets/img/servicios/responsive_contacto.png')}}"  muted    ></video>
        {{-- <img src="assets/img/home/rectangle4791.png" class="video_lg" alt="..." > --}}
    </div>

</section>

<script> 

    if(screen.width >= 769) { 
        document.getElementById("video").autoplay=false
        document.getElementById("video_lg").autoplay=true 
    } else { 
        document.getElementById("video_lg").autoplay=false
        document.getElementById("video").autoplay=true 
    }


    function verificarCheck() {
        if(screen.width < 769) {
            if(document.getElementById('check').checked) {
                document.getElementById('video').style.display = 'none'
            } else {
                document.getElementById('video').style.display = 'block'
                document.getElementById('video').style.marginLeft  = '9%'
            } 
        }
    }

 
</script>