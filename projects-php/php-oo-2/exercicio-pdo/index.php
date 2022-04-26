<?php 
require 'src/Produtos.class.php';

$produto = new Produto();

switch ($_GET['operacao']) {

	case 'list':
		echo "<h1> listagem produtos: </h1><hr>";
		foreach ($produto->list() as $value) {
			echo '<br>'.'ID:'. $value['id'].'<br>'.'Descricao:'.$value['descricao'].'<hr>';
		}

		break;

	case 'insert':
		$status = $produto->insert('Produto do biguinho');

		if (!$status) {
			echo "deu errado!";
			return false;	
		}

		return  header('location:index.php?operacao=list');

		break;
	case 'update':


		$status = $produto->update('Produto do biguinho alterado', 4);

		if (!$status) {
			echo "deu errado!";
			return false;	
		}

		return header('location:index.php?operacao=list');

		break;
	case 'delete':

		$status = $produto->delete(1);

		if (!$status) {
			echo "deu errado!";
			return false;	
		}

		return header('location:index.php?operacao=list');

		break;	
	default:

		header('location:index.php?operacao=list');

		break;
}
