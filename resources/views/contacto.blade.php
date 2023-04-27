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
      <div class="fondoBlacContacto" data-aos="fade-up">
            <div class="mapouter1">
                  <div class="gmap_canvas" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.2211463821272!2d-3.858778684670374!3d40.337439979374345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418f9d72caa959%3A0x584d528e711e14f!2sLiberfy.es!5e0!3m2!1ses-419!2sus!4v1679331424415!5m2!1ses-419!2sus" class="map280" width="240"  height="228"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.2211463821272!2d-3.858778684670374!3d40.337439979374345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418f9d72caa959%3A0x584d528e711e14f!2sLiberfy.es!5e0!3m2!1ses-419!2sus!4v1679331424415!5m2!1ses-419!2sus" class="mapa_responsive"   height="248"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
            </div>

            {{-- <div class="info_contacto">
                  En Liberfy tenemos las soluciones que estás buscando
            </div> --}}
            {{-- <button  type="button" class="boton_log" onclick="enviar()">
                    <label class="texto-boton-llamada">
                        Agenda una llamada
                    </label>
            </button> --}}
            <br>
            <div class="lista_contatos" > 
                 
                  <table>
                        <tr>
                              <td style="vertical-align: top;">
                                    <label style="font-size:50px">.</label>
                              </td>
                              <td>
                                    <div class="tit_contacto">C. Fuente Cisneros, 37,28922 Alcorcón, Madrid</div>
                              </td>
                        </tr>
                        <tr>
                              <td style="vertical-align: top;">
                                    <label style="font-size:50px">.</label>
                              </td>
                              <td><div class="tit_contacto">Escribenos: <strong style="color:#17BA9C;">info@liberfy.es</strong></div></td>
                        </tr>
                        <tr>
                              <td style="vertical-align: top;">
                                    <label style="font-size:50px">.</label>
                              </td>
                              <td>
                                    <div class="tit_contacto">
                                          Agenda <a href=""><strong style="color:#17BA9C;">aquí una llamada</strong></a> con uno de nuestros asesores especializados
                                    </div>
                              </td>
                        </tr>
                  </table>
                  
            </div>
      </div>

      <div class="fondoBlacContacto2">
            <div class="izq_contacto" data-aos="fade-right">
                  {{-- <div class="info_contacto">
                        En Liberfy tenemos las soluciones que estás buscando
                  </div>  --}}           
                  <div class="lista_contatos"> 
                        <table>
                              <tr>
                                    <td>
                                          <label style="font-size:50px">.</label>&nbsp;&nbsp;C. Fuente Cisneros, 37,28922 <br>
                                          &nbsp;&nbsp;&nbsp;&nbsp;Alcorcón, Madrid
                                    </td>
                              </tr>
                              <tr>
                                    <td><br><label style="font-size:50px">.</label>&nbsp;&nbsp;Escribenos: <strong style="color:#17BA9C;">info@liberfy.es</strong></td>
                              </tr>
                              <tr>
                                    <td>
                                          <br>
                                          <label style="font-size:50px">.</label>&nbsp;&nbsp;Agenda <a href=""><strong style="color:#17BA9C;">aquí una llamada</strong></a> con uno 
                                          <br>&nbsp;&nbsp;&nbsp;&nbsp;de nuestros asesores especializados
                                          
                                    </td>
                              </tr>
                        </table>
                  </div>
                  
                 {{--  <button  type="button" class="boton_log" onclick="enviar()">
                        <label class="texto-boton-llamada">
                              Agenda una llamada
                        </label>
                  </button>   --}}  
            </div>

            <div class="der_contacto" data-aos="fade-left" >
                  <div class="mapouter2">
                        <div class="gmap_canvas" >
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.2211463821272!2d-3.858778684670374!3d40.337439979374345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418f9d72caa959%3A0x584d528e711e14f!2sLiberfy.es!5e0!3m2!1ses-419!2sus!4v1679331424415!5m2!1ses-419!2sus" class="map414"   width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.2211463821272!2d-3.858778684670374!3d40.337439979374345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418f9d72caa959%3A0x584d528e711e14f!2sLiberfy.es!5e0!3m2!1ses-419!2sus!4v1679331424415!5m2!1ses-419!2sus" class="map1200"   width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.2211463821272!2d-3.858778684670374!3d40.337439979374345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418f9d72caa959%3A0x584d528e711e14f!2sLiberfy.es!5e0!3m2!1ses-419!2sus!4v1679331424415!5m2!1ses-419!2sus" class="map1440"   width="650" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                  </div>
            </div>
         
      </div>
      
</section>
<script>
      function verificarCheck() {
        if(document.getElementById('check').checked) {
            document.getElementById('nuestras_oficinas').style.display = 'none'
        } else {
            document.getElementById('nuestras_oficinas').style.display = 'block'
        }
    }
</script>
@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endpush
@endsection
