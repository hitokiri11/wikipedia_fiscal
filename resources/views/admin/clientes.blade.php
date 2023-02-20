@extends('adminlte::page')

@section('title', 'Clientes')

@section('content')
<div class="container">
    <div class="row ">
        <div class="table-responsive mt-5" >
        
        <div class="row">
            <div class="col-md-10 col-lg-10">
                <caption><h5><stron>Clientes</stron></h5></caption> 
            </div>

            {{-- <div class="col-md-2 col-lg-2">
                    <div class="row">
                    @can('users_client-sincronizar')
                    <a type="button" class="btn btn-success" href="{{url('/admin/clientes/sincronizar')}}">
                        <i  class="fas fa-signal" ></i>
                       Sincronizar
                    </a>
                    @endcan
                    </div>
            </div> --}}
        </div>
        <br><br><br>

            <table class="table caption-top mt-4" id="tabla">
                
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Nombre</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data_user_clients as $k => $v)
                        <tr>
                            <th scope="row" class="text-center" >{{++$k}}</th>
                            <td>{{$v->name}}</td>
                            <td>{{$v->email}}</td>
                            <td class="text-center">
                                <a type="button"  data-toggle="modal" data-target="#detalle_cliente" onclick="data_modal({{$v}})">
                                    <i  class="fas fa-eye" ></i>
                                </a>
                                
                            </td>
                        </tr>       
                    @empty
                        <tr>
                            <th scope="row" class="text-center" colspan="4">En estos momentos no hay clientes para mostrar</th>
                            <th scope="row" class="text-center" colspan="4"></th>
                            <th scope="row" class="text-center" colspan="4"></th>
                            <th scope="row" class="text-center" colspan="4"></th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

   <!-- Modal -->
    <div class="modal fade" id="detalle_cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Información del Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Nombre:</th>
                                    <th id="nombre_cliente" class="text-right"></th>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <th id="email_cliente" class="text-right"></th>
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
        $('#nombre_cliente').text(data.name)
        $('#email_cliente').text(data.email)
    }
</script>
@endpush

@endsection

