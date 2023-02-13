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
                <form method="post" action="{{route('blogs.store')}}" enctype="multipart/form-data" >
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
                            <label for="img" class="form-label">Imagen</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input 
                                        type="file" 
                                        class="custom-file-input" 
                                        id="img" 
                                        name="img" 
                                        value="{{ old('img') }}" 
                                        onChange="onLoadImage(event.target.files)"  
                                    >
                                    <label for="img" class="custom-file-label"></label>
                                </div>
                            </div>
                            <span id="imgName"></span>
                            @error('img')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="contenido" class="form-label">Contenido</label>
                            <textarea class="form-control tinymce" name="contenido" id="contenido" class="form-control" rows="4">
                                {{ old('contenido') }}
                            </textarea>
                            @error('contenido')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="card-footer ">
                            <div class="row float-right">
                                <button type="submit" class="btn btn-success" >
                                    <i  class="fas fa-blog" ></i>
                                    Guardar
                                </button>
                                &nbsp;
                                <button type="reset" class="btn btn-danger" onClick="ocultarEtiqueta()">
                                    <i  class="fas fa-trash" ></i>
                                    Limpiar
                                </button>
                            </div>
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
<script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script> --}}
<script>
    
    ClassicEditor
        .create( document.querySelector( '#contenido' ),{
            ckfinder: {
                uploadUrl: '{{ route('blogs.store').'?_token='.csrf_token() }}'
            }
        } )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } ); 


        function onLoadImage(files){
            if (files && files[0]) {
            document
                .getElementById('imgName')
                .innerHTML = files[0].name
            }
        } 

        function ocultarEtiqueta() {
            document.getElementById('imgName').innerHTML = ''
        }
</script>
@endsection

