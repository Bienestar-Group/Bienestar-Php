@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'evento/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="Regional">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('evento.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('evento.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Tipo</th>
						<th>Fecha</th>
						<th>Hora Inicio</th>
						<th>Hora Fin</th>
						<th>Lugar</th>
						<th>Descripci&oacute;n</th>
						<th>Estado</th>
						<th>Responsable</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($eventos as $evento)
					<tr>
						<td>{{$evento->nombre_evento}}</td>
						<td>{{$evento->tipo_evento}}</td>
						<td>{{$evento->fecha_evento}}</td>
						<td>{{$evento->hora_inicio_evento}}</td>
						<td>{{$evento->hora_fin_evento}}</td>
						<td>{{$evento->lugar_evento}}</td>
						<td>{{$evento->descripcion_evento}}</td>
						<td>{{$evento->estado_evento}}</td>
						<td>{{$evento->responsable}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('evento.edit',['id'=> $evento->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('evento/destroy',['id'=> $evento->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection