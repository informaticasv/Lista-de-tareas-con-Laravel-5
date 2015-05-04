@extends('app')

@section('content')

{!!Form::model($todo, ['class' => 'form-horizontal'])!!}
    <fieldset>
        <legend class="text-center header">Editar Tarea</legend>

        <div class="form-group">
            <span class="col-md-1 col-md-offset-2 text-center">Tarea</span>
            <div class="col-md-6">
                {!!Form::text('nombre', null, ['placeholder' => 'Nombre de la tarea', 'class' => 'form-control'])!!}
            </div>
        </div>
        <div class="form-group">
            <span class="col-md-1 col-md-offset-2 text-center">Fecha Inicio</span>
            <div class="col-md-6">
                {!!Form::text('fecha_inicio', null, ['type' => 'date', 'placeholder' => 'Nombre de la tarea', 'class' => 'form-control'])!!}
            </div>
        </div>

        <div class="form-group">
            <span class="col-md-1 col-md-offset-2 text-center">Fecha Fin</span>
            <div class="col-md-6">
                {!!Form::text('fecha_fin', null, ['type' => 'date', 'placeholder' => 'Nombre de la tarea', 'class' => 'form-control'])!!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </fieldset>
{!!Form::close()!!}
	


@stop