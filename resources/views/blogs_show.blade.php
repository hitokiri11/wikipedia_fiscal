@extends('template.main')
@section('content')
<section>
    <div class="titulo_blog_show">
        {{$blog->titulo}}
    </div>
    <img 
        src="{{asset('upload_img_blog/'.$blog->img)}}"
        class="img_blog_show"  
        alt="..." 
    >
    <div class="blog_contenido">
        {!! $blog->contenido !!}
    </div>
    <div class="btn_back">
        <a href="/blog" >
            <i class="fa fa-arrow-circle-left fa-xl" style="color: #17BA9C;"></i>
        </a>
    </div>
</section>
@endsection

