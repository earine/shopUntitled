<?php
require_once 'core/init.php';
$id = $_GET['id'];

$sql = "SELECT * FROM products p, brand b WHERE p.id = '$id' AND b.id = p.brand";

$result = $db->query($sql);
$categories = $db->query("SELECT * FROM category");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>UNTITLED</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/details.css?v=1.0" rel="stylesheet" type="text/css"/>
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
                    <?php mysqli_data_seek($categories, 0);
                    while ($category = mysqli_fetch_assoc($categories)) : ?>
                        <li>
                            <a href="product-list.php?id=<?php echo $category['id']; ?>&gender=<?php echo urlencode('f') ?>"><?= $category['category'] ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>

            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">МУЖЧИНЫ<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <?php mysqli_data_seek($categories, 0);
                    while ($category = mysqli_fetch_assoc($categories)) : ?>
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

<div class="container-fluid" id="details-container">
    <div class="row">
        <!-- Single Product Thumb -->
        <div class="col-md-6">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php while (($product = mysqli_fetch_array($result))) : ?>
                    <div class="item active">
                        <img src="images/<?= $product['image-1']; ?>">
                    </div>

                    <div class="item">
                        <img src="images/<?= $product['image-2']; ?>">
                    </div>

                    <div class="item">
                        <img src="images/<?= $product['image-3']; ?>">
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="details-container">

                <row><span><?= $product['brand_name']; ?></span></row>
                <row><h2> <?= $product['title']; ?> </h2></row>
                <?php if ($product['discount_percent'] != 0) : ?>
                    <p class="price"><span
                            class="discount-price text-danger"><s>$<?= $product['price']; ?></s></span> $<?= round($product['price'] - ($product['price'] * $product['discount_percent']) / 100, 2); ?>
                <?php else : ?>
                    <p class="price">$<?= $product['price']; ?></p>
                <?php endif; ?>
                <p class="product-desc"><?= $product['description']; ?></p>


                <?php endwhile; ?>

                <!--            <p class="price"><span class="discount-price text-danger" style="font-size:130%"><s>$-->
                <? //=$product['price']; ?><!--</s></span> $-->
                <? //=round($product['price'] - ($product['price']*$product['discount_percent'])/100, 2); ?><!--</p>-->
            </div>
        </div>
    </div>
</div>


</body>
</html>
