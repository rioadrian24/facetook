<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : '';

switch ($page) {
    case 'register':
        include "views/auth/register.php";
        break;

    case 'register_process':
        include "views/auth/register_process.php";
        break;

    case 'login_process':
        include "views/auth/login_process.php";
        break;

    case 'logout':
        include "views/auth/logout.php";
        break;

    default:
        include "views/home.php";
        break;
}
