<?php

//checking if data has been entered
if ((isset($_POST['firstname']) && !empty($_POST['firstname'])) && (isset($_POST['lastname']) && !empty($_POST['lastname']))
    && (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['password']) && !empty($_POST['password'])) && (isset($_POST['telephone']) && !empty($_POST['telephone']))) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['telephone'];
    $date = date('Y-m-d');

//This should retrive HTML form data and insert into database
    $sql = "INSERT INTO user (firstname, lastname, email, password, phone, reg_date) VALUES('$firstname','$lastname','$email','$password','$phone', '$date')";

    $result = $db->query($sql);
}
?>