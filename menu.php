<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!--Fonte padrão-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

        <title>Menu</title>

        <style>
            body{
                font-family: 'Roboto', sans-serif;
                margin: 0;
                padding: 0;
            }
            #tamanho{
                margin-top: 20px;
            }
        </style>
    </head>
    <body>

        <?php

            session_start();
  
            $usuario = $_SESSION['usuario'];

            if(!isset($_SESSION['usuario'])){
                header('Location: index.php');
            }

            //Conexão para saber o nivel do usuario
            //E definir seu nível de acesso
            include 'conexao.php';

            $sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status = 'Ativo'";
            $buscar = mysqli_query($conexao, $sql);

            $array = mysqli_fetch_array($buscar);
            $nivel = $array['nivel_usuario'];

        ?>

            <div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>

        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container">
                    <a class="navbar-brand" href="#" data-toggle="tooltip" data-placement="bottom" title="Logo CodeWebMaster">CodeWebMaster</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <?php
                                if($nivel == 1){

                            ?>
                                <form class="form-inline">
                                    <a href="aprovar_usuario.php" class="btn btn-success text-white" type="button" data-toggle="tooltip" data-placement="bottom" title="Aprovar usuários cadastrados">
                                    <img class="mr-2" src="img/usuario.png" alt="imagem de usuario" width="25">
                                        Aprovar Usuários
                                    </a>
                                </form>
                            <?php } ?>

                            <!--Esse botão vai aparecer para todos os usuários!-->
                            <form class="form-inline">
                                <a href="logout.php" class="btn btn-danger text-white ml-3" type="button" data-toggle="tooltip" data-placement="bottom" title="Sair do sistema">
                                <img class="mr-2" src="img/sair.png" alt="imagem de logout" width="25">
                                    Sair
                                </a>
                            </form>
                        
                        </div>
                    </div>
                </div><!--container-->
            </nav>
        </header>
        <div class="container" id="tamanho">

            <div class="jumbotron">
                <h1 class="display-4 mb-4">Sistema de Cadastro de Produtos</h1>
                <p class="lead">
                Este é um sistema para controle de produtos no estoque.
                </p>
                <hr class="my-4">
                <p>
                    O usuário pode cadastrar produtos, listar, atualizar e remover produtos, o mesmo pode ser feito para as categorias e os fornecedores.
                </p>
                
                <div class="row mt-4">

                    <!--Definindo o que o usuário pode acessar
                        de acordo com seu nível de acesso--> 
                    <?php
                        if(($nivel == 1) || ($nivel == 2)){

                    ?>

                        <div class="col-md-6">
                            <div class="card-deck">
                                <div class="card shadow p-3 mb-2 bg-white rounded">
                                    <div class="card-body">
                                        <h5 class="card-title">Adicionar Produtos</h5>
                                        <p class="card-text">Opção para adicionar produtos no estoque</p>
                                        <a href="adicionar_produto.php" class="btn btn-primary">
                                        <img class="mr-2" src="img/cadastro.png" alt="imagem de cadastro" width="25">
                                        Cadastrar Produtos
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-sm-6-->
                    <?php } ?>
                    <!--Definindo o que o usuário pode acessar
                        de acordo com seu nível de acesso-->


                    <div class="col-md-6">
                        <div class="card-deck">
                            <div class="card shadow p-3 mb-2 bg-white rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Lista de Produtos</h5>
                                    <p class="card-text">Visualizar, editar e excluir os produtos</p>
                                    <a href="listar_produtos.php" class="btn btn-primary">
                                    <img class="mr-2" src="img/lista.png" alt="imagem de lista" width="25">
                                    Produtos
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--col-sm-6-->

                </div><!--row-->

                <div class="row mt-4">

                    <!--Definindo o que o usuário pode acessar
                        de acordo com seu nível de acesso--> 
                    <?php
                        if(($nivel == 1) || ($nivel == 2)){

                    ?>

                        <div class="col-md-6">
                            <div class="card-deck">
                                <div class="card shadow p-3 mb-2 bg-white rounded">
                                    <div class="card-body">
                                        <h5 class="card-title">Adicionar Categoria</h5>
                                        <p class="card-text">Opção para adicionar categoria de produtos </p>
                                        <a href="adicionar_categoria.php" class="btn btn-primary">
                                        <img class="mr-2" src="img/cadastro.png" alt="imagem de cadastro" width="25">
                                        Cadastrar Categoria
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-sm-6-->
                        <?php } ?>
                        <!--Definindo o que o usuário pode acessar
                        de acordo com seu nível de acesso-->

                    <div class="col-md-6">
                        <div class="card-deck">
                            <div class="card shadow p-3 mb-2 bg-white rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Lista de Categorias</h5>
                                    <p class="card-text">Visualizar, editar e excluir as categorias </p>
                                    <a href="listar_categoria.php" class="btn btn-primary">
                                    <img class="mr-2" src="img/lista.png" alt="imagem de lista" width="25">
                                    Categorias
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--col-sm-6-->

                </div><!--row-->

                <div class="row mt-4">

                    <!--Definindo o que o usuário pode acessar
                        de acordo com seu nível de acesso--> 
                    <?php
                        if(($nivel == 1) || ($nivel == 2)){

                    ?>

                        <div class="col-md-6">
                            <div class="card-deck">
                                <div class="card shadow p-3 mb-2 bg-white rounded">
                                    <div class="card-body">
                                        <h5 class="card-title">Adicionar Fornecedor</h5>
                                        <p class="card-text">Opção para adicionar fornecedores</p>
                                        <a href="adicionar_fornecedor.php" class="btn btn-primary">
                                        <img class="mr-2" src="img/cadastro.png" alt="imagem de cadastro" width="25">
                                        Cadastrar Fornecedores
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-sm-6-->
                        <?php } ?>
                        <!--Definindo o que o usuário pode acessar
                        de acordo com seu nível de acesso-->


                    <div class="col-md-6">
                        <div class="card-deck">
                            <div class="card shadow p-3 mb-2 bg-white rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Lista de Fornecedores</h5>
                                    <p class="card-text">Visualizar, editar e excluir os fornecedores </p>
                                    <a href="listar_fornecedor.php" class="btn btn-primary">
                                    <img class="mr-2" src="img/lista.png" alt="imagem de lista" width="25">
                                    Fornecedores
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--col-sm-6-->

                </div><!--row-->

                <div class="row mt-4">

                    <!--Definindo o que o usuário pode acessar
                        de acordo com seu nível de acesso--> 
                    <?php
                        if(($nivel == 1) || ($nivel == 2)){

                    ?>

                        <div class="col-md-6">
                            <div class="card-deck">
                                <div class="card shadow p-3 mb-2 bg-white rounded">
                                    <div class="card-body">
                                        <h5 class="card-title">Adicionar de usuários externos</h5>
                                        <p class="card-text">Opção para cadastrar usuários externos</p>
                                        <a href="cadastro_usuario_externo.php" class="btn btn-primary">
                                        <img class="mr-2" src="img/cadastro.png" alt="imagem de cadastro" width="25">
                                        Cadastrar usuarios externos
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!--col-sm-6-->
                        <?php } ?>
                        <!--Definindo o que o usuário pode acessar
                        de acordo com seu nível de acesso-->

                    <div class="col-md-6">
                        <div class="card-deck">
                            <div class="card shadow p-3 mb-2 bg-white rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Lista de Usuarios Ativos</h5>
                                    <p class="card-text">Visualizar e excluir os usuários Ativos</p>
                                    <a href="listar_usuario.php" class="btn btn-primary">
                                    <img class="mr-2" src="img/lista.png" alt="imagem de lista" width="25">
                                    Usuários
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--col-sm-6-->

                </div><!--row-->

            </div><!--jumbotron-->

        </div><!--container-->

        <!-- Footer -->
        <footer class="page-footer font-small bg-primary text-white pt-4">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">
                © 2020 Copyright CodeWebMaster Todos os Direitos Reservados
            </div><!-- Copyright -->

        </footer><!-- Footer -->
        
        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.bundle.min.js" ></script>
        <script>
            //Ativa os toltips do Popper.JS
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    </body>
</html>