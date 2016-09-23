<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>New police signup</h2>

		<div>
			There was a new police signed up by following details at: {{ $created_at }}<br><br>

			First name: {{ $fname }} <br>
			Last name: {{ $lname }} <br>
			Email: <a href="mailto:{{ $email }}">{{ $email }} </a><br>
			Phone: <a href="tel:{{ $phone }}">{{ $phone }} </a> <br>
			
			Badge Number: {{ $badgenumber }} <br>
			Agency: {{ $policeagency }} <br>
			State: {{ $state }} <br>
			Authorization: {{ $authorization }} <br>
			
		</div>
	</body>
</html>
