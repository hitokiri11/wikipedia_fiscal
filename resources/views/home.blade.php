@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><strong>Bienvenido(a) {{ ucwords(auth()->user()->name) }}</strong></h1>
@stop

@section('content')
<div class="container">
    <div class="card row col-md-12 col-lg-12">
        <div class="row mt-5">

                    <div class="col-md-3 col-sm-3 col-lg-3">
                        <div class="card bg-info  mb-3" >
                            <div class="card-header text-center">
                                <h3 class="card-title"><strong>Videos Top 3</strong></h3>
                            </div>
                            <div class="card-body">
                            <p class="card-text">
                                contenido
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-lg-3">
                        <div class="card bg-success mb-3"  >
                            <div class="card-header text-center">
                                <h3 class="card-title"><strong>Usuarios Activos</strong></h3>
                            </div>
                            <div class="card-body ">
                                <div class="card-text">
                                    Cantidad: <strong>{{$cont_client_act}}</strong>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-">
                        <div class="card bg-warning mb-3" >
                            <div class="card-header text-center">
                                <h3 class="card-title text-center"><strong>Últimos Registros</strong></h3>
                            </div>
                            <div class="card-body"> 
                                <div class="card-text">
                                    <ul>
                                        @forelse($ult_registros as $k => $v)
                                            <li>
                                                {{$v->name}} -- {{$v->email}}
                                            </li>
                                        @empty
                                            <p>No hay cliente activos....</p>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>          
    </div>
</div>
@endsection
