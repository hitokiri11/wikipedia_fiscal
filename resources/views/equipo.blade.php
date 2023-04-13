@extends('template.main')
@section('content')
@push('css-plugins')
@endpush
@push('style')

@endpush
<section >
      
        <div class="titulo_team">
            Liberfy, una gestoría
            que <b >sí te entiende</b>
        </div>

        <div class="parrafo_team_titulo">
            <label style="font-weight: 600;">Nuestro equipo</label> es el aliado que necesitas para delegar los trámites contables y la fiscalidad de tu empresa.
            <br><br>
            Fusionamos tecnología y atención personalizada, para que tengas el control de los números de manera simple y en tiempo real.
            <br><br>
            Con nuestra aplicación podrás ver en un mismo tablero:<br>
            <i style="font-weight: 510;">tus ingresos, egresos e impuestos</i>
        </div>

            <div class="carrusel_responsive">
                    <div class="slide">
                          <div class="slide-inner">
                              <input class="slide-open" type="radio" id="slide-1" 
                                    name="slide" aria-hidden="true" hidden="" checked="checked">
                              <div class="slide-item">
                                    <img src="assets/img/team/img1.png" height="296" >
                              </div>
                              <input class="slide-open" type="radio" id="slide-2" 
                                    name="slide" aria-hidden="true" hidden="">
                              <div class="slide-item">
                                    <img src="assets/img/team/img2.png" height="296" >
                              </div>
                              <input class="slide-open" type="radio" id="slide-3" 
                                    name="slide" aria-hidden="true" hidden="">
                              <div class="slide-item">
                                    <img src="assets/img/team/img3.png"  height="296" >
                              </div>

                              <label for="slide-3" class="slide-control prev control-1">‹</label>
                              <label for="slide-2" class="slide-control next control-1">›</label>
                              <label for="slide-1" class="slide-control prev control-2">‹</label>
                              <label for="slide-3" class="slide-control next control-2">›</label>
                              <label for="slide-2" class="slide-control prev control-3">‹</label>
                              <label for="slide-1" class="slide-control next control-3">›</label>
                              <ol class="slide-indicador">
                                  <li>
                                      <label for="slide-1" class="slide-circulo">•</label>
                                  </li>
                                  <li>
                                      <label for="slide-2" class="slide-circulo">•</label>
                                  </li>
                                  <li>
                                      <label for="slide-3" class="slide-circulo">•</label>
                                  </li>
                              </ol>
                          </div>
                      </div>
            </div> 

            <div class="carrusel_desktop">
                <div class="contenedor-principal">
				          

                        <div class="contenedor-carousel">
                          <div class="carousel">
                                <div class="pelicula">
                                    <img src="assets/img/team/img1.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                                </div>
                                <div class="pelicula">
                                    <img src="assets/img/team/img2.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                                </div>
                                <div class="pelicula">
                                    <img src="assets/img/team/img3.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                                </div>

                                <div class="pelicula">
                                    <img src="assets/img/team/img1.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                                </div>
                                <div class="pelicula">
                                    <img src="assets/img/team/img2.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                                </div>
                                <div class="pelicula">
                                    <img src="assets/img/team/img3.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                                </div>


                                <div class="pelicula">
                                    <img src="assets/img/team/img1.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                                </div>
                                <div class="pelicula">
                                    <img src="assets/img/team/img2.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                                </div>
                                <div class="pelicula">
                                    <img src="assets/img/team/img3.png" class="img-fluid col-md-4 col-lg-4 col-xl-4 width_img">
                                </div>


                          </div>
                        </div>

				          
			    </div>
                <div style="float: right; margin-right: 10%">
                    <a role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-arrow-circle-left fa-xl " style="color: #17BA9C;"></i></a>
                    <a role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-arrow-circle-right fa-xl "  style="color: #17BA9C;"></i></a>

                </div>
                
            </div>

            <div class="parrafoEquipo">
                <b class="negritas2">Nuestro equipo</b> es el aliado que necesitas para delegar los trámites contables y la fiscalidad de tu empresa.
            </div>

            <div class="img_team">
          <div class="img_team_1">
              <img src="assets/img/team/card3.png" class="dimension_img" >
              <div class="name_team_1">José Llanos</div>
          </div>

          <div class="img_team_1">
              <img src="assets/img/team/card1.png" class="dimension_img" >
              <div class="name_team_1">Miguel Sierra</div>
          </div> 

          <div class="img_team_1">
              <img src="assets/img/team/card2.png" class="dimension_img" >
              <div class="name_team_1">César Rivero</div>
          </div>
      </div>

      <div class="black_team">
          <div class="titulo_fundadores">
            Fundadores
          </div>
          <div class="parrafo_team">
                  Miguel Sierra, César Rivero y José Llanos conforman un tridente empresarial que comparten una visión similar sobre los negocios, así como una facilidad innata para crear soluciones comerciales estratégicas.
          </div>
          <div class="parrafo_team_2">
                  Liberfy es una empresa creada para liberar a los emprendedores disruptivos de las gestiones fiscales, contables o laborales, pero sobre todo para optimizar las cargas tributarias, resguardando la rentabilidad y legitimidad de las operaciones.
          </div>
      </div>

      <div class="titulo_empresarial">
          El grupo Empresarial
      </div>
      <div class="parrafo_empresarial">
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
      </div>
    
      <div class="nuestro_equipo">
            Conocé nuestro equipo
      </div>

      <div class="carrusel_desktop2">
            <div class="contenedor-principal2">

                    <div class="contenedor-carousel2">
                        <div class="carousel2">
                            <div class="pelicula2">
                                <img src="assets/img/team/integrantes/integrante1.png" class="width_img2">
                            </div>
                            <div class="pelicula2">
                                <img src="assets/img/team/integrantes/integrante2.png" class="width_img2">
                            </div>
                            <div class="pelicula2">
                                <img src="assets/img/team/integrantes/integrante3.png" class="width_img2">
                            </div>

                            <div class="pelicula2">
                                <img src="assets/img/team/integrantes/integrante4.png" class="width_img2">
                            </div>
                            <div class="pelicula2">
                                <img src="assets/img/team/integrantes/integrante5.png" class="width_img2">
                            </div>
                            <div class="pelicula2">
                                <img src="assets/img/team/integrantes/integrante6.png" class="width_img2">
                            </div>


                            <div class="pelicula2">
                                <img src="assets/img/team/integrantes/integrante7.png" class="width_img">
                            </div>
                            <div class="pelicula2">
                                <img src="assets/img/team/integrantes/integrante8.png" class="width_img">
                            </div>
                            <div class="pelicula2">
                                <img src="assets/img/team/integrantes/integrante9.png" class="width_img">
                            </div>


                            <div class="pelicula2">
                                <img src="assets/img/team/integrantes/integrante10.png" class="width_img">
                            </div>
                            {{-- <div class="pelicula2">
                                <img src="assets/img/team/integrantes/integrante11.png" class="width_img">
                            </div> --}}


                        </div>
                    </div>
            </div>
            <div style="float: right; margin-right: 10%">
                <a role="button" id="flecha-izquierda2" class="flecha-izquierda2"><i class="fas fa-arrow-circle-left fa-xl" style="color: #17BA9C;"></i></a>
                <a role="button" id="flecha-derecha2" class="flecha-derecha2"><i class="fas fa-arrow-circle-right fa-xl" style="color: #17BA9C;"></i></a>
            </div>
        </div>


