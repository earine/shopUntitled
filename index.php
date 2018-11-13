<?php
    require_once 'core/init.php';
$featured = $db->query("SELECT * FROM products WHERE featured = 1");
$categories_female = $db->query("SELECT * FROM category WHERE gender IN('f', 'u')");
$categories_male = $db->query("SELECT * FROM category WHERE gender IN('m', 'u')");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>UNTITLED</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/main.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
    <div class="container">
        <a href="index.php" class="navbar-brand" id="brandbar">UNTITLED</a>
        <ul class="nav navbar-nav">
            <!--Drop Down Menu-->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">ЖЕНЩИНЫ<span class="caret"></span></a>

                <ul class="dropdown-menu" role="menu">
                    <?php mysqli_data_seek($categories_female, 0);
                    while ($category = mysqli_fetch_assoc($categories_female)) : ?>
                        <li>
                            <a href="product-list.php?id=<?php echo $category['id']; ?>&gender=<?php echo urlencode('f') ?>"><?= $category['category'] ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>

            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">МУЖЧИНЫ<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <?php mysqli_data_seek($categories_male, 0);
                    while ($category = mysqli_fetch_assoc($categories_male)) : ?>
                        <li>
                            <a href="product-list.php?id=<?php echo $category['id']; ?>&gender=<?php echo urlencode('m') ?>"><?= $category['category'] ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </li>
        </ul>
        <!-- ##### Right Side Cart Area ##### -->

        <div class="right-side-cart-area">
            <!-- Cart Button -->
            <div class="cart-button">
                <a href="#" id="rightSideCart"><img src="images/elements/shopping-cart.png" alt=""> <span></span></a>
            </div>
        </div>
        <!-- ##### Right Side Cart End ##### -->
    </div>
</nav>

<div class="container-fluid">
    <!--    <form method="get" action="details.php">-->
    <h2 class="text-center">СПЕЦИАЛЬНЫЕ ПРЕДЛОЖЕНИЯ</h2>
    <div class="row">
        <?php while($product = mysqli_fetch_assoc($featured)) : ?>
        <div class="col-md-3">
            <div id="container-text-product">
                <p> <?=$product['title']; ?> </p>
            </div>

            <div id="hover-details">
                <img src="images/<?=$product['image-1']; ?>" alt="<?=$product['title']; ?>" id="images"/>
                <div class="overlay"></div>
                <div class="button"><a href="details.php?id=<?php echo $product['id']; ?>"> ПОДРОБНЕЕ </a></div>
<!--                data-toggle="modal" data-target="#details-1"-->
            </div>
            <p class="price"><span class="discount-price text-danger"><s>$<?=$product['price']; ?></s></span> $<?=round($product['price'] - ($product['price']*$product['discount_percent'])/100, 2); ?></p>
        </div>
        <?php endwhile; ?>
    </div>
    <!--    </form>-->
</div>


</body>
</html>