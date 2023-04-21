@extends('template.main')
@section('content')
<section>
    <div class="fondo_blog">
            <img src="assets/img/blog/banner_responsive_blog.png"  class="banner_responsive_blog" alt="..."> 
            <img src="assets/img/blog/banner_blog.png"  class="banner_blog" alt="..."> 
            
            <div class="titulo_blog_t">
                Blog
            </div>
            <div class="titulo_noticia">
                Noticias
            </div>
            @forelse($blogs as $k => $v) 
                <div class="tarjeta_blog">
                    <div class="img_tarjeta">
                            <img src="{{asset('upload_img_blog/'.$v->img)}}" class="img_tarjeta" alt="...">
                    </div>
                    <div class="fecha_blog">
                        <small class="text-muted">
                            {{ $cur_date2 = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $v->created_at)->translatedFormat('d F Y'); }} 
                        </small>
                    </div>

                    <div class="post_blog">
                        <a href="/blog/show/{{$v->id}}" style="text-decoration: none;" class="titulo_blog">{{$v->titulo}}</a>
                    </div>

                    <div class="parr_blog">
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
                                        <br><br>
                                        <a href="/blog/show/{{$v->id}}"
                                            type="button" 
                                            style=" border-radius: 30px; background: #17BA9C;
                                                    color:white;border: 0px;padding-left:10px;
                                                    padding-right: 10px;padding-top: 3px;padding-bottom: 3px;"  >Ver más</a>
                            </small></p>
                    </div>
                </div>

                <div class="tarjeta_blog2">
                    <div class="blog_izq">
                        <div class="fecha_blog">
                            <small class="text-muted" style="text-transform: uppercase">
                                {{ $cur_date2 = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $v->created_at)->translatedFormat('d F Y'); }} 
                            </small>
                        </div>

                        <div class="post_blog">
                            <a href="/blog/show/{{$v->id}}" style="text-decoration: none;" class="titulo_blog">{{$v->titulo}}</a>
                        </div>

                        <div class="parr_blog">
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
                                        <br>
                                        <a href="/blog/show/{{$v->id}}"
                                            type="button" 
                                            style=" border-radius: 30px; background: #17BA9C;
                                                    color:white;border: 0px;padding-left:10px;
                                                    padding-right: 10px;padding-top: 3px;padding-bottom: 3px;"  >Ver más</a>
                            </small></p>
                        </div>

                    </div>
                    <div class="blog_der">
                        <div class="img_tarjeta">
                                <img src="{{asset('upload_img_blog/'.$v->img)}}" class="img_tarjeta" alt="...">
                        </div>
                    </div>
                </div>

            @empty
                <div class="alert_blog">
                    En estos momentos no hay blogs para mostrar
                </div>
            @endforelse
            <div style="align-items: left;display: flex;flex-direction: row;align-items: left;justify-content: left;margin-top:20px;">
                <div class="pag" >
                    {{ $blogs->links() }}
                </div>
                
            </div>

            
        </div>
</section>
<script>
    function verificarCheck() {
        if(document.getElementById('check').checked) {
            document.getElementById('titulo_blog_t').style.display = 'none'
        } else {
            document.getElementById('titulo_blog_t').style.display = 'block'
        }
    }
</script>
@endsection