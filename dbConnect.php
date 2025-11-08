<?php 
    $adress = "192.168.1.100";
    $user = "user";
    $password = "user";
    $db = "Shop";

    $conn = mysqli_connect($adress, $user, $password, $db);

    // if(!$conn){
    //     die("Connection problem".mysqli_connect_error());
    // }
    // echo 'Db connected';
?>