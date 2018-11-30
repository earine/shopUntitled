<?php
require_once 'core/init.php';
include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Корзина</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/cart.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="css/navigation-bar.css?v=1.0" rel="stylesheet" type="text/css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/dropdown-menu.js" type="text/javascript"></script>
</head>
<body>


<!-- checkout -->

<div class="container-fluid">
    <h2>У вас в корзине 2 товара</h2>

    <div class="checkout-right">
        <table class="table">
            <thead>
            <tr class="table-warning">
                <th scope="col"></th>
                <th scope="col">Товар</th>
                <th scope="col">Название товара</th>
                <th scope="col">Цена</th>
                <th scope="col">Удалить</th>
            </tr>
            </thead>
            <tr>
                <td scope="row">1</td>
                <td class="td-image"><img src="images/the-north-face-salty-dog-beanie-mid-grey-tin-grey-1.jpg" alt=" "/>
                </td>
                <td class="invert">Шапка The North Face</td>
                <td class="invert">$20.99</td>
                <td class="invert">
                    <div class="rem">
                        <div class="close1"><img src="images/elements/close.png"></div>
                    </div>
                </td>
            </tr>

            <tr>
                <td scope="row">2</td>
                <td class="td-image"><img src="images/nike-windrunner-jacket-item-1.jp2" alt=" "/></td>
                <td class="invert">Куртка-ветровка Nike</td>
                <td class="invert">$90.00</td>
                <td class="invert">
                    <div class="rem">
                        <div class="close1"><img src="images/elements/close.png"></div>
                    </div>
                </td>
            </tr>

        </table>
    </div>
    <div class="checkout-left">
        <div class="checkout-left-basket">
            <h4>Итого</h4>
            <ul>
                <li>Товар 1 <span>$20.99 </span></li>
                <li>Товар 2<span>$90.00 </span></li>
                <li class="total" style="color: #212121;">Сумма<span>$110.99</span></li>
            </ul>
        </div>
        <div class="checkout-right-basket">
            <a href="succesfulOrder.php">Оформить заказ</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


</body>
</html>