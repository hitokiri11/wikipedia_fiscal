@extends('adminlte::page')

@section('title', 'Blogs')

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
                        <caption><h5><stron>Blogs</stron></h5></caption> 
                    </div>

                    <div class="col-md-2 col-lg-2">
                         <div class="row">
                            <a type="button" class="btn btn-success" href="{{url('/admin/admin_blogs/create')}}">
                                <i  class="fas fa-blog" ></i>
                                Nuevo Blog
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
                          {{--   <th scope="col" class="text-center">Contenido</th> --}}
                            <th scope="col" class="text-center">Usuario</th>
                            <th scope="col" class="text-center">Fecha</th>
                            <th scope="col" class="text-center">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($blogs as $k => $v)
                            <tr>
                                <th scope="row" class="text-center" >{{++$k}}</th>
                                <td>{{$v->titulo}}</td>
                              {{--   <td>{{$v->contenido}}</td> --}}
                                <td>{{$v->name}}</td>
                                <td>{{$v->created_at}}</td>
                                <td class="text-center">
                                    <a type="button"  data-toggle="modal" data-target="#detalle_blog" onclick="data_modal({{$v}})">
                                        <i  class="fas fa-eye" ></i>
                                    </a>
                                    &nbsp;
                                    <a type="button"  href="/admin/admin_blogs/edit/{{$v->id}}" >
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
    <div class="modal fade" id="detalle_blog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Información del Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Titulo:</th>
                                    <th id="titulo_blog" class="text-right"></th>
                                </tr>
                                {{-- <tr>
                                    <th>Descripción:</th>
                                    <th id="contenido_blog" class="text-right"></th>
                                </tr>  --}}
                                <tr>
                                    <th>Usuario:</th>
                                    <th id="usuario_blog" class="text-right"></th>
                                </tr> 
                                <tr>
                                    <th>Fecha:</th>
                                    <th id="fecha_blog" class="text-right"></th>
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
            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminat Blog</h1>
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
@endsection

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
        let fecha = data.created_at.split('T')
        console.log(fecha[0])
        fecha = fecha[0].split('-')
        fecha = fecha[2]+'/'+fecha[1]+'/'+fecha[0]

        $('#titulo_blog').text(data.titulo)
        $('#usuario_blog').text(data.name)
        $('#fecha_blog').text(fecha)
    }

    const data_modal_eliminar = (id) => {
        $('#id_eliminar').val(id)
    }

    const eliminar = () => {
        let id  = $('#id_eliminar').val();
        let url = `/admin/admin_blogs/delete/${id}`
        window.location = url;
    }

</script>

@endpush 