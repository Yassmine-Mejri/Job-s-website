<?php
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $num=$_GET['deleteid'];

    $sql="delete from empform where num=$num";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location: dashboard_E.php');  
    } else {
        echo "invalid";
    }
}
?>