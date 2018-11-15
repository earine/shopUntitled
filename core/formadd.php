<?php
require_once 'init.php';

if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
}
if (isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
}


if (isset($_POST['submit'])) {
    $query = "INSERT INTO user (firstname, lastname, email, password, phone) VALUES('$firstname','$lastname','$email','$password','$phone')";
    $result = $db->query($query);
    print "Added.";
    if (!$db) {
        echo mysqli_error();
    }
} else {
    echo "ffdsfsdfds";
}
?>