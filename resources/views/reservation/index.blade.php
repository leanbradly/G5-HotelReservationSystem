<!DOCTYPE html>
<html>
<head>
	<title>ReservationStatus</title>
</head>
<body>
	<h1>Reservation Status</h1>
	<a href="/create">Create Reservation Status</a>

	<ol>
		@foreach($ReservationStatus as $ReservationStatus)
			<li>
				<a href= "/ReservationStatus/{{ $ReservationStatus->id }}">{{ $ReservationStatus->status }}</a>
			</li>
		@endforeach
	</ol>
</body>
</html>