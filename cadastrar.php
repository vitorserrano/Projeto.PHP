<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./asserts/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="asserts/css/bootstrap-material-design.min.css">

    <title>Projeto</title>
</head>

<body>

    <div class="container-fluid">
        <div class="container mt-4">
            <div class="form-row justify-content-center text-center ">
                <div class="logotipo form-group col-md-12">
                    <i class="fa fa-rebel"></i>
                </div>
                <div class="form-group col-md-12">
                    <div class="titulo">
                        <h1>Cadastrar Usuário</h1>
                    </div>
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="jumbotron py-1">

                    <form method="POST" action="controller/cadastrarController.php">
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Nome</label>
                            <input name="nome_usuario" type="text" class="form-control">
                            <small class="form-text text-muted">Exemplo: Vitor</small>
                        </div>
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">E-mail</label>
                            <input name="email_usuario" type="email" class="form-control">
                            <small class="form-text text-muted">Exemplo: teste@gmail.com</small>
                        </div>
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Senha</label>
                            <input name="senha_usuario" type="password" class="form-control">
                        </div>
                        <div class="form-group bmd-form-group">
                            <button type="submit" class="btn-register btn">Cadastrar</button>
                            <p>Cadastre-se para ter acesso a <strong> Projeto.PHP!</strong></p>
                        </div>
                        <?php if (isset($_GET['nome'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                O campo <strong>"NOME"</strong> está vazio.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                        <?php if (isset($_GET['email'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                O campo <strong>"E-MAIL"</strong> está vazio.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                        <?php if (isset($_GET['senha'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                O campo <strong>"SENHA"</strong> está vazio.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                        <?php if (isset($_GET['email_exist'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                Endereço de<strong> Email </strong> já cadastrado.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include_once("includes/footer.php"); ?>