<?php

$description = $_POST['description'];
$user_id = user()->id_user;
$created_at = date('Y-m-d H:i:s');

if ($_FILES['image']['name']) {
    $target_dir = "../assets/img/posts/";
    $target_path = $target_dir . basename($_FILES['image']['name']);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
        $filename = basename($_FILES['image']['name']);
    } else {
        alert("Gagal Upload Gambar");
        redirect("index.php");
    }
} else {
    $filename = NULL;
}

$query = mysqli_query($conn, "INSERT INTO posts VALUE('', '$user_id', '$description', '$filename', '$created_at')");

if ($query) {
    alert("Postingan berhasil dibuat");
    redirect("index.php");
} else {
    alert("Kesalahan Saat Memposting");
    redirect("index.php");
}
