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
    <?php
    if (isset($_SESSION['cart'])) {
        if (($_SESSION['cart']) != null) {
            $items = $_SESSION['cart'];
            $cartitems = explode(",", $items);
            $cartitems_norepeat = array_unique($cartitems);
            ?> <h2>У вас в корзине <?php echo sizeof($cartitems) ?> единиц товара</h2>
            <?php if (count($cartitems) != 0) { ?>
                <div class="checkout-right">
                    <table class="table">
                        <thead>
                        <tr class="table-warning">
                            <th scope="col"></th>
                            <th scope="col">Товар</th>
                            <th scope="col">Название товара</th>
                            <th scope="col">Цена</th>
                            <th scope="col">Количество</th>
                            <th scope="col" style="text-align:center">Удалить</th>
                        </tr>
                        </thead>
                        <?php
                        $total = 0;
                        $i = 1;
                        foreach ($cartitems_norepeat as $key => $id) {
                            $sql = "SELECT * FROM products WHERE id = $id";
                            $res = mysqli_query($db, $sql);
                            $r = mysqli_fetch_assoc($res);
                            ?>
                            <tr>

                                <td scope="row"><?php echo $i; ?></td>
                                <td class="td-image"><img src="images/<?= $r['image-1']; ?>" alt=" "/>
                                </td>
                                <td class="invert"><?php echo $r['title']; ?></td>
                                <td class="invert">$<?php echo $r['price']; ?></td>
                                <td class="invert" style="text-align:center"><?php
                                    $counts = array_count_values($cartitems);
                                    echo $counts[$id];
                                    ?> </td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="close1"><a href="core/delcart.php?remove=<?php echo $key; ?>">
                                                <img src="images/elements/close.png">
                                            </a></div>
                                    </div>
                                </td>

                            </tr>
                            <?php
                            $i++;
                        }
                        ?>

                    </table>
                </div>
                <div class="checkout-left">
                    <div class="checkout-left-basket">
                        <h4>Итого</h4>

                        <ul>
                            <?php
                            $k = 1;
                            foreach ($cartitems_norepeat as $key => $id) {
                                $sql = "SELECT * FROM products WHERE id = $id";
                                $res = mysqli_query($db, $sql);
                                $r = mysqli_fetch_assoc($res);
                                ?>
                                <li>Товар <?php echo $k; ?>: <?php echo $r['title']; ?>
                                    x <?php echo $counts[$id]; ?>
                                    <span><?php echo $counts[$id] * $r['price']; ?> </span></li>
                                <?php
                                if (is_numeric($r['price']) && is_numeric($total)) {
                                    $total = $total + $counts[$id] * $r['price'];
                                } else {
                                    $total = 0;
                                }
                                $k++;
                            }
                            ?>
                            <li class="total" style="color: #212121;">СУММА<span>$<?php echo $total; ?></span></li>
                        </ul>
                    </div>
                    <div class="checkout-right-basket">
                        <a href="succesfulOrder.php?total=<?php echo $total ?>>">Оформить заказ</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <?php
            }
        } else
            echo "<h2>Ваша корзина пустая :(</h2>";
    } else
        echo "<h2>Ваша корзина пустая :(</h2>";
    ?>

</div>


</body>
</html>