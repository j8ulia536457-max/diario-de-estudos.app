<?php 
session_start();
include("conexao.php");

//funcao php a qual recebe a primeira instância como parametro e o nome
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "";
?>