<?php
session_start();

$id = $_GET['id'];

if (isset($_GET['id']) & !empty($_GET['id'])) {
    if (isset($_SESSION['cart']) & !empty($_SESSION['cart'])) {
        $items = $_SESSION['cart'];
        $cartitems = explode(",", $items);

//        if (in_array($_GET['id'], $cartitems)) {
//        } else {
        $items .= "," . $_GET['id'];
        $_SESSION['cart'] = $items;
//        }

    } else {
        $items = $_GET['id'];
        $_SESSION['cart'] = $items;
    }

} else {
}

header("Location: http://localhost:8015/ecommerce/details.php?id=$id");