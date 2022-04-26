<?php include 'servicos/servicoMensagemSessao.php'; ?>
<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PHP FORM</title>
  </head>
  <body>

    <nav class="navbar navbar-light" style="background-color: #8993be;">
      <a class="navbar-brand" href="index.php">
        PHP FORM
      </a>
    </nav>

  <main class="container">

    <div>
         <h3>
         <?php
           $mensagemDeSucesso = getMensagemSucesso();
           if (!empty($mensagemDeSucesso)) {
              echo $mensagemDeSucesso;
           }
          ?>
         </h3>

         <h3>
         <?php
           $mensagemDeErro = getMensagemErro();
           if (!empty($mensagemDeErro)) {
              echo $mensagemDeErro;
           }
          ?>
         </h3>
    </div>

    <section>
      <br>
      <h1>Ficha de inscrição</h1>
      <br>

      <form action="script.php" method="post">
       <br>
          <div class="form-row">
            <div class="col-4">
              <input name="primeiroNome" type="text" class="form-control" placeholder="Primeiro nome">
            </div>
            <div class="col-4">
              <input name="segundoNome" type="text" class="form-control" placeholder="Ultimo nome">
            </div>
            <div class="col-2">
              <input name="idade" type="text" class="form-control" placeholder="Sua idade">
            </div>
            <div class="col-2">
              <button type="submit" class="btn btn-success">Enviar</button>
            </div>
          </div>
      </form>
      <br>
    </section>

    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>