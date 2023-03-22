<?php

$mysqli = new mysqli('localhost:3306', 'phpmyadmin', '20906601', 'joao');
$id = $_GET['id'];
$nome = $_GET['name'];
$email = $_GET['email'];
$senha = $_GET['pass'];
$groups = $_GET['groups'];
$status = $_GET['status'];

$sql = "INSERT INTO users(id, 'name', email, pass, groups, 'status') VALUES (01, 'joao', 'joao@teste', 'teste', 'teste', 'teste')";

$query = mysqli_query($mysqli, $sql);

echo "vasco";


if ($query == true){
    echo "ok";
}else{
    echo $mysqli->error;
}






?>