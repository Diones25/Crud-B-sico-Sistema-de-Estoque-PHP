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

    <title>Lista de produtos</title>

    <style>
      body{
        font-family: 'Roboto', sans-serif;
      }
      .container{
          margin-top: 40px;
      }
      
    </style>
  </head>
  <body>

    <!--******************************************-->
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
    <!--******************************************-->
    
    <div class="container">

      <div class="jumbotron">
        <h1 class="display-5">Lista de produtos</h1>
        
        <table class="table table-light table-striped table-bordered">
          <thead>
              <tr>
              <th scope="col">Nro Produto</th>
              <th scope="col">Nome Produto</th>
              <th scope="col">Categoria</th>
              <th scope="col">Quantidade</th>
              <th scope="col">Fornecedor</th>
              <th scope="col">Ação</th>
              </tr>
          </thead>
          
          <?php
              include 'conexao.php';
              $sql = "SELECT * FROM `estoque`";
              $busca = mysqli_query($conexao, $sql);

              while($array = mysqli_fetch_array($busca)){

                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];
          ?>
          <tr>
              <td><?php echo $nroproduto ?></td>
              <td><?php echo $nomeproduto ?></td>
              <td><?php echo $categoria ?></td>
              <td><?php echo $quantidade ?></td>
              <td><?php echo $fornecedor ?></td>
              <td>
                <?php
                  if(($nivel == 1) || ($nivel == 2)){
                  
                ?>
                  <a href="editar_produto.php?id=<?php echo $id_estoque?>" class="btn btn-warning btn-sm text-white" role="button">
                  <img src="img/editar.png" alt="imagem de editar" width="25">
                  Editar</a>
                <?php } 
                
                  if($nivel == 1){

                ?>

                <a href="deletar_produto.php?id=<?php echo $id_estoque?>" class="btn btn-danger btn-sm text-white ml-2" role="button">
                <img src="img/lixo.png" alt="imagem de lexeira" width="20" height="23">
                Remover</a>
                <?php } ?>
                
              </td>
              <?php } ?>
              
          </tr>
        </table><!--table-->

        <div class="d-flex justify-content-end">
          <a href="menu.php" class="btn btn-primary mt-2" id="button">
          <img src="img/voltar.png" alt="imagem de voltar" width="25">
            Voltar
          </a>
        </div><!--d-flex justify-content-end-->
      </div><!--jumbotron-->

      
        
    </div><!--container-->


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/jQuery v3.4.1"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="fontawesome/js/all.min.js"></script>
  </body>
</html>