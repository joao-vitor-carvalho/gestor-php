<?php

$mysqli = new mysqli('localhost:3306', 'phpmyadmin', '20906601', 'joao');
//$id = $_GET ['id'];
$nome = $_GET ['name'];
$email = $_GET ['email'];
$senha = password_hash($_GET ['pass'], CRYPT_BLOWFISH);
$groups = $_GET ['groups'];
$status = $_GET ['status'];




//$sql = "INSERT INTO users (name, email, pass, groups, status) VALUES ('".$nome."', '".$email."', '".$senha."', '".$groups."', '".$status."')";

$sql = "INSERT INTO `users`(`name`, `email`, `pass`, `groups`, `status`) VALUES ('".$nome."','".$email."','".$senha."','".$groups."','".$status."')";

//$sql = "SELECT * FROM users";

$query = mysqli_query($mysqli, $sql);

var_dump($query);

header('Location:users.php');



?>