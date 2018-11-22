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
                <li class="dropdown" style="margin-top: -20px;">
                    <a href="authorization.php"><img src="images/elements/account-icon.png" alt=""></a>
                    <!--                    <div class="dropdown-menu" id="user-login-inf">-->
                    <!--                        <form class="form-horizontal"  method="post" accept-charset="UTF-8">-->
                    <!--                            <label>Адрес почтовой почты</label>-->
                    <!--                            <input id="email" class="form-control login" type="text" name="email" />-->
                    <!--                            <label>Пароль</label>-->
                    <!--                            <input id="password" class="form-control login" type="password" name="password"/>-->
                    <!--                            <input class="btn btn-primary" id="btn-login" type="submit" name="login" value="Войти" />-->
                    <!--                            <a href="register.php">Создать аккаунт</a>-->
                    <!--                        </form>-->
                    <!--                    </div>-->
                </li>
            </div>
            <!-- Cart Area -->
            <div class="col-md-6">
                <a href="cart.php"><img src="images/elements/shopping-cart.png" alt=""></a>
            </div>
        </div>
        <!-- ##### Right Side Cart End ##### -->
    </div>
</nav>