<?php 
declare(strict_types=1);

$conexaoDB = require 'connect.php';

$select = 'select * from produtos';

echo "<h1> listagem produtos: </h1><hr>";

foreach ($conexaoDB->query($select) as $key => $value) {
	echo '<br>'.'ID:'. $value['id'].'<br>'.'Descricao:'.$value['descricao'].'<hr>';
}
