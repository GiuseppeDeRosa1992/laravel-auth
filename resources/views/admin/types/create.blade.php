@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="text-center py-2 text-success">Crea Nuovo Tipo</h1>

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


		<form method="POST" action="{{ route('admin.types.store') }}">
			@csrf

			<div class="mb-3">
				<label for="name" class="form-label">Titolo Nuovo Tipo</label>
				<input type="text" class="form-control" name="name" value="{{ old('name') }}">
				@error('name')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="description" class="form-label">Descrizione Nuovo Tipo</label>
				<input type="text" class="form-control" name="description" value="{{ old('description') }}">
				@error('description')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="icon" class="form-label">URL Immagine Nuovo Tipo</label>
				<input type="text" class="form-control" name="icon" value="{{ old('icon') }}">
				@error('icon')
					<div class="form-text text-danger">The Link Preview field is required.</div>
				@enderror
			</div>

			<button type="submit" class="btn btn-outline-success">Crea Nuovo Tipo
				<i class="fa-solid fa-plus"></i>
			</button>
		</form>
	</div>
@endsection
