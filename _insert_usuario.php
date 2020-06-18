<?php
    include 'conexao.php';
    include 'script/password.php';

    $nomeusuario = $_POST['nomeusuario'];
    $email = $_POST['mailusuario'];
    $senha = $_POST['senhausuario'];
    $nivel = $_POST['nivelusuario'];
    $status = 'Ativo';

    $sql = "INSERT INTO `usuarios`(`nome_usuario`, `mail_usuario`, `senha_usuario`, `nivel_usuario`, `status`) 
    VALUES ('$nomeusuario','$email',sha1('$senha'),$nivel,'$status')";

    $inserir = mysqli_query($conexao, $sql);
?>

<!--Fonte Awesome-->
<link rel="stylesheet" href="fontawesome/css/all.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<div class="container" style="width: 400px; margin-top: 200px;">
    <h3 style="text-align: center">Usuário adicionado com sucesso</h3>
    <div class="d-flex justify-content-center">
        <a href="cadastro_usuario.php" class="btn btn-primary mr-2">
            <span><i class="fas fa-undo"></i></span>
            Voltar
        </a>
    </div>
</div>