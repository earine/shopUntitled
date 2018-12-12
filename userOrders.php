<?php

require_once 'core/init.php';
include('header.php');
include('core/login.php');

$id = $_SESSION['user_id'];

$sql = "SELECT * FROM orders o WHERE o.user_id = '$id' ";

$result = $db->query($sql);


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Вход в систему</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/navigation-bar.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="css/authorization.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/dropdown-menu.js" type="text/javascript"></script>
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/inputmask.js"></script>-->
    <script src="js/jquery.mask.js"></script>

    <!--    <script src="js/validation.js" type="text/javascript"></script>-->
</head>

<body>

<div class="container">

    <nav class="col-md-4 sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link " href="authorization.php">
                        <span data-feather="home"></span>
                        Главная страница <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="userOrders.php">
                        <span data-feather="products"></span>
                        Заказы
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="core/logout.php">
                        <span data-feather="users"></span>
                        Выйти из аккаунта
                    </a>
                </li>
            </ul>

        </div>
    </nav>

    <main role="main" class="col-md-8">
        <h1>Ваши заказы</h1>

        <div class="centered row">
            <div class="orders-blocks">
                <?php
                while ($order = mysqli_fetch_assoc($result)) : ?>
                    <div class="order-block">

                        <h3>Заказ #<?= $order['id']; ?></h3>
                        <table class="table">
                            <thead>
                            <tr class="table-warning">
                                <th></th>
                                <th scope="col" class="name-prod">Название товара</th>
                                <th scope="col">Бренд</th>
                                <th scope="count" style="text-align:center">Количество</th>
                                <th scope="col" style="text-align:center">Цена</th>
                            </tr>
                            </thead>
                            <? $id = $order['id'];
                            $sql = "SELECT p.title, b.brand_name, p.price, po.count, p.`image-1` FROM orders o, products_orders po, products p, brand b WHERE o.id = po.order_id
AND po.product_id = p.id AND o.id = '$id' AND b.id = p.brand;";
                            $product_result = $db->query($sql);
                            while ($product = mysqli_fetch_assoc($product_result)) :
                                ?>
                                <tr>
                                    <td class="td-image"><img src="images/<?= $product['image-1']; ?>" alt=" "/>
                                    <td class="name-prod"><?= $product['title']; ?></td>
                                    <td class="invert"><?= $product['brand_name']; ?></td>
                                    <td class="count" style="text-align:center">
                                        <?= $product['count']; ?>
                                    </td>

                                    <td class="invert"
                                        style="text-align:center">$<?= $product['count'] * $product['price']; ?></td>
                                </tr>
                            <?php
                            endwhile; ?>
                        </table>
                    </div>

                <?php
                endwhile; ?>

            </div>

    </main>

</div>

</body>
</html>