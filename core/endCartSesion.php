<?php
if (isset($_GET['total']) & !empty($_GET['total'])) {
    $user = $_SESSION["user_id"];
    $total = $_GET['total'];
    $sql = "INSERT INTO orders (user_id, price) VALUES('$user','$total')";
    $result = $db->query($sql);

    $order = $db->insert_id;

    $items = $_SESSION['cart'];
    $cartitems = explode(",", $items);
    $counts = array_count_values($cartitems);
    $cartitems_norepeat = array_unique($cartitems);


    foreach ($cartitems_norepeat as $key => $id) {
        $sql = "SELECT * FROM products WHERE id = $id";
        $res = mysqli_query($db, $sql);
        $r = mysqli_fetch_assoc($res);

        $product_id = $r['id'];
        $count = $counts[$id];

        $add = "INSERT INTO products_orders (product_id, order_id, count)
 VALUES ('$product_id', '$order', '$count')";

        $result = $db->query($add);

    }

    unset($_SESSION["cart"]);
}

