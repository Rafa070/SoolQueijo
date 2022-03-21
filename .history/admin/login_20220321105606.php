<?php include('../config/constants.php'); ?>

<html>

<head>
    <title>Login - SoolQueijo</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>

    <div class="login">
        <h1 class="text-center">Login.</h1>
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


        <form action="" method="POST" class="text-center">
            Nome de usuário: <br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>

            Senha: <br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
        </form>
        <li><a href="http://localhost/food-order/" c>Tela Inicial</a></li>
    </div>

</body>

</html>

<?php 

    
    if(isset($_POST['submit']))
    {
       
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

       
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        $res = mysqli_query($conn, $sql);

 
        $count = mysqli_num_rows($res);

        if($count==1)
        {
          
            $_SESSION['login'] = "<div class='success'>Login efetuado com sucesso.</div>";
            $_SESSION['username'] = $username; 

          
            header('location:'.SITEURL.'admin/index.php');
        }
        else
        {
         
            $_SESSION['login'] = "<div class='error text-center'>Nome de usuário ou senha estão incorretos.</div>";
            
            header('location:'.SITEURL.'admin/login.php');
            
        }
    }

?>