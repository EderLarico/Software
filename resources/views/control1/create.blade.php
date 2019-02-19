@extends('welcome')

@section('estilos')
@stop


@section('content')
    <header class="panel-heading">
        <h1 class="all-tittlese">Registro de tesis</h1>

        <p class="panel-subtittlese"><font size="4">
        Bienvenido al registro de tesis, información de la página &nbsp; <i class="zmdi zmdi-search"></i> &nbsp; que se encuentra en la barra superior</font>
        </p>
    </header>
    <form action="{{url('/control1')}}" method="post">
        @csrf
        <div class="panel-body">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="control-label">Título</label>
                    <input type="text" name="titulo" class="form-control">
                </div>
            </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label">Año</label>
                        <input type="date" name="anio" class="form-control">
                    </div>
                </div>
                <div class="col-sm-2">
                    <label class="control-label">Estado</label>
                    <select class="form-control selectpicker" id="producto" data-live-search="true" name="estado">
                        <option value="Disponible"> Disponible </option>
                        <option value="No disponible"> No disponible </option>
                    </select>
                </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="control-label">Asesor</label>
                    <input type="text" name="asesor" class="form-control">
                </div>
            </div>


            <div class="input-group control-group after-add-more-subarea col-sm-12" >
                <div class="box box-success">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">Autor</label>
                                    <input type="text" name="autor[]" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-xs-3 slct" >
                  <button class="btn btn-success add-more-subarea" type="button"><i class="glyphicon glyphicon-plus"></i> Agregar autor</button>
                </div>
            </div>


                    
        </div>
        <footer class="panel-footer">
            <input type="submit" class="btn btn-success" value="Guardar">
        </footer>
    </form>

    <div class="copy-subarea hide">
        <div class="control-group-subarea input-group col-sm-12" style="margin-top:5px">
            <div class="box box-success">
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Autor</label>
                                <input type="text" name="autor[]" class="form-control">
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="form-group col-xs-3 slct" >
            <button class="btn btn-danger remove-subarea" type="button"><i class="glyphicon glyphicon-remove-subarea"></i> Eliminar campo</button>
            </div>
        </div>
    </div>
    
@stop

@section('js')
@stop
@section('jsope')
<script>
  $(document).ready(function() {
    contador = 1;
    $(".add-more-subarea").click(function(){
        if (contador < 4){
            contador = contador + 1
            var html = $(".copy-subarea").html();
            $(".after-add-more-subarea").after(html);
        }
        else {
            alert("Sólo se puede ingresar máximo 3 autores");
        }
    });
    $("body").on("click",".remove-subarea",function(){
        $(this).parents(".control-group-subarea").remove();
        contador = contador - 1;
    });
  });

</script>
@stop
