<?php
 include 'conn.php';

  $name=$_POST['name'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $phone= $_POST['phone'];
  $password= $_POST['password'];

  $password= password_hash($password, PASSWORD_BCRYPT);

   $query="INSERT INTO `lancer`(`lancer_name`,`lancer_username`,`lancer_email`,`lancer_phone`,`lancer_password`) VALUES ('$name','$username','$email','$phone','$password')";
  $result=mysqli_query($con,$query);
  if ($result) {
  	// echo "successfully inserted";
  	header('location:template.html');
  }
  else{
  	echo "failed to insert";
  }
 
?>