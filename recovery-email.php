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

        <!-- Container que possui o conteúdo de Recovery -->
        <div class="container-fluid">

            <div class="container mt-4">

                <div class="form-row justify-content-center text-center ">
                    <div class="form-group col-md-12">
                        <!-- Imagem central da página -->
                        <img class="user" src="img/user-recovery.png" alt="">
                    </div>
                    <div class="form-group col-md-12">
                        <!-- Título da Página  -->
                        <div class="titulo">
                            <h1>Recuperação de Senha - <strong> 1/2</strong></h1>
                        </div>
                    </div>
                </div>

                <div class="form-row justify-content-center">
                    <div class="jumbotron py-2">

                        <!-- Formulário onde possui os campos da página RECOVERY -->
                        <form method="POST" action="controller/recoveryEmailController.php">

                            <!-- Input do E-mail  -->
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">E-mail</label>
                                <input name="email_usuario" type="email" class="form-control">
                            </div>

                            <!-- Botões de cadastramento e remoção dos dados digitados -->
                            <div class="form-group bmd-form-group">
                                <button type="submit" class="btn-cadastrar btn">Confirmar E-mail</button>
                            </div>                            

                            <?php if (isset($_GET['erro'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
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