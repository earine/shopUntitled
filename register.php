<?php
require_once 'core/init.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>UNTITLED</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/register.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="css/navigation-bar.css?v=1.0" rel="stylesheet" type="text/css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/dropdown-menu.js" type="text/javascript"></script>
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
    <div class="container">
        <a href="index.php" class="navbar-brand" id="brandbar">UNTITLED</a>
        <ul class="nav navbar-nav">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Женщины<b class="caret"></b></a>

                <ul class="dropdown-menu mega-menu">

                    <li class="mega-menu-column">
                        <ul>
                            <li class="nav-header">Одежда</li>
                            <img src="images/champion-reverse-weave-down-red-01-1.jpg">
                            <?php while ($category = mysqli_fetch_assoc($female_clothes)) : ?>
                                <li class="category">
                                    <a href="product-list.php?id=<?php echo $category['id']; ?>&gender=<?php echo urlencode('f') ?>"><?= $category['category'] ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </li>

                    <li class="mega-menu-column">
                        <ul>
                            <li class="nav-header">Обувь</li>
                            <img src="images/dr-martens-1460-smooth-black-1.jpg">
                            <?php while ($category = mysqli_fetch_assoc($female_shoes)) : ?>
                                <li class="category">
                                    <a href="product-list.php?id=<?php echo $category['id']; ?>&gender=<?php echo urlencode('f') ?>"><?= $category['category'] ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </li>

                    <li class="mega-menu-column">
                        <ul>
                            <li class="nav-header">Аксессуары</li>
                            <img src="images/adidas-backpack-originals-eqt-item1.png">
                            <?php while ($category = mysqli_fetch_assoc($female_accessories)) : ?>
                                <li class="category">
                                    <a href="product-list.php?id=<?php echo $category['id']; ?>&gender=<?php echo urlencode('f') ?>"><?= $category['category'] ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </li>

                </ul><!-- dropdown-menu -->

            </li><!-- /.dropdown -->


            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Мужчины<b class="caret"></b></a>

                <ul class="dropdown-menu mega-menu">

                    <li class="mega-menu-column">
                        <ul>
                            <li class="nav-header">Одежда</li>
                            <img src="images/nike-windrunner-jacket-item-1.jp2">
                            <?php while ($category = mysqli_fetch_assoc($male_clothes)) : ?>
                                <li class="category">
                                    <a href="product-list.php?id=<?php echo $category['id']; ?>&gender=<?php echo urlencode('m') ?>"><?= $category['category'] ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </li>

                    <li class="mega-menu-column">
                        <ul>
                            <li class="nav-header">Обувь</li>
                            <img src="images/nike-air-max-97-qs-black-varsity-red-metallic-silver-white-1.jpg">
                            <?php while ($category = mysqli_fetch_assoc($male_shoes)) : ?>
                                <li class="category">
                                    <a href="product-list.php?id=<?php echo $category['id']; ?>&gender=<?php echo urlencode('m') ?>"><?= $category['category'] ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </li>

                    <li class="mega-menu-column">
                        <ul>
                            <li class="nav-header">Аксессуары</li>
                            <img src="images/champion-reverse-weave-merino-knit-beanie-logo-navy-1.jpg">
                            <?php while ($category = mysqli_fetch_assoc($male_accessories)) : ?>
                                <li class="category">
                                    <a href="product-list.php?id=<?php echo $category['id']; ?>&gender=<?php echo urlencode('m') ?>"><?= $category['category'] ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </li>

                </ul><!-- dropdown-menu -->

            </li><!-- /.dropdown -->
        </ul>


        <!-- ##### Right Side Cart Area ##### -->

        <div class="right-side-area">
            <!-- User Login Info -->
            <div class="col-md-6">
                <a href="register.php"><img src="images/elements/account-icon.png" alt=""></a>
            </div>
            <!-- Cart Area -->
            <div class="col-md-6">
                <a href="cart.php"><img src="images/elements/shopping-cart.png" alt=""></a>
            </div>
        </div>
        <!-- ##### Right Side Cart End ##### -->
    </div>
</nav>

<div class="container">
    <div class="account account-personal">
        <div class="centered row">
            <h1>Регистрация</h1>


            <script src="/catalog/view/theme/default/javascript/jquery/jquery.inputmask.js"
                    type="text/javascript"></script>

            <div class="blocks">
                <form action="https://brandshop.ru/register/" method="post" id="register-form"
                      enctype="multipart/form-data"
                      class="block">
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
                            <input id="phone" type="tel" name="telephone" value=""
                                   data-inputmask="'mask': '+7(999)999-99-99'">
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

                    <div class="row">
                        <div class="col-100">&nbsp;</div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-20">
                            <button type="submit" class="btn btn-orange" title="Продолжить">Продолжить</button>
                        </div>
                        <div class="col-60">
                            <p class="entry_policy">Нажимая на кнопку «Продолжить», Вы даете компании ООО «БШ Стор» своё
                                письменное <a href="/doc/consent_to_the_processing_of_personal_data.pdf"
                                              target="_blank">Согласие
                                    на обработку моих персональных данных</a>, соглашаетесь с <a href="/oferta/">Пользовательским
                                    соглашением</a> и <a href="/privacy/">Политикой о конфиденциальности</a>.</p>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>