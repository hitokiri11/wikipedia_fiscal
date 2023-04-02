@extends('template.main')
@section('content')
@push('css-plugins')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
@endpush
<section> 
      <img src="assets/img/servicios/banner_contacto.png"   class="img-fluid  contacto_banner" alt="..."> 
      <img src="assets/img/servicios/responsive_contacto.png"   class="img-fluid  contacto_banner_responsive" alt="..."> 

      <p class="nuestras_oficinas">
            Nuestras oficinas
      </p>
      <div class="fondoBlacContacto">
            <div class="mapouter1">
                  <div class="gmap_canvas" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.2211463821272!2d-3.858778684670374!3d40.337439979374345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418f9d72caa959%3A0x584d528e711e14f!2sLiberfy.es!5e0!3m2!1ses-419!2sus!4v1679331424415!5m2!1ses-419!2sus" class="mapa_responsive"   height="248"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
            </div>

            <div class="info_contacto">
                  En Liberfy tenemos las soluciones que estás buscando
            </div>
            <button  type="button" class="boton_log" onclick="enviar()">
                    <label class="texto-boton-llamada">
                        Agenda una llamada
                    </label>
            </button>
            <br>
            <div class="lista_contatos">
                  *&nbsp;&nbsp;Escribenos: <strong style="color:#17BA9C;">info@liberfy.es</strong><br>
                  *&nbsp;&nbsp;Llámanos: <strong style="color:#17BA9C;">+34 627 32 25 41</strong><br>
                  *&nbsp;&nbsp;Síguenos &nbsp;<a href="http://www.facebook.com"><i class="fab fa-facebook-f fa-sm" style="color: #17BA9C"></i></a> &nbsp;&nbsp;<a href="http://www.instagram.com"><i class="fab fa-instagram-square fa-sm " style="color: #17BA9C"></i></a> &nbsp;&nbsp;con uno de nuestros asesores especializados
                  
            </div>
      </div>

      <div class="fondoBlacContacto2">
            <div class="izq_contacto">
                  <div class="info_contacto">
                        En Liberfy tenemos las soluciones que estás buscando
                  </div>      
                        
                  <div class="lista_contatos">
                        *&nbsp;&nbsp;Escribenos: <strong style="color:#17BA9C;">info@liberfy.es</strong><br>
                        *&nbsp;&nbsp;Llámanos: <strong style="color:#17BA9C;">+34 627 32 25 41</strong><br>
                        *&nbsp;&nbsp;Síguenos &nbsp;<a href="http://www.facebook.com"><i class="fab fa-facebook-f fa-sm" style="color: #17BA9C"></i></a> &nbsp;&nbsp;<a href="http://www.instagram.com"><i class="fab fa-instagram-square fa-sm " style="color: #17BA9C"></i></a> &nbsp;&nbsp;con uno de nuestros asesores especializados
                  
                  </div>
                  
                  <button  type="button" class="boton_log" onclick="enviar()">
                        <label class="texto-boton-llamada">
                              Agenda una llamada
                        </label>
                  </button>    
            </div>

            <div class="der_contacto">
                  <div class="mapouter2">
                        <div class="gmap_canvas" >
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.2211463821272!2d-3.858778684670374!3d40.337439979374345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418f9d72caa959%3A0x584d528e711e14f!2sLiberfy.es!5e0!3m2!1ses-419!2sus!4v1679331424415!5m2!1ses-419!2sus" class="map414"   width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.2211463821272!2d-3.858778684670374!3d40.337439979374345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418f9d72caa959%3A0x584d528e711e14f!2sLiberfy.es!5e0!3m2!1ses-419!2sus!4v1679331424415!5m2!1ses-419!2sus" class="map1200"   width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                  </div>
            </div>
         
      </div>
      
</section>
@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endpush
@endsection
