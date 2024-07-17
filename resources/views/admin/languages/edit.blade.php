@extends('layouts.app')

@section('content')
	<h1 class="py-2 m-0 text-primary text-center">Modifica Linguaggio</h1>
	<div class="container">

		{{-- MESSAGGIO DI ERRORE SE NON SI COMPLETANO I CAMPI CHE SONO OBBLIGATORI --}}
		<div>
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
		</div>

		<form method="POST" action="{{ route('admin.languages.update', $languages->id) }}">
			@method('PUT')

			@csrf
			<div class="mb-3">
				<label for="name" class="form-label">Modifica Nome Linguaggio</label>
				<input type="text" class="form-control" name="name" value="{{ old('name', $languages->name) }}">
				@error('name')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="icon" class="form-label">Modifica Icon Linguaggio</label>
				<input type="text" class="form-control" name="icon" value="{{ old('icon', $languages->icon) }}">
				@error('icon')
					<div class="form-text text-danger">The Link Preview field is required.</div>
				@enderror
			</div>


			<button type="submit" class="btn btn-outline-primary">Modifica Linguaggio
				<i class="fa-solid fa-pencil"></i>
			</button>

		</form>
	</div>
@endsection
