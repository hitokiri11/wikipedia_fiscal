@extends('template.main')
@section('content')
@push('css-plugins')
{{-- <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" /> --}}
@endpush
@push('style')
{{-- .container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }
  @media (min-width: 768px) {
    .container {
      width: 750px;
    }
  }
  @media (min-width: 992px) {
    .container {
      width: 970px;
    }
  }
  @media (min-width: 1200px) {
    .container {
      width: 1170px;
    }
  }
  @media (max-width: 767px) {
    #featureContainer .carousel-inner .carousel-item > div {
      display: none;
    }
    #featureContainer .carousel-inner .carousel-item > div:first-child {
      display: block;
    }
  }
  #featureContainer .carousel-inner .carousel-item.active,
  #featureContainer .carousel-inner .carousel-item-next,
  #featureContainer .carousel-inner .carousel-item-prev {
    display: flex;
  }
  @media (min-width: 768px) {
    
    #featureContainer .carousel-inner .carousel-item-end.active,
    #featureContainer .carousel-inner .carousel-item-next {
      transform: translateX(25%);
    }
    #featureContainer .carousel-inner .carousel-item-start.active, 
    #featureContainer .carousel-inner .carousel-item-prev {
      transform: translateX(-25%);
    }
    #featureContainer .card img{
      width: 90%;
      height: 40vh;
    }
    #featureContainer .carousel-item{
      justify-content: space-between;
    }
  }
  @media (max-width: 767px) {
    #featureContainer .card img{
      width: 100%;
      height: 75vh;
    }
  }
  #featureContainer .carousel-inner .carousel-item-end,
  #featureContainer .carousel-inner .carousel-item-start { 
    transform: translateX(0);
  }
  #featureContainer .card{
    border: 0;
  }
  #featureContainer .card{
    position: relative;
  }
  #featureContainer .card .card-img-overlays{
    position: absolute;
    bottom: 15%;
    left: 10%;
  }
  #featureContainer a{
    text-decoration: none;
  }
  #featureContainer .indicator{
    border: 1px solid rgb(202, 202, 202);
    padding: 3px 6px 3px 6px;
  }
  #featureContainer .indicator:hover{
    background-color: blue;
    border: 1px solid blue;
    transition: 200ms;
  }
  #featureContainer .indicator:hover{
    color: white;
    transition: 200ms;
  }
  #featureContainer .indicator {
    color: lightgray;
  }
  #featureContainer .float-end{
    padding-top: 10px;
  }
 --}}

@endpush

<section class="page-section"  id="equipo" >
    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5 titulosEquipos"  >
        <p class="tituloPrincipal">
            <b class="negritas">Liberfy</b>, una gestoría <br>
            que <b class="negritas">sí te entiende</b>
        </p>
        <br>
        <p class="parrafoEquipo" >
            <b class="negritas2">Nuestro equipo es el aliado que necesitas para delegar los trámites contables y la fiscalidad de tu empresa.
            <br><br>
            Fusionamos tecnología y atención personalizada, para que tengas el control de los números de manera simple y en tiempo real.
            <br><br>
            <b style="font-style: italic,font-weight:bold;">Con nuestra aplicación podrás ver en un mismo tablero:</b><br>
            <i>tus ingresos, egresos e impuestos</i>

        </p>
    </div>

{{-- SLIDE DE IMAGENES --}}
  <div class="align_img_1 ">
    <div class="container my-3 mt-5 " id="featureContainer">
         <div class="row mx-auto my-auto justify-content-center ">
              <div id="featureCarousel" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner " role="listbox">
                          <div class="carousel-item active ">
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <div class="card ">
                                        <div class="card-img">
                                              <img src="assets/img/team/img1.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                                        </div>
                                    </div>
                                </div>
                          </div>

                          <div class="carousel-item">
                              <div class="col-md-12 col-lg-12 col-xl-12">
                                  <div class="card ">
                                      <div class="card-img">
                                            <img src="assets/img/team/img2.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                                      </div>
                                  </div>
                              </div>
                          </div>


                          <div class="carousel-item">
                              <div class="col-md-12 col-lg-12 col-xl-12">
                                  <div class="card ">
                                      <div class="card-img">
                                          <img src="assets/img/team/img3.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>

                    <br>

                    <div class="float-end pe-md-4">

                          <a class="btn btn-primary rounded-circle indicator"  href="#featureCarousel" role="button" data-bs-slide="prev" >
                              <i class="fa-sharp fa-solid fa-arrow-left" ></i>
                          </a>
                          <a class="btn btn-primary rounded-circle w-au indicator"  href="#featureCarousel" role="button" data-bs-slide="next" >
                              <i class="fa-sharp fa-solid fa-arrow-right" ></i>
                          </a>

                    </div>

              </div>
         </div>
    </div>
  </div>

   <div class="align_img">
        <div class="container mt-5 " id="featureContainer">
            <div class="row mx-auto my-auto justify-content-center ">
            <div id="featureCarousel" class="carousel slide " data-bs-ride="carousel">

           
                <div class="carousel-inner " role="listbox">
                  <div class="carousel-item active ">
                      <div class="col-md-12 col-lg-12 col-xl-12">
                      <div class="card ">
                          <div class="card-img">
                          <img src="assets/img/team/img1.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                          <img src="assets/img/team/img2.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                          <img src="assets/img/team/img3.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                          </div>
                
                      </div>
                      </div>
                  </div>

                  <div class="carousel-item">
                      <div class="col-md-12 col-lg-12 col-xl-12">
                      <div class="card">
                          <div class="card-img">
                          <img src="assets/img/team/img1.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                          <img src="assets/img/team/img2.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                          <img src="assets/img/team/img3.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                          </div>
                
                      </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-12 col-lg-12 col-xl-12">
                      <div class="card">
                          <div class="card-img">
                              <img src="assets/img/team/img1.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                              <img src="assets/img/team/img2.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                              <img src="assets/img/team/img3.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                          </div>
                
                      </div>
                      </div>
                  </div>
            
                </div>
                <br>

                <div class="float-end pe-md-4">

                    <a class="btn btn-primary rounded-circle indicator"  href="#featureCarousel" role="button" data-bs-slide="prev" >
                        <i class="fa-sharp fa-solid fa-arrow-left" ></i>
                    </a>
                    <a class="btn btn-primary rounded-circle w-au indicator"  href="#featureCarousel" role="button" data-bs-slide="next" >
                        <i class="fa-sharp fa-solid fa-arrow-right" ></i>
                    </a>

                </div>

            </div>
            </div>
        </div>
    </div>
{{-- SLIDE DE IMAGENES --}} 

