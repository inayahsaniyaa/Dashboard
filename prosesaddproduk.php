<?php
include __DIR__ . '/pages/koneksi.php';

if (isset($_POST['simpan'])) {

    $produk   = $_POST["namaproduk"];
    $harga    = (int) $_POST["harga"];
    $stock    = (int) $_POST["stok"];
    $kategori = $_POST["kategori"];

    $gambar = basename($_FILES["gambar"]["name"]);
    $tmp    = $_FILES["gambar"]["tmp_name"];

    if (!empty($gambar)) {
        move_uploaded_file($tmp, __DIR__ . "/uploads/" . $gambar);
    }

    try {
        // id tidak diisi: biarkan AUTO_INCREMENT yang mengisi
        $stmt = mysqli_prepare($connect,
            "INSERT INTO produk (nama_produk, harga, stok, gambar, kategori) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "siiss", $produk, $harga, $stock, $gambar, $kategori);
        mysqli_stmt_execute($stmt);
        header("Location: index.php?pages=products");
        exit;
    } catch (mysqli_sql_exception $e) {
        echo "Gagal menambahkan produk: " . htmlspecialchars($e->getMessage());
    }
}
