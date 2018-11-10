<?php
    require_once 'core/init.php';

    $sql = "SELECT * FROM products WHERE featured = 1";
    $featured = $db->query($sql);
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Женщины<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Худи</a></li>
                    <li><a href="#">Фуvтболки</a></li>
                    <li><a href="#">Брюки</a></li>
                    <li><a href="#">Обувь</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Мужчины<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Худи</a></li>
                    <li><a href="#">Футболки</a></li>
                    <li><a href="#">Брюки</a></li>
                    <li><a href="#">Обувь</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


<!-- 	<div>
		<div id="image-1"> </div>
		<div id="image-2"> </div>
	</div> -->



<!-- featured products -->

<div class="container-fluid">
    <h2 class="text-center">Специальные предложения</h2>
    <div class="row">
        <?php while($product = mysqli_fetch_assoc($featured)) : ?>
        <div class="col-md-3">
            <div id="container-text-product">
                <p> <?=$product['title']; ?> </p>
            </div>

            <div id="hover-details">
                <img src="images/<?=$product['image']; ?>" alt="<?=$product['title']; ?>" id="images"/>
                <div class="overlay"></div>
                <div class="button" ><a href="#"> ПОДРОБНЕЕ </a></div>
<!--                data-toggle="modal" data-target="#details-1"-->
            </div>
            <p class="price"><span class="discount-price text-danger" style="font-size:130%"><s>$<?=$product['price']; ?></s></span> $<?=round($product['price'] - ($product['price']*$product['discount_percent'])/100, 2); ?></p>
        </div>
        <?php endwhile; ?>
    </div>
</div>



<!--details modal-->
<?php include 'details-modal-JohnElliott-NikeAirForce.php';
include 'details-modal-Coat-Levis-JustinTimberlake.php';

?>

<!--end of details-->


</body>
</html>