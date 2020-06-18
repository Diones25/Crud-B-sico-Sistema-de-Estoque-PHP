<?php
    //Encerrando a sessão
    session_start();//Inicia a sessão
    session_unset();//Limpa a sessão
    session_destroy();//Encerra/destroi a sessão
    header('Location: index.php');//Redireciona para a index.php
?>