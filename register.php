<?php
require_once 'core/init.php';
include('header.php');
include('core/singup.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/navigation-bar.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="css/register.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/dropdown-menu.js" type="text/javascript"></script>
    <script src="js/jquery.mask.js"></script>
</head>

<body>


<script>
    $(document).ready(function () {
        $('input[name="telephone"]').mask('+38 (000) 000 00 00', {placeholder: "+__ (___) ___ __ __"});
    });

    function check() {
        var confirmedPassword = false;
        var notEmptyFields = false;

        if (document.getElementById('password-try').value === document.getElementById('confirm-password').value) {
            confirmedPassword = true;
            document.getElementById('warning-not-matching-pass').innerHTML = '';
        } else {
            document.getElementById('warning-not-matching-pass').style.color = 'red';
            document.getElementById('warning-not-matching-pass').innerHTML = 'Пароли не совпадают';
            document.getElementById('submit').disabled = true;
            confirmedPassword = false;
        }

        if ((document.getElementById('firstname').value === "") || (document.getElementById('lastname').value === "")
            || (document.getElementById('email-reg').value === "") || (document.getElementById('phone').value === "") ||
            (document.getElementById('password-try').value === "")) {
            notEmptyFields = false;
            document.getElementById('submit').disabled = true;
            document.getElementById('warning-emptyfields').style.color = 'red';
            document.getElementById('warning-emptyfields').innerHTML = 'Пустые поля';
        } else {
            notEmptyFields = true;
        }

        //
        if ((confirmedPassword === true) && (notEmptyFields === true)) {
            document.getElementById('submit').disabled = false;
            document.getElementById('warning-not-matching-pass').innerHTML = '';
            document.getElementById('warning-emptyfields').innerHTML = '';
        }
    }

</script>

<div class="container">
    <div class="account account-personal">
        <div class="centered row">
            <h1>РЕГИСТРАЦИЯ</h1>
            <h4 id="warning-emptyfields"></h4>
            <h4 id="warning-not-matching-pass"></h4>
            <div class="blocks">
                <form name="register-form" action="register.php" method="post" id="register-form"
                      enctype="multipart/form-data"
                      class="block" onkeyup='check();'>
                    <div class="row">
                        <div class="col-35">
                            <label for="firstname">Имя</label>
                            <input id="firstname" type="text" name="firstname" value="">
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
                            <input id="email-reg" type="email" name="email" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-35">
                            <label for="password">Пароль:</label>
                            <input id="password-try" type="password" name="password" value="">
                        </div>
                        <div class="col-35 col-offset-5">
                            <label for="confirm">Подтверждение пароля:</label>
                            <input id="confirm-password" type="password" name="confirm" value="">
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
                                письменное Согласие на обработку моих персональных данных, соглашаетесь с
                                Пользовательским
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