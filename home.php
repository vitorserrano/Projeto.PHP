<!DOCTYPE html>
<html lang="en">

    <?php session_start(); ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSS geral da aplicação -->
        <link rel="stylesheet" href="./asserts/css/style.css">
        <!-- CSS do formulário -->
        <link rel="stylesheet" href="asserts/css/formulario.css">
        <!-- CSS do Home -->
        <link rel="stylesheet" href="asserts/css/home.css">
        <!-- Link para os ícones do Font-Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <!-- Link para o Bootstrap Material Design -->
        <link rel="stylesheet" href="asserts/css/bootstrap-material-design.min.css">

        <title>Projeto</title>
    </head>

    <body>

        <div class="container-fluid">

            <nav class="navbar navbar-expand-lg navbar-dark">
                <i class="fa fa-rebel"></i> <a class="navbar-brand" id="logo" href="home.php">Projeto.PHP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Postagem
                                    </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="formulario.php">Cadastrar Postagem</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="listaFormulario.php">Postagens Cadastradas</a>
                            </div>
                        </li>
                    </ul>
                    <span class="navbar-text">
                       <a class="nav-link " href="#"><i class="fa fa-user-circle"></i><?php echo $_SESSION['id_nome']; ?> <span class="sr-only">(current)</span></a>
                    </span>
                </div>
            </nav>

            <div class="container mt-4">
                <div class="form-row justify-content-center text-center ">
                    <div class="logotipo-home form-group col-md-12 py-1 mt-5">
                        <i class="fa fa-rebel py-4"></i>
                        <div class="titulo-home">
                            <h1>Utilize o menu no canto superior esquerdo para realizar <strong>cadastros de postagens</strong></br> ou verificar as <strong>postagens já cadastradas.</strong></h1>
                        </div>
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