<?php
require_once 'init.php';

$brands = $db->query("SELECT * FROM brand");
$categories = $db->query("SELECT * FROM category");

//checking if data has been entered
if ((isset($_POST['title']) && !empty($_POST['price'])) && (isset($_POST['discount_percent']) && !empty($_POST['sex'])) && !empty($_POST['description'])
    && (isset($_POST['category']) && !empty($_POST['brand'])) && $_FILES['image']) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $discount_percent = $_POST['discount_percent'];
    $sex = $_POST['sex'];
    $image1 = $_FILES['image']['name'][0];
    $image2 = $_FILES['image']['name'][1];
    $image3 = $_FILES['image']['name'][2];
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $description = $_POST['description'];
    if (($_POST['featured']) == 'yes') {
        $featured = "1";
    } else {
        $featured = "0";
    }
    $sql = "INSERT INTO products (title, price, discount_percent, brand, category, description, sex, `image-1`, `image-2`, `image-3`, featured)
 VALUES('$title','$price','$discount_percent','$brand','$category', '$description', '$sex', '$image1', '$image2', '$image3', '$featured')";

    $result = $db->query($sql);

    if ($result == true) {
        echo "Информация занесена в базу данных";
    } else {
        echo "Информация не занесена в базу данных";
    }
}
?>