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
        width: 500px;
        margin-top: 40px;
      }
    </style>
  </head>
  <body>
    
    <div class="container">
      <h4></h4>

      <div class="jumbotron">
        <h1 style="font-size: 26px">Cadastro de Fornecedores</h1>
        

        <form action="inserir_fornecedor.php" method="POST" class="mt-4">
          <div class="form-group">
            <label for="">Fornecedor:</label>
            <input type="text" name="fornecedor" id="" class="form-control" placeholder="Insira um fornecedor" required  autocomplete="off">
          </div>

          <div class="d-flex justify-content-end">

            <a href="menu.php" class="btn btn-primary mr-2">
              <span><i class="fas fa-undo"></i></span>
              Voltar
            </a>

            <button type="submit" class="btn btn-success">
              <span><i class="fas fa-clipboard-list fa-lg mr-2 text-white"></i></span>
              Cadastrar
            </button>
          </div><!--d-flex justify-content-end-->

        </form>
      </div><!--jumbotron-->

      
    </div><!--container-->


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/jQuery v3.4.1"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>