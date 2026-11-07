<?php

include 'pages/koneksi.php';

if (isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $gambar = $_POST['gambar'];

    $query = "UPDATE produk SET
        nama_produk = '$nama_produk',
        harga = '$harga',
        stok = '$stok',
        kategori = '$kategori',
        gambar = '$gambar'
        WHERE id = '$id'";

    mysqli_query($connect, $query);

    header('Location: index.php?pages=products');
    exit;
}

?>