<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		$email=$_GET['email'];
		session_start();
		if (!isset($_SESSION[$email])) {
			header("location:login.php?message=unauthorised user");
			exit;
		}
	?>
	<h1>logged In</h1>
	</body>
	</html>