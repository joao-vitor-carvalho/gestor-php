<?php

$mysqli = new mysqli('localhost:3306', 'phpmyadmin', '20906601', 'joao');
$id = $_GET['id'];
$sql = "DELETE FROM customers WHERE id = '".$id."'";
$query = mysqli_query($mysqli, $sql);


    echo "Cliente deletado com sucesso!!";







?>