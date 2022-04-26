<?php 
declare(strict_types=1);

$conexaoDB = require 'connect.php';
$delete = 'delete from produtos where id = ?';

$prepare = $conexaoDB->prepare($delete);
$prepare->bindParam(1, $_GET['id']);

$prepare->execute();

echo $prepare->rowCount();
