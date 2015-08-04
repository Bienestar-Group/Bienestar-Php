@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'area/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="Area">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('area.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('area.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Codigo</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Estado</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($areas as $area)
					<tr>
						<td>{{$area->codigo_area}}</td>
						<td>{{$area->nombre_area}}</td>
						<td>{{$area->descripcion_area}}</td>
						<td>{{$area->estado_area}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('area.edit',['id'=> $area->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('area/destroy',['id'=> $area->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection