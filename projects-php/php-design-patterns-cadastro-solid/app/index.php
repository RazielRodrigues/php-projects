<?php

require_once './src/Bolo.php';
require_once './src/Entrega.php';
require_once './src/Pedido.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FABRICA DE BOLOS SOLID PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="container m-auto">
    <br>
    <h1 class="text-center">Fabrica de bolos SOLID PHP</h1>
    <form class="form" method="post">
        <select class="form-control" name="bolo">
            <option value="BoloCenoura">Bolo cenoura</option>
            <option value="BoloChocolate">Bolo cholocate</option>
        </select>
        <hr>
        <select class="form-control" name="entrega">
            <option value="EntregaMoto">Moto</option>
            <option value="EntregaCarro">Carro</option>
        </select>
        <hr>
        <button class="form-control btn btn-success" type="submit">PEDIR</button>
    </form>

    <?php

        $dadosPedido = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(!empty($dadosPedido)){
            $bolo = new $dadosPedido['bolo']();
            $entrega = new $dadosPedido['entrega']();
    
            $pedido = new Pedido($entrega, $bolo);
            $pedido->preparar();
            $pedido->entregar();
        }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>