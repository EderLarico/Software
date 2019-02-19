@extends('welcome')

@section('estilos')
@stop


@section('content')
<div class="box box-primary">

    <header class="panel-heading">
        <h2 class="all-tittles">Modificación de entrada</h2>

        <p class="panel-subtittlese"><font size="4">
        Se registrará cada modificación que se realize
        </font>
        </p>
    </header>
    <form action="/control1/{{$id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="panel-body">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label"><font size="4">Título</font></label>
                        <input type="text" name="titulo" class="form-control" value="{{$control->titulo}}">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label"><font size="4">Año</font></label>
                        <input type="Date" name="anio" class="form-control"  value="{{$control->anio}}">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="control-label"><font size="4">Estado</font></label>
                        <select class="form-control selectpicker" id="producto" data-live-search="true" name="estado" value="{{$control->estado}}">
                            <option value="Disponible"> Disponible </option>
                            <option value="No disponible"> No disponible </option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label"><font size="4">Asesor</font></label>
                        <input type="text" name="asesor" class="form-control"  value="{{$control->asesor}}">
                    </div>
                </div>

            @php
            $cont=0;
            @endphp
            @while($cont < sizeof($control->autor))
            @if($cont==0)
            <div class="input-group control-group after-add-more-subarea col-sm-12" >
                <div class="box box-success">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label"><font size="4">Autor</font></label>
                                    <input type="text" name="autor[]" class="form-control" value="{{$control->autor[$cont]}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-xs-2 slct" >
                    <button class="btn btn-success add-more-subarea" type="button"><i class="glyphicon glyphicon-plus"></i> Agregar</button>
                </div>
            </div>
            @else
            <!--lo que copia varias veces-->
            <div class="control-group-subarea input-group col-sm-12" style="margin-top:5px">
                <div class="box box-success">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label"><font size="4">Autor</font></label>
                                    <input type="text" name="autor[]" class="form-control"  value="{{$control->autor[$cont]}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-xs-2 slct" >
                    <button class="btn btn-danger remove-subarea" type="button"><i class="glyphicon glyphicon-remove-subarea"></i> Eliminar Campo</button>
                    </div>
                </div>
            </div>
            
            @endif
            @php
            $cont=$cont+1;
            @endphp
            @endwhile
            <div class="debajo"></div>
        </div>

        <footer class="panel-footer">
            <input type="submit" class="btn btn-success" value="Actualizar">
        </footer>
    </form>

    <!--lo que copia varias veces-->
    <div class="copy-subarea hide">
        <div class="control-group-subarea input-group col-sm-12" style="margin-top:5px">
            <div class="box box-success">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label"><font size="4">Autor</font></label>
                                <input type="text" name="autor[]" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group col-xs-2 slct" >
            <button class="btn btn-danger remove-subarea" type="button"><i class="glyphicon glyphicon-remove-subarea"></i> Eliminar Campo</button>
            </div>
        </div>
    </div>
    <input hidden id="contador"  value="{{count($control->autor)}}">

</div> 
@stop

@section('jsope')
<script type="text/javascript">
  $(document).ready(function() {
    contador = $("#contador").val();
    $(".add-more-subarea").click(function(){
        if (contador < 3){
            contador++;
            var html = $(".copy-subarea").html();
            $(".debajo").after(html);
        }
        else {
            alert("Sólo se puede ingresar máximo 3 autores" + contador);
        }
    });
    $("body").on("click",".remove-subarea",function(){
        contador--;
        $(this).parents(".control-group-subarea").remove();
    });
  });
</script>
@stop