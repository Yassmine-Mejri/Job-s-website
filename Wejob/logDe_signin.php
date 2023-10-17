<?php
session_start();
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

$con = new mysqli('localhost','root','','test');
	if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} else {
        $stmt = $con->prepare("select * from logde where pseudo = ?");
        $stmt->bind_param("s", $pseudo);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows >= 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password){
                 $_SESSION['pseudo']=$pseudo;
                header("Location: dashboard_D.php");
            } else {
                
                echo "invalid password";
            }
        } else {
            echo "invalid";
        }
    }

?>