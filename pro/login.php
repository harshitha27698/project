<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    	body{
    		background: url(cover1.jpg);
    		background-repeat: no-repeat;
    		background-size: cover;
    	}
    	#my-container{
    		background-color: white;
    		max-width: 600px;
    		box-shadow: 0 15px,40px;
    		margin: auto;
    		padding: 20px;
    		margin-top: 90px;

    	}
    </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top sticky">   
		<div class="container-fluid">      
			<div class="navbar-header"> 
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" ariaexpanded="false">       
			<span class="sr-only">Toggle navigation</span>         
			<span class="icon-bar"></span>         
			<span class="icon-bar"></span>         
			<span class="icon-bar"></span>       
		</button>       
		<a class="navbar-brand" href="#" style="font-size:30px;font-family: 'Permanent Marker', cursive;"><b>Work Space</b></a>     
	</div>
		<div class="collapse navbar-collapse form-group" id="bs-example-navbar-collapse-1">       
			<ul class="nav navbar-nav navbar-right" style="font-size: 20px;font-family: 'Permanent Marker', cursive;">         
				<li><a href="template.html">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Service</a></li>
				<li><a href="login.php">log In</a></li>
				<li><a href="lancer.html">Sign In</a></li>
			</ul>
		</div>
	</div>
	</nav>
<div id="my-container">
	<?php
 		if(isset($_GET['message'])){
 		  $message=$_GET['message'];
 		  ?>
 		  <div class="alert alert-danger">
 		  	 <?php echo $message;?>
 		  </div>
 	<?php }
	?>
	<form action="verify.php" method="post">
		
		<div class="form-group">
			<label for="email">email</label>
			<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
		</div>
		
		<div class="form-group">
			<label for="password">password</label>
			<input type="password" class="form-control" name="password" id="password" placeholder="enter the password">
		</div>
		
		<input type="submit" name="submit" class="btn btn-primary" value="Register">
	</form>
	
</div>
	<div style="position: relative;top:600px;color: white;background-color: black; height: 300px; width: 100%;" class="container">
		<div class="col-md-4">
			<br><h3>About Us</h3>		
		<br><p style="font-size: 15px;font-style: italic;color: gray">. Ut enim ad minim veniam,
	        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderloit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
		</div>
		<div class="col-md-4" style="text-align: center;">
			<br><h3>Useful Links</h3>
			<br><ul style="font-style: italic;color:gray;">
				<p><a href="#">Home</a></p>
				<p><a href="#">About</a></p>
				<p><a href="#">Service</a></p>
				<p><a href="#">Gallery</a></p>
				<p><a href="#">Contact Us</a></p>
			</ul>
		</div>
		<div class="col-md-4" class="form-group">
			<br><h3>Subscribe</h3>
			<p style="font-size: 20px;font-style: italic;color: gray">By subscribing to our mailing list you will always get latest news and updates from us.</p>
		<div class="input-group">
  	         <input type="email" class="form-control" placeholder="Enter your email..." ariadescribedby="basic-addon2">
  	         <span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-envelope"></i></span>
        </div>
		</div>
	</div>


</body>
</html>