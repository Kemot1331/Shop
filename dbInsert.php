<?php 
    include("dbConnect.php");

    $inputName = $_POST['name'];
    $inputUrlImage = $_POST['urlImage'];
    $inputPrice = $_POST['price'];

    $sql = "INSERT INTO Products (name, imgURL, price) 
    VALUES('" . $inputName. "','" . $inputUrlImage. "','" . $inputPrice. "');";
    $result = $conn->query($sql);
?>