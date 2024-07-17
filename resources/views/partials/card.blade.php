<section>
	<div class="text-center px-2 row m-0">
		@foreach ($projects as $projectSingle)
			<div class="col-4 mt-3">
				<div class="card p-0 h-100">
					<div class="row g-0 m-0">
						<div class="col-12">
							<img src="{{ asset('storage/' . $projectSingle->img_preview) }}" class="w-50 rounded-start" alt="immagine-progetto">
						</div>
						<h5 class="card-title"><b>Titolo Progetto:</b> {{ $projectSingle->title }}</h5>
					</div>
					<a href="{{ route('admin.projects.show', $projectSingle->id) }}" class="btn btn-outline-primary my-2">Dettagli
						Progetto
						<i class="fa-solid fa-info"></i></a>
					<a href="{{ route('admin.projects.edit', $projectSingle->id) }}" class="btn btn-outline-primary my-2">Modifica
						Progetto
						<i class="fa-solid fa-pencil"></i></a>
					{{-- CREO FORM PER CANCELLARE UN FUMETTO DAL DATABASE GLI DO LA ROTTA DESTROY E IL METODO POST POI SOTTO LO CAMBIO NEL METODO DELETE --}}
					<form method="POST" action="{{ route('admin.projects.destroy', $projectSingle->id) }}">
						@csrf

						@method('DELETE')
						<button type="submit" href="" class="btn btn-outline-danger my-2">Elimina
							Progetto
							<i class="fa-solid fa-trash-can"></i>
						</button>
					</form>
				</div>
			</div>
		@endforeach
	</div>
</section>
