<?php 
    include("dbConnect.php");

    $login = trim($_POST['login']);
    $mail = trim($_POST['mail']);
    $password = trim($_POST['password']);

    //checking if user exist
    $stmt = $conn->prepare("SELECT id FROM user WHERE login = ? OR mail = ?");
    $stmt->bind_param("ss", $login, $mail);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0){
        echo "User with the same login or mail are existing";
        exit;
    }
    //creating user
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO user(login, mail, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $login, $mail, $hashedPassword);
    if($stmt->execute()){
        echo("User added(todo add some styles to this site)");
    }
    else{
        echo("Error, user not added");
    }
?>