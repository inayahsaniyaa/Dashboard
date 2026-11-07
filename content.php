<?php

if (isset($_GET['pages'])) {
    $page = $_GET['pages'];
} else {
    $page = "dashboard";
}

$halaman = [
    "dashboard" => "pages/dashboard.php",
    "products" => "pages/product.php",
    "orders" => "pages/orders.php",
    "customers" => "pages/customers.php",
    "addproduct" => "pages/addproduct.php",
    "editproduct" => "pages/editproduct.php"
];

if (isset($halaman[$page])) {
    require $halaman[$page];
} else {
    echo "<h2>Halaman tidak ditemukan</h2>";
}

?>