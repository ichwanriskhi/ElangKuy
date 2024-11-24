<?php
session_start();
if($_SESSION['status'] == ""){
  header("location:../login_user.php?info=login");
}

?>

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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>
    <div class="row">
        <div class="col-md-2">
            <div class="d-flex flex-column align-items-center">
                <aside class="side-bar border-box bg-white ms-4 mt-3 pt-5 px-5">
                    <div class="logo">
                        <img src="../assets/img/logo.png" width="150px" alt="logo">
                    </div>
                    <ul class="nav flex-column border-top border-grey mt-4">
                        <li class="nav-item my-2">
                            <a class="nav-link fw-medium" href="#"><i class="bi bi-grid side-icon me-2"></i> Beranda</a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link fw-medium" href="#"><i class="bi bi-person-lines-fill side-icon me-2"></i> Profil</a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link fw-medium" href="#"><i class="bi bi-clock side-icon me-2"></i> Aktivitas</a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link fw-medium" href="#"><i class="bi bi-question-circle side-icon me-2"></i> Bantuan</a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link fw-medium" href="#"><i class="bi bi-box-arrow-left side-icon me-2"></i> Keluar</a>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
        <div class="col-md-8 mt-3">
            <div>
                <div class="search mt-3 ms-3">
                    <input type="text" class="search-input" placeholder="Apa yang ingin kamu cari?"><i class="bi bi-search search-icon"></i>
                </div>
                <div id="carouselBanner" class="carousel slide ms-3" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/img/banner1.png" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/banner2.png" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/img/banner3.png" alt="Third slide">
                      </div>
                    </div>
                </div>
                <div class="category d-flex justify-content-between mt-3 ms-3">
                    <div class="type1">
                        <a href="">Furnitur</a>
                    </div>
                    <div class="type2">
                        <a href="">Elektronik
                        </a>
                    </div>
                    <div class="type1">
                        <a href="">Fashion</a>
                    </div>
                    <div class="type2">
                        <a href="">Aksesoris & Koleksi</a>
                    </div>
                    <div class="type1">
                        <a href="">Lain-lain</a>
                    </div>
                </div>
                <div class="product ms-3 mt-3">
                    <div class="product-card d-flex justify-content-between">
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2024/3/24/a5e3653c-56a7-4b32-9986-ca0019306c50.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Iphone 14 Plus</h5>
                              <p class="category card-text">Barang Bekas</p>
                              <a href="#" class="btn btn-primary">Rp. 11.000.000</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2024/9/6/97398e6e-2b37-4d38-bc4a-f89cb4962fdb.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Nike Dunk Low ...</h5>
                              <p class="card-text">Barang Bekas</p>
                              <a href="#" class="btn btn-primary">Rp. 200.000</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2024/8/14/2afc7f07-91ec-45b4-aaa4-e32cfeef08fd.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Raket Tennis</h5>
                              <p class="card-text">Barang Bekas</p>
                              <a href="#" class="btn btn-primary">Rp. 100.000</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/1/28/bdb136ca-a1d4-448e-a089-eb4553842d3f.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Kemeja Linen</h5>
                              <p class="card-text">Barang Bekas</p>
                              <a href="#" class="btn btn-primary">Rp. 50.000</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2024/5/4/e9f2ef6f-ba39-49d7-ba07-192b72e637f9.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Kemeja Uniqlo</h5>
                              <p class="card-text">Barang Bekas</p>
                              <a href="#" class="btn btn-primary">Rp. 40.000</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product ms-3 mt-3">
                    <div class="product-card d-flex justify-content-between">
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/600/bjFkPX/2024/10/29/3f2c2f08-8ef8-429a-a6cc-eb8a791c0440.jpg.webp?ect=4g" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">InBook X2</h5>
                              <p class="card-text">Barang Bekas</p>
                              <a href="#" class="btn btn-primary">Rp. 4.000.000</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2024/10/9/a30e3390-292f-4010-adfb-a576f2742e87.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Iphone 14 Pro Max</h5>
                              <p class="card-text">Barang Bekas</p>
                              <a href="#" class="btn btn-primary">Rp. 10.000.000</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/600/bjFkPX/2024/10/25/c9e73249-aca3-4993-b136-46215aefa3f7.jpg.webp?ect=4g" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Magic Com CucKoo</h5>
                              <p class="card-text">Barang Bekas</p>
                              <a href="#" class="btn btn-primary">Rp. 50.000</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/3/14/cfa25236-4671-47a6-87d9-56380df285a4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Kabel Iphone</h5>
                              <p class="card-text">Barang Bekas</p>
                              <a href="#" class="btn btn-primary">Rp. 100.000</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2024/11/18/ae408f1c-2629-4136-931e-8a464263b1e0.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Versace Greca Men ...</h5>
                              <p class="card-text">Barang Bekas</p>
                              <a href="#" class="btn btn-primary">Rp. 600.000</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product ms-3 mt-3">
                    <div class="product-card d-flex justify-content-between">
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2024/5/10/7b621092-68f3-4b59-9b6f-e08389cf2fda.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Macbook Air M1</h5>
                              <p class="card-text">Barang Bekas</p>
                              <a href="#" class="btn btn-primary">Rp. 6.000.000</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/8/30/73751d47-64a2-4a9a-84d6-69b6833b9f36.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Mag Safe</h5>
                              <p class="card-text">Barang Baru</p>
                              <a href="#" class="btn btn-primary">Rp. 50.000</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2024/8/31/82f2b327-b4b2-46b8-8a7f-f2c265d49f64.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Infinix GT 10 Pro</h5>
                              <p class="card-text">Barang Bekas</p>
                              <a href="#" class="btn btn-primary">Rp. 1.500.000</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2024/7/7/c86d3628-1730-46cc-a2d2-61c97bff3360.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Asus Vivobook Pro 14</h5>
                              <p class="card-text">Barang Bekas</p>
                              <a href="#" class="btn btn-primary">Rp. 5.000.000</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://images.tokopedia.net/img/cache/600/bjFkPX/2024/10/16/c79e9f27-4749-4529-8447-e089e46645af.jpg.webp?ect=4g" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Kipas Nagoya</h5>
                              <p class="card-text">Barang Bekas</p>
                              <a href="#" class="btn btn-primary">Rp. 40.000</a>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-icon"><a href="#"><i class="fas fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link mx-1" href="#">1</a></li>
                            <li class="page-item"><a class="page-link mx-1" href="#">2</a></li>
                            <li class="page-item"><a class="page-link mx-1" href="#">3</a></li>
                            <li class="page-item"><a class="page-link mx-1" href="#">...</a></li>
                            <li class="page-icon"><a href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
        <div class="filter col-md-2">
            <div class="filter-container bg-white mt-3 py-5 px-5">
                <div class="filter-title text-center">
                    <h5><i class="fas fa-filter filter-icon"></i> Filter</h5>
                </div>
                
                <!-- Lokasi Section -->
                <div class="filter-section">
                    <h6 class="mt-3">Lokasi</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lokasi1">
                        <label class="form-check-label" for="lokasi1">Telkom University Bandung</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lokasi2">
                        <label class="form-check-label" for="lokasi2">Telkom University Jakarta</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lokasi3">
                        <label class="form-check-label" for="lokasi3">Telkom University Surabaya</label>
                    </div>
                </div>
                
                <!-- Batas Harga Section -->
                <div class="filter-section">
                    <h6 class="mt-3">Batas Harga</h6>
                    <div class="d-flex">
                        <input type="text" class="form-control price-input" placeholder="Rp.">
                        <span class="mx-2">—</span>
                        <input type="text" class="form-control price-input" placeholder="Rp.">
                    </div>
                </div>
                
                <!-- Kondisi Barang Section -->
                <div class="filter-section">
                    <h6 class="mt-3">Kondisi Barang</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kondisi1">
                        <label class="form-check-label" for="kondisi1">Baru</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kondisi2">
                        <label class="form-check-label" for="kondisi2">Bekas</label>
                    </div>
                </div>
                
                <!-- Kategori Barang Section -->
                <div class="filter-section">
                    <h6 class="mt-3">Kategori Barang</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kategori1">
                        <label class="form-check-label" for="kategori1">Elektronik</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kategori2">
                        <label class="form-check-label" for="kategori2">Fashion</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kategori3">
                        <label class="form-check-label" for="kategori3">Furnitur</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kategori4">
                        <label class="form-check-label" for="kategori4">Aksesoris & Koleksi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="kategori5">
                        <label class="form-check-label" for="kategori5">Lain-lain</label>
                    </div>
                </div>
                
                <!-- Apply Button -->
                 <div class="btn-filter text-center mt-3">
                     <button class="btn btn-primary">Terapkan</button>
                 </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
          var myCarousel = document.querySelector('#carouselBanner');
          var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 4000,
            ride: 'carousel'
          });
        });
      </script>
</body>
</html>