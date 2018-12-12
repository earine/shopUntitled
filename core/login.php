<?php
if (isset($_POST['login'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Getting submitted user data from database
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = $db->query("SELECT * FROM user WHERE email = '$email' AND password = '$password'");
        $user = $result->fetch_object();
        // Verify user password and set $_SESSION

        $_SESSION['user_name'] = $user->firstname;
        $_SESSION['user_id'] = $user->id;
        if ($user->role == 'admin') {
            echo '<script type="text/javascript">
            window.location = "addproducts.php";
            </script>';
        } else {
            echo '<script type="text/javascript">
              window.location = "index.php";
            </script>';
        }
    }
}

?>