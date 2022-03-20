<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>

        <br><br>

        <?php 
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        
        ?>

        <br><br>

        <!-- Adicionar Categoria Open -->
        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Categoria">
                    </td>
                </tr>

                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes 
                        <input type="radio" name="featured" value="No"> No 
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes 
                        <input type="radio" name="active" value="No"> No 
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Adicionar Categoria" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
        <!-- Adicionar Categoria End -->

        <?php 
        
            //validação de dados
            if(isset($_POST['submit']))
            {
                $title = $_POST['title']
                if(isset($_POST['featured']))
                {
                    $featured = $_POST['featured'];
                }
                else
                {
                    $featured = "No";
                }

                if(isset($_POST['active']))
                {
                    $active = $_POST['active'];
                }
                else
                {
                    $active = "No";
                }

                if(isset($_FILES['image']['name']))
                {
                    //Submição da Imagem
                    $image_name = $_FILES['image']['name'];
                    
                    // Atualização da Imagem
                    if($image_name != "")
                    {
                        $ext = end(explode('.', $image_name));
                        $image_name = "Food_Category_".rand(000, 999).'.'.$ext;
                        $source_path = $_FILES['image']['tmp_name'];
                        $destination_path = "../images/category/".$image_name;
                        //FIM da section Imagem
                        $upload = move_uploaded_file($source_path, $destination_path);
                        if($upload==false)
                        {
                            //menssagem de erro
                            $_SESSION['upload'] = "<div class='error'>Erro ao submeter imagem</div>";
                            //renderização
                            header('location:'.SITEURL.'admin/add-category.php');
                            //parar processo
                            die();
                        }

                    }
                }
                else
                {
                    //upload Imagem
                    $image_name="";
                }

                //conexão com o banco de dados
                $sql = "INSERT INTO tbl_category SET 
                    title='$title',
                    image_name='$image_name',
                    featured='$featured',
                    active='$active'
                ";

                //query no banco de dados
                $res = mysqli_query($conn, $sql);

                //validação
                if($res==true)
                {
                    //Menssagem de sucesso
                    $_SESSION['add'] = "<div class='success'>Categoria adicionada com sucesso</div>";
                    //renderização
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
                else
                {
                    //menssagem de erro
                    $_SESSION['add'] = "<div class='error'>erro ao adicionar categoria</div>";
                    //renderização
                    header('location:'.SITEURL.'admin/add-category.php');
                }
            }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>