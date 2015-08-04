@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route'=>'profesional.store','method'=>'post','novalidate'])!!}
		<div class="form-group">
			{!! Form::label('full_name','Tipo Documento')!!}
			{!! Form::text('tipo_documento_profesional',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Documento')!!}
			{!! Form::text('documento_profesional',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Nombre')!!}
			{!! Form::text('nombre_profesional',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Primer apellido')!!}
			{!! Form::text('primer_apellido_profesional',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Segundo apellido')!!}
			{!! Form::text('segundo_apellido_profesional',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Telefono')!!}
			{!! Form::text('telefono_profesional',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Direcci&oacute;n')!!}
			{!! Form::text('direccion_profesional',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Email')!!}
			{!! Form::text('email_profesional',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Fecha de nacimiento')!!}
			{!! Form::date('fecha_nacimiento_profesional',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	
		<div class="form-group">
			{!! Form::label('email','Estado')!!}
			{!! Form::text('estado_profesional',null,['class'=>'form-control','required'=>'required'])!!}
		</div>	

		<div class="form-group">
			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection