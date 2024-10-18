<section>
	<div class="text-center px-2 row m-0">
		@foreach ($projects as $projectSingle)
			<div class="col-4 mt-3">
				<div class="card p-0 h-100">
					<div class="row g-0 m-0">
						<div class="col-12">
							@if (Str::startsWith($projectSingle->img_preview, 'http'))
								<img src="{{ $projectSingle->img_preview }}" class="img-fluid rounded-start mb-2" alt="immagine-progetto">
							@else
								<img src="{{ asset('storage/' . $projectSingle->img_preview) }}" class="img-fluid rounded-start mb-2"
									alt="immagine-progetto">
							@endif
						</div>
						<h5 class="card-title"><b>Titolo Progetto:</b> {{ $projectSingle->title }}</h5>
					</div>
					<a href="{{ route('admin.projects.show', $projectSingle->id) }}" class="btn btn-outline-primary my-2">Dettagli
						Progetto
						<i class="fa-solid fa-info"></i></a>
					<a href="{{ route('admin.projects.edit', $projectSingle->id) }}" class="btn btn-outline-primary my-2">Modifica
						Progetto
						<i class="fa-solid fa-pencil"></i></a>

					<!-- Modal trigger button -->
					<button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
						data-bs-target="#modal-{{ $projectSingle->id }}">Elimina Progetto
						<i class="fa-solid fa-trash-can"></i>
					</button>

					<!-- Modal Body -->
					<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
					<div class="modal fade" id="modal-{{ $projectSingle->id }}" tabindex="-1" data-bs-backdrop="static"
						data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{ $projectSingle->id }}" aria-hidden="true">
						<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="modalTitle-{{ $projectSingle->id }}">
										Delete current project
									</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>

								<div class="modal-body">
									Deleting project name: {{ $projectSingle->title }}
									⚡Danger, you cannot undo this operation
								</div>
								<div class="modal-footer justify-content-center">
									{{-- CREO FORM PER CANCELLARE UN FUMETTO DAL DATABASE GLI DO LA ROTTA DESTROY E IL METODO POST POI SOTTO LO CAMBIO NEL METODO DELETE --}}
									<form method="POST" action="{{ route('admin.projects.destroy', $projectSingle->id) }}">
										@csrf

										@method('DELETE')
										<button type="submit" href="" class="btn btn-outline-danger my-2" data-bs-dismiss="modal">
											<i class="fa-solid fa-trash-can"></i>
										</button>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</section>
