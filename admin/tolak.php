<?php
include '../db_connect.php';

// ambil id yang ingin dihapus
$id_barang = $_GET['id_barang'];

$query = "UPDATE barang SET status = 'ditolak' WHERE id_barang = '$id_barang'";

// eksekusi query
$result = mysqli_query($conn, $query);

// cek apakah query berhasil
if ($result === false) {
    echo "Tidak bisa menolak data: " . mysqli_error($conn);
}
echo "Data berhasil ditolak";
?>