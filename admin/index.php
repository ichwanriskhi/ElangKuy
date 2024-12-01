<?php
session_start();
if($_SESSION['status'] == ""){
  header("location:../loginadmin.php?info=login");
}

include '../db_connect.php';

// Mengambil data produk dari tabel products
$query = "SELECT * FROM barang";
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
        <h3 class="mb-4">Data Pengajuan</h3>
        <a href="kategori.php">Data Kategori</a>
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
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Kategori Barang</th>
                    <th>Harga Awal</th>
                    <th>Status Persetujuan</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                <tr>
                    <?php
                    foreach ($data as $key => $dtbrg) {
                    ?>
                    <td><?= $dtbrg["id_barang"]; ?></td>
                    <td><?= $dtbrg["nama"]; ?></td>
                    <td><?= $dtbrg["kondisi"]; ?></td>
                    <td><?= $dtbrg["id_kategori"]; ?></td>
                    <td><?= $dtbrg["harga_awal"]; ?></td>
                    <td><?= $dtbrg["status"]; ?></td>
                    <td>
                    <?php if ($dtbrg["status"] == "belum disetujui") { ?>
                        <a href="terima.php?id_barang=<?= $dtbrg["id_barang"]; ?>" class="btn btn-sm btn-info">Terima</a>
                        <a href="tolak.php?id_barang=<?= $dtbrg["id_barang"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menolak produk ini?')">Tolak</a>
                    <?php } ?>
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
