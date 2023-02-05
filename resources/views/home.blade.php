@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><strong>Bienvenido(a) {{ ucwords(auth()->user()->name) }}</strong></h1>
@stop

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-sm-4">
            <div class="card card-row card-out-line">
                <div class="card-header">
                    <h3 class="card-title"><strong>Videos Top 3</strong></h3>
                </div>
                <div class="card-body">
                    contenido
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card card-row card-out-line">
                <div class="card-header text-center">
                    <h3 class="card-title"><strong>Usuarios Activos</strong></h3>
                </div>
                <div class="card-body">
                    Cantidad: <strong>{{$cont_client_act}}</strong>
                </div>
            </div> 
        </div>
        <div class="col-12 col-sm-4">
            <div class="card card-row card-out-line">
                <div class="card-header text-center">
                    <h3 class="card-title text-center"><strong>Últimos Registros</strong></h3>
                </div>
                <div class="card-body"> 
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
@endsection
