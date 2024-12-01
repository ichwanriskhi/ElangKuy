<?php
include '../db_connect.php';

$id_barang = $_GET['id_barang'];
$sqlStatement = "SELECT * FROM barang WHERE id_barang='$id_barang'";
$query = mysqli_query($conn, $sqlStatement);
$row = mysqli_fetch_assoc($query);

include '../layout/sidebar_seller.php';
?>
        <div class="main col-md-10">
            <nav aria-label="breadcrumb" class="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                  <li class="breadcrumb-item"><a href="barang.php">Barang</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Pengajuan Barang</li>
                </ol>
            </nav>
            <div class="form-barang">
                <h6 class="mb-3">Pengajuan Barang Lelang</h6>
                <div class="form-barang-lelang me-3">
                <form action="edit.php" method="POST" enctype="multipart/form-data">
                    <input type="number" name="id_barang" value="<?= $row['id_barang'] ?>" hidden>
                    <div class="row col-md-9">
                        <div class="col-md-3 mb-3">
                            <div class="photo-upload">
                                <img src="../assets/img/uploaded/<?= $row['foto'] ?>" width="120px" alt="">
                            </div>
                            <input type="file" name="foto">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="<?= $row['nama'] ?>">
                                <small class="form-text text-muted">0/100</small>
                            </div>
                            <div class="col-md-4">
                                <label for="harga_awal" class="form-label">Harga Awal</label>
                                <input type="number" class="form-control" name="harga_awal" id="harga_awal" value="<?= $row['harga_awal'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <select name="lokasi" class="form-select" id="lokasi">
                                    <option value="bandung" <?= ($row['lokasi'] == 'bandung') ? 'selected' : '' ?>>Bandung</option>
                                    <option value="jakarta" <?= ($row['lokasi'] == 'jakarta') ? 'selected' : '' ?>>Jakarta</option>
                                    <option value="surabaya" <?= ($row['lokasi'] == 'surabaya') ? 'selected' : '' ?>>Surabaya</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="7"><?= $row['deskripsi'] ?></textarea>
                                <small class="form-text text-muted">0/3000</small>
                            </div>
                            <div class="col-md-4">
                                <label for="kondisi" class="form-label">Kondisi Barang</label>
                                <select class="form-select" name="kondisi" id="kondisiBarang">
                                    <option value="bekas" <?= ($row['kondisi'] == 'bekas') ? 'selected' : '' ?>>Bekas</option>
                                    <option value="baru" <?= ($row['kondisi'] == 'baru') ? 'selected' : '' ?>>Baru</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <?php
                                include '../db_connect.php';

                                $sqlStatement = "SELECT * FROM kategori";
                                $query = mysqli_query($conn, $sqlStatement);
                                $dtkategori = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                ?>
                                <label for="id_kategori" class="form-label">Kategori</label>
                                <select class="form-select" name="id_kategori" id="kategori">
                                    <?php
                                    foreach ($dtkategori as $kategori) {
                                        // Check if this category is the one currently associated with the item
                                        $selected = ($kategori['id_kategori'] == $row['id_kategori']) ? 'selected' : '';
                                        echo "<option value='{$kategori['id_kategori']}' $selected>{$kategori['nama_kategori']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                        <div class="ajukan text-center">
                            <button type="submit" name="simpan" class="btn btn-primary">Ajukan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/chart.js"></script>
</body>
</html>