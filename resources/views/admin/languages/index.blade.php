@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="m-0 p-2 text-center text-primary">Questi sono i Linguaggi</h1>

		<ul>
			@foreach ($languages as $language)
				<li>
					<a href="{{ route('admin.languages.show', $language->id) }}">Linguaggio: {{ $language->name }}</a>
				</li>
			@endforeach
		</ul>
	</div>
@endsection
