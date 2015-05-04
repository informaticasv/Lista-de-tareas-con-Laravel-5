@extends('app')

@section('content')
   

    {!!Form::model($todo, ['class' => 'form-horizontal', 'method' => 'PUT'])!!}
         @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Por favor corrige los siguentes errores:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
                    {!!Form::text('fecha_inicio', null, ['placeholder' => 'Fecha de inicio', 'class' => 'form-control'])!!}
                </div>
            </div>

            <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center">Fecha Fin</span>
                <div class="col-md-6">
                    {!!Form::text('fecha_fin',null, ['placeholder' => 'Fecha de fin', 'class' => 'form-control'])!!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-1 col-md-offset-2 text-center">
                    {!!Form::checkbox('completo', 1 , 0, ['class' => 'form-control', 'value' => 1])!!}
                </div>
                <span class="col-md-6">¿Está completa la tarea?</span>
               
            </div>

            <div class="form-group">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </fieldset>
    {!!Form::close()!!}
@stop