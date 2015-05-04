@extends('app')

@section('content')
@if(count($todos))

	<div>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Fecha Inicio</th>
					<th>Fecha Fin</th>
					<th  class="text-center">Completa</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($todos as $todo)
					<tr>
						<td>{{$todo->nombre}}</td>
						<td>{{$todo->fecha_inicio}}</td>
						<td>{{$todo->fecha_fin}}</td>
						<td class="text-center"> 

							<i class="{{ ($todo->completo ? 'glyphicon glyphicon-ok green' : 'glyphicon glyphicon-remove-circle red')}}" > </i>
						</td>
						<td>
							<a href="{{route('editarTarea', $todo->slug)}}">
							<i class="glyphicon glyphicon-pencil btn btn-warning btn-sm"></i></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@else
	<div class="alert alert-warning" role="alert">
		Aún no tienes ninguna tarea 
		<a href="{{route('nuevaTarea')}}" class="btn btn-success text-center">
			crear tarea
		</a>
	</div>
@endif


@stop