@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="m-0 p-2 text-center text-primary">Questi Sono i Tipi</h1>

		<ul>
			<li class="mt-2">
				<a href="{{ route('admin.types.index') }}">{{ $types->name }}</a>
			</li>
			<li>
				{{ $types->description }}
			</li>
			<li>
				<img src="{{ $types->icon }}" alt="immagine-tipo" class="w-25">
			</li>
		</ul>
	</div>
@endsection
