<?php include('../config/constants.php'); ?>

<html>

<head>
    <title>Login - SoolQueijo</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>

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
        
        <div class="content">
  <div class="container">
    <div class="form">
      <form action="" method="POST" class="text-center">
        <label>sÓ PARA FUNCIONÁRIOS</label>
        <div class="opt-group">
          <label>Usuário</label>
          <input type="text" name="username" placeholder="Nome de Usuário" required>
        </div>
        <div class="opt-group">
          <label>Senha</label>
          <input type="password" name="password" placeholder="Insira a senha" required>
        </div>
        <div class="opt-group">
          <input type="checkbox" name="remember" class="remember" id="remember">
          <label class="checkbox" for="remember">Lembre-se de mim</label>
        </div>
        <input type="submit" name="submit" value="Login">

        <a href="#">Esqueceu a Senha?</a>

      </form>

    </div>
  </div>
</div>
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