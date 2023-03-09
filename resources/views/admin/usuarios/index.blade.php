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

        <div class="row">
            <div class="col-md-10 col-lg-10">
                <caption><h5><stron>Usuarios</stron></h5></caption> 
            </div>

            <div class="col-md-2 col-lg-2">
                 <div class="row">
                    @can('users-create')
                    <a type="button" class="btn bg-teal" href="{{url('/admin/usuarios/create')}}">
                        <i  class="fas fa-user" ></i>
                        Nuevo Usuario
                    </a>
                    @endcan
                 </div>
            </div>
        </div>
        <br><br><br>
            <table class="table caption-top mt-4" id="tabla">
                    <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Nombre</th>
                                <th scope="col" class="text-center">Email</th>
                                <th scope="col" class="text-center">Rol</th>
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
                                <td>
                                    @if(!empty($v->getRoleNames()))
                                        @foreach($v->getRoleNames() as $rolName)
                                            <h5><span class="badge badge-primary">{{$rolName}}</span></h5> 
                                        @endforeach
                                    @endif
                                </td>
                                <td>{{$v->status == true ? 'Activo' : 'Inactivo'}}</td>
                                <td class="text-center">
                                    <a type="button"  data-toggle="modal" data-target="#detalle_usuario" onclick="data_modal({{$v}})" class="btn btn-light" >
                                        <i  class="fas fa-eye" ></i>
                                    </a>
                                    @can('users-edit')
                                        <a type="button"  href="/admin/usuarios/edit/{{$v->id}}" class="btn btn-light">
                                            <i  class="fas fa-pen" ></i>
                                        </a>
                                    @endcan
                                    @can('users-delete')
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.delete',$v->id], 'style'=>'display:inline']) !!}
                                            <a type="submit"  class="btn btn-light" >
                                                <i   i  class="fas fa-trash" ></i>
                                            </a>
                                        {!! Form::close() !!} 
                                    @endcan
                              
                                    {{-- <a type="button" data-toggle="modal" data-target="#modal_eliminar"  onclick="data_modal_eliminar({{$v->id}})" >
                                        <i  class="fas fa-trash" ></i>
                                    </a> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th scope="row" class="text-center" colspan="6" >En estos momentos no hay usuarios para mostrar</th>
                                <th scope="row" class="text-center" colspan="6"></th>
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

     <!-- Modal eliminar-->
     <div class="modal fade" id="modal_eliminar" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel" aria-hidden="true">
        
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminat Usuario</h1>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                ¿Está seguro de eliminar el usuario? 
            </div>
            <input type="hidden" name="id_eliminar" id="id_eliminar" />
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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
        let estatus = data.status === true ? 'Activo' : 'Inactivo'

        $('#nombre_usuarios').text(data.name)
        $('#email_usuario').text(data.email)
        $('#estatus_usuario').text(estatus)
    } 

    const data_modal_eliminar = (id) => {
        $('#id_eliminar').val(id)
    }

    /* const eliminar = () => {
        let id  = $('#id_eliminar').val();

        $.ajax({
            method: "POST",
            url: "{{ url('admin/usuarios/delete') }}",
            dataType : 'json',
            data: {id:id, '_token': $('input[name=_token]').val()},
            success: function (response) {
                console.log(response)
            },
            error: function (request, status, error) {
        		
      		}
        })

    } */
</script>
@endpush

@endsection

