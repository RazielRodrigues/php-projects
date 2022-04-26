<?php 

class Programador extends Pessoa{
	public $linguagem;

	public function __construct($tmpnome, $tmplinguagem)
	{
		$this->nome = $tmpnome;
		$this->linguagem = $tmplinguagem;

		echo "<br>Objeto".__CLASS__." foi instanciado.<br>";
		#CONSTANTE MÁGICA
	}

}