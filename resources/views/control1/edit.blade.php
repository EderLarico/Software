@extends('welcome')

@section('estilos')
@stop


@section('content')
    <header class="panel-heading">
        <h2 class="panel-title">9.1.1 Política de control de accesos</h2>

        <p class="panel-subtitle">
        Una poltica de control de acceso debe ser establecida, documentada y revisada, basada en requisitos del negocio y de seguridad de la informacion
        </p>
    </header>
    <form action="/control1/{{$id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label">Jefe de Informatica</label>
                        <input type="text" name="jefeInformatica" class="form-control" value="{{$control->jefeInformatica}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Comite responsable</label>
                        <input type="text" name="comiteResponsable" class="form-control"  value="{{$control->comiteResponsable}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Cargo</label>
                        <input type="text" name="cargo" class="form-control"  value="{{$control->cargo}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label">Sede de Organizacion</label>
                        <input type="text" name="sedeOrganizacion" class="form-control"  value="{{$control->sedeOrganizacion}}">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label">Area</label>
                        <input type="text" name="area" class="form-control"  value="{{$control->area}}">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">Responsable del area</label>
                        <input type="text" name="responsableArea" class="form-control"  value="{{$control->responsableArea}}">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">Sistema</label>
                        <input type="text" name="sistema" class="form-control"  value="{{$control->sistema}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label">Politicas de acceso</label>
                        <input type="text" name="politicasAcceso" class="form-control"  value="{{$control->politicasAcceso}}">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label">Usuarios</label>
                        <input type="text" name="usuarios" class="form-control"  value="{{$control->usuarios}}">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">Perfil</label>
                        <input type="text" name="perfil" class="form-control"  value="{{$control->perfil}}">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label class="control-label">Apellidos y Nombres</label>
                        <input type="text" name="apellidosNombres" class="form-control"  value="{{$control->apellidosNombres}}">
                    </div>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <input type="submit" class="btn btn-success" value="Actualizar">
        </footer>
    </form>
    
@stop