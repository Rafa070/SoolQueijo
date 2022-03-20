<?php include('../config/constants.php'); ?>

<html>
    <head>
        <title>Login - Food Order System</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
        
        <div class="login">
            <h1 class="text-center">Login</h1>
            <br><br>

            <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br><br>

            <!-- Login do funcionario open -->
            <form action="" method="POST" class="text-center">
            Username: <br>
            <input type="text" name="username" placeholder="Nome de Usuário"><br><br>

            Password: <br>
            <input type="password" name="password" placeholder="Senha"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
            </form>
            <!-- Login do funcionario end -->

            <p class="text-center">Created By - <a href="#">SoolQueijo</a></p>
        </div>

    </body>
</html>

<?php 

    //verificação do button submit
    if(isset($_POST['submit']))
    {
        //Captura do processo de Login
        //Metodos de Captura via POST
        // $username = $_POST['username'];
        // $password = md5($_POST['password']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        //Cheacagem de  dados no banco de dados SQL
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        //Executando Jquery
        $res = mysqli_query($conn, $sql);

        //veiricação de dados
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //Sessão de Login
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['username'] = $username; //TO check whether the user is logged in or not and logout will unset it

            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/index.php');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/login.php');
        }


    }

?>