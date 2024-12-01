<?php
include '../db_connect.php';

// ambil id yang ingin dihapus
$id_barang = $_GET['id_barang'];

$query = "UPDATE barang SET status = 'disetujui' WHERE id_barang = '$id_barang'";

// eksekusi query
$result = mysqli_query($conn, $query);

// cek apakah query berhasil
if ($result === false) {
    echo "Terjadi error, tidak bisa menerima data: " . mysqli_error($conn);
}
echo "Data berhasil disetujui";
?>