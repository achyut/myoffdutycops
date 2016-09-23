<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>New Contact Request</h2>

		<div>
			There was a new contact request by following details at: {{ $created_at }}<br><br>
			
			Firstname: {{ $fname }} <br>
			Lastname: {{ $lname }} <br>
			Email: {{ $email }} <br>
			Phone: {{ $phone }} <br>
			
			<br>
			Message:
			<br>
			<br>
			{{ $contact_message }}

		</div>
	</body>
</html>
