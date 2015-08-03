@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'taller/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="Regional">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('taller.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('taller.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Descripci&oacute;n</th>
						<th>Fecha Inicio</th>
						<th>Fecha Fin</th>
						<th>Estado</th>
						<th>Curso</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($talleres as $taller)
					<tr>
						<td>{{$taller->nombre_taller}}</td>
						<td>{{$taller->descripcion_taller}}</td>
						<td>{{$taller->fecha_inicio_taller}}</td>
						<td>{{$taller->fecha_fin_taller}}</td>
						<td>{{$taller->estado_taller}}</td>
						<td>{{$taller->curso}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('taller.edit',['id'=> $taller->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('taller/destroy',['id'=> $taller->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection