@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($curso,['route'=>'curso.update','method'=>'put','novalidate'])!!}
			{!! Form::hidden('id',$curso->id)!!}
		<div class="form-group">
			{!! Form::label('full_name','Nombre')!!}
			{!! Form::text('nombre_curso',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Descripci&oacute;n')!!}
			{!! Form::textarea('descripcion_curso',null,['class'=>'form-control','size' => '30x5','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Modalidad')!!}
			{!! Form::text('modalidad_curso',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Fecha de Inicio')!!}
			{!! Form::date('fecha_inicio_curso',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Fecha de Finalizaci&oacute;n')!!}
			{!! Form::date('fecha_fin_curso',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Estado')!!}
			{!! Form::text('estado_curso',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Profesional')!!}
			{!! Form::text('profesional',null,['class'=>'form-control','required'=>'required'])!!}
		</div>

		<div class="form-group">
			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection