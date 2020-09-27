<!DOCTYPE html>
<html>
<head>
	<title>ReservationStatus</title>
</head>
<body>
	<h1>Reservation Status show</h1>
	<a href="/ReservationStatus/{{ $ReservationStatus->id }}/edit">Edit</a>

	<form action="/ReservationStatus/{{ $ReservationStatus->id }}" method='POST'>
		@csrf
		@method('DELETE')
		<button type="submit">Delete</button>
	</form>

	<h1>{{ $ReservationStatus->status }}</h1>
	<p>{{ $ReservationStatus->description }}</p>
	
</body>
</html>