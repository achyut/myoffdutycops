<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Job Found found near your area</h2>

		<div>
			Hello, {{ $officer->firstname }}<br><br>
			There is a new job found in your area. <br>
			Below is the job description:
			<br>
			Date and Time: {{ $job->dateandtime }}
			<br>
			Please click on the link below if you are interested in the job.
			<a href="#" /> Click here </a>
			<br>
			<br>
			Thank You,
			<br>
			Myoffdutycops
		</div>
	</body>
</html>
