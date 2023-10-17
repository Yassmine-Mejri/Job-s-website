<?php
session_start();
$invalid= null;
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];
$submit = $_POST['submit'];

$con = new mysqli('localhost','root','','test');
	if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} else {
        if(isset($_POST['submit'])){
        $stmt = $con->prepare("select * from loge where pseudo = ?");
        $stmt->bind_param("s", $pseudo);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows >= 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password){
                $_SESSION['pseudo']=$pseudo;
                header("Location: dashboard_E.php");
            } else {
                echo "invalid pseudo and password";
            }
        } else {
            echo "invalid";
        }
    }
}

?>