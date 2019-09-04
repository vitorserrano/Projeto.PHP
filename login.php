<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSS geral da aplicação -->
        <link rel="stylesheet" href="./asserts/css/style.css">
        <!-- CSS apenas da página login -->
        <link rel="stylesheet" href="./asserts/css/login.css">
        <!-- Link para os ícones do Font-Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <!-- Link para o Bootstrap Material Design -->
        <link rel="stylesheet" href="asserts/css/bootstrap-material-design.min.css">

        <title>Projeto.PHP</title>
    </head>

    <body>
       
        <div class="container-fluid">

            <div class="container mt-4">

                <div class="form-row justify-content-center text-center ">                    
                    <div class="logotipo form-group col-md-12 py-1">                        
                        <i class="fa fa-rebel"></i>
                    </div>
                    <div class="form-group col-md-12">                        
                        <div class="titulo">
                            <h1>Login para<strong> Projeto.PHP</strong></h1>
                        </div>
                    </div>
                </div>

                <div class="form-row justify-content-center">
                    <div class="jumbotron py-1">
                        
                        <form method="POST" action="./controller/logarController.php">
                        
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">E-mail</label>
                                <input name="email_usuario" type="email" class="form-control">
                            </div>
                            
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Senha</label>
                                <input name="senha_usuario" type="password" class="form-control">
                            </div>

                            <div class="input-senha form-group">
                                <a href="recovery-email.php">Esqueceu sua senha?</a>
                            </div>

                            <div class="form-group bmd-form-group">
                                <button type="submit" class="btn-register btn">Entrar</button>
                            </div>

                            <div class="form-group">                                
                                <div class="conta">
                                    <p>Não possui conta ainda? <a href="cadastrar.php"> Cadastrar-se</a></p>
                                </div>
                            </div>

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