<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <!-- Tautan Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tautan ke File CSS Eksternal -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body style="opacity: 0;">

    <!-- Navbar -->
    <?php include 'partials/navbar.php'; ?>

    <!-- Sertakan CTA -->
    <?php include 'partials/cta.php'; ?>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <img src="logo.png" class="rounded-circle mx-auto d-block" alt="Company Logo" id="company-logo">
            <h1 class="display-4">Khalifah Teknik</h1>
            <p class="lead">Solusi setiap masalah AC dan CCTV anda</p>
        </div>
    </div>

    <!-- Statistik Prestasi -->
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-3">
                <div class="stat-item">
                    <i class="fas fa-check-circle fa-3x"></i>
                    <h3>250+</h3>
                    <p>Proyek Diselesaikan</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-item">
                    <i class="fas fa-calendar-alt fa-3x"></i>
                    <h3>10</h3>
                    <p>Tahun Pengalaman</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-item">
                    <i class="fas fa-map-marker-alt fa-3x"></i>
                    <h3>50+</h3>
                    <p>Area Layanan</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-item">
                    <i class="fas fa-smile fa-3x"></i>
                    <h3>500+</h3>
                    <p>Pelanggan Puas</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo Perusahaan yang Pernah Bekerja Sama -->
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="assets/logo.png" class="d-block mx-auto company-logo" alt="Logo Perusahaan 1" data-company="1">
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="assets/logo1.png" class="d-block mx-auto company-logo" alt="Logo Perusahaan 2" data-company="2">
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="assets/logo2.png" class="d-block mx-auto company-logo" alt="Logo Perusahaan 3" data-company="3">
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="assets/logo3.png" class="d-block mx-auto company-logo" alt="Logo Perusahaan 4" data-company="4">
                    </div>                    
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="assets/logo3.png" class="d-block mx-auto company-logo" alt="Logo Perusahaan 5" data-company="5">
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="assets/logo2.png" class="d-block mx-auto company-logo" alt="Logo Perusahaan 6" data-company="6">
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <img src="assets/logo1.png" class="d-block mx-auto company-logo" alt="Logo Perusahaan 7" data-company="7">
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                       <img src="assets/logo.png" class="d-block mx-auto company-logo" alt="Logo Perusahaan 8" data-company="8">
                    </div>                    
                </div>
            </div>
            <!-- Tambahkan carousel-item untuk logo perusahaan lainnya -->
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>

    <!-- Overlay dan Card Perusahaan -->
    <div class="overlay"></div>
    <div class="company-card">
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true"></span>
        </button>
        <div id="company-details"></div>
    </div>

    <!-- Galeri Gambar Aktivitas Pengerjaan -->
<div class="container mt-5">
    <h2 class="text-center">Galeri Aktivitas Pengerjaan</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <img src="assets/cctv.jpg" class="img-fluid img-thumbnail activity-img" alt="Pengerjaan 1">
        </div>
        <div class="col-md-4 mb-4">
            <img src="assets/cctv.jpg" class="img-fluid img-thumbnail activity-img" alt="Pengerjaan 2">
        </div>
        <div class="col-md-4 mb-4">
            <img src="assets/cctv.jpg   " class="img-fluid img-thumbnail activity-img" alt="Pengerjaan 3">
        </div>
        <!-- Tambahkan lebih banyak gambar sesuai kebutuhan -->
    </div>
</div>

<!-- Modal untuk memperbesar gambar -->
<div class="modal fade" id="activityModal" tabindex="-1" role="dialog" aria-labelledby="activityModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="activityModalLabel">Detail Pengerjaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" id="modalImage" class="img-fluid" alt="Detail Pengerjaan">
            </div>
        </div>
    </div>
</div>


    <!-- Konten lainnya disini -->

    <!-- Footer -->
    <?php include 'partials/footer.php'; ?>
    
    <!-- Script Bootstrap JavaScript (Diletakkan di akhir body) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript Tambahan -->
    <script src="js/script.js"></script>
</body>
</html>
