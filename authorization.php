<?php

require_once 'core/init.php';
include('header.php');
include('core/login.php');

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


    <?php if (!isset($_SESSION['user_name'])) { ?>
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
    <? } else { ?>
        <nav class="col-md-4 sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="home"></span>
                            Главная страница <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userOrders.php">
                            <span data-feather="products"></span>
                            Заказы
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="core/logout.php">
                            <span data-feather="users"></span>
                            Выйти из аккаунта
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

        <main role="main" class="col-md-8">
            <h1>Здравствуйте, <? echo $_SESSION["user_name"] ?></h1>

            <? $id = $_SESSION["user_id"];
            $sql = "SELECT * FROM user WHERE id = '$id'";
            $orders_count = "SELECT COUNT(o.id) as OrdersCount FROM user u, orders o WHERE u.id = '$id' AND o.user_id = u.id";
            $result = $db->query($sql);
            $orders_count = $db->query($orders_count);

            ?>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-radius: 16px; padding-top: 30px">
                    <div class="well profile col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <? while (($user = mysqli_fetch_array($result))) : ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <h3 style="text-align:center;"><strong id="user-name">
                                        <?= $user['firstname'], " ", $user['lastname'] ?>
                                    </strong>
                                </h3>
                                <p style="text-align:center;font-size: smaller;" id="user-frid">
                                    +<?= $user['phone'] ?></p>
                                <p style="text-align:center;font-size: smaller;overflow-wrap: break-word;"
                                   id="user-email"><?= $user['email'] ?></p>
                                <p style="text-align:center;font-size: smaller;"><strong>Статус: </strong><span
                                            class="tags" id="user-status">Active</span></p>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divider text-center"></div>
                                <div class="col-lg-6 left" style="text-align:center;overflow-wrap: break-word;">
                                    <h4><p style="text-align: center;"><strong id="user-globe-rank">
                                                <? while ($row = mysqli_fetch_assoc($orders_count))
                                                    echo $row['OrdersCount']
                                                ?>
                                            </strong></p></h4>
                                    <p>
                                        <small class="label label-success">Количество заказов</small>
                                    </p>
                                    <!--<button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>-->
                                </div>
                                <div class=" col-lg-6 left" style="text-align:center;overflow-wrap: break-word;">
                                    <h4><p style="text-align: center;"><strong id="user-date">
                                                <?= $user['reg_date'] ?>
                                            </strong></p></h4>
                                    <p>
                                        <small class="label label-warning">Дата регистрации</small>
                                    </p>
                                    <!-- <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>-->
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                </div>
            </div>


        </main>


    <? } ?>

</div>

</body>
</html>