<?php

$mysqli = new mysqli('localhost:3306', 'phpmyadmin', '20906601', 'joao');
//$id = $_GET ['id'];
$nome = $_GET ['name'];
$tipo = $_GET ['type'];
$data = $_GET ['date'];
$value = $_GET ['value'];
$info = $_GET ['info'];
$general = $_GET ['general_id'];




//$sql = "INSERT INTO users (name, email, pass, groups, status) VALUES ('".$nome."', '".$email."', '".$senha."', '".$groups."', '".$status."')";

$sql = "INSERT INTO `patrimonial`(`name`, `type`, `date`, `value`, `info`, `general_id`) VALUES ('".$nome."','".$tipo."','".$data."','".$value."','".$info."'. '".$general."')";

//$sql = "SELECT * FROM users";

$query = mysqli_query($mysqli, $sql);

var_dump($query);

//header('Location:patrimonial.php');



?>