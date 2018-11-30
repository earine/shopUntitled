<?php
require_once 'core/init.php';
//include('header.php');
include('core/addproducts.php');

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>UNTITLED</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/dashboard.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/dropdown-menu.js" type="text/javascript"></script>

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="home"></span>
                            Главная страница <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="addproducts.php">
                            <span data-feather="products"></span>
                            Добавление товаров
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userlist.php">
                            <span data-feather="users"></span>
                            Пользователи
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Заказы
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            <div class="account account-personal">
                <div class="centered row">
                    <div class="blocks">
                        <form action="addproducts.php" method="post" id="register-form"
                              enctype="multipart/form-data"
                              class="block">
                            <div class="row">
                                <div class="col-40">
                                    <label for="title">Название</label>
                                    <input id="title" type="text" name="title">
                                </div>
                                <div class="col-20 col-offset-5">
                                    <label for="sex">Пол</label>
                                    <select name="sex">
                                        <option value="u" selected>Унисекс</option>
                                        <option value="m">Мужской</option>
                                        <option value="f">Женский</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-35">
                                    <label for="price">Цена:</label>
                                    <input id="price" type="number" name="price" value="">
                                </div>
                                <div class="col-35 col-offset-5">
                                    <label for="discount_percent">Процент скидки:</label>
                                    <input id="discount_percent" type="number" name="discount_percent" value="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-35">
                                    <label for="brand">Бренд:</label>
                                    <select name="brand">
                                        <?php mysqli_data_seek($brands, 0);
                                        while ($brand = mysqli_fetch_assoc($brands)) : ?>
                                            <option value="<?= $brand['id']; ?>"><?= $brand['brand_name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <div class="col-35 col-offset-5">
                                    <label for="category">Категория:</label>
                                    <select name="category">
                                        <?php mysqli_data_seek($categories, 0);
                                        while ($category = mysqli_fetch_assoc($categories)) : ?>
                                            <option value="<?= $category['id']; ?>"><?= $category['category']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-80">
                                    <label for="description">Описание:</label>
                                    <input id="description" type="text" name="description" value="">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-35">
                                    <label for="image">Фото(выберите 3 изображения товара):</label>
                                    <input id="image" type="file" name="image[]" multiple>
                                </div>
                                <div class="col-35 col-offset-5">
                                    <label for="featured">Специальное предложение:</label>
                                    <input id="featured" type="checkbox" name="featured" value="yes">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-20">
                                    <button type="submit" id="submit" class="btn btn-orange" title="Добавить">
                                        Добавить
                                    </button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


<!---->
<!--<div class="container">-->

<!--</div>-->

</body>
</html>