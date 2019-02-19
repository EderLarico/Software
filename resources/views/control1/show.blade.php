@extends('welcome')

@section('estilos')
@stop


@section('content')
<div class="box box-primary">

    <header class="panel-heading">
        <h2 class="panel-tittlese"><center><font size="6"> Datos de publicación </font></center></h2>

    </header>
        

    <form >
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="panel-body">
            <table class="table table-hover table-striped" id=Tabla>
                <thead>
                <tr>    
                    
                    <th><center><font size="4"> Título : {{$control->titulo}}</font></center></th>
                    <th><center> Última modificación : {{ $control->updated_at }}</center></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b><font size="3"> Fecha de registro: </b>{{ $control->anio }}</font></td>
                        <td><b><font size="3"> Estado: </b>{{ $control->estado }}</font></td>
                        <td><b><font size="3"> Asesor: </b> {{ $control->asesor }}</font></td>
                    </tr>   
                </tbody>
            </table>

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
                                    <label class="control-label"><font size="4">Autor {{$cont + 1}} : {{$control->autor[$cont]}}</font></label>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <label class="control-label"><font size="4">Autor {{$cont + 1}} : {{$control->autor[$cont]}}</font></label>
                                </div>
                            </div>
                        </div>
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
    </form>



</div> 
@stop

@section('jsope')
@stop

