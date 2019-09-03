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
    <!-- Link para os ícones do Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Link para o Bootstrap Material Design -->
    <link rel="stylesheet" href="asserts/css/bootstrap-material-design.min.css">

    <title>Projeto</title>
</head>

<body>

    
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"><i class="fa fa-rocket"></i>Projeto.PHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Formulário <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Usuário <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#"><?php echo $_SESSION['id_email']; ?> <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container mt-5">
            <div class="titulo-formulario col-md-12">
                <p>Formulário de Postagem</p>
            </div>
            <form class="formulario col-md-12 py-2">
                <div class="form-row">
                    <div class="form-group bmd-form-group col-md-6">
                        <label for="formGroupExampleInput" class="bmd-label-floating">Título</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>

                    <div class="form-group bmd-form-group col-md-6">
                        <label for="formGroupExampleInput" class="bmd-label-floating">Data de Criação</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleTextarea" class="bmd-label-floating">Resumo</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleTextarea" class="bmd-label-floating">Conteudo do Post</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                    </div>

                    <div class="form-group bmd-form-group col-md-6">
                        <label for="formGroupExampleInput" class="bmd-label-floating">Url da Imagem</label>
                        <input type="url" class="form-control" id="formGroupExampleInput">
                    </div>

                    <div class="form-group bmd-form-group col-md-6">
                        <label for="formGroupExampleInput" class="bmd-label-floating">Autor</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                    <div class="form-group bmd-form-group col-md-12 float-right">
                        <button type="submit" class="btn-cadastrar btn float-right">Enviar Conteudo</button>
                        <button type="reset" class="btn-limpar-form btn float-right">Limpar Dados</button>
                    </div>
                </div>
            </form>


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