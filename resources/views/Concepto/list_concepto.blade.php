@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'concepto/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="Regional">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('concepto.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('concepto.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Estado</th>
						<th>Area</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($conceptos as $concepto)
					<tr>
						<td>{{$concepto->nombre_concepto}}</td>
						<td>{{$concepto->estado_concepto}}</td>
						<td>{{$concepto->area}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('concepto.edit',['id'=> $concepto->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('concepto/destroy',['id'=> $concepto->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection