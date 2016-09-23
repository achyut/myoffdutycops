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
			Email: <a href="mailto:{{ $email }}">{{ $email }} </a><br>
			Phone: <a href="tel:{{ $phone }}">{{ $phone }} </a> <br>
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
