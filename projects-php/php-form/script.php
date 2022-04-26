<?php 
include 'servicos/servicoMensagemSessao.php';
include 'servicos/servicoValidacao.php';
include 'servicos/defineNome.php';

$primeiroNome = $_POST['primeiroNome'];
$segundoNome = $_POST['segundoNome'];
$idade = $_POST['idade'];

definePessoa($primeiroNome, $segundoNome, $idade);

header('location:index.php');