<?php if (isset($_GET['erro'])) {
  echo '
  <div class="alert alert-danger" role="alert">
  Usuario ou senha invalido</div>';
}

?>


<main class="container">
  <section>
    <h2 class="text-center">Bem vindo ao C.R.U.D</h2>
      <form action="login.php" class="form" method="post">
          <input class="form-control" type="text" name="usuario" placeholder="Nome do usuario">
          <input class="form-control" type="password" name="senha" placeholder="Digite a senha">
          <input class="form-control" type="submit" value="entrar" class="btn btn-sucess">
      </form>    
  </section>
</main>