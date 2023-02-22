@extends('template.main')
@section('content')
<section class="page-section log_cliente"  id="cliente" >
    <div class="col-md-6 col-lg-6 mb- mb-md-0 mt-5"  > 
        @if(Session::has('primary'))
            <div class="alert alert-primary " role="alert">
            {{Session::get('primary')}}
            </div>  
        @endif 
        @if(Session::has('error'))
            <div class="alert alert-danger " role="alert">
            {{Session::get('error')}}
            </div>  
        @endif 
        
        <div class="col-md-12 col-lg-12 justify-content-center">
            <div class="alert alert-danger " role="alert" id="password_requerido" style="display:none;">
                Los campos email y contraseña son requeridos
            </div>
        </div>
        <div class="card prop_card "> 
            <form method="POST" action="{{ route('cliente') }}" id="form_cliente" name="form_cliente">
       
                @csrf 
                <input type="hidden" name="cliente" id="cliente" value="true" />
                <div class="form-outline mb-3">
                        <label class="form-label" for="email">E-Mail</label>
                        <input type="email" id="email" name="email" class="form-control rounded-pill fondo_button" />
                </div>
                <div class="form-outline mb-2">
                    <label class="form-label" for="password">Contraseña</label>
                    <div class="input-group ">
                        <input type="password" id="password" name="password"  class="form-control fondo_button redondeo_izq altura_input" /> 
                        <div class="input-group-text redondeo_der altura_input">
                            <button id="show_password" class="btn" type="button" onclick="mostrarPass();" > 
                                <span id="iconfa" class="fa fa-eye-slash icon"></span> 
                                <span id="iconfa2" class="fa fa-eye icon" style="display: none;"></span>
                            </button>
                        </div>
                    </div>
                 </div>
                 
                 <div class="row mb-8">
                    <div class="col d-flex justify-content-left">
                      <!-- Checkbox -->
                      <div class="form-check">
                            <input class="form-check-input" type="checkbox"  id="recordar" />
                            <label class="form-check-label" for="recordar"> Recordarme </label>
                      </div>
                </div>
                <button  type="button" class="btn btn-primary btn-block mb-8 mt-5 rounded-pill" onclick="enviar()">Iniciar Sesión</button>

            </form>
        </div>
    </div>
</section>
<script >
    let flag_input = false; 
    let rec = document.getElementById('recordar');
    rec.addEventListener("change", validaCheckbox, false);

    const  mostrarPass = () => { 
        let password    = document.getElementById('password');
        let iconfa      = document.getElementById('iconfa');
        let iconfa2     = document.getElementById('iconfa2');

        if(flag_input) {
            flag_input = false;
        } else {
            flag_input = true;
        }
        

        if(flag_input === true) { 
            password.setAttribute('type','text');
            iconfa.style.display    = 'none';
            iconfa2.style.display   = 'block';
        } else { 
            password.setAttribute('type','password');
            iconfa2.style.display   = 'none';
            iconfa.style.display    = 'block';
        }
        
    } 

    function validaCheckbox() {
        var checked = rec.checked;
        if(checked){
            document.getElementById('form_cliente').setAttribute( 'autocomplete', 'on' );
        } else {
            document.getElementById('form_cliente').setAttribute( 'autocomplete', 'off' );
        }

    } 

    const enviar = () => {
        let password    = document.getElementById('password').value;
        let email       = document.getElementById('email').value;

        if(!password || !email) {
            document.getElementById('password_requerido').style.display = 'block'
            return
        }


        document.form_cliente.submit();
    }

</script>

@endsection