@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'profesional/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="Profesional">Nombre</label>
			<input type="text" class="form-control" name="Nombre">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('profesional.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('profesional.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Tipo documento</th>
						<th>Documento</th>
						<th>Nombre</th>
						<th>Primer_Apellido</th>
						<th>Segundo_Apellido</th>
						<th>Telefono</th>
						<th>Email</th>
						<th>Direccion</th>
						<th>Fecha_Nacimiento</th>
						<th>Estado</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($profesionales as $profesional)
					<tr>
						<td>{{$profesional->tipo_documento_profesional}}</td>
						<td>{{$profesional->documento_profesional}}</td>
						<td>{{$profesional->nombre_profesional}}</td>
						<td>{{$profesional->primer_apellido_profesional}}</td>
						<td>{{$profesional->segundo_apellido_profesional}}</td>
						<td>{{$profesional->telefono_profesional}}</td>
						<td>{{$profesional->email_profesional}}</td>
						<td>{{$profesional->direccion_profesional}}</td>
						<td>{{$profesional->fecha_nacimiento_profesional}}</td>
						<td>{{$profesional->estado_profesional}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('profesional.edit',['id'=> $profesional->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('profesional/destroy',['id'=> $profesional->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection