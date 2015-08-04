@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($area,['route'=>'area.update','method'=>'put','novalidate'])!!}
			{!! Form::hidden('id',$area->id)!!}
		<div class="form-group">
			{!! Form::label('full_name','C&oacute;digo')!!}
			{!! Form::text('codigo_area',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Nombre')!!}
			{!! Form::text('nombre_area',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Descripci&oacute;n')!!}
			{!! Form::text('descripcion_area',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Estado')!!}
			{!! Form::text('estado_area',null,['class'=>'form-control','required'=>'required'])!!}
		</div>		
		<div class="form-group">
			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection