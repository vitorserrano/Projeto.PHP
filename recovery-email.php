<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="./asserts/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">        
        <link rel="stylesheet" href="asserts/css/bootstrap-material-design.min.css">
        <link rel="shortcut icon" href="./img/favicon.ico">

        <title>Projeto.PHP</title>
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
                            <h1>Recuperação de Senha - <strong> 1/2</strong></h1>
                        </div>
                    </div>
                </div>

                <div class="form-row justify-content-center">
                    <div class="jumbotron py-2">

                        <form method="POST" action="controller/recoveryEmailController.php">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">E-mail</label>
                                <input name="email_usuario" type="email" class="form-control">
                            </div>
                            <div class="form-group bmd-form-group">
                                <button type="submit" class="btn-register btn">Confirmar E-mail</button>
                            </div>
                            <?php if (isset($_GET['erro'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                               Digite um <strong> E-mail </strong> válido.
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
        
        <script src="asserts/js/jquery-3.4.1.min.js"></script>
        <script src="asserts/js/popper.js"></script>        
        <script src="asserts/js/bootstrap-material-design.js"></script>        
        <script src="asserts/js/meterial.js"></script>

    </body>
</html>