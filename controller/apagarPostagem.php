<?php

require("../config/conexao.php");

 $id_postagem = $_GET['id'];

$sql = ("DELETE FROM `postagem` WHERE id_postagem = :id_postagem");

$exec = Db::connection()->prepare($sql);
$exec->bindValue(":id_postagem", $id_postagem);
$retorno = $exec->execute();

if ($retorno) {
  header('location: ../listaFormulario.php');
  exit;
} else {
  header('location: ../listaFormulario.php?erro=true');
  exit;
}
