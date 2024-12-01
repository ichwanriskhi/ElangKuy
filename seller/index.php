<?php
include '../layout/sidebar_seller.php';
?>
        <div class="main col-md-10 mt-3">
            <h4 class="mt-3">Dashboard</h4>
            <div class="profile me-2">
                <h6 class="fw-medium mb-3">Profil Penjual</h6>
                <div class="profile-section d-flex mt-2">
                    <div>
                        <img src="https://plus.unsplash.com/premium_photo-1664536392896-cd1743f9c02c?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="rounded-circle" alt="">
                    </div>
                    <div class="seller-info ms-3">
                        <p>Christina Alphine</p>
                        <div class="icon-profile d-flex">
                            <i class="fas fa-star text-warning mt-1">
                            </i>
                            <i class="fas fa-star text-warning mt-1">
                            </i>
                            <i class="fas fa-star text-warning mt-1">
                            </i>
                            <i class="fas fa-star text-warning mt-1">
                            </i>
                            <i class="fas fa-star text-warning mt-1">
                            </i>
                            <p>5.0</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review mt-3 me-2">
                <h6>Ulasan Terbaru</h6>
                <div class="d-flex justify-content-between">
                    <div class="review-card">
                        <div class="review-title d-flex">
                            <img src="../assets/img/carousel1.png" width="50px" alt="">
                            <p class="ms-3 mt-2">Infinix GT 10 Pro</p>
                        </div>
                        <div class="reviewer d-flex mt-3">
                            <p>Anindita Saputri </p>
                            <i class="bi bi-dot mx-2"></i>
                            <p> 3 bulan lalu</p>
                            <div class="stars-icon">
                                <i class="fas fa-star text-warning">
                                </i>
                                <i class="fas fa-star text-warning">
                                </i>
                                <i class="fas fa-star text-warning">
                                </i>
                                <i class="fas fa-star text-warning">
                                </i>
                                <i class="fas fa-star text-warning">
                                </i>
                            </div>
                        </div>
                        <p>Barangnya bagus mulus meskipun second like new banget cuman pengiriman rada lama + sellernya sering ngegas gajelas 4 bintang buat barangnya ga 5 bintang karna respon seller yg gajelas suka marah marah.</p>
                    </div>
                    <div class="review-card">
                        <div class="review-title d-flex">
                            <img src="../assets/img/carousel1.png" width="50px" alt="">
                            <p class="ms-3 mt-2">Infinix GT 10 Pro</p>
                        </div>
                        <div class="reviewer d-flex mt-3">
                            <p>Anindita Saputri </p>
                            <i class="bi bi-dot mx-2"></i>
                            <p> 3 bulan lalu</p>
                            <div class="stars-icon">
                                <i class="fas fa-star text-warning">
                                </i>
                                <i class="fas fa-star text-warning">
                                </i>
                                <i class="fas fa-star text-warning">
                                </i>
                                <i class="fas fa-star text-warning">
                                </i>
                                <i class="fas fa-star text-warning">
                                </i>
                            </div>
                        </div>
                        <p>Barangnya bagus mulus meskipun second like new banget cuman pengiriman rada lama + sellernya sering ngegas gajelas 4 bintang buat barangnya ga 5 bintang karna respon seller yg gajelas suka marah marah.</p>
                    </div>
                </div>
            </div>
            <div class="information mt-3 me-2">
                <h6 class="fw-medium">Informasi Penting</h6>
                <div class="information-card d-flex justify-content-between">
                    <div class="information-item">
                        <p>Perlu Diproses</p>
                        <h4>11</h4>
                    </div>
                    <div class="information-item">
                        <p>Perlu Dikirim</p>
                        <h4>5</h4>
                    </div>
                    <div class="information-item">
                        <p>Pengajuan Pengembalian</p>
                        <h4>2</h4>
                    </div>
                    <div class="information-item">
                        <p>Chat Baru</p>
                        <h4>5</h4>
                    </div>
                    <div class="information-item">
                        <p>Diskusi Baru</p>
                        <h4>3</h4>
                    </div>
                </div>
            </div>
            <div class="summary mt-3">
                <h6>Ringkasan Penjualan</h6>
                <div class="summary-card d-flex justify-content-between">
                    <div class="summary-card-left d-flex">
                        <div class="summary-item">
                            <p>Chat Baru</p>
                            <h4>5</h4>
                        </div>
                        <div class="summary-item">
                            <p>Diskusi Baru</p>
                            <h4>3</h4>
                        </div>
                    </div>
                    <div class="summary-card-right d-flex">
                        <div class="summary-item">
                            <p>Chat Baru</p>
                            <h4>5</h4>
                        </div>
                        <div class="summary-item">
                            <p>Diskusi Baru</p>
                            <h4>3</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="auction-chart mt-3 me-2">
                <h6 class="fw-medium">Statistik Penawaran Lelang</h6>
                <canvas id="myChart" class="mt-3"></canvas>
            </div>
        </div>
    </div>

    <script src="../assets/js/chart.js"></script>
</body>
</html>