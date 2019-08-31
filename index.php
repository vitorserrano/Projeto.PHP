<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./lib/bootstrap.min.css">
    <link rel="stylesheet" href="./asserts/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Projeto - Teste</title>
</head>

<body>
    <div class="wrapper">
        <div class="container w-50 mt-2 p-5">
            <div class="jumbotron mt-5">
                <form method="POST" action="controller/logarController.php">
                    <div class="row mt-2">
                        <div class="titulo col-md-12">
                            <h2><i class="fa fa-user"></i>Login</h2>
                        </div>
                    </div>
                    <div class="row col-md-10 mt-5 ml-5">
                        <div class="col-md-12">
                            <input name="email_usuario" class="input-form form-control" type="text" required onclick="bortop(0)">
                            <span class="conteudo"></span>
                            <span class="line"></span>
                            <label>E-mail</label>
                        </div>
                        <div class="col-md-12 mt-5">
                            <input name="senha_usuario" class="input-form form-control" type="password" required onclick="bortop(0)">
                            <span class="conteudo"></span>
                            <span class="line"></span>
                            <label>Senha</label>
                        </div>
                        <div class="col-md-12 mt-5">
                            <button type="submit" class="btn-logar btn"><i class="fa fa-sign-in"></i> Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>















    <script src="./lib/bootstrap.min.js"></script>
</body>

</html>