@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('agendas.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>nombre</th>
				<th>apellido</th>
				<th>celular</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($agendas as $agenda)

				<tr>
					<td>{{ $agenda->id }}</td>
					<td>{{ $agenda->nombre }}</td>
					<td>{{ $agenda->apellido }}</td>
					<td>{{ $agenda->celular }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('agendas.show', [$agenda->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('agendas.edit', [$agenda->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['agendas.destroy', $agenda->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
