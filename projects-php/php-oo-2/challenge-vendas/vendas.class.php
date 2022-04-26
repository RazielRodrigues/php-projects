<?php 

class Vendas
{

	private $data;
	private $produto;
	private $quantidade;
	private $valorTotal;

	public function __construct($data, $produto, $quantidade, $valorTotal)
	{
		$this->data = $data;
		$this->produto = $produto;
		$this->quantidazde = $quantidade;
		$this->valorTotal = $valorTotal;
	}

	public function exibirVendas()
	{

	return 
	"<ul>".
		"<li>".$this->data."</li>".
		"<li>".$this->produto."</li>".
		"<li>".$this->quantidade."</li>".
		"<li>".$this->valorTotal."</li>".	
	"</ul>";
	}

	public function registrarVenda($venda)
	{
		$this->quantidade+=$venda;
		return "<h2> Quantidade vendida = ".$venda."</h2>";
	}

}
