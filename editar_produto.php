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
      <form action="_atualizar_produto.php" method="POST" class="mt-4">

      <?php

        $sql = "select * from `estoque` where id_estoque = $id";
        $busca = mysqli_query($conexao, $sql);

        while($array = mysqli_fetch_array($busca)){

            $id_estoque = $array['id_estoque'];
            $nroproduto = $array['nroproduto'];
            $nomeproduto = $array['nomeproduto'];
            $categoria = $array['categoria'];
            $quantidade = $array['quantidade'];
            $fornecedor = $array['fornecedor'];

      ?>

        <div class="form-group">
          <label for="">Nro Produto</label>
          <input type="number" name="nroproduto" id="" class="form-control" value="<?php echo $nroproduto ?>" disabled>
          <input type="number" name="id" id="" class="form-control" value="<?php echo $id ?>" style="display: none;">
        </div>

        <div class="form-group">
          <label for="">Nome Produto</label>
          <input type="text" name="nomeproduto" id="" class="form-control" value="<?php echo $nomeproduto ?>">
        </div>

        <div class="form-group">
          <label for="">Quantidade</label>
          <input type="number" name="quantidade" id="" class="form-control" value="<?php echo $quantidade ?>">
        </div>

        <div class="form-group">
          <label for="">Categoria</label>
          <select class="form-control" name="categoria" id="">
            <option>Periféricos</option>
            <option>Hardware</option>
            <option>Software</option>
            <option>Celulares</option>
          </select>
        </div>

        <div class="form-group">
          <label for="">Fornecedor</label>
          <select class="form-control" name="fornecedor" id="">
            <option>Fornecedor A</option>
            <option>Fornecedor B</option>
            <option>Fornecedor C</option>
          </select>
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