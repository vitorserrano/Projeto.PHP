<?php

include("conexao.php");

$email = $_POST['email_usuario'];
$senha = $_POST['senha_usuario'];

$query_select = mysqli_query($connection, "SELECT * FROM `usuario` WHERE `email_usuario` = $email AND `senha_usuario` = $senha");

$retorno = mysqli_fetch_row($query_select);

if($retorno > 0){
$usuario = mysqli_fetch_array($query_select);

session_start();
$_SESSION['id_usuario'] = $usario['id_usuario'];
$_SESSION['id_nome'] = $usario['nome_usuario'];
$_SESSION['id_email'] = $usario['email_usuario'];
header('location: ../formulario.php' );

} else{
   echo 'Dados Incorretos!';
}