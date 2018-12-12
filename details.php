<?php
require_once 'core/init.php';
include('header.php');

$id = $_GET['id'];

$sql = "SELECT * FROM products p, brand b WHERE p.id = '$id' AND b.id = p.brand";

$result = $db->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php
    while (($product = mysqli_fetch_array($result))) : ?>
        <title><?= $product['title']; ?></title>
    <?php endwhile; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/details.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="css/navigation-bar.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/dropdown-menu.js" type="text/javascript"></script>
</head>

<body>

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
                    <?php mysqli_data_seek($result, 0);
                    while (($product = mysqli_fetch_array($result))) : ?>
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

                <p id="brand-name"><?= $product['brand_name']; ?></p>
                <row><h2> <?= $product['title']; ?> </h2></row>
                <?php if ($product['discount_percent'] != 0) : ?>
                    <p class="price"><span
                            class="discount-price text-danger"><s>$<?= $product['price']; ?></s></span> $<?= round($product['price'] - ($product['price'] * $product['discount_percent']) / 100, 2); ?>
                <?php else : ?>
                    <p class="price">$<?= $product['price']; ?></p>
                <?php endif; ?>
                <p class="product-desc"><?= $product['description']; ?></p>
                <?php endwhile; ?>
                <row>
                    <div class="add-to-cart">
                        <a href="core/addtocart.php?id=<?php echo $id; ?>" class="btn btn-warning" id="btn-add-to-cart"
                           role="button">Добавить в корзину</a>
                    </div>
                </row>
            </div>
        </div>
    </div>
</div>


</body>
</html>
