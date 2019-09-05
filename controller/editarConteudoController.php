<?php

require("../config/conexao.php");

$dados = array(
  'id_postagem' => $_POST['id_postagem'],
  'titulo' => $_POST['titulo_postagem'],
  'resumo' => $_POST['resumo_postagem'],
  'conteudo' => $_POST['conteudo_postagem'],
  'urlImg' => $_POST['url_postagem'],
);

if (trim(empty($dados['titulo']))) {
  header('location: ../editarPostagem.php?id=' . $dados['id_postagem'] . '&titulo=false');
  exit;
}
if (trim(empty($dados['resumo']))) {
  header('location: ../editarPostagem.php?id=' . $dados['id_postagem'] . '&resumo=false');
  exit;
}
if (trim(empty($dados['conteudo']))) {
  header('location: ../editarPostagem.php?id=' . $dados['id_postagem'] . '&conteudo=false');
  exit;
}
if (trim(empty($dados['urlImg']))) {
  header('location: ../editarPostagem.php?id=' . $dados['id_postagem'] . '&urlImg=false');
  exit;
}

$sql = ("UPDATE 
          `postagem` 
        SET 
          `titulo_postagem` = :titulo, 
          `resumo_postagem` = :resumo, 
          `conteudo_postagem` = :conteudo, 
          `url_postagem` = :urlimg 
        WHERE 
          id_postagem = :id_postagem");

$exec = Db::connection()->prepare($sql);
$exec->bindValue(":id_postagem", $dados['id_postagem']);
$exec->bindValue(":titulo", $dados['titulo']);
$exec->bindValue(":resumo", $dados['resumo']);
$exec->bindValue(":conteudo", $dados['conteudo']);
$exec->bindValue(":urlimg", $dados['urlImg']);

$r = $exec->execute();

if ($r) {
  header('location: ../editarPostagem.php?id=' . $dados['id_postagem'] . '&success=true');
  exit;
} else {
  header('location: ../editarPostagem.php?id=' . $dados['id_postagem'] . '&erro=true');
  exit;
}
