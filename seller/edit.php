<?php
include '../db_connect.php';

// Membuat data tambah barang
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['simpan'])){
    $id_barang = $_POST['id_barang'];
    $nama = $_POST['nama_barang'];
    $harga_awal = $_POST['harga_awal'];
    $lokasi = $_POST['lokasi'];
    $deskripsi = $_POST['deskripsi'];
    $kondisi = $_POST['kondisi'];
    $id_kategori = $_POST['id_kategori'];

    $foto = $_FILES['foto'];
    // print_r($foto);
    if (!empty($foto['name'])){
        $photoName = time() . '_' . $foto['name'];
        move_uploaded_file($foto['tmp_name'], '../assets/img/uploaded/' . $photoName);
    } else {
        $photoName = "";
    }

    $sqlStatement = "UPDATE barang SET nama ='$nama', 
    harga_awal='$harga_awal', lokasi='$lokasi', 
    deskripsi='$deskripsi', kondisi='$kondisi', 
    id_kategori='$id_kategori', foto='$photoName' WHERE id_barang='$id_barang'";
    $query = mysqli_query($conn, $sqlStatement);
    if ($query) {
        unlink('../assets/img/uploaded/' . $row['foto']);
        header('location:barang.php?info=edit');

    } else {
        header('location:barang.php?info=editgagal');
    }

    mysqli_close($conn);
}