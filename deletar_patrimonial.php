<?php

$mysqli = new mysqli('localhost:3306', 'phpmyadmin', '20906601', 'joao');
$id = $_GET['id'];
$sql = "DELETE FROM patrimonial WHERE id = '".$id."'";
$query = mysqli_query($mysqli, $sql);


    echo "Usuário deletado com sucesso!!";







?>