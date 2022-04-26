<?php include 'vendas.class.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP OO VENDAS</title>
</head>
<body>
<?php

$mercado = new Vendas(
	'01/01/1999',
	'Sabonete',
	400,
	529.12
);

echo $mercado->exibirVendas();

$mercado->registrarVenda(12);

echo $mercado->exibirVendas();


?>
</body>
</html>