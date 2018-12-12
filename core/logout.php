<?php

session_start();

unset($_SESSION["user_name"]);
unset($_SESSION["user_id"]);

header("Location: http://localhost:8015/ecommerce/index.php");