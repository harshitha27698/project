<?php
 include 'conn.php';

  $name=$_POST['name'];
  $username=$_POST['username'];
  $work_in=$_POST['work_in'];
  $email=$_POST['email'];
  $phone= $_POST['phone'];
  $password= $_POST['password'];

  $password= password_hash($password, PASSWORD_BCRYPT);

   $query="INSERT INTO `hire`(`hire_name`,`hire_username`,`hire_work_in`,`hire_email`,`hire_phone`,`hire_password`) VALUES ('$name','$username','$work_in','$email','$phone','$password')";
  $result=mysqli_query($con,$query);
  if ($result) {
  	echo "successfully inserted";
  	// header('location:template.html');
  }
  else{
  	echo "failed to insert";
  }
 
?>