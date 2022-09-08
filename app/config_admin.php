<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : '';

switch ($page) {
    case 'post_process':
        include "../views/admin/post/post_process.php";
        break;

    case 'post_delete':
        include "../views/admin/post/post_delete.php";
        break;

    default:
        include "../views/admin/index.php";
        break;
}
