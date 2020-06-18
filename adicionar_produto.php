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

    <title>Adicionar produtos</title>

    <style>
      body{
        font-family: 'Roboto', sans-serif;
      }
      .container{
        width: 600px;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    
    <div class="container">

      <div class="jumbotron">
        <h1 class="display-5">Formulário de Cadastro</h1>
        
        <form action="_inserir_produto.php" method="POST" class="mt-4">
          <div class="form-group">
            <label for="">Nro Produto</label>
            <input type="number" name="nroproduto" id="" class="form-control" placeholder="Insira o número do produto" required  autocomplete="off">
          </div>

          <div class="form-group">
            <label for="">Nome Produto</label>
            <input type="text" name="nomeproduto" id="" class="form-control" placeholder="Insira o nome do produto" required  autocomplete="off">
          </div>

          <div class="form-group">
            <label for="">Quantidade</label>
            <input type="number" name="quantidade" id="" class="form-control" placeholder="Insira a quantidade de produtos" required autocomplete="off">
          </div>

          <div class="form-group">
            <label for="">Categoria</label>
            <select class="form-control" name="categoria" id="">

              <?php
              include 'conexao.php';
              $sql_categoria =  "select * from categoria order by nome_categoria ASC";
              $buscar_categoria = mysqli_query($conexao, $sql_categoria);

              while($array_categoria = mysqli_fetch_array($buscar_categoria)){

                $id_categoria = $array_categoria['id_categoria'];
                $nome_categoria = $array_categoria['nome_categoria'];
              
              ?>
              <option><?php echo $nome_categoria ?></option>
              <?php }?>
            </select>
          </div>

          <div class="form-group">
            <label for="">Fornecedor</label>
            <select class="form-control" name="fornecedor" id="">
            
              <?php
                include 'conexao.php';
                $sql_fornecedor =  "select * from fornecedor order by nome_fornecedor ASC";
                $buscar_fornecedor = mysqli_query($conexao, $sql_fornecedor);

                while($array_fornecedor = mysqli_fetch_array($buscar_fornecedor)){

                  $id_fornecedor = $array_fornecedor['id_fornecedor'];
                  $nome_fornecedor = $array_fornecedor['nome_fornecedor'];
                
                ?>
                <option><?php echo $nome_fornecedor ?></option>
                <?php }?>
            </select>
          </div>

          <div class="d-flex justify-content-end">

            <a href="menu.php" class="btn btn-primary mr-2">
              <span><i class="fas fa-undo"></i></span>
              Voltar
            </a>

            <button type="submit" class="btn btn-success" id="button">
              <span><i class="fas fa-clipboard-list fa-lg mr-2 text-white"></i></span>
              Cadastrar
            </button>
          </div><!--d-flex justify-content-end-->

        </form>
      </div><!--jumbotron-->

      
    </div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/jQuery v3.4.1"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>