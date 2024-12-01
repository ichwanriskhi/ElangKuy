<?php
include "../db_connect.php";

$id_barang = $_GET["id_barang"];

$sqlStatement = "SELECT * FROM barang WHERE id_barang='$id_barang'";
$query = mysqli_query($conn, $sqlStatement);
$row = mysqli_fetch_assoc($query);

$sqlStatement = "DELETE FROM barang WHERE id_barang='$id_barang'";
$query = mysqli_query($conn, $sqlStatement);
if ($query) {
    unlink('../assets/img/uploaded/' . $row['foto']);
    header('location:barang.php?info=hapus');
}

mysqli_close($conn);
