<?php

require("../config/conexao.php");

$id_us = $_POST['id_usuario'];
$senha = $_POST['senha_usuario'];

$updateSenha = ("UPDATE `usuario` SET senha_usuario = :senha WHERE id_usuario = :id_usuario");
$exec = Db::connection()->prepare($updateSenha);
$exec->bindValue(":id_usuario", $id_us);
$exec->bindValue(":senha", $senha);
$exec->execute();
header('location: ../login.php');
