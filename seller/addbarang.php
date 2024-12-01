<?php
include '../layout/sidebar_seller.php';
?>
        <div class="main col-md-10">
            <nav aria-label="breadcrumb" class="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                  <li class="breadcrumb-item"><a href="#">Barang</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Pengajuan Barang</li>
                </ol>
            </nav>
            <div class="form-barang">
                <h6 class="mb-3">Pengajuan Barang Lelang</h6>
                <div class="form-barang-lelang me-3">
                    <form action="add.php" method="POST" enctype="multipart/form-data">
                        <div class="row col-md-9">
                            <div class="col-md-3 mb-3">
                                <div class="photo-upload">
                                    <p>+ Tambah Foto minimal 3</p>
                                </div>
                                <input type="file" name="foto" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="nama_barang" class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" required>
                                    <small class="form-text text-muted">0/100</small>
                                </div>
                                <div class="col-md-4">
                                    <label for="harga_awal" class="form-label">Harga Awal</label>
                                    <input type="number" class="form-control" name="harga_awal" id="harga_awal" placeholder="Harga Awal" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="lokasi" class="form-label">Lokasi</label>
                                    <select name="lokasi" class="form-select" id="lokasi" required>
                                        <option selected>Pilih Lokasi</option>
                                        <option value="bandung">Bandung</option>
                                        <option value="jakarta">Jakarta</option>
                                        <option value="surabaya">Surabaya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="7" placeholder="Deskripsi Barang" required></textarea>
                                    <small class="form-text text-muted">0/3000</small>
                                </div>
                                <div class="col-md-4">
                                    <label for="kondisi" class="form-label">Kondisi Barang</label>
                                    <select class="form-select" name="kondisi" id="kondisiBarang" required>
                                        <option selected>Pilih Kondisi</option>
                                        <option value="bekas">Bekas</option>
                                        <option value="baru">Baru</option>p
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
                                    <select class="form-select" name="id_kategori" id="kategori" required>
                                    <option selected>Pilih Kategori</option>
                                        <?php
                                        foreach ($dtkategori as $key => $kategori) {
                                        ?> 
                                        <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="ajukan text-center">
                            <button type="submit" name="simpan" class="btn btn-primary">Ajukan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/chart.js"></script>
</body>
</html>