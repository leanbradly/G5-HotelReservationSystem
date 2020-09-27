<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h1>Update Reservation Status</h1>
		<form action="/ReservationStatus/{{ $ReservationStatus->id }}" method='POST'>
			@method('PUT')
			@csrf
			<div class="row">
				
				<input placeholder="status" id="status" type="text" name="status" value='{{ $ReservationStatus->status }}'>
				
			</div>
			<div class="row">

				<input placeholder="description" id="description" type="text" name="description" value='{{ $ReservationStatus->description }}'>
				
			</div>
			<div class="button">
				<button type="submit" name="action">Submit
				</button>
			</div>
		</form>
<script type="text/javascript" src="js/materialize/js/materialize.min.js"></script>
</body>

</html>