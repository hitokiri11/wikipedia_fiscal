@extends('template.main')
@section('content')
<section class="page-section"  id="blog" >
    <div class="col-md-12 col-lg-12 mb- mb-md- " >
        <div class="padre ">
            <img src="assets/img/servicios/servicios.jfif" style="height: 10rem"  class="img-fluid w-100" alt="..."> 
            <div style="float: left;">
                <h1 class="card-title ">Blog</h1>
            </div>
            {{-- <div class="carousel-caption d-none d-md-block"  style="text-align: left;">
               
            </div> --}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-6 mb- mb-md-0" >
            <div class="container_blog">
                <h4>Noticias</h4>
            </div>
        </div>
       
        {{-- <div class="col-md-6 col-lg-6 mb- mb-md-0" >
            <div class="container_blog2">
                <button type="button" class="btn btn-light">Ver Todo</button>
            </div>
        </div>   --}}
    </div>

    <div class="col-md-12 col-lg-12 mb- mb-md-0 mt-5 " >
        <div class="container_blog3">

            @forelse($blogs as $k => $v)

                    <div class="card mb-3 p-2 tarjetas_blog" >
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                <p >
                                    <small class="text-muted">
                                        {{ $cur_date2 = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $v->created_at)->translatedFormat('d F Y'); }}
                                        
                                    </small>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <small class="text-muted">
                                        <strong>Autor:  {{$v->name}}</strong>
                                    </small>
                                </p>
                                
                                <h6 class="card-title">{{$v->titulo}}</h6>
                                <p class="card-text">
                                    <small class="text-muted">
                                        @php 
                                            $contenido =    explode('<p>',$v->contenido);
                                            $contenido =    explode('</p>',$contenido[1]);
                                            $contenido =    $contenido[0];
                                            $contenido =    substr($contenido,0,99);
                                        @endphp
                                        {{  $contenido  }}&nbsp;&nbsp;...
                                        <br>
                                        <a href="/blog/show/{{$v->id}}">Leer más</a>
                                    </small></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset('upload_img_blog/'.$v->img)}}" class="img-thumbnail rounded-start" alt="...">
                            </div>
                        </div>
                    </div>
            @empty
                     <div class="card mb-3 p-2 tarjetas_blog" >
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p >
                                        En estos momentos no hay blogs para mostrar
                                    </p>
                                </div>
                            </div>
                        </div>
                     </div>
            @endforelse
            {{ $blogs->links() }}
                {{-- <div class="card mb-3 p-2 tarjetas_blog" >
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
                </div> --}}


                {{-- <div class="card mb-3 p-2 tarjetas_blog" >
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
                </div> --}}


        </div>
    </div>
    

</section>
@endsection