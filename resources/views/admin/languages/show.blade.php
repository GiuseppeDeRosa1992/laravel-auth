@extends('layouts.app')

@section('content')
	<div class="container">
		<h4 class="m-0 p-2 text-center text-primary">Questo è il linguaggio che nel database ha la posizione
			{{ $language->id }}
		</h4>

		<a href="{{ route('admin.languages.index') }}">{{ $language->name }}</a>
		<span class="{{ $language->icon }}"></span>
	</div>
@endsection
