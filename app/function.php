<?php

date_default_timezone_set("Asia/Jakarta");

session_start();

function base_url($url = '')
{
    return "http://localhost/facetook/" . $url;
}

function alert($message)
{
    echo "<script>alert('" . $message . "');</script>";
}

function redirect($redirect)
{
    echo "<script>window.location.href='" . $redirect . "'</script>";
}

function profile_picture($picture)
{
    if ($picture == NULL) {
        return base_url("assets/img/users/default.png");
    } else {
        return base_url("assets/img/users/" . $picture);
    }
}

function user()
{
    include '../app/db.php';

    if ($_COOKIE['login']) {
        $id = $_COOKIE['uid'];
        $query = mysqli_query($conn, "SELECT * FROM users WHERE id_user = '$id'");
    }

    return mysqli_fetch_object($query);
}

function fullname()
{
    return user()->first_name . ' ' . user()->last_name;
}

function assets($url = '')
{
    return base_url("assets/" . $url);
}
