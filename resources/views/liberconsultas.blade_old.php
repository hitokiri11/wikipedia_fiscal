@extends('template.main')
@section('content')

<section class="page-section"  id="liberconsultas" >
    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5 conten_liberconsultas"  >
        <p class="titulo_libercosultas">
            Wiki Fiscal
        </p>
        <form method="get" action="{{route('liberconsultas')}}"> 
            <input type="hidden" name="search" id="search" value="true" />
            <div class="form-outline mb-3 ">
                <div class="input-group caja_busqueda ">
                        <input type="text" id="consulta" name="consulta" class="form-control  fondo_button redondeo_izq justify-content-center" style="padding-left: 4%;"/>

                        <button id="search" class="btn btn-primary redondeo_izq redondeo_der" type="submit" > 
                            Buscar
                        </button>
                </div>
            </div>
        </form>


            <div id="res" class="d-flex  col-md-12 col-lg-12 mb- mb-md-0 mt-5 ">
            @if($flag == true)
                @if(count($res) > 0) 
                        <table class="col-md-9 col-lg-9 panel_video" >
                            @foreach($res as $k => $v)
                                <tr>
                                    <td >
                                        <div class="row  mt-2 col-md-10 col-lg-10">
                                                <div class="card " >
                                                    <div class="row ">
                                                        <div class="col-md-4 col-lg-4">  
                                                             <iframe class="prop_video" src="{{asset('upload')}}/{{$v->video}}" allowfullscreen >
                                                            </iframe>         
                                                           <!--  <video  class="prop_video" src="{{asset('upload')}}/{{$v->video}}"   controls>
                                                            </video > -->
                                                            
                                                        </div>
                                                        <div class="col-md-8 col-lg-8 ">
                                                            <div class="p-1">
                                                                <div class="row float-start">
                                                                        <a 
                                                                        class="btn btn-link text-decoration-none" 
                                                                        data-bs-toggle="modal" 
                                                                        data-bs-target="#modal_video" 
                                                                        onclick="modal_video('{{$v->video}}','{{$v->id}}','{{$v->titulo}}','{{$v->descripcion}}')">
                                                                            <h5 >{{$v->titulo}}</h5>
                                                                        </a>
                                                                </div>
                                                                <br>
                                                                <div class="row float-start">
                                                                    <p class="text-justify ">
                                                                        {{ substr($v->descripcion,0,185) }}
                                                                        <a 
                                                                            class="btn btn-link " 
                                                                            data-bs-toggle="modal" 
                                                                            data-bs-target="#modal_video" 
                                                                            onclick="modal_video('{{$v->video}}','{{$v->id}}','{{$v->titulo}}','{{$v->descripcion}}')">
                                                                            ...
                                                                        </a>
                                                                    </p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        
                @else
                    
                   
                        <div class="row col-12 text-center">
                            <p class="no_result_search" >
                                <strong>:( No encontramos resultados de tu búsqueda</strong>
                                <br>
                                <button class="btn btn-primary btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                    <i class="fas fa-comment fa-xs"></i> 
                                    &nbsp; 
                                    Hacer Sugerencia
                                </button>
                            </p>
                        </div>
                    
            
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                            <form method="post" action="{{route('sugerencia')}}">
                            @csrf 
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Agregue su Sugerencia</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="justify-content-center mt-3 col-12">
                                                <label for="sugerencia" class="form-label"><strong>Sugerencia:</strong></label>
                                                <input type="text" class="form-control" id="sugerencia" name="sugerencia" placeholder="Sugerencia" value="{{ old('sugerencia') }}" >
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"  >Cerrar</button>
                                           <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
                                            <button type="submit" class="btn btn-primary btn-block" >
                                                <i  class="fas fa-pencil" ></i>
                                                Sugerir
                                            </button>
                                        </div>
                                    </div>
                                </div>
                             </form>
                        </div>   
                @endif
            @endif
        </div>


        <div class="modal fade" id="modal_video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="justify-content-center mt-3 col-12">
                                <div id="ver_video" class="col-md-12 col-lg-12 justify-content-center"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="pauseVid()" >Cerrar</button>
                        </div>
                    </div>
                </div>
        </div>
        
    </div>
    <div class="row  justify-content-center mt-5">
            @error('sugerencia')
                <div class="alert alert-danger alert-dismissible fade show col-5 text-center" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ $message }}
                </div>
                    <!-- <p class="error-message" style="color:red;font-size:1.2rem;">{{ $message }}</p> -->
            @enderror 
    </div>

    <div class="row justify-content-center">
        @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show col-5 text-center" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{Session::get('error')}}
                </div>
        @endif 

        @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show col-5 text-center" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{Session::get('success')}}
                </div>
        @endif
    </div>
</section>

<script type="text/javascript"> 
    const modal_video = (video,id,titulo, descripcion) => { 
        
        let html = `
            <div class="ratio ratio-16x9">
                <label style="font-size:16px;font-weight: bold; margin-bottom: 5%;">${titulo}</label>
                <video  class="prop_video" id="video" src="{{asset('upload')}}/${video}"  style="width:100%;" controls>
                </video >
                
            </div>
            <div style="text-align:justify;font-size:16px;margin-top:1%;font-weight: bold;">
            ${descripcion}
            </div>
        `;
        
        fetch('/liberconsultas/acum_view/'+id)
        .then(function(response) { 
            document.getElementById('ver_video').innerHTML = html;
        })
        .then(function(json) {
            console.log(json)
        });

    }

    function pauseVid() { 
        video.pause(); 
    }

</script>

@endsection
