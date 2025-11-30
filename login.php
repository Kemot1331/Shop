<?php 
    include("dbConnect.php");

    $loginOrMail = trim($_POST['login']);
    $password = trim($_POST["password"]);

    //checking if user exists
    $stmt = $conn->prepare("SELECT id FROM user WHERE login = ? OR mail = ?");
    $stmt->bind_param("ss", $loginOrMail, $loginOrMail);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows == 0){
        
    }
?>