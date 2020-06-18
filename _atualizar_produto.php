<?php

    include 'conexao.php';    

    $id = $_POST['id'];
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    $sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";

    $atualizar = mysqli_query($conexao, $sql);

?>

<!--Fonte Awesome-->
<link rel="stylesheet" href="fontawesome/css/all.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<div class="container" style="width: 400px; margin-top: 200px;">
    <h3 style="text-align: center">Atualizado com sucesso</h3>
    <div class="d-flex justify-content-center">
        <a href="listar_produtos.php" class="btn btn-primary text-white mt-2">
        <span><i class="fas fa-undo"></i></span>
        Voltar
        </a>
    </div>
</div>