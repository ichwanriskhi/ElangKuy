<?php
include '../db_connect.php';

// Membuat data tambah barang
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['simpan'])){
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

    // Simpan data menggunakan insert ke dalam tabel produk
    $query = "INSERT INTO barang (nama, harga_awal, lokasi, deskripsi, kondisi, id_kategori, status, foto) VALUES ( '$nama', $harga_awal, '$lokasi', '$deskripsi', '$kondisi', '$id_kategori', 'belum disetujui', '$photoName')";

    // Jika query berhasil, redirect ke halaman barang.php
    if($conn->query($query) === true){
        header('location:barang.php?info=berhasil');
    } else {
        header('location:barang.php?info=gagal');
    }

    mysqli_close($conn);
}
?>