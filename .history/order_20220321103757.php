<?php include('partials-front/menu.php');

?><?php if(isset($_GET['food_id'])) {

    $food_id=$_GET['food_id'];


    $sql="SELECT * FROM tbl_food WHERE id=$food_id";

    $res=mysqli_query($conn, $sql);

    $count=mysqli_num_rows($res);

    if($count==1) {

        $row=mysqli_fetch_assoc($res);

        $title=$row['title'];
        $price=$row['price'];
        $image_name=$row['image_name'];
    }

    else {

        header('location:'.SITEURL);
    }
}

else {

    header('location:'.SITEURL);
}

?><section class="food-search">
    <div class="container">
        <h2 class="text-center text-white">Preencha este formulário para confirmar seu pedido.</h2>
        <form action="" method="POST" class="order">
            <fieldset>
                <legend>Selecionar Comida</legend>
                <div class="food-menu-img"><?php if($image_name=="") {

    echo "<div class='error'>Imagem indisponível.</div>";
}

else {

    ?><img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Pizza"
                        class="img-responsive img-curve"><?php
}

?>
                </div>
                <div class="food-menu-desc">
                    <h3><?php echo $title;
?></h3>

                    <input type="hidden" name="food" value="<?php echo $title; ?>">
                    <p class="food-price">R$<?php echo $price;
?></p><input type="hidden" name="price" value="<?php echo $price; ?>">
                    <div class="order-label">Quantidade</div><input type="number" name="qty" class="input-responsive"
                        value="1" required>
                </div>
            </fieldset>
            <fieldset>
                <legend>Detalhes do Pedido</legend>
                   <div class="order-label">Nome completo</div>
                     <input type="text" name="full-name"placeholder="Sool Queijo" class="input-responsive" required>
                        <div class="order-label">Número de telefone</div>
                          <input type="tel" name="contact"placeholder="(00)0000-0000" class="input-responsive" required>
                            <div class="order-label">Email</div>
                               <input type="email" name="email" placeholder="soolqueijo@ifrn.edu.br" class="input-responsive" required>
                                  <div class="order-label">Endereço</div>
                                    <textarea name="address" rows="10" placeholder="Rua SoolQueijo, Canguaretama - RN" class="input-responsive" required></textarea>
                                        <input type="submit" name="submit" value="Confirma Pedido" class="btn btn-primary">
                              </fieldset>
         </form>
    </div>
</section><?php include('partials-front/footer.php');
?>