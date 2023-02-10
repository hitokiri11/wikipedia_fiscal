@extends('adminlte::page')

@section('title', 'Nuevo Blog')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="mt-5 col-10">
            <div class="card">
                <div class="card-header">
                    <h5><stron>Nuevo Blog</stron></h5>
                </div> 
                <form method="post" action="{{route('bot.store')}}" enctype="multipart/form-data" >
                    @csrf 

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" value="{{ old('titulo') }}" >
                            @error('titulo')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="titulo" class="form-label">Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" value="{{ old('titulo') }}" >
                            @error('titulo')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection