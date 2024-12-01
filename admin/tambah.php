<?php
include '../db_connect.php';

// Memproses form jika disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    // Validasi input
    if (empty($id_kategori) || empty($nama_kategori)) {
        echo "<div class='alert alert-danger'>ID Kategori dan Nama Kategori tidak boleh kosong</div>";
    } else {
        // Validasi ID Kategori unik
        $check_query = "SELECT * FROM kategori WHERE id_kategori = ?";
        $check_stmt = mysqli_prepare($conn, $check_query);
        mysqli_stmt_bind_param($check_stmt, 's', $id_kategori);
        mysqli_stmt_execute($check_stmt);
        $check_result = mysqli_stmt_get_result($check_stmt);

        if (mysqli_num_rows($check_result) > 0) {
            echo "<div class='alert alert-danger'>ID Kategori sudah digunakan, silakan gunakan yang lain</div>";
        } else {
            // Insert data ke tabel kategori
            $query = "INSERT INTO kategori (id_kategori, nama_kategori) VALUES (?, ?)";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 'ss', $id_kategori, $nama_kategori);
            $is_inserted = mysqli_stmt_execute($stmt);

            if ($is_inserted) {
                echo "<script>
                    alert('Kategori berhasil ditambahkan');
                    window.location.href = 'kategori.php';
                </script>";
            } else {
                echo "<div class='alert alert-danger'>Gagal menambahkan kategori</div>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">Tambah Kategori</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="id_kategori">ID Kategori</label>
                <input type="text" name="id_kategori" id="id_kategori" class="form-control" placeholder="Masukkan ID kategori (misalnya PKN untuk Pakaian)" required>
            </div>
            <div class="form-group">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" placeholder="Masukkan nama kategori" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="kategori.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
