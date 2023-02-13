@extends('template.main')
@section('content')
<section class="page-section "  id="blog" >
        <div class="row col-md-12 col-lg-12">
            <div class="row col-md-2 col-lg-2"></div>
            <div class="row col-md-8 col-lg-8  " >
                <div class="p-5 ">
                    <div class="text-center">
                        <img src="{{asset('upload_img_blog/'.$blog->img)}}" class="rounded mx-auto d-block" alt="...">
                        <h3 class="mt-3">{{$blog->titulo}}</h3>
                    </div>
                    <div class="text-justify mt-5">
                        {!! $blog->contenido !!}
                    </div>
                </div>
                <div class="p-5 text-end">
                    <strong>Autor: {{$blog->name}}</strong>
                </div>
                <div class="px-5 text-end">
                   <a href="/blog" class="btn btn-primary">
                        <i class="fa fa-arrow-left"></i>
                   </a>
                </div>
            </div>
            <div class="row col-md-2 col-lg-2"></div>
        </div>
</section>
@endsection

