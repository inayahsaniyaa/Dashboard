<?php

include_once 'pages/koneksi.php';

if (isset($_POST['hapus'])) {

    $id = $_POST['id'];

    $query = "DELETE FROM produk WHERE id = '$id'";

    mysqli_query($connect, $query);

    header('Location: index.php?pages=products');
    exit;
}

?>