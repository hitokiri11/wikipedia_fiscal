@extends('template.main')
@section('content')
<section class="log_cliente" >
    <div> 
        @if(Session::has('primary'))
            <div class="alert-primary " role="alert">
            {{Session::get('primary')}}
            </div>  
        @endif 
        @if(Session::has('error'))
            <div class="alert-danger " role="alert">
            {{Session::get('error')}}
            </div>  
        @endif 
        
        <div class="col-md-12 col-lg-12 justify-content-center">
            <div class="alert-danger " role="alert" id="password_requerido" style="display:none;">
                Los campos email y contraseña son requeridos
            </div>
        </div>

        <div class="prop_card" id="prop_card" data-aos="fade-down" > 
            <form method="POST" action="{{ route('cliente') }}" id="form_cliente" name="form_cliente">
       
                @csrf 
                <input type="hidden" name="cliente" id="cliente" value="true" />
                <div class="label_log">
                        <label class="label_input" for="email">E-Mail</label>
                        <input type="email" id="email" name="email" class="input_log" />
                </div>

                <div class="label_log">
                        <label class="label_input" for="password">Contraseña</label>
                        <div class="input-wrapper">
                            <input type="password" id="password" name="password" class="input_log" > 
                            <button id="show_password" class="btn_icon icon" type="button" onclick="mostrarPass();" > 
                                <i id="iconfa" class="fa fa-eye-slash" style="color:#17BA9C;"></i> 
                                <i id="iconfa2" class="fa fa-eye" style="display: none;color:#17BA9C;"></i>
                            </button>
                            
                        </div>

                        <div class="redondeo_der altura_input">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"  id="recordar" />
                                <label class="form-check-label" for="recordar"> Recordarme </label>
                            </div>

                        </div>
                </div>
                 
             
                <button  type="button" class="boton_log" onclick="enviar()">
                    <label class="texto-boton-llamada">
                        Iniciar Sesión
                    </label>
                </button>
                
                

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

    function verificarCheck() {
        if(document.getElementById('check').checked) {
            document.getElementById('prop_card').style.display = 'none'
        } else {
            setTimeout(() => {
                document.getElementById('prop_card').style.display = 'block'
            }, 200);
        }
    }

</script>

@endsection