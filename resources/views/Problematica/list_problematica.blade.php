@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'problematica/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="Problematica">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('problematica.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('problematica.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Tipo problematica</th>
						<th>Estado</th>
						<th>Area</th>
					</tr>
				</thead>
				<tbody>
					@foreach($problematicas as $problematica)
					<tr>
						<td>{{$problematica->nombre_problematica}}</td>
						<td>{{$problematica->tipo_problematica}}</td>
						<td>{{$problematica->estado}}</td>
						<td>{{$problematica->area}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('problematica.edit',['id'=> $problematica->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('problematica/destroy',['id'=> $problematica->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection