<?php
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>UNTITLED</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/main.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
                    <li><a href="#">Худи</a></li>
                    <li><a href="#">Футболки</a></li>
                    <li><a href="#">Брюки</a></li>
                    <li><a href="#">Обувь</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">МУЖЧИНЫ<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Худи</a></li>
                    <li><a href="#">Футболки</a></li>
                    <li><a href="#">Брюки</a></li>
                    <li><a href="#">Обувь</a></li>
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
        <div class="col-md-7">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/Coat-Levis-JustinTimberlake.jpg" style="width:500px;height:700px;display: block;object-fit: cover;">
                        </div>

                        <div class="item">
                            <img src="images/Coat-Levis-JustinTimberlake-2.jpg" style="width:500px;height:700px;display: block;object-fit: cover;">
                        </div>

                        <div class="item">
                            <img src="images/Coat-Levis-JustinTimberlake-3.jpg" style="width:500px;height:700px;display: block;object-fit: cover;">
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

        <div class="col-md-5">
            <div id="container-text-product">
                <!--                <p> --><?//=$product['title']; ?><!-- </p>-->
                <h2>fdsfsdfds</h2>
            </div>

<!--            <p class="price"><span class="discount-price text-danger" style="font-size:130%"><s>$--><?//=$product['price']; ?><!--</s></span> $--><?//=round($product['price'] - ($product['price']*$product['discount_percent'])/100, 2); ?><!--</p>-->

        </div>
        </div>
    </div>
</div>

</body>
</html>
