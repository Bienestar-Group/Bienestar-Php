@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route'=>'item/search','method'=>'post','novalidate','class'=>'form-inline'])!!}
		<div class="form-group">
			<label form="Regional">Nombre</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		<a href="{{route('item.index')}}" class="btn btn-primary">Todo</a>
		<a href="{{route('item.create')}}" class="btn btn-primary">Crear</a>
		{!! Form::close() !!}
		<br>
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Tipo</th>
						<th>Estado</th>
						<th>Concepto</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($items as $item)
					<tr>
						<td>{{$item->nombre_item}}</td>
						<td>{{$item->tipo_item}}</td>
						<td>{{$item->estado_item}}</td>
						<td>{{$item->concepto}}</td>
						<td>
							<a class="btn btn-primary btn-xs" href="{{route('item.edit',['id'=> $item->id])}}">Editar</a>
							<a class="btn btn-danger btn-xs" href="{{route('item/destroy',['id'=> $item->id])}}">Eliminar</a>
						</td>
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>
@endsection