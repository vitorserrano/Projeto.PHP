<?php include_once("includes/header.php"); ?>
<?php include_once("includes/nav.php"); ?>

<div class="container-fluid">

    <div class="container mt-4">

        <div class="form-row">
            <div class="header-formulario col-md-6">
                <h1>Postagens Cadastradas</h1>
            </div>
            <div class="search-box col-md-6">
                <form>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="pesquisa">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-secondary" type="submit"> <i class="fa fa-search"></i> PESQUISAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <form method="POST" action="controller/cadastrarConteudoController.php">

            <div class="formulario form-row py-2">
                <?php
                $sql = ("SELECT 
                            postagem.*, 
                            usuario.nome_usuario 
                        FROM 
                            `postagem` 
                        INNER JOIN 
                            usuario 
                        ON 
                            usuario.id_usuario = postagem.autor_postagem 
                        WHERE 
                            (1 = 1) ");
                if (isset($_GET['pesquisa'])) {
                    $sql .= (" AND postagem.titulo_postagem LIKE " . "'%" . $_GET['pesquisa'] . "%'");
                }
                $stmt = Db::connection()->prepare($sql);
                $stmt->execute();
                $postagens = $stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <table class="table table-responsive-lg table-hover ">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Título</th>
                            <th scope="col">Conteúdo</th>
                            <th scope="col">Criação</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($postagens as $postagem) { ?>
                            <tr>
                                <th scope="row"> <?php echo $postagem['id_postagem']; ?> </th>
                                <td><?php echo $postagem['nome_usuario']; ?></td>
                                <td><?php echo $postagem['titulo_postagem']; ?></td>
                                <td><?php echo $postagem['conteudo_postagem']; ?></td>
                                <td><?php echo $postagem['data_postagem']; ?></td>

                                <td>
                                    <div class="modal fade" id="_postagem<?php echo $postagem['id_postagem']; ?>" tabindex="-1" role="dialog" aria-labelledby="_postagem<?php echo $postagem['id_postagem']; ?>" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="_postagem<?php echo $postagem['id_postagem']; ?>"><?php echo $postagem['titulo_postagem']; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Conteúdo: <?php echo $postagem['resumo_postagem']; ?></a> </p>
                                                    <p>Resumo: <?php echo $postagem['conteudo_postagem']; ?></a> </p>
                                                    <p>URL da Imagem: <a target="_blank" href="<?php echo $postagem['url_postagem']; ?>"><?php echo $postagem['url_postagem']; ?></a> </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">FECHAR</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#_postagem<?php echo $postagem['id_postagem']; ?>">Visualizar</button>
                                    <a type="button" class="btn btn-info" href="editarPostagem.php?id=<?php echo $postagem['id_postagem']; ?>"> Editar </a>
                                    <a class="btn-delete btn" href="controller/apagarPostagem.php?id=<?php echo $postagem['id_postagem']; ?>"> Excluir </a>

                                </td>

                            </tr>

                        <?php } ?>

                    </tbody>
                </table>

            </div>

        </form>

    </div>
</div>
<?php include_once("includes/footer.php"); ?>