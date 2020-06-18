<?php

include 'conexao.php';
$id = $_GET['id'];
$nivel = $_GET['nivel'];

if($nivel == 1){

    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 1 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "ADMINISTRADOR APROVADO";
    
}
if($nivel == 2){

    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 2 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "FUNCIONÁRIO APROVADO";
}
if($nivel == 3){

    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 3 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao, $update);
    echo "CONFERENTE APROVADO";
}

header("Location: aprovar_usuario.php"); // redirecionar para a página de aprovação

?>
<!--Fonte Awesome-->
<link rel="stylesheet" href="fontawesome/css/all.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<div class="container" style="width: 400px; margin-top: 200px;">
    <h3 style="text-align: center">Usuário aprovado com sucesso</h3>
    <div class="d-flex justify-content-center">
        <a href="aprovar_usuario.php" class="btn btn-primary mr-2">
            <span><i class="fas fa-undo"></i></span>
            Voltar
        </a>
    </div>
</div>