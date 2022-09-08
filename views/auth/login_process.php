<?php

$email      = mysqli_real_escape_string($conn, $_POST['email']);
$password   = mysqli_real_escape_string($conn, md5($_POST['password']));

// check user
$check_user = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");

if ($check_user->num_rows) {
    $expired = time() + 60 * 60 * 24 * 10;
    setcookie("login", "true", $expired);
    setcookie("uid", mysqli_fetch_array($check_user)['id_user'], $expired);

    alert("Berhasil Login");
    redirect("admin");
} else {
    alert("Email / Password Salah");
    redirect("index.php");
}
