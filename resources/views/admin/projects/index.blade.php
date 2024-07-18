@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="m-0 p-2 text-center text-primary">Questi sono i miei Progetti</h1>

		@include('partials.card')

		<div class="mt-2">
			{{ $projects->links('pagination::bootstrap-5') }}
		</div>
	</div>
@endsection
