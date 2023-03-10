@extends('template.main')
@section('content')
    <section class="page-section"  id="dudas">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 mb- mb-md-0 ml-5">
                    <p class="tituloDudas">
                        Preguntas Frecuentes
                    </p>
                    <p class="parrafoDudas">
                        Si tienes alguna otra duda, escribenos 
                        en <b>nuestro chat o por Whatsapp</b> y la 
                        resolveremos en seguida
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 mb- mb-md-0">
                    <div class="preguntas">
                        <p>
                            <a class="btn btn-primary rounded-circle " data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
                                <i class="fa-sharp fa-solid fa-arrow-right" ></i>
                            </a>
                            ¿Es posible llevar mi gestión contable y fiscal online?
                        </p>
                        <div class="collapse mb-2" id="collapse1">
                            <div class="card card-body texto-card-dudas">
                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                        <p>
                            <a class="btn btn-primary rounded-circle " data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                                <i class="fa-sharp fa-solid fa-arrow-right" ></i>
                            </a>
                            ¿Como me comunico con mi asesor fiscal?
                        </p>
                        <div class="collapse mb-2" id="collapse2">
                            <div class="card card-body texto-card-dudas">
                              aqui
                            </div>
                        </div>

                        <p>
                            <a class="btn btn-primary rounded-circle " data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                                <i class="fa-sharp fa-solid fa-arrow-right" ></i>
                            </a>
                            ¿Existe compromiso de permanencia?
                        </p>
                        <div class="collapse mb-2" id="collapse3">
                            <div class="card card-body texto-card-dudas">
                              aqui 2
                            </div>
                        </div>

                        <p>
                            <a class="btn btn-primary rounded-circle " data-bs-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">
                                <i class="fa-sharp fa-solid fa-arrow-right" ></i>
                            </a>
                            ¿Por qué elegir Liberfy?
                        </p>
                        <div class="collapse mb-2" id="collapse4">
                            <div class="card card-body texto-card-dudas">
                              aqui 3
                            </div>
                        </div>

                        <p>
                            <a class="btn btn-primary rounded-circle " data-bs-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
                                <i class="fa-sharp fa-solid fa-arrow-right" ></i>
                            </a>
                            ¿Para quién es Liberfy?
                        </p>
                        <div class="collapse mb-2" id="collapse5">
                            <div class="card card-body texto-card-dudas">
                              <p>
                                Somos aliados del emprendedor moderno
                              </p>
                              <p>
                                Nos especializamos en dos modelos de negocios disruptivos que las gestorías 
                                tradicionales no pueden atender por la falta de conocimiento de cómo funcionan 
                                estos negocios del siglo XXI.
                              </p>
                              <p>
                                Estos modelos son:
                              </p>
                              <p>
                                <strong>Negocios digitales:</strong> infoproductos, E-commerce, Amazon, Shopify, todos los
                                negocios que se desarrollan de forma online, incluidos influencers o eGamers.
                              </p>
                              <p>
                                <strong>Negocios inmobiliarios:</strong> inmobiliarias, inversores, emprendedores 
                                especializados en alquiler turísticos, Rent to Rent, Flipping House e inversiones 
                                tradicionales.
                              </p>
                            </div>
                        </div>

                    </div>  
                </div>
            </div>
        </div>
    </section>
@endsection
