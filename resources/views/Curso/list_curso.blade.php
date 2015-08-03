@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'curso/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="Regional">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('curso.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('curso.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Descripci&oacute;n</th>
						<th>Modalidad</th>
						<th>Fecha Inicio</th>
						<th>Fecha Fin</th>
						<th>Estado</th>
						<th>Profesional</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($cursos as $curso)
					<tr>
						<td>{{$curso->nombre_curso}}</td>
						<td>{{$curso->descripcion_curso}}</td>
						<td>{{$curso->modalidad_curso}}</td>
						<td>{{$curso->fecha_inicio_curso}}</td>
						<td>{{$curso->fecha_fin_curso}}</td>
						<td>{{$curso->estado_curso}}</td>
						<td>{{$curso->profesional}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('curso.edit',['id'=> $curso->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('curso/destroy',['id'=> $curso->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection