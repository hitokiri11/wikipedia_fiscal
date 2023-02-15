@extends('adminlte::page')

@section('title', 'Nuevo Rol')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="mt-5 col-10">
            <div class="card">
                <div class="card-header">
                    <h5><stron>Nuevo Rol</stron></h5>
                </div> 
                <form method="post" action="{{route('roles.store')}}"  >
                    @csrf 
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}" />
                            @error('name')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                            
                        <div class="mb-3">
                            <label for="" class="form-label">Permisos para el Rol</label>
                            <br>
                            @foreach($permission as $k => $v)
                                <label>
                                    {{ Form::checkbox('permission[]',$v->id, false, array('class' => 'name')) }}
                                    {{ $v->name }}
                                </label>
                                <br>
                            @endforeach
                            @error('permission[]')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="card-footer ">
                        <div class="row float-right">
                            <button type="submit" class="btn btn-success" >
                                <i  class="fas fa-user" ></i>
                                Guardar
                            </button>
                            &nbsp;
                            <button type="reset" class="btn btn-danger" >
                                <i  class="fas fa-trash" ></i>
                                Limpiar
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
