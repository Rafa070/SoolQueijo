<?php 

    if(!isset($_SESSION['username'])) 
    {
        $_SESSION['no-login-message'] = "<div class='error text-center'>Erro de Autenticação</div>";
        header('location:'.SITEURL.'admin/login.php');
    }

?>