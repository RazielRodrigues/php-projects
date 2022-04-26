<?php 

$conexaoDB = require 'connect.php';
$insert = 'insert into produtos(descricao) values(?)';

$prepare = $conexaoDB->prepare($insert);

$prepare->bindParam(1, $_GET['descricao']);
$prepare->execute();

echo $prepare->rowCount();
