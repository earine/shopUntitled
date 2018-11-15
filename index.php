<?php
    require_once 'core/init.php';
include('header.php');
$featured = $db->query("SELECT * FROM products WHERE featured = 1");
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
    <link href="css/navigation-bar.css?v=1.0" rel="stylesheet" type="text/css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/dropdown-menu.js" type="text/javascript"></script>
</head>
<body>


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