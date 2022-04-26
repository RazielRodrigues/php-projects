<?php 

class ContaBancaria
{

	//Tipo de declaração de variavel do PHP 7.3
	/**
	* @var string
	*/

	//Tipo de declaração de variavel do PHP 7.4
	private  $banco;

	/**
	* @var string
	*/

	private  $nomeTitular;

	/**
	* @var string
	*/

	private  $numeroAgencia;

	/**
	* @var string
	*/

	private  $numeroConta;

	/**
	* @var float
	*/

	private $saldo;

	public function __construct
	(

		 $banco,

		 $nomeTitular,

		 $numeroAgencia,

		 $numeroConta,

		 $saldo

	) {

		$this->banco = $banco;

		$this->nomeTitular = $nomeTitular;

		$this->numeroAgencia = $numeroAgencia;

		$this->numeroConta = $numeroConta;

		$this->saldo = $saldo;
	}

	public function	obterSaldo()
	{
		return '<h2>Saldo atual: '.$this->saldo.'</h2>';
	}

	public function depositar($valor)
	{
		$this->saldo += $valor;
		return 'Deposito de R$ '.$valor.' realizado :)';
	}

	public function saque($valor)
	{
		$this->saldo -= $valor;
		return 'Saque de R$ '.$valor.' realizado :)';
	}

}
