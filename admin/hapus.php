<?php
include "../db_connect.php";

// Memeriksa apakah parameter id_kategori ada di URL
if (isset($_GET["id_kategori"])) {
    $id_kategori = $_GET["id_kategori"];

    // Query untuk menghapus data berdasarkan id_kategori
    $query = "DELETE FROM kategori WHERE id_kategori = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 's', $id_kategori);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
            alert('Kategori berhasil dihapus');
            window.location.href = 'kategori.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menghapus kategori');
            window.location.href = 'kategori.php';
        </script>";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "<script>
        alert('ID Kategori tidak ditemukan');
        window.location.href = 'kategori.php';
    </script>";
}

// Menutup koneksi database
mysqli_close($conn);
?>
