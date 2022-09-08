<?php

$first_name = $_POST['first_name'];
$last_name  = $_POST['last_name'];
$email      = mysqli_real_escape_string($conn, $_POST['email']);
$password   = mysqli_real_escape_string($conn, md5($_POST['password']));
$born       = $_POST['born'];
$gender     = $_POST['gender'];
$created_at = date('Y-m-d H:i:s');

// check if existing email
$get_user_by_email = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

if ($get_user_by_email->num_rows) {
    alert("Email sudah digunakan");
    redirect('index.php?page=register');                                     
} else {
    $query = mysqli_query($conn, "INSERT INTO users VALUE('', '$first_name', '$last_name', '$email', '$password', '$born', '$gender', NULL, '$created_at')");
    // var_dump($conn->error); die;
    alert("Registrasi Berhasil, Kami akan mengalihkan anda ke halaman login");
    redirect('index.php');
}
