@extends('template.main')
@section('content')
<section class="page-section"  id="blog" >
    <div class="col-md-12 col-lg-12 mb- mb-md-0" >
        <div>
            <img src="assets/img/servicios/servicios.jfif"   class="img-fluid d-block w-100" alt="..."> 
            <div class="carousel-caption d-none d-md-block"  style="text-align: left;">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-6 mb- mb-md-0" >
            <div class="container_blog">
                <h4>Noticias</h4>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 mb- mb-md-0" >
            <div class="container_blog2">
                <button type="button" class="btn btn-light">Ver Todo</button>
            </div>
        </div>  
    </div>

    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5 " >
        <div class="container_blog3">

            <div class="card mb-3 p-2 tarjetas_blog" >
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                        <p >
                            <small class="text-muted">
                                Agosto 13, 2022
                            </small>
                        </p>
                        <h6 class="card-title">Titulo del blog</h6>
                        <p class="card-text">
                            <small class="text-muted">
                                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer
                            </small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/blog/img_blog.png" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>


                <div class="card mb-3 p-2 tarjetas_blog" >
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                            <p >
                                <small class="text-muted">
                                    Agosto 13, 2022
                                </small>
                            </p>
                            <h6 class="card-title">Titulo del blog</h6>
                            <p class="card-text">
                                <small class="text-muted">
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer
                                </small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="assets/img/blog/img_blog.png" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                </div>


                <div class="card mb-3 p-2 tarjetas_blog" >
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                            <p >
                                <small class="text-muted">
                                    Agosto 13, 2022
                                </small>
                            </p>
                            <h6 class="card-title">Titulo del blog</h6>
                            <p class="card-text">
                                <small class="text-muted">
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer
                                </small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="assets/img/blog/img_blog.png" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                </div>


        </div>
    </div>
    

</section>
@endsection