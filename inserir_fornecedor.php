<?php

    include 'conexao.php';

    $fornecedor = $_POST['fornecedor'];
    $sql = "INSERT INTO `fornecedor`(`nome_fornecedor`) VALUES ('$fornecedor')";

    $inserir = mysqli_query($conexao, $sql);
    
?>

<!--Fonte Awesome-->
<link rel="stylesheet" href="fontawesome/css/all.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<div class="container" style="width: 400px; margin-top: 200px;">
    <h3 style="text-align: center">Fornecedor adicionado com sucesso</h3>
    <div class="d-flex justify-content-center">
        <a href="adicionar_fornecedor.php" class="btn btn-success text-white mt-2">
        <span><i class="fas fa-clipboard-list fa-lg mr-2 text-white"></i></span>
        Adicionar novo fornecedor
        </a>
    </div>
</div>