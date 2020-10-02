<!DOCTYPE html>
<html>
<head>
	<title>Create form</title>
</head>
<body>
	<h1>Create form</h1>
		<form action="/create" method='POST'>
			@include('layouts.errors')
			@csrf
			<div class="row">
				
				<input placeholder="status" id="status" type="text" name="status">
				
			</div>
			<div class="row">

				<input placeholder="description" id="description" type="text" name="description">
				
			</div>
			<div class="button">
				<button type="submit" name="action">Submit
				</button>
			</div>
		</form>
<script type="text/javascript" src="js/materialize/js/materialize.min.js"></script>
</body>

</html>