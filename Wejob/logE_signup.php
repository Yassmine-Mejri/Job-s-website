<?php
session_start();
   $cname = $_POST['cname'];
   $ceoname = $_POST['ceoname'];
   $ceoemail = $_POST['ceoemail'];
   $code = $_POST['code'];
   $pseudo = $_POST['pseudo'];
   $password = $_POST['password'];
   

   $conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {

		if(isset($_POST['submit'])){

			$query ="insert into loge (cname, ceoname, ceoemail, code, pseudo, password) values('$cname', '$ceoname','$ceoemail', '$code', '$pseudo', '$password')";
			mysqli_query($conn,$query);
			$_SESSION['pseudo']=$pseudo;
			header("Location: dashboard_E.php");
	}
		$conn->close();
	}



?>