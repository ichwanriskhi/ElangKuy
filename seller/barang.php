<?php
include "../db_connect.php";

$sqlStatement = "SELECT * FROM barang";
$query = mysqli_query($conn, $sqlStatement);
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);

$dtdisetujui = "SELECT COUNT(*) as total FROM barang WHERE status = 'disetujui'";
$dtbelumdisetujui = "SELECT COUNT(*) as total FROM barang WHERE status = 'Belum Disetujui'";

$disetujui = mysqli_query($conn, $dtdisetujui);
$belumdisetujui = mysqli_query($conn, $dtbelumdisetujui);

if ($disetujui && $belumdisetujui) {
    $datasetuju = mysqli_fetch_assoc($disetujui);
    $databelum = mysqli_fetch_assoc($belumdisetujui);
    
    $total_disetujui = $datasetuju['total'];
    $total_belumdisetujui = $databelum['total'];
} else {
    // Penanganan jika query gagal
    $total_disetujui = 0;
    $total_belumdisetujui = 0;
}

include '../layout/sidebar_seller.php';

?>


        <div class="main col-md-10">
            <nav aria-label="breadcrumb" class="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Barang</li>
                </ol>
            </nav>
            <div class="items">
                <h6>Data Barang Lelang</h6>
                <div class="items-status d-flex justify-content-between me-3">
                    <div>
                        <p>Telah Disetujui</p>
                        <h4>
                            <?= $total_disetujui ?>
                        </h4>
                    </div>
                    <div>
                        <p>Belum Disetujui</p>
                        <h4>
                        <?= $total_belumdisetujui ?>
                        </h4>
                    </div>
                </div>
                <?php 
                if(isset($_GET['info'])){
                    if($_GET['info'] == "gagal"){ ?>
                    <div class="alert alert-warning alert-dismissible mt-2 me-3">
                        <h5>Mohon Maaf</h5>
                        Anda gagal menambahkan data barang
                    </div>

                    <?php }else if($_GET['info'] == "hapus"){ ?>
                    <div class="alert alert-warning alert-dismissible mt-2 me-3">
                        <h5>Berhasil</h5>
                        Anda berhasil menghapus data barang
                    </div>

                    <?php }else if($_GET['info'] == "edit gagal"){ ?>
                    <div class="alert alert-warning alert-dismissible mt-2 me-3">
                        <h5>Gagal</h5>
                        Anda gagal mengedit data barang
                    </div>

                    <?php }else if($_GET['info'] == "edit"){ ?>
                    <div class="alert alert-success alert-dismissible mt-2 me-3">
                        <h5>Berhasil</h5>
                        Anda berhasil mengedit data barang
                    </div>
                                            
                    <?php }else if($_GET['info'] == "berhasil"){ ?>
                    <div class="alert alert-success alert-dismissible mt-2 me-3">
                        <h5>Selamat</h5>
                        Anda berhasil menambahkan data barang
                    </div>
                    <?php } } ?>
                <div class="button d-flex justify-content-between mt-3 me-3">
                    <div>
                        <button class="btn btn-primary"><a href="addbarang.php" class="text-white">Ajukan Barang</a></button>
                    </div>
                    <div class="search-table">
                        <input type="text" placeholder="Cari data barang"><i class="bi bi-search search-table-icon"></i>
                    </div>
                </div>
                <div class="table-items mt-3 me-3">
                    <table class="table">
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
                                <td><?= ++$key ?></td>
                                <td><?= $dtbrg["nama"]; ?></td>
                                <td><?= $dtbrg["kondisi"]; ?></td>
                                <td><?= $dtbrg["id_kategori"]; ?></td>
                                <td>Rp. <?= number_format($dtbrg["harga_awal"]); ?></td>
                                <td><?= $dtbrg["status"]; ?></td>
                                <td>
                                <?php if ($dtbrg["status"] == "belum disetujui") { ?>
                                    <a href="editbarang.php?id_barang=<?= $dtbrg["id_barang"]; ?>" class="btn btn-sm btn-info">Edit</a>
                                    <a href="delete.php?id_barang=<?= $dtbrg["id_barang"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
                                <?php } ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>