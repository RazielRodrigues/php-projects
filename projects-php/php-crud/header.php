<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	
	<title>C.R.U.D COM PHP e MySQL | RAZIEL M.</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="index.php">
    <img src="img/crud_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    C.R.U.D - SANDBOX
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?pagina=alunos">Alunos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?pagina=cursos">Cursos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?pagina=matriculas" tabindex="-1" aria-disabled="true">Matriculas</a>
      </li>

      <?php if(isset($_SESSION['usuario'])) { ?>

      <li class="nav-item">
        <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true"><?php echo $_SESSION['usuario']; ?> (Sair) </a>
      </li>
     
     <?php } ?>

    </ul>
  </div>

</nav>

<div>