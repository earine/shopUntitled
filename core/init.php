<?php
$db = mysqli_connect('127.0.0.1', 'root', '', 'UntitledShop');
$db->query("SET NAMES utf8");

if (mysqli_connect_error()) {
    echo "error";
    die();
}


$female_clothes = $db->query("SELECT * FROM category WHERE gender IN('f', 'u') AND type =  1");
$female_shoes = $db->query("SELECT * FROM category WHERE gender IN('f', 'u') AND type =  2");
$female_accessories = $db->query("SELECT * FROM category WHERE gender IN('f', 'u') AND type = 3");
$male_clothes = $db->query("SELECT * FROM category WHERE gender IN('m', 'u') AND type =  1");
$male_shoes = $db->query("SELECT * FROM category WHERE gender IN('m', 'u') AND type =  2");
$male_accessories = $db->query("SELECT * FROM category WHERE gender IN('m', 'u') AND type =  3");


?>