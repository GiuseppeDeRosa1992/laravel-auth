<x-mail::message>

	# Ciao admin!

	Hai ricevuto un nuovo messaggio, ecco qui i dettagli:
	Nome: {{ $lead['name'] }}
	Email: {{ $lead['email'] }}
	Messaggio:
	{{ $lead['message'] }}



	{{ config('app.name') }}
</x-mail::message>
