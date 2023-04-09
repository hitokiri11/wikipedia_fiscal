@extends('template.main')
@section('content')
    <section >
    
        <div class="titulo_dudas">
            Preguntas Frecuentes
        </div>
        <div class="parrafoDudas">
            Si tienes alguna otra duda, escribenos 
            en <b>nuestro chat o por Whatsapp</b> y la 
            resolveremos en seguida
        </div>        

        <div class="acordeon_dudas">
            <details >
                <summary class="summary">
                    {{-- <img src="{{asset('assets/img/dudas/arrow.png')}}" class="img_arrow"/> --}}
                    <i class="fas fa-arrow-circle-right fa-2x img_arrow" style="color: #17BA9C;" id="img_arrow_1" onclick="despliegue(1)"></i>
                    <i class="fas fa-arrow-circle-down fa-2x img_arrow_down" style="color: #17BA9C;display:none;" id="img_arrow_down_1" onclick="despliegue(11)"></i>
                    <label class="item_acordeon">
                        ¿Por qué elegir Liberfy?
                    </label>
                </summary>
                <div class="content_acordeon">
                            <hr style="float: left" heigth="auto"/>
                              <p>
                              No creamos liberfy para vender servicios. Creamos Liberfy por la cantidad de problemas que nuestros negocios vivieron a causa de las gestorías.
                              </p>
                              <br>
                              <p>
                              Aunque su misión era protegernos, lo que hacían era causarnos molestias por tener un total desconocimiento de cómo funcionaban nuestros negocios.
                              </p>
                              <br>
                              <p>
                              Por eso decimos que Liberfy nace de emprendedores para emprendedores. 
                              </p>
                              <br>
                              <p>
                              Como empresarios y emprendedores digitales atravesamos por muchas dificultades y problemas que nos hacen perder dinero y tiempo.
                              </p>
                              <br>
                              <p>
                              Y para ello decidimos crear un grupo de especialistas en este tipo de negocios del siglo XXI para poder atender a nuestras empresas. 
                              </p>
                              <br>
                              <p>
                              Traducimos el lenguaje fiscal y contable de forma transparente y simple a pequeñas empresas y jóvenes emprendedores modernos.
                              </p>
                              <br>
                              <p>
                              Por lo que va a ser muy fácil entendernos. Conocemos las preocupaciones del emprendedor. 
                              </p>
                              <br>
                              <p>
                              Nuestra misión es ayudarte a buscar soluciones y ofrecerte la tranquilidad de estar cumpliendo con tus obligaciones fiscales para centrarte en hacer crecer tu negocio.
                              </p>
                </div>
            </details>  
            <details >
                <summary class="summary">
                    {{-- <img src="{{asset('assets/img/dudas/arrow.png')}}" class="img_arrow"/> --}}
                    <i class="fas fa-arrow-circle-right fa-2x img_arrow" style="color: #17BA9C;" id="img_arrow_2" onclick="despliegue(2)"></i>
                    <i class="fas fa-arrow-circle-down fa-2x img_arrow_down" style="color: #17BA9C;display:none;" id="img_arrow_down_2" onclick="despliegue(22)"></i>
                    <label class="item_acordeon">
                        ¿Para quién es Liberfy?
                    </label>
                </summary>
                <div class="content_acordeon">
                            
                            <p>
                            Somos el aliado del emprendedor joven.
                            </p>
                            <br>
                            <p>
                            Nos especializamos en 2 modelos de negocios disruptivos que las gestorías tradicionales no pueden atender por falta de conocimiento de cómo funcionan estos negocios del siglo XXl.
                            </p>
                            <br>
                            <p>
                            Estos modelos son:
                            </p>
                            <br>
                            <p>
                            <strong>Negocios digitales:</strong> Infoproductos, E-commerce, Amazon, Shopify, todos los negocios que se desarrollan de forma online, incluso a influencers o eGamers.
                            </p>
                            <br>
                            <p>
                            <strong>Negocios inmobiliarios:</strong> inmobiliarias, inversores, emprendedores especializados en alquiler turístico, Rent to Rent, Flipping houses e inversiones tradicionales.
                            </p>
                </div>
            </details>  

            <details >
                <summary class="summary">
                    {{-- <img src="{{asset('assets/img/dudas/arrow.png')}}" class="img_arrow"/> --}}
                    <i class="fas fa-arrow-circle-right fa-2x img_arrow" style="color: #17BA9C;" id="img_arrow_3" onclick="despliegue(3)"></i>
                    <i class="fas fa-arrow-circle-down fa-2x img_arrow_down" style="color: #17BA9C;display:none;" id="img_arrow_down_3" onclick="despliegue(33)"></i>
                    <label class="item_acordeon">
                        ¿Es posible llevar mi gestión contable y fiscal online?
                    </label>
                </summary>
                <div class="content_acordeon">
                              <p>
                                No solo es posible. Sino que es REAL.
                              </p>
                              <br>
                              <p>
                              Tendrás todo al alcance de un clic y el resto corre por nuestra cuenta.
                              </p>
                              <br>
                              <p>
                              Y tendrás a disposición todo el control de tu negocio en un solo lugar, para que cuando quieras acceder a ello, tengas todo de forma clara y transparente
                              </p>
                              <br>
                              <p>
                              Además dispones de nuestro equipo de expertos asesores para resolver cualquier consulta vía whatsapp o a través de correo electrónico. 
                              </p>
                              <br>
                              <p>
                              Tu documentación estará segura y todos tus datos al alcance de un clic.
                              </p>
                </div>
            </details>

            <details >
                <summary class="summary">
                    {{-- <img src="{{asset('assets/img/dudas/arrow.png')}}" class="img_arrow"/> --}}
                    <i class="fas fa-arrow-circle-right fa-2x img_arrow" style="color: #17BA9C;" id="img_arrow_4" onclick="despliegue(4)"></i>
                    <i class="fas fa-arrow-circle-down fa-2x img_arrow_down" style="color: #17BA9C;display:none;" id="img_arrow_down_4" onclick="despliegue(44)"></i>
                    <label class="item_acordeon">
                    ¿Como me comunico con mi asesor fiscal?
                    </label>
                </summary>
                <div class="content_acordeon">
                            <p>
                            Tú eliges la vía que mejor se adapte a tus necesidades, tanto por whatsapp como por correo electrónico. 
                            </p>
                            <br>
                            <p>
                            Te atenderá siempre tu gestor experto en negocios digitales y emprendedores del siglo XXI, podrás confiar en él ya que conocerá tu negocio y lo que haces… y nadie mejor que un gestor que sepa a lo que te enfrentas día a día.
                            </p>
                            <br>
                            <p>
                            Nos obsesiona atenderte rápido a través de nuestros sistemas digitales y que no pierdas el tiempo con desplazamientos innecesarios.
                            </p
                            <br>
                            <p>
                            Por eso, estaremos en contacto constantemente y nos encargaremos de que encuentres una solución viable a tus problemas.
                            </p>
                </div>
            </details>

            <details >
                <summary class="summary">
                    {{-- <img src="{{asset('assets/img/dudas/arrow.png')}}" class="img_arrow"/> --}}
                    <i class="fas fa-arrow-circle-right fa-2x img_arrow" style="color: #17BA9C;" id="img_arrow_5" onclick="despliegue(5)"></i>
                    <i class="fas fa-arrow-circle-down fa-2x img_arrow_down" style="color: #17BA9C;display:none;" id="img_arrow_down_5" onclick="despliegue(55)"></i>
                    <label class="item_acordeon">
                    ¿Existe compromiso de permanencia?
                    </label>
                </summary>
                <div class="content_acordeon">
                              <p>
                                El único compromiso que existe es el nuestro para darte la solución a cualquier problema contable y fiscal que surja. 
                              </p>
                              <br>
                              <p>
                              Con respecto al contrato, puedes darte de baja en cualquier momento.
                              </p>
                              <br>
                              <p>
                              Si tramitamos tu alta como autónomo tendrás una permanencia de 3 meses dentro de nuestros servicios de asesoría para aprovechar al máximo las ventajas de un asesoramiento personalizado para tu negocio.
                              </p>
                              <br>
                              <p>
                              IMPORTANTE: Sujeto a promociones y comunicaciones especiales. Consultar condiciones.
                              </p>
                </div>
            </details>

        </div>
    </section>
    <script>
        function despliegue(id) {
            
            if(id == 1) {
                document.getElementById('img_arrow_1').style.display = 'none'
                document.getElementById('img_arrow_down_1').style.display = 'block'
            }
            if(id == 11) {
                document.getElementById('img_arrow_1').style.display = 'block'
                document.getElementById('img_arrow_down_1').style.display = 'none'
            }

            if(id == 2) {
                document.getElementById('img_arrow_2').style.display = 'none'
                document.getElementById('img_arrow_down_2').style.display = 'block'
            }
            if(id == 22) {
                document.getElementById('img_arrow_2').style.display = 'block'
                document.getElementById('img_arrow_down_2').style.display = 'none'
            }

            if(id == 3) {
                document.getElementById('img_arrow_3').style.display = 'none'
                document.getElementById('img_arrow_down_3').style.display = 'block'
            }
            if(id == 33) {
                document.getElementById('img_arrow_3').style.display = 'block'
                document.getElementById('img_arrow_down_3').style.display = 'none'
            }

            if(id == 4) {
                document.getElementById('img_arrow_4').style.display = 'none'
                document.getElementById('img_arrow_down_4').style.display = 'block'
            }
            if(id == 44) {
                document.getElementById('img_arrow_4').style.display = 'block'
                document.getElementById('img_arrow_down_4').style.display = 'none'
            }

            if(id == 5) {
                document.getElementById('img_arrow_5').style.display = 'none'
                document.getElementById('img_arrow_down_5').style.display = 'block'
            }
            if(id == 55) {
                document.getElementById('img_arrow_5').style.display = 'block'
                document.getElementById('img_arrow_down_5').style.display = 'none'
            }

        }
    </script>
@endsection
