<?php
include '../db_connect.php';
// Membuat data tambah barang
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $harga_awal = $_POST['harga_awal'];
    $lokasi = $_POST['lokasi'];
    $deskripsi = $_POST['deskripsi'];
    $kondisi = $_POST['kondisi'];
    $id_kategori = $_POST['id_kategori'];

    // Simpan data menggunakan insert ke dalam tabel produk
    $query = "INSERT INTO barang (nama, harga_awal, lokasi, deskripsi, kondisi, id_kategori, status) VALUES ( '$nama', $harga_awal, '$lokasi', '$deskripsi', '$kondisi', '$id_kategori', 'belum disetujui')";

    // Jika query berhasil, redirect ke halaman index.php
    if($conn->query($query) === true){
        echo '<div class="alert alert-success mt-3">Data berhasil disimpan. <a href="index.php">Kembali ke Daftar Produk</a></div>';
        // header('Location: index.php');
    } else {
        echo '<div class="alert alert-danger mt-3">Gagal menyimpan data. Silakan coba lagi.</div>';
    }
}
?>

<?php
$sqlStatement = "SELECT * FROM kategori";
$query = mysqli_query($conn, $sqlStatement);
$dtkategori = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<?php 
    if(isset($_GET['info'])){
        if($_GET['info'] == "gagal"){ ?>
        <div class="alert alert-warning alert-dismissible">
            <h5>Mohon Maaf</h5>
            Anda gagal menambahkan data barang
        </div>
                                
        <?php }else if($_GET['info'] == "berhasil"){ ?>
        <div class="alert alert-success alert-dismissible">
            <h5>Selamat</h5>
            Anda berhasil menambahkan data barang
        </div>
        <?php } } ?>

        <form class="create mx-5 my-5 px-5" method="POST">
            <h4>Tambah Barang</h4>
        <div class="mb-3 mt-5">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="nama" class="form-control" id="nama" name="nama" aria-describedby="nama">
        </div>
  
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga Awal</label>
            <input type="number" name="harga_awal" class="form-control" id="harga">
        </div>
  
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <br>
            <select name="lokasi" id="lokasi">
                <option value="bandung">Bandung</option>
                <option value="jakarta">Jakarta</option>
                <option value="surabaya">Surabaya</option>
            </select>
        </div>
  
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi">
        </div>
  
        <div class="mb-3">
            <label for="kondisi" class="form-label">Kondisi</label>
            <br>
            <select name="kondisi" id="kondisi">
                <option value="baru">Barang Baru</option>
                <option value="bekas">Barang Bekas</option>
            </select>
        </div>
  
        <div class="mb-3">
    <label for="id" class="form-label">Id Kategori</label>
    <br>
    <select name="id_kategori" id="">
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
  <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
</form>
   
</body>
</html>