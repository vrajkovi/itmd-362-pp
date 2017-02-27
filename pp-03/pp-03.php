<?php

//Make short Variable names

$email = $_REQUEST['email_field'];
$phone = $_REQUEST['phone_field'];
$bday = $_REQUEST['bday_field'];

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Submission Complete!</title>
		<style>
		.box {
			border: 1px solid #000000;
			background-color: #4c4c4c;
			margin: 20px 20px;
			padding: 5px 20px;
		}
		</style>
	    <link rel="stylesheet" media="screen" href="http://chicagolandtaurus.org/screen.css" />	
</head>
<body>
	<div style="text-align:center;">
		<h2>Thank you for your submission <?php echo htmlentities($firstName) ?>!</h2>
		<h3>Review the information below. If any information is incorrect, please go back and resubmit the form again.</h3>
	</div>
	<br><br>

	
	<div class="box">	
		<p><strong>Email Address:</strong> <?php echo htmlentities($email) ?></p>
		<p><strong>Phone Number:</strong> <?php echo htmlentities($phone) ?></p>
		<p><strong>Birthday:</strong> <?php echo htmlentities($bday) ?></p>

	</div>
		
	</div>	
	
</body>
</html>