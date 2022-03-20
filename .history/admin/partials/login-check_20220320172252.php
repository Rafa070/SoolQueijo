<?php 

    //painel de controle
    //validação de dados
    if(!isset($_SESSION['username'])) //section usuário
    {
        $_SESSION['no-login-message'] = "<div class='error text-center'>Erro de Autenticação</div>";
        header('location:'.SITEURL.'admin/login.php');
    }

?>