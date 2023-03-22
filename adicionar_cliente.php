<?php

$mysqli = new mysqli('localhost:3306', 'phpmyadmin', '20906601', 'joao');
//$id = $_GET ['id'];
$nome = $_GET ['name'];
$email = $_GET ['email'];
$tipo = $_GET ['type'];
$contrato = $_GET ['contract'];
$userid = $_GET ['user_id'];




//$sql = "INSERT INTO users (name, email, pass, groups, status) VALUES ('".$nome."', '".$email."', '".$senha."', '".$groups."', '".$status."')";

$sql = "INSERT INTO `customers`(`name`, `email`, `type`, `contract`, `user_id`) VALUES ('".$nome."','".$email."','".$tipo."','".$contrato."','".$userid."')";

//$sql = "SELECT * FROM users";

$query = mysqli_query($mysqli, $sql);

var_dump($query);

header('Location:clientes.php');



?>