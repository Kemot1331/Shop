<?php 
    $adress = "localhost";
    $user = "root";
    $password = "";
    $db = "Shop";

    $conn = mysqli_connect($adress, $user, $password, $db);
    $conn->set_charset("utf8mb4");

    // if(!$conn){
    //     die("Connection problem".mysqli_connect_error());
    // }
    // echo 'Db connected';
?>
