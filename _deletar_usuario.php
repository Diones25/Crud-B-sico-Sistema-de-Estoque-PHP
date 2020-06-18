<?php
include 'conexao.php';

    $id = $_GET['id'];

    $sql = "delete from `usuarios` where id_usuario = $id";
    $deletar = mysqli_query($conexao, $sql); 

    header("Location: aprovar_usuario.php"); // redirecionar para a página de aprovação

?>

<!--Fonte Awesome-->
<link rel="stylesheet" href="fontawesome/css/all.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<div class="container" style="width: 400px; margin-top: 200px;">
    <h3 style="text-align: center">Usuário deletado com sucesso</h3>
    <div class="d-flex justify-content-center">
        <a href="aprovar_usuario.php" class="btn btn-primary mr-2">
            <span><i class="fas fa-undo"></i></span>
            Voltar
        </a>
    </div>
</div>