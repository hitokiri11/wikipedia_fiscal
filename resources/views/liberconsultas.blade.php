@extends('template.main')
@section('content')

<section  >
    <div class="titulo_libercosultas">
        WikiFiscal
    </div>
    <form method="get" action="{{route('liberconsultas')}}"> 
        <input type="hidden" name="search" id="search" value="true" />
        <div class="caja_texto">
            <input type="text" id="consulta" name="consulta" class="fondo_button redondeo_izq redondeo_der" style="padding-left: 4%;" placeholder="¿Qué es ser autonómo?" /> 
            <button id="search" class="redondeo_izq redondeo_der boton_buscar" type="submit" > 
                Buscar
            </button>
        </div>
    </form>

    <div class="resultado_consulta"></div>
        @if($flag == true)
            @if(count($res) > 0) 
                <table class="panel_video" > 
                    @foreach($res as $k => $v)
                        <tr>
                            <td>
                                <div class="tarjeta_video">
                                    <div class="content_video">
                                        <video class="video_res" src="{{asset('upload')}}/{{$v->video}}" type="video/webm"></video>
                                    </div>

                                    <div class="content_text_video" id="myBtn">
                                            <a onclick="modal_video('{{$v->video}}','{{$v->id}}','{{$v->titulo}}','{{$v->descripcion}}')" class="titulo_video" style="cursor: pointer;">
                                                   {{$v->titulo}}
                                            </a>

                                            <p class="parraf_video" id="myBtn">
                                                    {{ substr($v->descripcion,0,185) }}
                                                    <a 
                                                        onclick="modal_video('{{$v->video}}','{{$v->id}}','{{$v->titulo}}','{{$v->descripcion}}')" style="cursor: pointer;">
                                                        ...
                                                    </a>
                                            </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @else
                    <div class="no_resultado">
                        <div class="notif_no_result">:( No encontramos resultados de tu búsqueda</div>
                        <br>
                        <div id="myBtn">
                            <button id="myBtn"  type="button" class="boton_sugerencia" onclick="modal_video2()">
                                <i class="fas fa-comment fa-xs" style="color: #fff;"></i> 
                                &nbsp;
                                <label class="texto-boton-llamada">
                                    Hacer Sugerencia
                                </label>
                            </button> 
                        </div>

                    </div>
            @endif
        @endif


        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div id="body_video"></div>
            </div>
        </div>


        <div class="row  justify-content-center mt-5">
            @error('sugerencia')
                <div class="alert_sugeencia_error" >
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                        {{ $message }}
                </div>
            @enderror 
        </div>

        <div class="row justify-content-center">
        @if(Session::has('error'))
                <div class="alert_sugeencia_error" >
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                    {{Session::get('error')}}
                </div>
        @endif 

        @if(Session::has('success'))
                <div class="alert_sugerencia_save" >
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                    {{Session::get('success')}}
                </div>
        @endif
    </div>

</section>

<script type="text/javascript"> 

   /*  window.onload = pauseVid() */

   function modal_video2() { 

        let html = `
            <form method="post" action="{{route('sugerencia')}}">
                @csrf 
                <div class="titulo_sugerencia">
                    Agregue su Sugerencia
                </div>
                <div class="cuerpo_sugerencia">
                    <label for="sugerencia" class="form-label"><strong>Sugerencia:</strong></label>
                </div>
                <div class="input_sugerencia"> 
                    <textarea  rows="6" id="sugerencia" name="sugerencia" placeholder="Sugerencia" value="{{ old('sugerencia') }}" class="input_log" ></textarea>
                </div>

                <div class="footer_sugerencia">
                        <button  type="submit" class="boton_sugerencia">
                            <i class="fas fa-pencil" style="color: #fff;"></i> 
                            &nbsp;
                            <label class="texto-boton-llamada">
                                Sugerir
                            </label>
                        </button> 
                </div>
                
            </form>
        `
        document.getElementById('body_video').innerHTML = html;
    }
   

    const modal_video = (video,id,titulo, descripcion) => {     

        let html = `
            <div class="ratio ratio-16x9">
                <label class="titulo_video" style=" margin-bottom: 5%;">${titulo}</label>
                <video  class="prop_video" id="video" src="{{asset('upload')}}/${video}"  style="width:100%;" controls>
                </video >
                
            </div>
            <div class ="parraf_video" style="text-align:justify;font-size:16px;margin-top:1%;">
            ${descripcion}
            </div>
        `;
        
        fetch('/liberconsultas/acum_view/'+id)
        .then(function(response) { 
            document.getElementById('body_video').innerHTML = html;
        })
        .then(function(json) {
            console.log(json)
        });

    }

    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
    modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


    

</script>

@endsection
