<?php
include '../db_connect.php';

$id_kategori = $_GET['id_kategori'];
$sqlStatement = "SELECT * FROM kategori WHERE id_kategori='$id_kategori'";
$query = mysqli_query($conn, $sqlStatement);
$row = mysqli_fetch_assoc($query);

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['simpan'])){
    $id_kategori = $_POST['id_kategori'];
    $nama = $_POST['nama_kategori'];

    $sqlStatement = "UPDATE kategori SET nama_kategori = '$nama' WHERE id_kategori ='$id_kategori'";
    $query = mysqli_query($conn, $sqlStatement);
    if ($query) {
        echo "<script>
                alert('Data berhasil diperbarui');
                window.location.href = 'kategori.php';
            </script>";
    } else {
        echo "<script>
        alert('Data gagal diperbarui');
        window.location.href = 'kategori.php';
        </script>";
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
                <input type="text" name="id_kategori" value="<?= $row['id_kategori'] ?>" hidden>
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" 
                       value="<?= $row['nama_kategori']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            <a href="kategori.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
