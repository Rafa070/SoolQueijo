<?php include('config/constants.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoolQueijo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.php" title="Logo">
                    <img src="images/logo.jpg" alt="Logo da Lanchonete SoolQueijo" class="img-responsive">
                </a>
            </div>
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Início</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categorias</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">Comidas</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>admin/login.php">Funcionário</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>time.php">Time</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
</body>
</html>