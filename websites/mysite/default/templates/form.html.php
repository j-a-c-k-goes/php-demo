<!-- Post method instructs browser to send form variable invisibly versus as embedded -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enter Your Name</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<!-- leave form action blank. submit back to same url received from -->
	<form action="" method="post">
		<label for="firstname">First name:</label>
		<input type="text" name="firstname" id="firstname">

		<label for="lastname">Last name:</label>
		<input type="text" name="lastname" id="lastname">
		
		<input type="submit" value="GO">
	</form>
</body>
</html>
