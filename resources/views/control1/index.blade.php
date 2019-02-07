@extends('welcome')

@section('estilos')
@stop


@section('content')
    <header class="panel-heading">
        <h2 class="panel-title">9.1.1 Política de control de accesos</h2>
    </header>

    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-md">
                    <a href="/control1/create" id="addToTable" class="btn btn-info">Agregar <i class="fa fa-plus"></i></a>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped mb-none" id="datatable-editable">
            <thead>
                <tr>
                    <th>Jefe Informatica</th>
                    <th>Apellidos y Nombres </th>
                    <th>Area</th>
                    <th>Politicas de Acceso</th>
                    <th>Fecha Creacion</th>
                    <th>Fecha Actualizacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($controles as $control)
                    <tr class="gradeX">
                        <td>{{$control->jefeInformatica}}</td>
                        <td>{{$control->apellidosNombres}}</td>
                        <td>{{$control->area}}</td>
                        <td>{{$control->politicasAcceso}}</td>
                        <td>{{$control->created_at}}</td>
                        <td>{{$control->updated_at}}</td>
                        <td class="actions">
                            <a href="{{action('Control1Controller@edit', $control->id)}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                            <form action="{{action('Control1Controller@destroy', $control->id)}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o"></i></button>
                            </form>
                            
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop