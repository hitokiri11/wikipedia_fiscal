@extends('template.main')
@section('content')
<section class="page-section "  id="liberconsultas" >
    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5 conten_liberconsultas"  >
        <p class="titulo_libercosultas">
            Liberconsultas
        </p>
        <form>
            <div class="form-outline mb-3">
                <div class="input-group caja_busqueda">
                    <input type="text" id="consulta" class="form-control  fondo_button redondeo_izq " />

                        <button id="search" class="btn btn-primary redondeo_izq redondeo_der" type="button" > 
                            Buscar
                        </button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5"  >
        <video class="prop_video"  controls >
            <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />
        </video>
    </div>
</section>
@endsection