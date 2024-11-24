<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ElangKuy</title>
    <!-- logo halaman -->
    <link href="../assets/img/logohalaman.png" rel="icon">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Boostrap Icons & Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>
    <div class="row">
        <div class="col-md-2">
            <div class="d-flex flex-column align-items-center">
                <aside class="side-bar border-box bg-white ms-4 mt-3 pt-3 px-5">
                    <div class="logo">
                        <img src="../assets/img/logo.png" width="150px" alt="logo">
                    </div>
                    <ul class="nav flex-column border-top border-grey mt-4">
                        <li class="nav-item my-2">
                            <a class="nav-link fw-medium" href="#"><i class="bi bi-grid-fill side-icon me-2"></i> Beranda</a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link fw-medium" href="#"><i class="bi bi-person-lines-fill side-icon me-2"></i> Profil</a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link fw-medium" href="#"><i class="bi bi-archive-fill side-icon me-2"></i> Barang </a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link fw-medium" href="#"><i class="bi bi-basket3-fill side-icon me-2"></i> Pesanan</a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link fw-medium" href="#"><i class="bi bi-chat-right-dots-fill side-icon me-2"></i> Layanan</a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link fw-medium" href="#"><i class="bi bi-clipboard-fill side-icon me-2"></i> Laporan</a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link fw-medium" href="#"><i class="bi bi-question-circle-fill side-icon me-2"></i> Bantuan</a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link fw-medium" href="#"><i class="bi bi-pencil-square side-icon me-2"></i> Ulasan</a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link fw-medium" href="#"><i class="bi bi-box-arrow-left side-icon me-2"></i> Keluar</a>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
        <div class="main col-md-10">
            <nav aria-label="breadcrumb" class="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Barang</li>
                </ol>
            </nav>
            <div class="items">
                <h6>Data Barang Lelang</h6>
                <div class="items-status d-flex justify-content-between me-3">
                    <div>
                        <p>Telah Disetujui</p>
                        <h4>2</h4>
                    </div>
                    <div>
                        <p>Belum Disetujui</p>
                        <h4>2</h4>
                    </div>
                </div>
                <div class="button d-flex justify-content-between mt-3 me-3">
                    <div>
                        <button class="btn btn-primary">Ajukan Barang</button>

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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>