@extends('welcome')

@section('estilos')
@stop


@section('content')
<div class="box box-primary">
    <header class="panel-heading">
        <h2 class="all-tittles"><center>Catálogo de tesis</center></h2>
    </header>

    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-md">
                    <a href="{{ route('control1.create') }}" id="addToTable" class="btn btn-info"><font size="3">Agregar </font><i class="fa fa-plus"></i></a>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped mb-none" id="datatable-editable">
            <thead>
                <tr>
                    <th><font size="3">Título</font></th>
                    <th><font size="3">Año</font></th>
                    <th><font size="3">Estado</font></th>
                    <th><font size="3">Última modificación</font></th>
                    <th><font size="3">Acciones</font></th>
                </tr>
            </thead>
            <tbody>
                @foreach($controles as $tesis)
                    <tr class="gradeX">
                        <td><font size="3">{{$tesis->titulo}}</font></td>
                        <td><font size="3">{{$tesis->anio}}</font></td>
                        <td><font size="3">{{$tesis->estado}}</font></td>
                        <td><font size="3">{{$tesis->updated_at}}</font></td>
                        
                        

                        <td class="actions">
                            <a href="{{ action('Control1Controller@show', $tesis->id) }}" title="Ver" class="btn btn-link">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>
                            <a href="{{ action('Control1Controller@edit', $tesis->id) }}" title="Editar" class="on-default edit-row"><i class="btn btn-link"><span class="glyphicon glyphicon-edit"></span></i></a>
                            <a><form action="{{action('Control1Controller@destroy', $tesis->id)}}" title="Eliminar" method="post" onsubmit="return confirm('¿Está seguro de eliminar la tesis de los registros?');">
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-link" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                            </form></a>
                            
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop