@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="m-0 p-2 text-center text-primary">Questi Sono i Tipi</h1>

		<ul>
			<div class="row">
				@foreach ($types as $type)
					<div class="col-4">
						<li class="mt-2">
							<a href="{{ route('admin.types.show', $type->id) }}">{{ $type->name }}</a>
						</li>

						<figure>
							<img src="{{ $type->icon }}" alt="immagine-tipo" class="w-50">
						</figure>

						<a href="{{ route('admin.types.edit', $type->id) }}" class="btn btn-outline-primary my-3">Modifica
							Tipo
							<i class="fa-solid fa-pencil"></i></a>

						<form method="POST" action="{{ route('admin.types.destroy', $type->id) }}">
							@csrf

							@method('DELETE')
							<button type="submit" href="" class="btn btn-outline-danger my-3">Elimina
								Tipo
								<i class="fa-solid fa-trash-can"></i></button>
						</form>
					</div>
				@endforeach
			</div>
		</ul>
	</div>
@endsection
