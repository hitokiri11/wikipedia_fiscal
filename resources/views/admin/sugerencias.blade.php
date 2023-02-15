@extends('adminlte::page')

@section('title', 'Sugerencias')

@section('content')
<div class="container">
    <div class="row ">
        <div class="table-responsive mt-5"> 

            <caption><h5><stron>Sugerencias</stron></h5></caption> 

            <table class="table caption-top mt-4" id="tabla">
                    <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Sugerencia</th>
                                <th scope="col" class="text-center">Nombre Cliente</th>
                                <th scope="col" class="text-center">Email Cliente</th>
                                <th scope="col" class="text-center">Fecha</th>
                            </tr>
                    </thead> 
                    <tbody>
                        @forelse($sugerencias as $k => $v)
                            <tr>
                                <th scope="row" class="text-center" >{{++$k}}</th>
                                <td>{{$v->sugerencia}}</td>
                                <td>{{$v->name}}</td>
                                <td>{{$v->email}}</td>
                                <td class="text-center">
                                    @php 
                                        $fecha = explode(' ',$v->created_at);
                                        $fecha = $fecha[0];
                                        $fecha = explode('-',$fecha);
                                        $fecha = $fecha[2].'/'.$fecha[1].'/'.$fecha[0];
                                    @endphp
                                    {{$fecha}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th scope="row" class="text-center" colspan="5" >En estos momentos no hay sugerencias para mostrar</th>
                                <th scope="row" class="text-center" colspan="5" ></th>
                                <th scope="row" class="text-center" colspan="5" ></th>
                                <th scope="row" class="text-center" colspan="5" ></th>
                                <th scope="row" class="text-center" colspan="5" ></th>
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

