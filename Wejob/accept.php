<?php
session_start();


$jobtitle=$_GET['acceptid'];
            
$res="Accepted";


$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {

if(isset($_GET['acceptid'])){
    $cond="select * from decision where jobtitle = '$jobtitle' ";
    $result=mysqli_query($conn,$cond);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $jobtitle=$row['jobtitle'];
            $query="update decision set res='$res' where jobtitle ='$jobtitle'";
            mysqli_query($conn,$query);
            $_SESSION['res']=$res;
           header("Location: dashboard_E.php");
        }
    
    }
}

    $conn->close();
  
}
?>