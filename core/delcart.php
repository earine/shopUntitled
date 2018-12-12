<?php
session_start();

$items = $_SESSION['cart'];
$cartitems = explode(",", $items);

if (isset($_GET['remove'])) {
    $delitem = $_GET['remove'];
    unset($cartitems[$delitem]);
    $itemids = implode(",", $cartitems);
    $_SESSION['cart'] = $itemids;
    header("Location: http://localhost:8015/ecommerce/cart.php");
} else {
    echo "sdadasd";
}
//header("Location: http://localhost:8015/ecommerce/cart.php");