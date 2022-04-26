<?php 

declare(strict_types=1);

$conexaoDB = null;

try {
	
	$conexaoDB = new PDO('mysql:host=localhost;dbname=pdo','root','');

} catch (Exception $e) {

	echo $e->getMessage();
	die();

}

return $conexaoDB;
