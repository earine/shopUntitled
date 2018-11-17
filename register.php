<?php
require_once 'core/init.php';
include('header.php');


//checking if data has been entered
if ((isset($_POST['firstname']) && !empty($_POST['firstname'])) && (isset($_POST['lastname']) && !empty($_POST['lastname']))
    && (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['password']) && !empty($_POST['password'])) && (isset($_POST['telephone']) && !empty($_POST['telephone']))) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['telephone'];


//This should retrive HTML form data and insert into database
    $sql = "INSERT INTO user (firstname, lastname, email, password, phone) VALUES('$firstname','$lastname','$email','$password','$phone')";

    $result = $db->query($sql);
}


// close connection
mysqli_close($db);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/register.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="css/navigation-bar.css?v=1.0" rel="stylesheet" type="text/css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/dropdown-menu.js" type="text/javascript"></script>
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/inputmask.js"></script>-->
    <script src="js/jquery.mask.js"></script>

    <!--    <script src="js/validation.js" type="text/javascript"></script>-->
</head>
<body>
<script>
    $(document).ready(function () {
        $('input[name="telephone"]').mask('+00 (000) 000 00 00', {placeholder: "+__ (___) ___ __ __"});
        // $('input[name="email"]').mask("{1,20}@{1,20}.*{3}");
    });

    var check = function () {
        // var i = 0;
        // var text_fields = form.getElementsByTagName('input');


        if (document.getElementById('password').value == document.getElementById('confirm').value) {
            i = 1;
        } else {
            document.getElementById('warning-not-matching-pass').style.color = 'red';
            document.getElementById('warning-not-matching-pass').innerHTML = 'Пароли не совпадают';
            document.getElementById('submit').disabled = true;
        }

        if ((firstname.length === 0) || (lastname.length === 0) || (email.length === 0) || (password.length === 0) || (confirm.length === 0)) {
            document.getElementById('submit').disabled = true;
            document.getElementById('warning-emptyfields').style.color = 'red';
            document.getElementById('warning-emptyfields').innerHTML = 'Пустые поля';
        } else {
            i = 2;
        }

        //
        if (i === 2) {
            document.getElementById('submit').disabled = false;
        }
    };
</script>

<div class="container">
    <div class="account account-personal">
        <div class="centered row">
            <h1>РЕГИСТРАЦИЯ</h1>
            <h4 id="warning-emptyfields"></h4>
            <h4 id="warning-not-matching-pass"></h4>
            <div class="blocks">
                <form action="register.php" method="post" id="register-form"
                      enctype="multipart/form-data"
                      class="block" onkeyup='check();'>
                    <div class="row">
                        <div class="col-35">
                            <label for="firstname">Имя</label>
                            <input id="firstname" type="text" name="firstname">
                        </div>
                        <div class="col-35 col-offset-5">
                            <label for="lastname">Фамилия:</label>
                            <input id="lastname" type="text" name="lastname" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-35">
                            <label for="phone">Телефон:</label>
                            <input id="phone" type="tel" name="telephone">
                        </div>
                        <div class="col-35 col-offset-5">
                            <label for="email">E-Mail:</label>
                            <input id="email" type="email" name="email" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-35">
                            <label for="password">Пароль:</label>
                            <input id="password" type="password" name="password" value="">
                        </div>
                        <div class="col-35 col-offset-5">
                            <label for="confirm">Подтверждение пароля:</label>
                            <input id="confirm" type="password" name="confirm" value="">
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-20">
                            <button type="submit" id="submit" class="btn btn-orange" title="Продолжить" disabled>
                                Продолжить
                            </button>
                        </div>
                        <div class="col-60">
                            <p class="entry_policy">Нажимая на кнопку «Продолжить», Вы даете компании своё
                                письменное Согласие
                                на обработку моих персональных данных, соглашаетесь с Пользовательским
                                соглашением и Политикой о конфиденциальности.</p>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>