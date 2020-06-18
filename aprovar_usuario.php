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
    
    <div class="container">

      <div class="jumbotron">
        <h1 style="font-size: 26px">Lista de Usuários Externos</h1>
          
        <table class="table table-light table-striped table-bordered">
          <thead>
              <tr>
              <th scope="col">Nome</th>
              <th scope="col">E-mail</th>
              <th scope="col">Nível</th>
              <th scope="col">Ação</th>
              </tr>
          </thead>
            
          <?php
            include 'conexao.php';
            $sql = 'SELECT * FROM usuarios WHERE status = "Inativo"';
            $busca = mysqli_query($conexao, $sql);

            while($array = mysqli_fetch_array($busca)){

            $id_usuario = $array['id_usuario'];
            $nomeusuario = $array['nome_usuario'];
            $mail = $array['mail_usuario'];
            $nivel = $array['nivel_usuario'];
            
          ?>
          <tr>
            <td><?php echo $nomeusuario ?></td>
            <td><?php echo $mail ?></td>
            <td><?php echo $nivel ?></td>

            <td class="d-flex justify-content-end">

              <a class="btn btn-success btn-sm text-white mr-2" href="_aprovar_usuario.php?id=<?php echo $id_usuario?>
              &nivel=1"  role="button">
              <img class="mr-2" src="img/ok.png" alt="imagem de cadastro" width="17" height="15">
              Administrador
              </a>

              <a class="btn btn-warning btn-sm text-white mr-2" href="_aprovar_usuario.php?id=<?php echo $id_usuario?>
              &nivel=2"  role="button">
              <img class="mr-2" src="img/ok.png" alt="imagem de cadastro" width="17" height="15">
              Funcionário
              </a>

              <a class="btn btn-dark btn-sm text-white mr-2" href="_aprovar_usuario.php?id=<?php echo $id_usuario?>
              &nivel=3"  role="button">
              <img class="mr-2" src="img/ok.png" alt="imagem de cadastro" width="17" height="15">
              Conferente
              </a>

              <a class="btn btn-danger btn-sm text-white ml-2" href="_deletar_usuario.php?id=<?php echo $id_usuario?>" role="button">
              <img src="img/lixo.png" alt="imagem de lexeira" width="20" height="23">
              Remover</a>
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="fontawesome/js/all.min.js"></script>
  </body>
</html>