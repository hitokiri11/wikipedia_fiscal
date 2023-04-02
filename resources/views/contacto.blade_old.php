@extends('template.main')
@section('content')
@push('css-plugins')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
@endpush
<section class="page-section seccion_contacto"  id="contacto" >
    <div class="col-md-12 col-lg-12 mb- mb-md-0" >
        <div>
            <img src="assets/img/servicios/banner_contacto.png"   class="img-fluid  contacto_banner" alt="..."> 
            <img src="assets/img/servicios/responsive_contacto.png"   class="img-fluid  contacto_banner_responsive" alt="..."> 
            <div >
              <p class="nuestras_oficinas">Nuestras oficinas</p>
            </div>
        </div>
    </div>
    <div class="fondoBlacContacto row">
      <div class="col-md-6 col-lg-6 mb- mb-md-0">
            <div class="mapouter1">
                  <div class="gmap_canvas" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.2211463821272!2d-3.858778684670374!3d40.337439979374345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418f9d72caa959%3A0x584d528e711e14f!2sLiberfy.es!5e0!3m2!1ses-419!2sus!4v1679331424415!5m2!1ses-419!2sus"    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
            </div>
            <div class="info_contacto" >
                  <p >
                        En Liberfy tenemos las soluciones que estás buscando
                  </p>
                  <div class="row mt-0">
                        <div class="col-md-6 col-lg-3 offset-lg-0" >
                              <button type="button" class="btn btn-primary rounded-pill mt-2 boton_llamada_contacto" >
                                    <label class="texto-boton-llamada">Agenda una llamada</label>
                              </button>
                        </div>
                  </div>
            <br>

            <ul class="lista_contatos">
                  <li style="margin-top: 3%;">
                        Escribenos: <strong style="color:#17BA9C;">info@liberfy.es</strong>
                  </li>
                  <li style="margin-top: 3%;">
                  Llámanos: <strong style="color:#17BA9C;">+34 627 32 25 41</strong>
                  </li>
                  <li style="margin-top: 3%;">
                  Síguenos &nbsp;<a href="http://www.facebook.com"><i class="fab fa-facebook-f fa-sm" ></i></a> &nbsp;&nbsp;
                         <a href="http://www.instagram.com"><i class="fab fa-instagram-square fa-sm " ></i></a> &nbsp;&nbsp;con uno de nuestros asesores especializados
                  </li>
            </ul>
            </div>
      </div>

      <div class="col-md-6 col-lg-6 mb- mb-md-0 mt-5">
      
            <div class="mapouter2">
                  <div class="gmap_canvas" >

                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.2211463821272!2d-3.858778684670374!3d40.337439979374345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418f9d72caa959%3A0x584d528e711e14f!2sLiberfy.es!5e0!3m2!1ses-419!2sus!4v1679331424415!5m2!1ses-419!2sus"  class="mapa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
            </div>
      </div>
      
    </div> 

    
</section>
@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endpush
@endsection
