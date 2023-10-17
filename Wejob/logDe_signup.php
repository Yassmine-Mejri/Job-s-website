<?php
session_start();
   $fname = $_POST['fname'];
   $sname = $_POST['sname'];
   $cin = $_POST['cin'];
   $email = $_POST['email'];
   $pseudo = $_POST['pseudo'];
   $password = $_POST['password'];

   $conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
	
		if(isset($_POST['submit'])){
			$query ="insert into logde(fname, sname, cin, email, pseudo, password) values('$fname', '$sname', $cin, '$email', '$pseudo', '$password')";
			mysqli_query($conn,$query);
			$_SESSION['pseudo']=$pseudo;
			header("Location: dashboard_D.php");
		}
		$conn->close();
	}



?>