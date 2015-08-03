@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($item,['route'=>'item.update','method'=>'put','novalidate'])!!}
			{!! Form::hidden('id',$item->id)!!}
		<div class="form-group">
			{!! Form::label('full_name','Nombre')!!}
			{!! Form::text('nombre_item',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Tipo')!!}
			{!! Form::text('tipo_item',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Estado')!!}
			{!! Form::text('estado_item',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Concepto')!!}
			{!! Form::text('concepto',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	

		<div class="form-group">
			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection