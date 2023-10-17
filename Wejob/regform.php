<?php
session_start();
$access=$_SESSION['pseudo'];

   $fullname = $_POST['fullname'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $birth = $_POST['birth'];
   $adresse = $_POST['adresse'];
   $gender = $_POST['gender'];
   $status = $_POST['status'];
   $degre = $_POST['degre'];
   $compd = $_POST['compd'];
   $fac = $_POST['fac'];
   $expp = $_POST['expp'];

   $conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
      echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$query="insert into `regform`(fullname, email, phone, birth, adresse, gender, status, degre, compd, fac, expp, user) values('$fullname', '$email', $phone, '$birth', '$adresse', '$gender', '$status', '$degre', '$compd', '$fac', $expp, '$access')";
		mysqli_query($conn,$query);

      $_SESSION['fullname'] = $fullname;
      

      header("Location: dashboard_D.php");
		
		$conn->close();
	}



?>