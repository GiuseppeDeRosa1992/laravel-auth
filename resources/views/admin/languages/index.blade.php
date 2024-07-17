@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="m-0 p-2 text-center text-primary">Questi sono i Linguaggi</h1>

		<ul>
			@foreach ($languages as $language)
				<li>
					<a href="{{ route('admin.languages.show', $language->id) }}">Linguaggio: {{ $language->name }}</a>
					<p class="{{ $language->icon }}"></p>
				</li>

				<a href="{{ route('admin.languages.edit', $language->id) }}" class="btn btn-outline-primary my-3">Modifica
					Linguaggio
					<i class="fa-solid fa-pencil"></i></a>

				<form action="{{ route('admin.languages.destroy', $language->id) }}" method="post">
					@method('DELETE')
					@csrf
					<button type="submit" href="" class="btn btn-outline-danger my-3">Elimina
						Tipo
						<i class="fa-solid fa-trash-can"></i></button>
				</form>
			@endforeach

		</ul>
	</div>
@endsection
