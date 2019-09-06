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
                            <small class="form-text text-muted">Pesquisar apenas por títulos já cadastrados.</small>
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
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="_postagem<?php echo $postagem['id_postagem']; ?>"> <i id="icon-modal" class="fa fa-eye"></i> <?php echo $postagem['titulo_postagem']; ?></h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul>
                                                        <li>
                                                            <h6><strong>Código: </strong><?php echo $postagem['id_postagem']; ?></h6>
                                                        </li>
                                                        <li>
                                                            <h6><strong>Autor: </strong> <?php echo $postagem['nome_usuario']; ?></h6>
                                                        </li>
                                                        <li>
                                                            <h6><strong>Resumo: </strong><?php echo $postagem['resumo_postagem']; ?></h6>
                                                        </li>
                                                        <li>
                                                            <h6><strong>Conteúdo: </strong><?php echo $postagem['conteudo_postagem']; ?></h6>
                                                        </li>
                                                        <li>
                                                            <h6><strong>URL da Imagem: </strong><a target="_blank" href="<?php echo $postagem['url_postagem']; ?>"><?php echo $postagem['url_postagem']; ?></a> </h6>
                                                        </li>
                                                        <li>
                                                            <h6><strong>Data de Criação: </strong><?php echo $postagem['data_postagem']; ?></h6>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondaray" data-dismiss="modal">FECHAR</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#_postagem<?php echo $postagem['id_postagem']; ?>">Visualizar</button>
                                    <a class="btn btn-secondary" href="editarPostagem.php?id=<?php echo $postagem['id_postagem']; ?>"> Editar </a>                                    
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-excluir">
                                        Excluir
                                    </button>                                    
                                    <div class="modal fade" id="modal-excluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLongTitle"> <i id="icon-modal" class="fa fa-trash"></i> Excluir Postagem </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Deseja realmente excluir esta postagem?</h5>
                                                    <small class="form-text text-muted">* Esse processo é irreversivel.</small>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                    <a class="btn-confirmar btn" href="controller/apagarPostagem.php?id=<?php echo $postagem['id_postagem']; ?>"> Confirmar </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            
                            <?php } ?>
                            <?php if (count($postagens) === 0) { ?>
                                <tr>
                                    <td style="text-align: center;" colspan="5">SEM RESULTADOS</td>
                                </tr>
                            <?php } ?>

                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>

<?php include_once("includes/footer.php"); ?>