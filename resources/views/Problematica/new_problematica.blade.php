@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route'=>'problematica.store','method'=>'post','novalidate'])!!}
		<div class="form-group">
			{!! Form::label('full_name','Nombre')!!}
			{!! Form::text('nombre_problematica',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Tipo problem&aacute;tica')!!}
			{!! Form::text('tipo_problematica',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Estado')!!}
			{!! Form::text('estado_problematica',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Area')!!}
			{!! Form::select('area', $area, null ,['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection