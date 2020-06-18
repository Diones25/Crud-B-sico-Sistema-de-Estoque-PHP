<?php

    include 'conexao.php';

    $nroproduto = $_POST['nroproduto']; //Recebe o valor do atributo
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    $sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto, '$nomeproduto', '$categoria', $quantidade, '$fornecedor')";

    $inserir = mysqli_query($conexao, $sql);
    
?>

<!--Fonte Awesome-->
<link rel="stylesheet" href="fontawesome/css/all.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<div class="container" style="width: 400px; margin-top: 200px;">
    <h3 style="text-align: center">Produto adicionado com sucesso</h3>
    <div class="d-flex justify-content-center">
        <a href="adicionar_produto.php" class="btn btn-primary text-white mt-2">
        <span><i class="fas fa-clipboard-list fa-lg mr-2 text-white"></i></span>
        Cadastrar novo Ítem
        </a>
    </div>
</div>