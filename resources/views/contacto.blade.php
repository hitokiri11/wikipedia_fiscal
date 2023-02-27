@extends('template.main')
@section('content')
@push('css-plugins')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
@endpush
<section class="page-section seccion_contacto"  id="contacto" >
    <div class="col-md-12 col-lg-12 mb- mb-md-0" >

          <div id="carouselExampleDark" class="carousel carousel-dark slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>

              <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                          <img src="assets/img/contactos/images.jpg" class=" banner_contacto" alt="...">
                          <div >
                              <h4 class="texto_carrusel">Nuestras Oficinas</h4>
                          </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                            <img src="assets/img/contactos/images2.png" class=" banner_contacto" alt="...">
                            <div   >
                                  <h4 class="texto_carrusel">Nuestras Oficinas</h4>
                            </div>
                      </div>
                      <div class="carousel-item">
                            <img src="assets/img/contactos/images3.png" class=" banner_contacto" alt="...">
                            <div>
                                  <h4 class="texto_carrusel">Nuestras Oficinas</h4>
                            </div>
                      </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                </button>
            </div>

    </div> 
    <div class="fondoBlack2 row">
        <div class="col-md-6 col-lg-6 mb- mb-md-0">
              <div class="lista_contacto" >
                    <ul>
                      <li>
                        C. Fuente Cisnero, 37, 28922 Alcorcón, Madrid
                      </li>
                      <li style="margin-top: 3%;">
                          Escribenos: <strong style="color:#17BA9C;">info@liberfy.es</strong>
                      </li>
                      <li style="margin-top: 3%;">
                        Agenda <a href="#">aquí una llamada</a> con uno de nuestros asesores especializados
                      </li>
                    </ul>
              </div>
        </div>

        <div class="col-md-6 col-lg-6 mb- mb-md-0 mt-5">
             
                    <div class="mapouter">
                            <div class="gmap_canvas mapa_contacto">
                                    <iframe 
                                          class="frame_mapa"
                                          id="gmap_canvas" 
                                          src="https://maps.google.com/maps?q=C.%20Fuente%20Cisnero,%2037,%2028922%20Alcorc%C3%B3n,%20Madrid&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                                          frameborder="0" 
                                          scrolling="no" 
                                          marginheight="0" 
                                          marginwidth="0">
                                      </iframe>
                                      <!-- <a href="https://123movies-to.org">123movies</a> -->
                                      <br>
                                      <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
                                      <a href="https://www.embedgooglemap.net"></a>
                                      <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                              </div>
                        </div>
                  </div>
      
    </div> 

    
</section>
@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endpush
@endsection
