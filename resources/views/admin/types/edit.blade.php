@extends('layouts.app')

@section('content')
	<h1 class="py-2 m-0 text-danger text-center">Modifica Tipo</h1>
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

		<form method="POST" action="{{ route('admin.types.update', $types->id) }}">
			@method('PUT')

			@csrf
			<div class="mb-3">
				<div class="mb-3">
					<select name="name" id="">
						@foreach ($tipi as $tipo)
							<option value="">{{ $tipo->name }}</option>
						@endforeach
					</select>
					@error('name')
						<div class="form-text text-danger">The Link Preview field is required.</div>
					@enderror
				</div>
				@error('name')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="description" class="form-label">Modifica Descrizione Tipo</label>
				<input type="text" class="form-control" name="description" value="{{ old('description', $types->description) }}">
				@error('description')
					<div class="form-text text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="mb-3">
				<label for="icon" class="form-label">Modifica URL IMmagine Tipo</label>
				<input type="text" class="form-control" name="icon" value="{{ old('icon', $types->icon) }}">
				@error('icon')
					<div class="form-text text-danger">The Link Preview field is required.</div>
				@enderror
			</div>


			<button type="submit" class="btn btn-outline-danger">Modifica Tipo</button>

		</form>
	</div>
@endsection