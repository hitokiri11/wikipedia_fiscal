@extends('adminlte::page')

@section('title', 'Wiki')

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


            <caption><h5><stron>Wiki</stron></h5></caption> 

            <table class="table caption-top mt-4" id="tabla">
                    <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Titulo</th>
                                <th scope="col" class="text-center">Descripción</th>
                                <th scope="col" class="text-center">Video</th> 
                                <th scope="col" class="text-center">Visto</th>
                                <th scope="col" class="text-center">Acción</th>
                            </tr>
                    </thead> 
                    <tbody>
                        @forelse($data_wiki as $k => $v)
                            <tr>
                                <th scope="row" class="text-center" >{{++$k}}</th>
                                <td>{{$v->titulo}}</td>
                                <td>{{$v->descripcion}}</td>
                                <td>{{$v->video}}</td> 
                                <td>{{$v->visto}}</td>
                                <td class="text-center">
                                    <a type="button"  data-toggle="modal" data-target="#detalle_wiki" onclick="data_modal({{$v}})">
                                        <i  class="fas fa-eye" ></i>
                                    </a>
                                    &nbsp;
                                    <a type="button"  href="/admin/wiki/edit/{{$v->id}}" >
                                        <i  class="fas fa-pen" ></i>
                                    </a>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th scope="row" class="text-center" colspan="6" >En estos momentos no hay registros para mostrar</th>
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
        <div class="row">
            <a type="button" class="btn btn-success" href="{{url('/admin/wiki/create')}}">
                <i  class="fas fa-robot" ></i>
                Nuevo Video
            </a>
        </div>
        
    </div> 


    <!-- Modal -->
    <div class="modal fade" id="detalle_wiki" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Información del Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Titulo:</th>
                                    <th id="titulo_wiki" class="text-right"></th>
                                </tr>
                                <tr>
                                    <th>Descripción:</th>
                                    <th id="descripcion_wiki" class="text-right"></th>
                                </tr> 
                                <tr>
                                    <th>Video:</th>
                                    <th id="video_wiki" class="text-right"></th>
                                </tr>
                                <tr>
                                    <th>Visto:</th>
                                    <th id="visto_wiki" class="text-right"></th>
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
        $('#titulo_wiki').text(data.titulo)
        $('#descripcion_wiki').text(data.descripcion)
        $('#video_wiki').text(data.video)
        $('#visto_wiki').text(data.visto)
        
    }
</script>
@endpush
@endsection

