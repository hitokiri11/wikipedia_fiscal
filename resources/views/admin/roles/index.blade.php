@extends('adminlte::page')

@section('title', 'Roles')

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
                        <caption><h5><stron>Roles</stron></h5></caption> 
                    </div>

                    <div class="col-md-2 col-lg-2">
                         <div class="row">
                            @can('role-create')
                                <a type="button" class="btn bg-teal" href="{{url('/admin/roles/create')}}">
                                    <i  class="fas fa-user-shield" ></i>
                                    Nuevo Rol
                                </a>
                            @endcan
                         </div>
                    </div>
                </div>
                <br><br><br>
                <table class="table caption-top mt-5" id="tabla" >
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" >Rol</th>
                            <th scope="col" class="text-center">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($roles as $k => $v)
                            <tr>
                                <th scope="row" class="text-center" >{{++$k}}</th>
                                <td>{{$v->name}}</td>
                                <td class="text-center">
                                   {{--  <a type="button"  data-toggle="modal" data-target="#detalle_blog" onclick="data_modal({{$v}})">
                                        <i  class="fas fa-eye" ></i>
                                    </a>
                                    &nbsp; --}}
                                    @can('role-edit')
                                        <a type="button"  href="/admin/roles/edit/{{$v->id}}" class="btn btn-light">
                                            <i  class="fas fa-pen" ></i>
                                        </a>
                                    @endcan
                                    @can('role-delete')
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.delete',$v->id], 'style'=>'display:inline']) !!}
                                            <a type="submit"  class="btn btn-light" >
                                                <i   i  class="fas fa-trash" ></i>
                                            </a>
                                        {!! Form::close() !!} 
                                    @endcan
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th scope="row" class="text-center" colspan="3" >En estos momentos no hay rol para mostrar</th>
                                <th scope="row" class="text-center" colspan="3" ></th>
                                <th scope="row" class="text-center" colspan="3" ></th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
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

</script>
@endpush
@endsection