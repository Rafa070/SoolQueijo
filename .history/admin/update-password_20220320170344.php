<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Alterar senha.</h1>
        <br><br>

        <?php 
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
            }
        ?>

        <form action="" method="POST">
        
            <table class="tbl-30">
                <tr>
                    <td>Senha atual: </td>
                    <td>
                        <input type="password" name="current_password" placeholder="Senha atual">
                    </td>
                </tr>

                <tr>
                    <td>Nova Senha:</td>
                    <td>
                        <input type="password" name="new_password" placeholder="Nova Senha">
                    </td>
                </tr>

                <tr>
                    <td>Confirmar Senha: </td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Confirmar senha">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Salvar" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

    </div>
</div>

<?php 

            if(isset($_POST['submit']))
            {
                $id=$_POST['id'];
                $current_password = md5($_POST['current_password']);
                $new_password = md5($_POST['new_password']);
                $confirm_password = md5($_POST['confirm_password']);


                $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";

                $res = mysqli_query($conn, $sql);

                if($res==true)
                {
                    $count=mysqli_num_rows($res);

                    if($count==1)
                    {

                        if($new_password==$confirm_password)
                        {
                            $sql2 = "UPDATE tbl_admin SET 
                                password='$new_password' 
                                WHERE id=$id
                            ";

                            $res2 = mysqli_query($conn, $sql2);

                            if($res2==true)
                            {
                                $_SESSION['change-pwd'] = "<div class='success'>Senha atualizada com sucesso </div>";
                      
                                header('location:'.SITEURL.'admin/manage-admin.php');
                            }
                            else
                            {
                                $_SESSION['change-pwd'] = "<div class='error'>Falha </div>";
                               
                                header('location:'.SITEURL.'admin/manage-admin.php');
                            }
                        }
                        else
                        {                       
                            $_SESSION['pwd-not-match'] = "<div class='error'>Erro na solicitaç </div>";
                          
                            header('location:'.SITEURL.'admin/manage-admin.php');
                        }
                    }
                    else
                    {
                        $_SESSION['user-not-found'] = "<div class='error'>Erro de Usuário</div>";
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                }
            }

?>
