<?php
require_once 'core/init.php';
//include('header.php');
include('core/addproducts.php');

$sql = "SELECT o.id, o.price, u.firstname, u.lastname, u.phone FROM orders o, user u WHERE o.user_id = u.id";

$result = $db->query($sql);

$i = 0;

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>UNTITLED</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/dashboard.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/dropdown-menu.js" type="text/javascript"></script>

</head>
<body>

<!--<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">-->
<!--    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>-->
<!--    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
<!--    <ul class="navbar-nav px-3">-->
<!--        <li class="nav-item text-nowrap">-->
<!--            <a class="nav-link" href="#">Sign out</a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</nav>-->

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <span data-feather="home"></span>
                            Главная страница <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addproducts.php">
                            <span data-feather="products"></span>
                            Добавление товаров
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="userlist.php">
                            <span data-feather="users"></span>
                            Пользователи
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="orderlist.php">
                            <span data-feather="users"></span>
                            Заказы
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            <div class="account account-personal">
                <div class="centered row">
                    <div class="blocks">
                        <table class="table">
                            <thead>
                            <tr class="table-warning">
                                <th scope="col"></th>
                                <th scope="col">Номер заказа</th>
                                <th scope="col">Клиент</th>
                                <th scope="col">Товар</th>
                                <th scope="col">Сумма</th>
                                <th scope="col">Телефон</th>
                            </tr>
                            </thead>
                            <?php
                            while ($order = mysqli_fetch_assoc($result)) : ?>
                                <tr>
                                    <td scope="row"><?= $i = $i + 1; ?></td>
                                    <td class="invert"><?= $order['id']; ?></td>
                                    <td class="invert"><?= $order['lastname']; ?> <?= $order['firstname']; ?></td>
                                    <td class="invert">
                                        <?php
                                        $id = $order['id'];
                                        $thissql = "SELECT p.title FROM orders o, products p, products_orders po WHERE o.id = '$id' AND
                                                                                                       po.order_id = o.id AND
                                                                                                       po.product_id = p.id";
                                        $thisresult = $db->query($thissql);
                                        while ($product = mysqli_fetch_assoc($thisresult)) : ?>
                                            <? echo $product['title']; ?>
                                            <br>
                                        <?php endwhile; ?>
                                    </td>

                                    <td class="invert"><?= $order['price']; ?></td>
                                    <td class="invert"><?= $order['phone']; ?></td>
                                </tr>
                            <?php endwhile; ?>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


<!---->
<!--<div class="container">-->

<!--</div>-->

</body>
</html>