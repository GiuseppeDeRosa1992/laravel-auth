@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="m-0 p-2 text-center text-primary">Questi Sono i Tipi</h1>

		<ul>
			@foreach ($types as $type)
				<li class="mt-2">
					<a href="{{ route('admin.types.show', $type->id) }}">{{ $type->name }}</a>
				</li>
			@endforeach
		</ul>
	</div>
@endsection
