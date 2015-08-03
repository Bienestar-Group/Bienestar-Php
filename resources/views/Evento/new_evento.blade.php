@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route'=>'evento.store','method'=>'post','novalidate'])!!}
		<div class="form-group">
			{!! Form::label('full_name','Nombre')!!}
			{!! Form::text('nombre',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Tipo')!!}
			{!! Form::text('tipo',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Fecha del Evento')!!}
			{!! Form::date('fecha',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Hora Inicio')!!}
			{!! Form::text('hora_inicio',null,['class'=>'form-control','type' => 'time','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Hora Fin')!!}
			{!! Form::text('hora_fin',null,['class'=>'form-control','type' => 'time','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Lugar')!!}
			{!! Form::text('lugar',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Descripci&oacute;n')!!}
			{!! Form::textarea('descripcion',null,['class'=>'form-control','size' => '30x5','required'=>'required'])!!}
		</div>
		
		<div class="form-group">
			{!! Form::label('email','Estado')!!}
			{!! Form::text('estado',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Responsable')!!}
			{!! Form::text('responsable',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
		</div>
		{!! Form::close() !!}
	</div>
</div>
</div>
@endsection