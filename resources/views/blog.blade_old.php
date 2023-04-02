@extends('template.main')
@section('content')
<section class="page-section"  id="blog" >
    <div class="col-md-12 col-lg-12 mb- mb-md- " >
        <div class="padre ">
            <img src="assets/img/blog/banner_responsive_blog.png"  class="img-fluid banner_responsive_blog" alt="..."> 
            <img src="assets/img/blog/banner_blog.png"  class="img-fluid banner_blog" alt="...">
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
                                    <!-- <small class="text-muted">
                                        <strong>Autor:  {{$v->name}}</strong>
                                    </small> -->
                                    <br>
                                    <h5><a href="/blog/show/{{$v->id}}" style="text-decoration: none;" class="titulo_blog">{{$v->titulo}}</a></h5>
                                </p>
                                <p class="card-text cont_blog">
                                    
                                    <small class="text-muted">
                                        @php 
                                            
                                            $v->contenido = str_replace('<strong>','',$v->contenido); 
                                            $v->contenido = str_replace('</strong>','',$v->contenido); 
                                            
                                            $contenido =    explode('<p>',$v->contenido);
                                            $contenido =    explode('</p>',$contenido[1]);
                                            $contenido =    $contenido[0];
                                            $contenido =    substr($contenido,0,99);
                                        @endphp
                                        {{  $contenido  }}&nbsp;&nbsp;...
                                        <br>
                                        <!-- <a href="/blog/show/{{$v->id}}">Leer más</a> -->
                                    </small></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset('upload_img_blog/'.$v->img)}}" class="img-thumbnail rounded-start img_blog" alt="...">
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
               
        </div>
    </div>
    <hr class="divisor-team" >

</section>
@endsection