@extends('adminlte::page')

@section('title', 'Usuarios')

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


            <caption><h5><stron>Usuarios</stron></h5></caption> 

            <table class="table caption-top mt-4" id="tabla">
                    <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Nombre</th>
                                <th scope="col" class="text-center">Email</th>
                                <th scope="col" class="text-center">Estatus</th> 
                                <th scope="col" class="text-center">Acción</th>
                            </tr>
                    </thead> 
                    <tbody>
                        @forelse($data as $k => $v)
                            <tr>
                                <th scope="row" class="text-center" >{{++$k}}</th>
                                <td>{{$v->name}}</td>
                                <td>{{$v->email}}</td>
                                <td>{{$v->status == true ? 'Activo' : 'Inactivo'}}</td>
                                <td class="text-center">
                                    <a type="button"  data-toggle="modal" data-target="#detalle_usuario" onclick="data_modal({{$v}})">
                                        <i  class="fas fa-eye" ></i>
                                    </a>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th scope="row" class="text-center" colspan="6" >En estos momentos no hay usuarios para mostrar</th>
                            </tr>
                        @endforelse
                    </tbody>
            </table> 
        </div>
        
    </div> 


    <!-- Modal -->
    <div class="modal fade" id="detalle_usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Información del Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Nombre:</th>
                                    <th id="nombre_usuarios" class="text-right"></th>
                                </tr>
                                <tr>
                                    <th>Descripción:</th>
                                    <th id="email_usuario" class="text-right"></th>
                                </tr> 
                                <tr>
                                    <th>Estatus:</th>
                                    <th id="estatus_usuario" class="text-right"></th>
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
        let estatus = data.status === true ? 'Activo' : 'Inactivo'

        $('#nombre_usuarios').text(data.name)
        $('#email_usuario').text(data.email)
        $('#estatus_usuario').text(estatus)
    }
</script>
@endpush

@endsection

