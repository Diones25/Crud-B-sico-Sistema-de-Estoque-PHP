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

    <title>Tela de Login</title>

    <style>
      body{
        font-family: 'Roboto', sans-serif;
        /*CSS para manter a tela centralizada ao centro verticalmente*/
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        /*************************************************************/
        background: #ecf0f1;
      }
      .container{
        width: 400px;
      }
    </style>
  </head>
  <body>
    
    <div class="container shadow p-3 bg-white rounded border">

      <div class="d-flex justify-content-center mb-4">
        <img src="img/cadeado.png" alt="imagem de cadeado" width="125px" height="125px">
      </div>

      <form action="index1.php" method="POST">
        <div class="form-group pt-2">
            <label for="">Usuário:</label>
            <input id="" class="form-control" type="text" name="usuario" placeholder="Usuário" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label for="">Senha:</label>
            <input id="" class="form-control" type="password" name="senha" placeholder="Senha" autocomplete="off" required>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Entrar</button>
        </div>

      </form><!--formulario-->
            
    </div><!--container-->
      
    <center class="mt-2">
      <small >Você não possui cadastro? Clique <a href="cadastro_usuario.php" class="">aqui!</a></small>
    </center>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/jQuery v3.4.1"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>