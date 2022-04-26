<?php include 'ContaBancaria.class.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>BANCO PHP</title>
</head>
<body>
<main>
<h1>Bem vindo ao banco PHP!</h1>
<hr>
<br>
<?php 

$conta = new ContaBancaria(
	'Nubank',
	'Raziel M.',
	'9832-8',
	'0001',
	0
);


echo $conta->obterSaldo();

echo $conta->depositar(300.00);

echo $conta->obterSaldo();

echo $conta->saque(150.00);

echo $conta->obterSaldo();


?>
</main>
</body>
</html>