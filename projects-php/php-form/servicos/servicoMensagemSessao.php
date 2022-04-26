<?php 
session_start();

function setMensagemSucesso(string $mensagemSucesso) : void{

	$_SESSION['mensagem de sucesso'] = $mensagemSucesso;

}

function getMensagemSucesso() : ?string{

	if(isset($_SESSION['mensagem de sucesso'])){
		return $_SESSION['mensagem de sucesso'];
	}

	return null;

}

function setMensagemErro(string $mensagemErro) : void{

	$_SESSION['mensagem de erro'] = $mensagemErro;

}

function getMensagemErro() : ?string{

	if (isset($_SESSION['mensagem de erro'])) {
		return $_SESSION['mensagem de erro'];
	}

	return null;
}

function removerMensagemErro() : void{

	if (isset($_SESSION['mensagem de erro']))
		unset($_SESSION['mensagem de erro']);
	
}

function removerMensagemSucesso() : void{

	if (isset($_SESSION['mensagem de sucesso']))
		unset($_SESSION['mensagem de sucesso']);
	
}
