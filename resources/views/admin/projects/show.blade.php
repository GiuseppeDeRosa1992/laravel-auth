@extends('layouts.app')

@section('content')
	<div class="col-4 mt-3 m-auto">
		<div class="card p-0 h-100">
			<div class="col-12">
				<img src="{{ $projects->img_preview }}" class="img-fluid rounded-start" alt="immagine-progetto">
			</div>
			<div class="row g-0 m-0">
				<div class="col-12">
					<div class="card-body">
						<p class="card-text"><b>Titolo Progetto:</b> {{ $projects->title }}</p>
						<p class="card-text"><b>Descrizione Progetto:</b> {{ $projects->description }}</p>
						<p class="card-text">
							<b>Tipo Progetto:</b>
							{{ $projects->type->name }}
							<img src="{{ $projects->type->icon }}" alt="" class="img-fluid">
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
