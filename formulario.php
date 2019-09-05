<?php include_once("includes/header.php"); ?>
<?php include_once("includes/nav.php"); ?>

<div class="container-fluid">

    <div class="container mt-4">

        <div class="form-row">
            <div class="header-formulario col-md-12">
                <h1>Cadastrar Postagem</h1>
            </div>
        </div>

        <form method="POST" action="controller/cadastrarConteudoController.php">
            <input name="autor_postagem" type="hidden" value="<?php echo $_SESSION['id_usuario']; ?>" class="form-control">

            <div class="formulario form-row py-2">

                <div class="form-group bmd-form-group col-md-12">
                    <label class="bmd-label-floating">Título</label>
                    <input name="titulo_postagem" type="text" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label class="bmd-label-floating">Resumo</label>
                    <textarea name="resumo_postagem" type="text" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label class="bmd-label-floating">Conteúdo do Post</label>
                    <textarea name="conteudo_postagem" type="text" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group bmd-form-group col-md-6">
                    <label class="bmd-label-floating">Url da Imagem</label>
                    <input name="url_postagem" type="text" class="form-control">
                </div>

                <div class="form-group bmd-form-group col-md-12 float-right">
                    <button type="submit" class="btn-register btn float-right">Enviar Conteudo</button>
                    <button type="reset" class="btn-clear-form btn float-right">Limpar Dados</button>
                </div>

            </div>

        </form>

    </div>
</div>

<?php include_once("includes/footer.php"); ?>