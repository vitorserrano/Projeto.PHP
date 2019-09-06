<?php include_once("includes/header.php"); ?>
<?php include_once("includes/nav.php"); ?>

<div class="container-fluid">
    <div class="container mt-4">
        <div class="form-row">
            <div class="header-formulario col-md-12">
                <h1> <i id="icon-header-formulario" class="fa fa-plus"></i> Cadastrar Postagem</h1>
            </div>
        </div>

        <form name="formCadastro" id="formCadastro" method="POST" action="controller/cadastrarConteudoController.php">
            <input name="autor_postagem" type="hidden" value="<?php echo $_SESSION['id_usuario']; ?>" class="form-control">
            <div class="formulario form-row py-2">
            <div class="col-md-12">
                    <?php if (isset($_GET['success'])) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Postagem</strong> cadastrada com sucesso!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET['titulo'])) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        O campo<strong> TÍTULO </strong> está vazio, não será possível continuar o cadastro!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET['resumo'])) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        O campo<strong> RESUMO </strong> está vazio, não será possível continuar o cadastro!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET['conteudo'])) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        O campo<strong> CONTEÚDO </strong> está vazio, não será possível continuar o cadastro!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>                 
                    <?php if (isset($_GET['urlImg'])) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        O campo<strong> URL </strong> está vazio, não será possível continuar o cadastro!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group col-md-12">
                    <label class="bmd-label-floating">Título</label>
                    <input name="titulo_postagem" id="titulo_postagem" type="text" class="form-control">                                        
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
                    <button type="submit" class="btn btn-success btn float-right">Cadastrar Postagem</button>
                    <button type="reset" class="btn btn-info float-right">Limpar Dados</button>
                    <a class="btn-voltar btn" href="listaFormulario.php">Voltar</a>
                </div>               
            </div>
        </form>
    </div>
</div>

<?php include_once("includes/footer.php"); ?>