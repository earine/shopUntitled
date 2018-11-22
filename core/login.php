<?php
//Если форма авторизации отправлена...
if (!empty($_POST['log-email']) and !empty($_POST['log-password'])) {
    //Пишем логин и пароль из формы в переменные (для удобства работы):
    $email = $_POST['log-email'];
    $password = $_POST['log-password'];

    /*
        Формируем и отсылаем SQL запрос:
        ВЫБРАТЬ ИЗ таблицы_users ГДЕ поле_логин = $login И поле_пароль = $password.
    */
    $query = 'SELECT * FROM user WHERE email="' . $email . '" AND password="' . $password . '"';
    $result = $db->query($query); //ответ базы запишем в переменную $result.
    $user = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP

    //Если база данных вернула не пустой ответ - значит пара логин-пароль правильная
    if (!empty($user)) {

        //Стартуем сессию:
        session_start();

        //Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true;

        //Пишем в сессию логин и id пользователя (их мы берем из переменной $user!):
        $_SESSION['id'] = $user['id'];

        echo "fdfdfd";

    } else {
        echo "pizda";
    }
}

?>