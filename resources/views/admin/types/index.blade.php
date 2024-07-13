@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="m-0 p-2 text-center text-primary">Questi Sono i Tipi</h1>

		<ul>
			@foreach ($types as $type)
				<li class="mt-2">
					<a href="{{ route('admin.types.show', $type->id) }}">{{ $type->name }}</a>

				</li>
				<form method="POST" action="{{ route('admin.types.destroy', $type->id) }}">
					@csrf

					@method('DELETE')
					<button type="submit" href="" class="btn btn-outline-danger my-3">Elimina
						Tipo</button>
				</form>
			@endforeach
		</ul>
	</div>
@endsection
