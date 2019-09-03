<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS geral da aplicação -->
    <link rel="stylesheet" href="./asserts/css/style.css">
    <!-- Link para os ícones do Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Link para o Bootstrap Material Design -->
    <link rel="stylesheet" href="asserts/css/bootstrap-material-design.min.css">

    <title>Projeto</title>
</head>

<body>

    <!-- Container que possui o conteúdo de Cadastramento -->
    <div class="container-fluid">

        <div class="container mt-5">

            <div class="form-row justify-content-center">
                <div class="jumbotron py-2">

                    <!-- Imagem central da página -->
                    <img class="user" src="img/user-cadastrar.png" alt="">

                    <!-- Título da Página  -->
                    <div class="titulo-cadastrar">
                        <p>CADASTRAR <i class="fa fa-plus"></i></p>
                    </div>

                    <!-- Formulário onde possui os campos da página CADASTRAR -->
                    <form method="POST" action="controller/cadastrarController.php">

                        <!-- Input do Nome -->
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Nome</label>
                            <input name="nome_usuario" type="text" class="form-control">
                        </div>

                        <!-- Input do E-mail -->
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">E-mail</label>
                            <input name="email_usuario" type="email" class="form-control">
                        </div>

                        <!-- Input da senha -->
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Senha</label>
                            <input name="senha_usuario" type="password" class="form-control">
                        </div>

                        <!-- Botões de cadastramento e remoção dos dados digitados -->
                        <div class="form-group bmd-form-group">
                            <button type="reset" class="btn-limpar btn">Limpar Dados</button>
                            <button type="submit" class="btn-cadastrar btn">Cadastrar</button>
                        </div>

                        <?php if (isset($_GET['erro'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                        <?php if (isset($_GET['email_exist'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Holy guacamole!</strong> Email ja cadastrado.
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

    <!-- JQuery -->
    <script src="asserts/js/jquery-3.4.1.min.js"></script>
    <!-- Popper.js -->
    <script src="asserts/js/popper.js"></script>
    <!-- Script do Bootstrap Material Design -->
    <script src="asserts/js/bootstrap-material-design.js"></script>
    <!-- Função para a "animação" dos input -->
    <script src="asserts/js/meterial.js"></script>

</body>

</html>