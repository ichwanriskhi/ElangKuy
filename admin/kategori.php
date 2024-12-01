<?php
include '../db_connect.php';

// Mengambil data produk dari tabel products
$query = "SELECT * FROM kategori";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengajuan Barang</title>
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">Data Kategori</h3>
        <a href="index.php">Data Pengajuan</a> <br>
        <button class="btn btn-primary btn-sm mt-2 mb-2"><a href="tambah.php" class="text-white">Tambah Kategori</a></button>
        <?php if (empty($data)) { ?>
            <div class="alert alert-warning" role="alert">
                Belum ada data produk
            </div>
        <?php exit; } ?>
        
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr align="center">
                <thead>
                            <th>#</th>
                            <th>ID Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                                foreach ($data as $key => $dtkategori) {
                                ?>
                                <td><?= ++$key ?></td>
                                <td><?= $dtkategori["id_kategori"]; ?></td>
                                <td><?= $dtkategori["nama_kategori"]; ?></td>
                                <td>
                                    <a href="edit.php?id_kategori=<?= $dtkategori["id_kategori"]; ?>" class="btn btn-sm btn-info">Edit</a>
                                    <a href="hapus.php?id_kategori=<?= $dtkategori["id_kategori"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus kategori ini?')">Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
            </tbody>
        </table>
        <a href="logout.php" class="btn btn-secondary mt-3">Logout</a>
    </div>

    <!-- Link Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
