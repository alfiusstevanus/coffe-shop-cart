<?php
include('server/connection.php');
session_start();

$id = $_GET['id'];
$add = "SELECT * FROM product WHERE product_id = '$id'";
$q = mysqli_query($conn, $add);
$row = mysqli_fetch_object($q);

$_SESSION['cart'][$id] = [
    "nama" => $row->product_name,
    "harga" => $row->price,
    "jumlah" => 1
];
header("location: cart.php");
