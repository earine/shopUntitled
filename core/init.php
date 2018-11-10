<?php
$db = mysqli_connect('127.0.0.1', 'root', '', 'UntitledShop');
$db->query("SET NAMES utf8");

if (mysqli_connect_error()) {
    echo "error";
    die();
}

?>