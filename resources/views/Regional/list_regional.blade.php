@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'regional/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="Regional">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('regional.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('regional.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Direccion</th>
						<th>Telefono</th>
						<th>PBX</th>
						<th>Director</th>
						<th>Telefono_Director</th>
						<th>Estado</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($regionales as $regional)
					<tr>
						<td>{{$regional->nombre_regional}}</td>
						<td>{{$regional->direccion_regional}}</td>
						<td>{{$regional->telefono_regional}}</td>
						<td>{{$regional->pbx_regional}}</td>
						<td>{{$regional->director_regional}}</td>
						<td>{{$regional->telefono_director}}</td>
						<td>{{$regional->estado_regional}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('regional.edit',['id'=> $regional->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('regional/destroy',['id'=> $regional->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection