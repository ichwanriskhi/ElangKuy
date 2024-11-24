<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

     <!-- logo halaman -->
     <link href="assets/img/logohalaman.png" rel="icon">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section>
        <div class="container d-flex align-items-center justify-content-center min-vh-100">
            <div class="row w-100">
                <!-- Bagian Kiri -->
                <div class="col-md-6 split-left d-flex justify-content-center align-items-center text-center">
                    <div>
                        <h4 class="mb-1 fw-bold">Jadilah Penjual Terbaik</h4>
                        <p class="mb-4">Jual barang Anda secara efisien di Elangkuy</p>
                        <img src="assets/img/nailong.png" alt="Gambar Nailong" class="img-fluid w-75">
                    </div>
                </div>
                <!-- Bagian Kanan -->
                <div class="col-md-6 split-right d-flex justify-content-center">
                    <div class="login-card">
                        <div class="mb-4">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/logo.png" width="200px" alt="logo">
                            </a>
                            <h3 class="login-title fw-bold pt-4">Pendaftaran Akun</h3>
                            <p class="pt-1">Daftarkan akun Anda untuk mengakses ElangKuy</p>
                            <?php 
                            if(isset($_GET['info'])){
                                if($_GET['info'] == "terdaftar"){ ?>
                                    <div class="alert alert-warning alert-dismissible">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <h5>Maaf</h5>
                                        Anda telah terdaftar
                                    </div>
                                <?php } else if($_GET['info'] == "daftar"){ ?>
                                    <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <h5>Sukses</h5>
                                        Anda telah berhasil mendaftar
                                    </div>
                                <?php } } ?>
                        </div>
                        <form action="proses_daftar_seller.php" method="POST">
                            <div class="mb-3 mt-5">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan alamat email...">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan kata sandi ...">
                            </div>
                            <div class="mb-3">
                                <label for="password-confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                                <input type="password" class="form-control" name="password-confirmation" id="password-confirmation" placeholder="Masukkan ulang sandi ...">
                            </div>
                            <div class="form-check mt-4">
                                <input class="form-check-input" type="checkbox" id="accept-terms" name="accept-terms">
                                <label class="form-check-label" for="accept-terms">Saya terima S&K yang berlaku</label>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" id="register" name="btnSubmit" class="btn btn-primary">Daftar</button>
                            </div>
                        </form>
                        <div class="text-link text-center mt-3">
                            Sudah memiliki akun? <a href="login_seller.php" class="text-decoration-none">Masuk disini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

      <script>
        document.addEventListener('DOMContentLoaded', function() {
          var myCarousel = document.querySelector('#carouselExampleSlidesOnly');
          var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 3000,
            ride: 'carousel'
          });
        });
      </script>
</body>
</html>