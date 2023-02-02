@extends('template.main')
@section('content')
<section class="page-section log_cliente"  id="cliente" >
    <div class="col-md-6 col-lg-6 mb- mb-md-0 mt-5"  >
        <div class="card prop_card ">

            <form method="POST" action="{{ route('cliente') }}">
       
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
                                <span class="fa fa-eye-slash icon "></span> 
                            </button>
                        </div>
                    </div>
                 </div>
                 
                 <div class="row mb-8">
                    <div class="col d-flex justify-content-left">
                      <!-- Checkbox -->
                      <div class="form-check">
                            <input class="form-check-input" type="radio" value="" id="recordar"  />
                            <label class="form-check-label" for="recordar"> Recordarme </label>
                      </div>
                </div>
                <button  type="submit" class="btn btn-primary btn-block mb-8 mt-5 rounded-pill">{{ __('Login') }}Iniciar Sesión</button>

            </form>
        </div>
    </div>
</section>
@push('script')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
<script >
    function mostrarPass() {
        console.log('aquiii')
    }

</script>
@endpush
@endsection