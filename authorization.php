<?php
session_start();

require_once 'core/init.php';
include('header.php');
//include('core/login.php');

if (isset($_POST['login'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Getting submitted user data from database
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = $db->query("SELECT * FROM user WHERE email = '$email' AND password = '$password'");
        $user = $result->fetch_object();

        // Verify user password and set $_SESSION

        $_SESSION['user_name'] = $user->firstname;

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


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Вход в систему</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/navigation-bar.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="css/authorization.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/dropdown-menu.js" type="text/javascript"></script>
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/inputmask.js"></script>-->
    <script src="js/jquery.mask.js"></script>

    <!--    <script src="js/validation.js" type="text/javascript"></script>-->
</head>

<body>

<div class="container">
    <div class="account account-personal">
        <div class="centered row">
            <h1>Вход в систему</h1>
            <div class="blocks">
                <form name="register-form" action="" method="post"
                      enctype="multipart/form-data"
                      class="block" onkeyup='check();'>
                    <div class="row">

                        <label for="email">E-Mail:</label>
                        <input id="email" type="email" name="email" value="">
                        <!--                        </div>-->
                    </div>
                    <div class="row">
                        <label for="password">Пароль:</label>
                        <input id="password" type="password" name="password" value="">
                    </div>

                    <hr>

                    <div class="row">

                        <button type="submit" name="login" class="btn btn-orange">
                            Войти
                        </button>

                    </div>

                    <div class="row" id="reg-link">
                        <a href="register.php">Нет аккаунта? Создать аккаунт</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>