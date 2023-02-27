@extends('template.main')
@section('content')
<section class="page-section" >
    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5 " > 
        <form method="post" action="{{route('change_password')}}" name="form_change_password">
                @csrf 
                <input type="hidden" name="id" id="id" value="{{$id}}" />
                <div class="container_password"> 
                    <div class="card mb-3 p-2 tarjetas_blog" > 

                        <div class="col-md-12 col-lg-12 justify-content-center">
                            <div class="alert alert-danger " role="alert" id="password_requerido" style="display:none;">
                                Los campos contraseña y confirmación de contraseña son requeridos
                            </div>
                            <div class="alert alert-danger " role="alert" id="password_diferente" style="display:none;">
                                La contraseña debe coincidir con la confirmación de la contraseña
                            </div>
                        </div>

                        <div class="card-header text-center">
                            <h5>Cambio de Password</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input 
                                    type="password" 
                                    class="form-control" 
                                    id="password" 
                                    name="password" p
                                    laceholder="Contraseña" v
                                    alue="{{ old('password') }}" 
                                />
                                @error('password')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirmar Contraseña</label>
                                <input 
                                    type="password" 
                                    class="form-control" 
                                    id="confirm-password" 
                                    name="confirm-password" 
                                    placeholder="Confirmar Contraseña" 
                                    value="{{ old('confirm-password') }}" 
                                />
                                @error('confirm-password')
                                    <p class="error-message">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row float-right">
                                <button type="button" class="btn btn-primary" onclick="changePassword()">
                                    <i  class="fas fa-save" ></i>
                                    Guardar
                                </button>
                                &nbsp;
                                <button type="button" class="btn btn-danger" onclick="cancelar()">
                                    <i  class="fas fa-xmark" ></i>
                                    Cancelar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</section>
<script>
    const cancelar = () => { 
        window.location = '/cliente ';
    }
    const changePassword = () => {
        let password    = document.getElementById('password').value;
        let re_password = document.getElementById('confirm-password').value;

        if(!password || !re_password) {
            document.getElementById('password_requerido').style.display = 'block'
            return
        }
        if(password != re_password) { 
            document.getElementById('password_diferente').style.display = 'block'
            return
        }

        document.form_change_password.submit();
    }
</script>
@endsection