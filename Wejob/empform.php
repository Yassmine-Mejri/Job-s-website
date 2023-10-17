<?php
session_start();

$access=$_SESSION['pseudo'];

   $jobtitle = $_POST['jobtitle'];
   $jobdes = $_POST['jobdes'];
   $achiv = $_POST['achiv'];
   $comp = $_POST['comp'];
   $exp = $_POST['exp'];
   $salary = $_POST['salary'];

   $conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
      echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {

            $query ="insert into empform(jobtitle, jobdes, achiv, comp, exp, salary, user) values('$jobtitle', '$jobdes', '$achiv', '$comp', $exp, $salary, '$access' )";
            mysqli_query($conn,$query);

            $_SESSION['jobtitle']=$jobtitle;
            

            header("Location: dashboard_E.php");
         
		$conn->close();
	}



?>