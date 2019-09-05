<?php include_once("includes/header.php"); ?>
<?php include_once("includes/nav.php"); ?>
<div class="container-fluid">
  <div class="container mt-4">

    <div class="form-row">
      <div class="header-formulario col-md-12">
        <h1>Cadastrar Postagem</h1>
      </div>
    </div>

    <?php

      $sql = ("SELECT postagem.*, usuario.nome_usuario 
                                  FROM `postagem` 
                                  INNER JOIN 
                                      usuario 
                                  ON 
                                      usuario.id_usuario = postagem.autor_postagem
                                  WHERE
                                      postagem.id_postagem = :id_postagem
                                  ");

      $stmt = Db::connection()->prepare($sql);
      $stmt->bindValue(":id_postagem", $_GET['id']);
      $stmt->execute();
      $postagem = $stmt->fetch(PDO::FETCH_ASSOC);
 
?>

    <form method="POST" action="controller/editarConteudoController.php">
      <input name="autor_postagem" type="hidden" value="<?php echo $_SESSION['id_usuario']; ?>" class="form-control">
      <input name="id_postagem" type="hidden" value="<?php echo $_GET['id']; ?>" class="form-control">

      <div class="formulario form-row py-2">

        <div class="form-group bmd-form-group col-md-12">
          <label class="bmd-label-floating">Título</label>
          <input name="titulo_postagem" type="text" class="form-control" value="<?php echo $postagem['titulo_postagem']; ?>">
        </div>

        <div class="form-group col-md-6">
          <label class="bmd-label-floating">Resumo</label>
          <textarea name="resumo_postagem" type="text" class="form-control" rows="3"><?php echo $postagem['resumo_postagem']; ?></textarea>
        </div>

        <div class="form-group col-md-6">
          <label class="bmd-label-floating">Conteúdo do Post</label>
          <textarea name="conteudo_postagem" type="text" class="form-control" rows="3"><?php echo $postagem['conteudo_postagem']; ?></textarea>
        </div>

        <div class="form-group bmd-form-group col-md-6">
          <label class="bmd-label-floating">Url da Imagem</label>
          <input name="url_postagem" type="text" class="form-control" value="<?php echo $postagem['url_postagem']; ?>">
        </div>

        <div class="form-group bmd-form-group col-md-12 float-right">
          <button type="submit" class="btn-register btn float-right">Salvar alterações</button>
          <button type="reset" class="btn-clear-form btn float-right">Limpar Dados</button>
        </div>

      </div>

    </form>

  </div>
</div>

<?php include_once("includes/footer.php"); ?>