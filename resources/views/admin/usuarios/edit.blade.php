@extends('adminlte::page')

@section('title', 'Nuevo Usuario')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="mt-5 col-10">
            <div class="card">
                <div class="card-header">
                    <h5><stron>Editar Usuario</stron></h5>
                </div> 
                <form method="post" action="{{route('users.update', $user->id)}}"  >
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ $user->name }}" />
                            @error('name')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" value="{{ $user->email }}" />
                            @error('email')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" value="{{ $user->password }}" />
                            @error('password')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="confirm-password" class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirmar Contraseña" value="{{ $user->password }}" />
                            @error('confirm-password')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="roles" class="form-label">Roles</label>
                            {!! Form::select('roles[]', $roles, $userRole, array('class' => 'form-control')) !!}
                        </div>

                    </div>
                    <div class="card-footer ">
                        <div class="row float-right">
                            <button type="submit" class="btn bg-teal" >
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
