<?php 

declare(strict_types=1);

$conexaoDB = require 'connect.php';
$update = 'update produtos set descricao = ? where id = ?';

$prepare = $conexaoDB->prepare($update);

$prepare->bindParam(1, $_GET['descricao']);
$prepare->bindParam(2, $_GET['id']);

$prepare->execute();

echo $prepare->rowCount();
