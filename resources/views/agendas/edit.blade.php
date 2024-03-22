@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($agenda, array('route' => array('agendas.update', $agenda->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('nombre', 'Nombre', ['class'=>'form-label']) }}
			{{ Form::text('nombre', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('apellido', 'Apellido', ['class'=>'form-label']) }}
			{{ Form::text('apellido', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('celular', 'Celular', ['class'=>'form-label']) }}
			{{ Form::text('celular', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
