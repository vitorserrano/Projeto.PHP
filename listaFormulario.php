<!DOCTYPE html>
<html lang="en">

    <?php session_start(); ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="./asserts/css/style.css">
        <link rel="stylesheet" href="asserts/css/formulario.css">        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">    
        <link rel="stylesheet" href="asserts/css/bootstrap-material-design.min.css">        

        <title>Projeto.PHP</title>
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

                <div class="form-row">
                    <div class="header-formulario col-md-12">
                        <h1>Postagens Cadastradas</h1>
                    </div>
                </div>

                <form method="POST" action="controller/cadastrarConteudoController.php">

                    <div class="formulario form-row py-2">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Código</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Data de Criação</th>
                                    <th scope="col">Autor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </form>

            </div>
        </div>
        
        <script src="asserts/js/jquery-3.4.1.min.js"></script>        
        <script src="asserts/js/popper.js"></script>        
        <script src="asserts/js/bootstrap-material-design.js"></script>        
        <script src="asserts/js/meterial.js"></script>

    </body>

</html>