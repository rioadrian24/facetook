<?php

$id = $_GET['id'];

$query1 = mysqli_query($conn, "SELECT * FROM posts WHERE id_post = '$id'");
$post = mysqli_fetch_array($query1);

if ($post['image'] != NULL) {
    unlink("../assets/img/posts/" . $post['image']);
}

$query2 = mysqli_query($conn, "DELETE FROM posts WHERE id_post = '$id'");

if ($query2) {
    alert('Postingan berhasil dihapus');
    redirect('index.php');
} else {
    alert('Postingan gagal dihapus');
    redirect('index.php');
}
