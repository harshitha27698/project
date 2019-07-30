<?php
 include "conn.php";

 $username = $_POST['username'];
 $category= $_POST['category'];
 $description = $_POST['description'];
 $work = $_POST['work'];
 $amount = $_POST['amount'];
 $jobs = $_POST['jobs'];

 	$query="INSERT INTO `lform`(`l_username`,`l_category`,`l_description`,`l_work`,`l_amount`,`l_jobs`) VALUES ('$username','$category','$description','$work','$amount','$jobs')";

$result=mysqli_query($con,$query);

  if ($result) {
  	echo "successfully inserted";
  	// header('location:template.html');
  }
  else{
  	echo "failed to insert";
  }

?>