</section>

<script>
const fila = document.querySelector('.contenedor-carousel');
const peliculas = document.querySelectorAll('.pelicula');

const flechaIzquierda = document.getElementById('flecha-izquierda');
const flechaDerecha = document.getElementById('flecha-derecha');

// ? ----- ----- Event Listener para la flecha derecha. ----- -----
flechaDerecha.addEventListener('click', () => {
	fila.scrollLeft += fila.offsetWidth;

	const indicadorActivo = document.querySelector('.indicadores .activo');
	if(indicadorActivo.nextSibling){
		indicadorActivo.nextSibling.classList.add('activo');
		indicadorActivo.classList.remove('activo');
	}
});

// ? ----- ----- Event Listener para la flecha izquierda. ----- -----
flechaIzquierda.addEventListener('click', () => {
	fila.scrollLeft -= fila.offsetWidth;

	const indicadorActivo = document.querySelector('.indicadores .activo');
	if(indicadorActivo.previousSibling){
		indicadorActivo.previousSibling.classList.add('activo');
		indicadorActivo.classList.remove('activo');
	}
}); 

// ? ----- ----- Paginacion ----- -----
/* const numeroPaginas = Math.ceil(peliculas.length / 3);
for(let i = 0; i < numeroPaginas; i++){
	const indicador = document.createElement('button');

	if(i === 0){
		indicador.classList.add('activo');
	}

	document.querySelector('.indicadores').appendChild(indicador);
	indicador.addEventListener('click', (e) => {
		fila.scrollLeft = i * fila.offsetWidth;

		document.querySelector('.indicadores .activo').classList.remove('activo');
		e.target.classList.add('activo');
	});
} */

