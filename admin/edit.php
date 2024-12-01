<?php
include '../db_connect.php';

// Mendapatkan data kategori berdasarkan ID
if (isset($_GET['id_kategori'])) {
    $id_kategori = $_GET['id_kategori'];
    $query = "SELECT * FROM kategori WHERE id_kategori = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id_kategori);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $kategori = mysqli_fetch_assoc($result);
    
    if (!$kategori) {
        echo "<div class='alert alert-danger'>Data tidak ditemukan</div>";
        exit;
    }
} else {
    echo "<div class='alert alert-danger'>ID kategori tidak ditemukan</div>";
    exit;
}

// Memproses form jika disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_kategori = $_POST['nama_kategori'];

    // Validasi input
    if (empty($nama_kategori)) {
        echo "<div class='alert alert-danger'>Nama kategori tidak boleh kosong</div>";
    } else {
        // Update data kategori
        $update_query = "UPDATE kategori SET nama_kategori = ? WHERE id_kategori = ?";
        $update_stmt = mysqli_prepare($conn, $update_query);
        mysqli_stmt_bind_param($update_stmt, 'si', $nama_kategori, $id_kategori);
        $is_updated = mysqli_stmt_execute($update_stmt);

        if ($is_updated) {
            echo "<script>
                alert('Data berhasil diperbarui');
                window.location.href = 'kategori.php';
            </script>";
        } else {
            echo "<div class='alert alert-danger'>Gagal memperbarui data</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">Edit Kategori</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" 
                       value="<?= htmlspecialchars($kategori['nama_kategori']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="kategori.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
