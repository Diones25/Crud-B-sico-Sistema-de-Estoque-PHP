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

    <!--Fonte Awesome-->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <title>Lista de usuários</title>

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
      $nivelUsu = $array['nivel_usuario'];
    ?>
    <!--******************************************-->
    
    <div class="container">

      <div class="jumbotron">
        <h1 class="display-5">Lista de usuários Ativos</h1>
        
        <table class="table table-light table-striped table-bordered">
          <thead>
              <tr>
              <th scope="col">Nome</th>
              <th scope="col">E-mail</th>
              <th scope="col">Nivel</th>
              </tr>
          </thead>
          
          <?php
            include 'conexao.php';
            $sql = 'SELECT * FROM usuarios WHERE status = "Ativo"';
            $busca = mysqli_query($conexao, $sql);

            while($array = mysqli_fetch_array($busca)){
              $id_usuario = $array['id_usuario'];
              $nomeusuario = $array['nome_usuario'];
              $mail = $array['mail_usuario'];
              $nivel = $array['nivel_usuario'];
          ?>
          <tr>
              <td><?php echo $nomeusuario?></td>
              <td><?php echo $mail ?></td>
              <td><?php echo $nivel ?></td>
              <td>
                <?php 
                
                  if($nivelUsu == 1){

                ?>

                <a href="deletar_usuario_ativo.php?id=<?php echo $id_usuario?>" class="btn btn-danger btn-sm text-white ml-2" role="button">
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