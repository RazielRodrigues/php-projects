<?php 

function validaNome(string $primeiroNome, string $segundoNome) : bool{
	removerMensagemSucesso();

	if (empty($primeiroNome) && empty($segundoNome)){
		setMensagemErro('<br>Os campos não podem ser vazio!');
		return false;
	}else if (strlen($primeiroNome) < 3 && strlen($segundoNome) < 3){
		setMensagemErro('<br>Nome muito pequeno!');
		return false;
	}else if (strlen($primeiroNome) > 40 || strlen($segundoNome) > 40){
		setMensagemErro('<br>Nome muito extenso!');
		return false;
	}

	return true;
}

function validaIdade(string $idade) : bool{
	removerMensagemSucesso();

	if (!is_numeric($idade)) {
		setMensagemErro('<br>Digite um número!');
		return false;
	}

	return true;
}
