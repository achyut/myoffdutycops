<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>New Request Service</h2>

		<div>
			There was a new request service by following details at: {{ $created_at }}<br><br>
			
			Fullname: {{ $fullname }} <br>
			Company: {{ $company }} <br>
			Email: {{ $email }} <br>
			Phone: {{ $phone }} <br>
			Location: {{ $location }} <br>
			Date and Time: {{ $dateandtime }}

			<br>
			Message:
			<br>
			<br>
			{{ $request_message }}

		</div>
	</body>
</html>
