@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($evento,['route'=>'evento.update','method'=>'put','novalidate'])!!}
			{!! Form::hidden('id',$evento->id)!!}
		<div class="form-group">
			{!! Form::label('full_name','Nombre')!!}
			{!! Form::text('nombre_evento',null,['class'=>'form-control','required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Tipo')!!}
			{!! Form::text('tipo_evento',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Fecha del Evento')!!}
			{!! Form::date('fecha_evento',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Hora Inicio')!!}
			{!! Form::text('hora_inicio_evento',null,['class'=>'form-control','type' => 'time','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Hora Fin')!!}
			{!! Form::text('hora_fin_evento',null,['class'=>'form-control','type' => 'time','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Lugar')!!}
			{!! Form::text('lugar_evento',null,['class'=>'form-control','required'=>'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Descripci&oacute;n')!!}
			{!! Form::textarea('descripcion_evento',null,['class'=>'form-control','size' => '30x5','required'=>'required'])!!}
		</div>
		
		<div class="form-group">
			{!! Form::label('email','Estado')!!}
			{!! Form::text('estado_evento',null,['class'=>'form-control','required'=>'required'])!!}
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