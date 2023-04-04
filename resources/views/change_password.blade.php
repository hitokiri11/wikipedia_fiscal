@extends('template.main')
@section('content')
<section class="log_cliente" >

        <div id="password_requerido" class="password_requerido" style="display:none;" >
            Los campos contraseña y confirmación de contraseña son requeridos
        </div>

        <div id="password_diferente" class="password_diferente" style="display:none;" >
            La contraseña debe coincidir con la confirmación de la contraseña
        </div>

        <div class="text-center">
            Cambio de Password
        </div>

        <form method="post" action="{{route('change_password')}}" name="form_change_password">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$id}}" />
            <div class="prop_card">

                    <div class="label_log">
                        <label class="label_input" for="password">Contraseña</label>
                        <input type="password" id="password" name="password" class="input_log" />
                    </div>

                    <div class="label_log">
                        <label class="label_input" for="confirm-password">Confirmar Contraseña</label>
                        <input type="password" id="confirm-password" name="confirm-password" class="input_log" />
                    </div>

                    <button  type="button" class="boton_log" onclick="changePassword()">
                        <label class="texto-boton-llamada">
                            Guardar
                        </label>
                    </button>

                    <button  type="button" class="boton_log" style="background-color: red;" onclick="cancelar()">
                        <label class="texto-boton-llamada">
                            Cancelar
                        </label>
                    </button>
            </div>
        </form>
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

            setTimeout(() => {
                document.getElementById('password_requerido').style.display = 'none'
            }, 2000);
            return
        }
        if(password != re_password) { 
            document.getElementById('password_diferente').style.display = 'block'

            setTimeout(() => {
                document.getElementById('password_diferente').style.display = 'none'
            }, 2000);

            return
        }

        document.form_change_password.submit();
    }
</script>
@endsection