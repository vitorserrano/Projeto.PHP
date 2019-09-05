<?php

require("../config/conexao.php");

$email = $_POST['email_usuario'];
$id_us = $_POST['id_usuario'];

$consultaEmail = ("SELECT id_usuario, email_usuario FROM `usuario` WHERE email_usuario = :email");
$stmt = Db::connection()->prepare($consultaEmail);
$stmt->bindValue(":email", $email);
$stmt->execute();
$result = $stmt->fetch();
$id_user = $result["id_usuario"];
$retorno = $stmt->rowCount();

if($retorno > 0)
{
  header('location: ../recovery-senha.php?id=' . $id_user);  
} else {
  header('location: ../recovery-email.php?erro=true');  
};

