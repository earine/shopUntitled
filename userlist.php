<?php
require_once 'core/init.php';
//include('header.php');
include('core/addproducts.php');

$sql = "SELECT * FROM user WHERE role = 'customer'";

$result = $db->query($sql);

$i = 0;

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
                        <a class="nav-link" href="index.php">
                            <span data-feather="home"></span>
                            Главная страница <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addproducts.php">
                            <span data-feather="products"></span>
                            Добавление товаров
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="userlist.php">
                            <span data-feather="users"></span>
                            Пользователи
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orderlist.php">
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
                        <table class="table">
                            <thead>
                            <tr class="table-warning">
                                <th scope="col"></th>
                                <th scope="col">Имя</th>
                                <th scope="col">Фамилия</th>
                                <th scope="col">Email</th>
                                <th scope="col">Номер телефона</th>
                            </tr>
                            </thead>
                            <?php
                            while ($user = mysqli_fetch_assoc($result)) : ?>
                                <tr>
                                    <td scope="row"><?= $i = $i + 1; ?></td>
                                    <td class="invert"><?= $user['firstname']; ?></td>
                                    <td class="invert"><?= $user['lastname']; ?></td>
                                    <td class="invert"><?= $user['email']; ?></td>
                                    <td class="invert"><?= $user['phone']; ?></td>
                                </tr>
                            <?php endwhile; ?>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>