@extends('template.main')
@section('content')
<section class="page-section"  id="liberconsultas" >
    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5 conten_liberconsultas"  >
        <p class="titulo_libercosultas">
            Liberconsultas
        </p>
        <form method="get" action="{{route('liberconsultas')}}"> 
            <input type="hidden" name="search" id="search" value="true" />
            <div class="form-outline mb-3 ">
                <div class="input-group caja_busqueda ">
                        <input type="text" id="consulta" name="consulta" class="form-control  fondo_button redondeo_izq  justify-content-center" />

                        <button id="search" class="btn btn-primary redondeo_izq redondeo_der" type="submit" > 
                            Buscar
                        </button>
                </div>
            </div>
        </form>


            <div id="res" class="d-flex  col-md-12 col-lg-12 mb- mb-md-0 mt-5 ">
            @if($flag == true)
                @if(count($res) > 0) 
                        <table class="col-md-8 col-lg-8 panel_video" >
                            @foreach($res as $k => $v)
                                <tr>
                                    <td>
                                        <div class="row justify-content-center mt-2 col-md-10 col-lg-10">
                                                <div class="card mb-1" >
                                                    <div class="row g-0">
                                                        <div class="col-md-4">                                                   
                                                                <iframe class="prop_video" src="{{asset('upload')}}/{{$v->video}}" >
                                                                    allowfullscreen>
                                                                </iframe>  
                                                            </a>                                  
                                                        </div>
                                                        <div class="col-md-8 ">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{$v->titulo}}</h5>
                                                                    <p class="card-text">{{$v->descripcion}}</p>
                                                                    <a href="#" onClick="modal_video()" >Ver</a>
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
                    
                   
                        <div class="row col-6">
                            <p class="no_result_search" >
                                <strong>:( No encontramos resultados de tu búsqueda</strong>
                                <button class="btn btn-primary btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                    <i class="fas fa-comment fa-xs"></i>
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
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
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

@endsection
@push('js')
<script type="text/javascript"> 
    function modal_video() {
        console.log('aqui')
    }
</script>
@endpush