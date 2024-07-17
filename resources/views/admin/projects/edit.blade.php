@extends('layouts.app')

@section('content')
	<h1 class="py-2 m-0 text-primary text-center">Modifica Progetto</h1>
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

		<form method="POST" action="{{ route('admin.projects.update', $project->id) }}" enctype="multipart/form-data">
			@method('PUT')

			@csrf
			<div class="mb-3">
				<label for="title" class="form-label">Modifica Titolo Progetto</label>
				<input type="text" class="form-control" name="title" value="{{ old('title', $project->title) }}">
				@error('title')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="description" class="form-label">Modifica Descrizione Progetto</label>
				<input type="text" class="form-control" name="description"
					value="{{ old('description', $project->description) }}">
				@error('description')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="img_preview" class="form-label">Modifica URL IMmagine Progetto</label>
				<input type="text" class="form-control" name="img_preview" value="{{ old('title', $project->img_preview) }}">
				@error('img_preview')
					<div class="form-text text-danger">The Link Preview field is required.</div>
				@enderror
			</div>

			<div class="mb-3">
				<select name="type_id" id="">
					@foreach ($types as $type)
						<option value="{{ $type->id }}" @selected($type->id == $project->type->id)>{{ $type->name }}</option>
					@endforeach
				</select>
				@error('type_id')
					<div class="form-text text-danger">The Link Preview field is required.</div>
				@enderror
			</div>

			<div class="mb-3">
				@foreach ($languages as $language)
					<div>
						<label for="icon" class="form-label">{{ $language->name }}</label>
						<input type="checkbox" name="languages[]" id="" value="{{ $language->id }}">
					</div>
				@endforeach

				@error('languages[]')
					<div class="form-text text-danger">The Link Preview field is required.</div>
				@enderror
			</div>

			<button type="submit" class="btn btn-outline-primary">Modifica Progetto
				<i class="fa-solid fa-pencil"></i>
			</button>

		</form>
	</div>
@endsection
