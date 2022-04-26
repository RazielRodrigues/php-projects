<!DOCTYPE html>
<html>
<head>
	<title>DATE TIME</title>
</head>
<body>
<?php 

$data = new DateTime();

var_dump($data);

echo $data->format('D-M-Y H:i:s');

$data = new DateTime();
$intervalo = new DateInterval('PT5M');
	
$data->add($intervalo);
var_dump($data);

$data->sub($intervalo);
var_dump($data);



?>
</body>
</html>