<div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5 titulosEquipos"  >
        <p class="parrafoEquipo" >
            <b class="negritas2">Nuestro equipo es el aliado que necesitas para delegar los trámites contables y la fiscalidad de tu empresa.
            <br><br>

        </p>
    </div>

<div class="row col-md-12 col-lg-12 mb- mb-md-0 mt-5 aling_card"  > 

    <div class="col-md-4 col-lg-4">
        <div class="card dimension_card">
            <img src="assets/img/team/card3.png" class="dimension_img" >
            <div class="card-img-overlays" style="text-align: center"><strong>José Llanos</strong></div>
        </div>
    </div>

    <div class="col-md-4 col-lg-4">
        <div class="card dimension_card">
            <img src="assets/img/team/card1.png" class="dimension_img" >
            <div class="card-img-overlays" style="text-align: center"><strong>Miguel Sierra</strong></div>
        </div>
    </div>

    <div class="col-md-4 col-lg-4">
        <div class="card dimension_card">
            <img src="assets/img/team/card2.png" class="dimension_img" >
            <div class="card-img-overlays" style="text-align: center"><strong>César Rivero</strong></div>
        </div>
    </div>

    
</div>

<div class="row">
    <div class="card dimension_card2">
          <img src="assets/img/team/card1.png" class="dimension_img" >
          <div class="card-img-overlays" style="text-align: center"><strong>Miguel Sierra</strong></div>
    </div>
    <div class="card dimension_card2">
            <img src="assets/img/team/card2.png" class="dimension_img" >
            <div class="card-img-overlays" style="text-align: center"><strong>César Rivero</strong></div>
    </div>
    <div class="card dimension_card2">
            <img src="assets/img/team/card3.png" class="dimension_img" >
            <div class="card-img-overlays" style="text-align: center"><strong>José Llanos</strong></div>
    </div>
</div>

<div class="row col-md-12 col-lg-12 mb- mb-md-0 fondoBlack3 "  >
    <div class="col-md-4 col-lg-2"   >
        <h6 class="fundadores">Fundadores</h6>
    </div>
    <div class="col-md-3 col-lg-3 parrafo_fundadores" >
        <p>
        Miguel Sierra, César Rivero y José Llanos conforman un tridente empresarial que comparten una visión similar sobre los negocios, así como una facilidad innata para crear soluciones comerciales estratégicas.
        </p>
    </div>
    <div class="col-md-3 col-lg-3 parrafo_fundadores2">
        <p>
        Liberfy es una empresa creada para liberar a los emprendedores disruptivos de las gestiones fiscales, contables o laborales, pero sobre todo para optimizar las cargas tributarias, resguardando la rentabilidad y legitimidad de las operaciones.
        </p>
    </div>
</div>

<div class="row col-md-12 col-lg-12 mb- mb-md-0  text_empresarial" >
    <p class="titulo_empresarial mt-4">
        El grupo Empresarial
    </p>
    <p class="parrafo_empresarial">
        Liberfy forma parte de un grupo compuesto por cuatro empresas y cada una de ellas desarrolla con 
        éxito uno o varios de los modelos de negocio para los que fueron creados nuestros servicios.
        <br><br>
        En el sector del alquiler tenemos <b>RentaYa</b> que gestiona más de 300 inquilinos aplicando el Rent to Rent 
        y el E-Rent, mmientras que si hablamos de Flipping House tenemos a <b>Viflip</b> una solución inmobiliaria 
        que se acerca a las 70 operaciones.
        <br><br>
        Otra de las empresas del grupo es <b>Inversores Inteligentes</b>, la Escuela de Negocios del sector 
        inmobiliario más grande de habla hispana, con 11.000 alumnos, en 21 países y más de 80.000 horas de 
        formación impartidas.
    </p>
</div>

<hr class="divisor-team" >

</section>
@push('script')
<script src="/path/to/cdn/bootstrap.bundle.min.js"></script>
<script>
let myCarousel = document.querySelectorAll('#featureContainer .carousel .carousel-item');
myCarousel.forEach((el) => {
  const minPerSlide = 4
  let next = el.nextElementSibling
  for (var i=1; i<minPerSlide; i++) {
    if (!next) {
      // wrap carousel by using first child
      next = myCarousel[0]
    }
    let cloneChild = next.cloneNode(true)
    el.appendChild(cloneChild.children[0])
    next = next.nextElementSibling
  }
})
</script>
@endpush
@endsection