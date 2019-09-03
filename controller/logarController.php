<?php

require("../config/conexao.php");

$email = $_POST['email_usuario'];
$senha = $_POST['senha_usuario'];

$sql = ("SELECT * FROM `usuario` WHERE email_usuario = :email AND senha_usuario = :senha");
$exec = Db::connection()->prepare($sql);
$exec->bindValue(":email", $email);
$exec->bindValue(":senha", $senha);
$exec->execute();
$retorno = $exec->rowCount();

if ($retorno > 0) {
   $usuario = $exec->fetch(PDO::FETCH_ASSOC);
   session_start();

   $_SESSION['id_usuario'] = $usuario['id_usuario'];
   $_SESSION['id_nome'] = $usuario['nome_usuario'];
   $_SESSION['id_email'] = $usuario['email_usuario'];
   header('location: ../formulario.php');
} else {
  header('location: ../login.php?erro=true');
  exit;
}