// ? ----- ----- Hover ----- -----
peliculas.forEach((pelicula) => {
	pelicula.addEventListener('mouseenter', (e) => {
		const elemento = e.currentTarget;
		setTimeout(() => {
			peliculas.forEach(pelicula => pelicula.classList.remove('hover'));
			elemento.classList.add('hover');
		}, 300);
	});
});

fila.addEventListener('mouseleave', () => {
	peliculas.forEach(pelicula => pelicula.classList.remove('hover'));
});





const fila2 = document.querySelector('.contenedor-carousel2');
const peliculas2 = document.querySelectorAll('.pelicula2');

const flechaIzquierda2 = document.getElementById('flecha-izquierda2');
const flechaDerecha2 = document.getElementById('flecha-derecha2');

// ? ----- ----- Event Listener para la flecha derecha. ----- -----
flechaDerecha2.addEventListener('click', () => {
	fila2.scrollLeft += fila2.offsetWidth;

	const indicadorActivo2 = document.querySelector('.indicadores .activo');
	if(indicadorActivo2.nextSibling){
		indicadorActivo2.nextSibling.classList.add('activo');
		indicadorActivo2.classList.remove('activo');
	}
});

// ? ----- ----- Event Listener para la flecha izquierda. ----- -----
flechaIzquierda2.addEventListener('click', () => {
	fila2.scrollLeft -= fila2.offsetWidth;

	const indicadorActivo2 = document.querySelector('.indicadores .activo');
	if(indicadorActivo2.previousSibling){
		indicadorActivo2.previousSibling.classList.add('activo');
		indicadorActivo2.classList.remove('activo');
	}
}); 

// ? ----- ----- Paginacion ----- -----
/* const numeroPaginas2 = Math.ceil(peliculas2.length / 3);
for(let i = 0; i < numeroPaginas2; i++){
	const indicador2 = document.createElement('button');

	if(i === 0){
		indicador2.classList.add('activo');
	}

	document.querySelector('.indicadores').appendChild(indicador2);
	indicador2.addEventListener('click', (e) => {
		fila2.scrollLeft = i * fila2.offsetWidth;

		document.querySelector('.indicadores .activo').classList.remove('activo');
		e.target.classList.add('activo');
	});
} */

// ? ----- ----- Hover ----- -----
peliculas2.forEach((pelicula2) => {
	pelicula2.addEventListener('mouseenter', (e) => {
		const elemento = e.currentTarget;
		setTimeout(() => {
			peliculas2.forEach(pelicula2 => pelicula2.classList.remove('hover'));
			elemento.classList.add('hover');
		}, 300);
	});
});

fila2.addEventListener('mouseleave', () => {
	peliculas2.forEach(pelicula2 => pelicula2.classList.remove('hover'));
});





</script>

@endsection