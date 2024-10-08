@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="text-center py-2 text-success">Crea Nuovo Progetto</h1>

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


		<form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data">
			@csrf

			<div class="mb-3">
				<label for="title" class="form-label">Titolo Nuovo Progetto</label>
				<input type="text" class="form-control" name="title" value="{{ old('title') }}">
				@error('title')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="description" class="form-label">Descrizione Nuovo Progetto</label>
				<input type="text" class="form-control" name="description" value="{{ old('description') }}">
				@error('description')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="link_git" class="form-label">Link Git-Hub Nuovo Progetto</label>
				<input type="text" class="form-control" name="link_git" value="{{ old('link_git') }}">
				@error('link_git')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="img_preview" class="form-label">Scegli file per nuova Immagine</label>
				<input type="file" class="form-control" name="img_preview" placeholder="">
				@error('img_preview')
					<div class="form-text text-danger">The Link Preview field is required.</div>
				@enderror
			</div>

			<div class="mb-3">
				<select name="type_id" id="">
					@foreach ($types as $type)
						<option value="{{ $type->id }}">{{ $type->name }}</option>
					@endforeach
				</select>
				@error('type_id')
					<div class="form-text text-danger">The Link Preview field is required.</div>
				@enderror
			</div>

			<div class="mb-3">
				@foreach ($languages as $language)
					<div>
						<label for="icon" class="form-check-label">{{ $language->name }}</label>
						<input type="checkbox" name="languages[]" id="" value="{{ $language->id }}">
					</div>
				@endforeach

				@error('languages[]')
					<div class="form-text text-danger">The Link Preview field is required.</div>
				@enderror
			</div>

			<button type="submit" class="btn btn-outline-success">Aggiungi Progetto
				<i class="fa-solid fa-plus"></i>
			</button>
		</form>
	</div>
@endsection
