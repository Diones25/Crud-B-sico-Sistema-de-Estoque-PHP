<?php

    include 'conexao.php';    

    $id = $_POST['id'];
    $nome_categoria = $_POST['nome_categoria'];

    $sql = "UPDATE `categoria` SET `nome_categoria`='$nome_categoria' WHERE id_categoria = $id";

    $atualizar = mysqli_query($conexao, $sql);

?>

<!--Fonte Awesome-->
<link rel="stylesheet" href="fontawesome/css/all.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<div class="container" style="width: 400px; margin-top: 200px;">
    <h3 style="text-align: center">Atualizado com sucesso</h3>
    <div class="d-flex justify-content-center">
        <a href="listar_categoria.php" class="btn btn-primary text-white mt-2">
        <span><i class="fas fa-undo"></i></span>
        Voltar
        </a>
    </div>
</div>