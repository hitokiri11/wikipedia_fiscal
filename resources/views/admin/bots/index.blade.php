@extends('adminlte::page')

@section('title', 'Bots')

@section('content')
<div class="container">
    <div class="row ">
        <div class="table-responsive mt-5"> 

        @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{Session::get('error')}}
                </div>  
        @endif 

        @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{Session::get('success')}}
                </div>  
        @endif

            <div class="row"> 
                <div class="col-md-10 col-lg-10">
                        <caption><h5><stron>Bots</stron></h5></caption> 
                </div>
                
                <div class="col-md-2 col-lg-2">
                    <div class="row">
                        <a type="button" class="btn btn-success" href="{{url('/admin/bots/create')}}">
                            <i  class="fas fa-robot" ></i>
                            Nuevo Bot
                        </a>
                    </div>
                </div>
            </div>

            <br><br><br>
            <table class="table caption-top mt-5" id="tabla" >
                    <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Titulo</th>
                                <th scope="col" class="text-center">Descripción</th>
                                <th scope="col" class="text-center">Etiquetas</th>
                                <th scope="col" class="text-center">Video</th> 
                                <th scope="col" class="text-center">Acción</th>
                            </tr>
                    </thead> 
                    <tbody>
                        @forelse($data_bots as $k => $v)
                            <tr>
                                <th scope="row" class="text-center" >{{++$k}}</th>
                                <td>{{$v->titulo}}</td>
                                <td>{{$v->descripcion}}</td>
                                <td>{{$v->datos_bot}}</td>
                                <td>{{$v->video}}</td> 
                                <td class="text-center">
                                    <a type="button"  data-toggle="modal" data-target="#detalle_bot" onclick="data_modal({{$v}})">
                                        <i  class="fas fa-eye" ></i>
                                    </a>
                                    &nbsp;
                                    <a type="button"  href="/admin/bots/edit/{{$v->id}}" >
                                        <i  class="fas fa-pen" ></i>
                                    </a>
                                    &nbsp;
                                    <a type="button" data-toggle="modal" data-target="#modal_eliminar"  onclick="data_modal_eliminar({{$v->id}})" >
                                        <i  class="fas fa-trash" ></i>
                                    </a>
                                   
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th scope="row" class="text-center" colspan="6" >En estos momentos no hay bots para mostrar</th>
                                <th scope="row" class="text-center" colspan="6" ></th>
                                <th scope="row" class="text-center" colspan="6" ></th>
                                <th scope="row" class="text-center" colspan="6" ></th>
                                <th scope="row" class="text-center" colspan="6" ></th>
                                <th scope="row" class="text-center" colspan="6" ></th>
                            </tr>
                        @endforelse
                    </tbody>
            </table> 
        </div>
    </div> 


    <!-- Modal -->
    <div class="modal fade" id="detalle_bot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Información del Bot</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Titulo:</th>
                                    <th id="titulo_bot" class="text-right"></th>
                                </tr>
                                <tr>
                                    <th>Descripción:</th>
                                    <th id="descripcion_bot" class="text-right"></th>
                                </tr> 
                                <tr>
                                    <th>Etiquetas:</th>
                                    <th id="etiqueta_bot" class="text-right"></th>
                                </tr> 
                                <tr>
                                    <th>Video:</th>
                                    <th id="video_bot" class="text-right"></th>
                                </tr>

                            </thead>
                        </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal eliminar-->
    <div class="modal fade" id="modal_eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminat Bot</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Está seguro de eliminar el bot? 
            </div>
            <input type="hidden" name="id_eliminar" id="id_eliminar" />
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-danger" onclick="eliminar()">Eliminar</button>
            </div>
        </div>
        </div>
    </div>
  

</div>
@push('css')
<link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush

@push('js')
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js" ></script>
<script> 
    $(document).ready(function() {
        $('#tabla').DataTable({
            "language": {
                "lengthMenu": "Mostrar registros _MENU_ por página",
                "zeroRecords": "No se encontró información",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Siguiente"
                }
            }

        });
    });
    

    const  data_modal = (data) => {
        $('#titulo_bot').text(data.titulo)
        $('#descripcion_bot').text(data.descripcion)
        $('#etiqueta_bot').text(data.datos_bot)
        $('#video_bot').text(data.video)
    } 

    const data_modal_eliminar = (id) => {
        $('#id_eliminar').val(id)
    }

    const eliminar = () => {
        let id  = $('#id_eliminar').val();
        let url = `/admin/bots/delete/${id}`
        window.location = url;
    }

</script>
@endpush
@endsection

