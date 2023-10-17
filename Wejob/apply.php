<?php
session_start();


$access=$_SESSION['pseudo'];
    $jobtitle=$_GET['apply'];
   
    $res = "waiting";
    

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {

    $query="insert into decision(res,jobtitle,user) values('$res','$jobtitle','$access')";
    mysqli_query($conn,$query);

    $jobtitle=$_SESSION['jobtitle'];

    header("Location: dashboard_D.php");
   
    $conn->close();
  
}
?>