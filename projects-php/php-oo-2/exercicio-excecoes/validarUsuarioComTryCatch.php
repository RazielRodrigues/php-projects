<?php 

function validarUsuario(array $usuario)
{

	if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
		throw new Exception("Campos obrigatorios não foram preenchidos!");
	}

	return true;
}

$usuario = [

'codigo' => 1,
'nome' => '',
'idade' => 43,

];

$status = false;

try{
	$status = validarUsuario($usuario);
} catch (Exception $e) {
	echo $e->getMessage();
}finally{
	echo "<br><br>Status da operação = ".(int)$status;
	die();
}
