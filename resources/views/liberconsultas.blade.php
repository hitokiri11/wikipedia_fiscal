@extends('template.main')
@section('content')
<section class="page-section "  id="liberconsultas" >
    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5 conten_liberconsultas"  >
        <p class="titulo_libercosultas">
            Liberconsultas
        </p>
        <form method="get" action="{{route('liberconsultas')}}"> 
            <input type="hidden" name="search" id="search" value="true" />
            <div class="form-outline mb-3">
                <div class="input-group caja_busqueda">
                    <input type="text" id="consulta" name="consulta" class="form-control  fondo_button redondeo_izq " />

                        <button id="search" class="btn btn-primary redondeo_izq redondeo_der" type="submit" > 
                            Buscar
                        </button>
                </div>
            </div>
        </form>


        @if(Session::has('error'))
                <div class="col-7 alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{Session::get('error')}}
                </div>  
        @endif 

        @if(Session::has('success'))
                <div class="col-7 alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{Session::get('success')}}
                </div>  
        @endif


            <div id="res" class="d-flex justify-content-center col-md-12 col-lg-12 mb- mb-md-0 mt-5 ">
            @if($flag == true)
                @if(count($res) > 0) 
                        <table class="col-md-12 col-lg-12">
                            @foreach($res as $k => $v)
                                <tr>
                                    <td>
                                        <div class="row justify-content-center mt-2 col-md-10 col-lg-10">
                                                <div class="card mb-1" >
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <!-- <video class="prop_video"  controls >
                                                                <source src="{{$v->video}}" type="video/mp4" />
                                                            </video> -->
                                                            <iframe class="prop_video" src="{{$v->video}}" allowfullscreen></iframe>                                    
                                                        </div>
                                                        <div class="col-md-8 ">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{$v->titulo}}</h5>
                                                                    <p class="card-text">{{$v->descripcion}}</p>
                                                                    
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
                    
                    <form method="post" action="{{route('sugerencia')}}">
                        @csrf 
                        <p class="justify-content-center">
                            <strong>:( No encontramos resultados de tu búsqueda</strong>
                        </p>
                        <div class="justify-content-center mt-3 col-12">
                            <label for="sugerencia" class="form-label"><strong>Sugerencia:</strong></label>
                            <input type="text" class="form-control" id="sugerencia" name="sugerencia" placeholder="Sugerencia" value="{{ old('sugerencia') }}" >
                            @error('sugerencia')
                                <p class="error-message">{{ $message }}</p>
                            @enderror 
                            <button type="submit" class="btn btn-success mt-2 btn-block" >
                                <i  class="fas fa-pencil" ></i>
                                Sugerir
                            </button>
                        </div>

                        
                    </form>
                @endif
            @endif
        </div>

    </div>

</section>

@endsection
@push('js')
<script> 
    console.log('aqui')
    function search() {
        console.log('aqui')
    }
</script>
@endpush