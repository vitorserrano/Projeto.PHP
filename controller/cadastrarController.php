<?php

require("../config/conexao.php");

$dados = array(
  'nome' => $_POST['nome_usuario'],
  'email' => $_POST['email_usuario'],
  'senha' => $_POST['senha_usuario'],
);

if (trim(empty($dados['nome']))) {
  header('location: ../cadastrar.php?nome=false');
  exit;
}
if (trim(empty($dados['email']))) {
  header('location: ../cadastrar.php?email=false');
  exit;
}
if (trim(empty($dados['senha']))) {
  header('location: ../cadastrar.php?senha=false');
  exit;
}

$consultaEmail = ("SELECT email_usuario FROM `usuario` WHERE email_usuario = :email");
$stmt = Db::connection()->prepare($consultaEmail);
$stmt->bindValue(":email", $dados['email']);
$stmt->execute();
$retorno = $stmt->rowCount();

if ($retorno > 0) {
  header('location: ../cadastrar.php?email_exist=true');
  exit;
} else {

  date_default_timezone_set('America/Sao_Paulo');
  $hoje = date('Y-m-d');

  $dados['senha'] = md5($dados['senha']);

  $sql = ("INSERT INTO `usuario` (nome_usuario, email_usuario, senha_usuario, dt_registro) VALUES (:nome, :email, :senha, :dt_registro)");
  $exec = Db::connection()->prepare($sql);
  $exec->bindValue(":nome", $dados['nome']);
  $exec->bindValue(":email", $dados['email']);
  $exec->bindValue(":senha", $dados['senha']);
  $exec->bindValue(":dt_registro", $hoje);

  $r = $exec->execute();

  if ($r) {
    header('location: ../login.php?success=true');
    exit;
  } else {
    header('location: ../cadastrar.php?erro=true');
    exit;
  }
};
