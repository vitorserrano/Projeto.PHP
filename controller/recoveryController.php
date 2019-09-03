<?php

if ($retorno > 0) {
  $updateSenha = ("UPDATE `usuario` SET senha_usuario = :senha WHERE id_usuario = :id_usuario");
  $exec = Db::connection()->prepare($updateSenha);
  $stmt->bindValue(":id_usuario", $idfdp);
  $exec->bindValue(":email", $email);
  $exec->bindValue(":senha", $senha);
  $exec->execute();
  header('location: ../login.php');
}
