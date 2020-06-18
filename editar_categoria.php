<?php
    include 'conexao.php';
    $id = $_GET['id'];
?>

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

    <title>Formulário de Cadastro</title>

    <style>
      body{
        font-family: 'Roboto', sans-serif;
      }
      .container{
        width: 500px;
        margin-top: 40px;
      }
      #button{
        background: #1abc9c;
        color: #fff;
        font-weight: 700;
      }
    </style>
  </head>
  <body>
    
    <div class="container">
      <h4>Formulário de Edição</h4>
      <form action="_atualizar_categoria.php" method="POST" class="mt-4">

      <?php

        $sql = "select * from `categoria` where id_categoria = $id";
        $busca = mysqli_query($conexao, $sql);

        while($array = mysqli_fetch_array($busca)){

            $id_categoria = $array['id_categoria'];
            $nome_categoria = $array['nome_categoria'];

      ?>

        <div class="form-group">
          <label for="">Nome Categoria</label>
          <input type="text" name="nome_categoria" class="form-control" value="<?php echo $nome_categoria ?>">
          <input type="text" name="id" class="form-control" value="<?php echo $id_categoria ?>" style="display: none;">
        </div>

      <div class="d-flex justify-content-end">
        <button type="submit" class="btn" id="button">
        <span><i class="fas fa-sync-alt mr-2 text-white"></i></i></span>
        Atualizar</button>
      </div>
      <?php }?>

      </form>
    </div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/jQuery v3.4.1"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="fontawesome/js/all.min.js"></script>
  </body>
</html>