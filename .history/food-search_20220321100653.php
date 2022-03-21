<?php include('partials-front/menu.php');
?><section class="food-search text-center">
    <div class="container"><?php $search=mysqli_real_escape_string($conn, $_POST['search']);

?><h2>Buscou por: <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>
    </div>
</section>
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">Menu</h2><?php $sql="SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR description LIKE '%$search%'";


$res=mysqli_query($conn, $sql);


$count=mysqli_num_rows($res);


if($count>0) {

    while($row=mysqli_fetch_assoc($res)) {

        $id=$row['id'];
        $title=$row['title'];
        $price=$row['price'];
        $description=$row['description'];
        $image_name=$row['image_name'];

        ?><div class="food-menu-box">
            <div class="food-menu-img"><?php if($image_name=="") {

            echo "<div class='error'>Imagem</div>";
        }

        else {

            ?><img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza"
                    class="img-responsive img-curve"><?php
        }

        ?></div>
            <div class="food-menu-desc">
                <h4><?php echo $title;
        ?></h4>
                <p class="food-price">$<?php echo $price;
        ?></p>
                <p class="food-detail"><?php echo $description;
        ?></p><br><a href="#" class="btn btn-primary">Order Now</a>
            </div>
        </div><?php
    }
}

else {
    echo "<div class='error'>Comida não encontrada.</div>";
}

?><div class="clearfix"></div>
    </div>
</section><?php include('partials-front/footer.php');
?>