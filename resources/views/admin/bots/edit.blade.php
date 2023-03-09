@extends('adminlte::page')

@section('title', 'Editar Bot')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="mt-5 col-8">
       
            <div class="card">
                <div class="card-header">
                    <h5><stron>Editar Bot</stron></h5>
                </div> 
                <form method="post" action="{{route('bot.update', $data_edit_bot->id)}}" enctype="multipart/form-data"> 
                @method('PUT')
                @csrf 
                    <div class="card-body">
                    
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" value="{{ $data_edit_bot->titulo }}" >
                            @error('titulo')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="2" placeholder="Descripción"  >{{ $data_edit_bot->descripcion }}</textarea>
                            @error('descripcion')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="etiqueta" class="form-label">Etiqueta</label>
                            <textarea class="form-control" id="etiqueta" name="etiqueta" rows="2" placeholder="Etiqueta"  >{{ $data_edit_bot->datos_bot }}</textarea>
                            @error('etiqueta')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="video" class="form-label">Video</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input 
                                        type="file" 
                                        class="custom-file-input" 
                                        id="video" 
                                        name="video" 
                                        value="{{ $data_edit_bot->video }}" 
                                        onChange="onLoadImage(event.target.files)" 
                                        
                                    >
                                    <label for="video" class="custom-file-label"></label>

                            {{-- <input type="text" class="form-control" id="video" name="video" placeholder="Vídeo" value="{{ $data_edit_bot->video }}" > --}}
                                   
                                </div>
                            </div> 
                            <span id="imgName"></span>
                            @error('video')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer ">
                        <div class="row float-right">
                            <button type="submit" class="btn bg-teal" >
                                <i  class="fas fa-robot" ></i>
                                Editar Bot
                            </button>
                            &nbsp;
                            <a type="reset" class="btn btn-danger" >
                                <i  class="fas fa-trash" ></i>
                                Limpiar
                            </a>
                        </div>
                    </div> 
                </form>
                               
            </div>

        </div>
    </div>
</div>

@push('css')
<style>
    .error-message {
        color: red;
    }
</style>
@endpush
@push('js')
<script>
    function onLoadImage(files){
        console.log(files)
        if (files && files[0]) {
        document
            .getElementById('imgName')
            .innerHTML = files[0].name
        }
    }
</script>
@endpush
@endsection