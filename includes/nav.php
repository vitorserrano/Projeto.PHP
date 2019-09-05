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