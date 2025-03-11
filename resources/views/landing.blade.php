<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Innovative Tech Solutions</title>
  <meta name="description" content="Kami adalah software house yang menawarkan solusi teknologi.">
  <meta name="keywords" content="Software House, Solusi Teknologi, Produk">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo-white.png') }}" rel="icon">
  <link href="{{ asset('assets/img/logo-white.png') }}" rel="apple-touch-icon">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('landing/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
  .project-caption {
      margin-top: 15px; /* Menambahkan jarak atas */
  }
  .project-title {
      margin-bottom: 10px; /* Menambahkan jarak bawah */
  }
  .carousel-item {
    width: 100%;
    height: auto;
    background-size: contain !important; /* Ubah dari cover ke contain */
    background-repeat: no-repeat !important;
    background-position: center !important;
    padding: 20px 0;
    min-height: 600px; /* Tambahkan minimum height */
}

.carousel-item .container {
    background: rgba(255, 255, 255, 0.9); /* Tambahkan background semi-transparan */
    padding: 20px;
    border-radius: 10px;
    margin-top: auto;
}

.carousel-item h2 {
    color: #333;
    font-weight: bold;
}

.carousel-item p {
    color: #666;
}

/* Responsif untuk mobile */
@media (max-width: 768px) {
    .carousel-item {
        min-height: 400px;
    }
}

#pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    margin-top: 2rem;
}

#pagination button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 40px;
    height: 40px;
    padding: 0 12px;
    border: none;
    border-radius: 20px;
    background: linear-gradient(45deg, #f1f1f1, #ffffff);
    color: #666;
    font-weight: 500;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

#pagination button:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    background: linear-gradient(45deg, #f8f9fa, #ffffff);
}

#pagination button.active {
    background: linear-gradient(45deg, #4e54c8, #8f94fb);
    color: white;
    box-shadow: 0 4px 15px rgba(78,84,200,0.3);
}

#pagination button.active:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(78,84,200,0.4);
}

/* Responsif untuk mobile */
@media (max-width: 576px) {
    #pagination button {
        min-width: 35px;
        height: 35px;
        font-size: 0.9rem;
    }
}

.project-count {
    display: flex;
    align-items: center;
    font-size: 1.5rem; /* Ukuran font yang lebih besar */
    margin: 20px 0; /* Jarak atas dan bawah */
}

.description-title {
    font-weight: bold; /* Menebalkan teks */
    color: #007bff; /* Warna biru */
    margin: 0 10px; /* Jarak horizontal */
}

.project-number {
    font-weight: bold; /* Menebalkan angka */
    color: #28a745; /* Warna hijau */
    font-size: 3.5rem; /* Ukuran font yang lebih besar */
    margin-left: 5px; /* Jarak kiri */
}

/* Project Card Styling */
.project-card {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.1);
}

.project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}

/* Badge Styling */
.badge-corner {
    position: absolute;
    top: 20px;
    right: 20px;
    transform: none; /* Menghilangkan rotasi */
    padding: 8px 16px;
    font-size: 0.85rem;
    z-index: 2;
    border-radius: 20px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    display: flex;
    align-items: center;
    gap: 6px;
    transition: all 0.3s ease;
}

.badge-corner:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

/* Styling untuk badge product */
.badge-corner.bg-primary {
    background: linear-gradient(45deg, #4e54c8, #8f94fb) !important;
    border: none;
}

/* Styling untuk badge project */
.badge-corner.bg-success {
    background: linear-gradient(45deg, #11998e, #38ef7d) !important;
    border: none;
}

/* Icon dalam badge */
.badge-corner i {
    font-size: 1rem;
}

/* Image Styling */
.image-wrapper {
    position: relative;
    overflow: hidden;
    height: 350px;
}

.project-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.overlay-icon {
    color: white;
    font-size: 2rem;
}

.image-wrapper:hover .project-image {
    transform: scale(1.1);
}

.image-wrapper:hover .image-overlay {
    opacity: 1;
}

/* Content Styling */
.project-title {
    color: #2d3436;
    font-size: 1.4rem;
}

.project-meta {
    font-size: 0.9rem;
    color: #636e72;
}

.date-badge, .tech-badge {
    padding: 0.4rem 0.8rem;
    background: rgba(0,0,0,0.05);
    border-radius: 20px;
}

.project-description {
    color: #636e72;
    line-height: 1.6;
}

/* Button Styling */
.btn-view, .btn-demo {
    padding: 0.6rem 1.2rem;
    border-radius: 5px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-view:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,123,255,0.3);
}

.btn-demo:hover {
    background-color: #f8f9fa;
}

/* Styling untuk stats carousel */
.stats-carousel-item {
    position: relative;
    width: 100%;
    height: auto; /* Ubah dari fixed height */
    overflow: hidden;
    background: #f8f9fa; /* Tambah background color */
}

.stats-carousel-item img {
    width: 100%;
    height: auto; /* Ubah dari 100% ke auto */
    object-fit: contain; /* Ubah dari cover ke contain */
    max-height: 80vh; /* Tambah max-height */
    display: block; /* Tambah display block */
    margin: 0 auto; /* Center image */
}

.stats-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0.4));
    padding: 60px 0 40px;
    text-align: center;
}

.stats-overlay h2 {
    color: #fff;
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.stats-overlay p {
    color: rgba(255,255,255,0.9);
    font-size: 1.1rem;
    max-width: 600px;
    margin: 0 auto;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

/* Responsif untuk mobile */
@media (max-width: 768px) {
    .stats-carousel-item img {
        max-height: 60vh;
    }
    
    .stats-overlay {
        padding: 40px 0 30px;
    }
    
    .stats-overlay h2 {
        font-size: 2rem;
    }
}

/* Styling untuk carousel controls */
.carousel-control-prev,
.carousel-control-next {
    width: 5%;
    opacity: 0;
    transition: all 0.3s ease;
}

#statsCarousel:hover .carousel-control-prev,
#statsCarousel:hover .carousel-control-next {
    opacity: 0.8;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(0,0,0,0.5);
    padding: 20px;
    border-radius: 50%;
}

/* Styling untuk stats section */
.team-image-card {
    position: relative;
    transition: all 0.3s ease;
    background: #f8f9fa;
    padding: 10px; /* Kurangi padding */
    border-radius: 12px;
    cursor: pointer;
}

.team-image-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.team-photo {
    width: 100%;
    height: auto;
    object-fit: contain;
    border-radius: 8px;
}

.stat-card {
    background: white;
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}

.stat-card .counter {
    font-size: 2.5rem;
    font-weight: 700;
    color: #333;
    margin: 10px 0;
}

.stat-card p {
    color: #666;
    font-size: 1.1rem;
}

/* Responsif untuk mobile */
@media (max-width: 768px) {
    .team-photo {
        height: 300px;
    }
    
    .stat-card {
        padding: 15px !important;
    }
    
    .stat-card .counter {
        font-size: 2rem;
    }
}

/* Update layout container */
.stats-image-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px; /* Kurangi gap */
    margin-bottom: 30px;
}

.stats-image-wrapper {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Modal styling */
.image-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.9);
    z-index: 9999;
    padding: 20px;
}

.modal-content {
    position: relative;
    max-width: 90%;
    max-height: 90vh;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

.modal-image {
    max-width: 100%;
    max-height: 90vh;
    object-fit: contain;
}

.close-modal {
    position: absolute;
    top: 15px;
    right: 15px;
    color: white;
    font-size: 30px;
    cursor: pointer;
    background: rgba(0,0,0,0.5);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.close-modal:hover {
    background: rgba(0,0,0,0.8);
    transform: scale(1.1);
}

/* Responsif styling */
@media (max-width: 768px) {
    .stats-image-container {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .team-image-card {
        padding: 8px;
    }
}
</style>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/img/logo-white.png') }}" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#features">Layanan</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#team">Tim Kami</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="{{ asset('landing/assets/img/hero-bg-2.jpg') }}" alt="" class="hero-bg">

      <div class="container">
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('landing/assets/img/balian.png') }}" class="img-fluid animated" alt="">
          </div>

          <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
            <h1>Solusi Teknologi Terbaik untuk Anda</h1>
            <p>Kami adalah software house yang menawarkan solusi teknologi bagi pelanggan kami, serta memiliki produk kami sendiri.</p>
            <div class="d-flex">
              <a href="#projects" class="btn-get-started">Mulai Sekarang</a>
            </div>
          </div>

        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>Tentang Kami</h3>
            <h2>Kami adalah Software House yang Inovatif</h2>
            <p>Kami menyediakan solusi teknologi yang dapat disesuaikan dengan kebutuhan bisnis Anda. Dengan pengalaman dan keahlian kami, kami siap membantu Anda mencapai tujuan bisnis Anda.</p>
            <a href="#" class="read-more"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-file-earmark-text"></i>
                  <h3>Analisis Kebutuhan</h3>
                  <p>Kami mengembangkan perangkat lunak yang sesuai dengan kebutuhan spesifik Anda.</p>
                </div>
              </div>
              <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-code-slash"></i>
                  <h3>Pengembangan Aplikasi</h3>
                  <p>Kami menawarkan berbagai solusi teknologi untuk meningkatkan efisiensi bisnis Anda.</p>
                </div>
              </div> 
              <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-cloud"></i>
                  <h3>Solusi Cloud</h3>
                  <p>Keamanan data Anda adalah prioritas kami, kami menggunakan teknologi terbaru untuk melindungi informasi Anda.</p>
                </div>
              </div>
               <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-person-lines-fill"></i>
                  <h3>Konsultasi IT</h3>
                  <p>Kami menyediakan dukungan pelanggan yang responsif untuk memastikan kepuasan Anda.</p>
                </div>
              </div> 
              <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section>
    <!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="features-item">
              <i class="bi bi-file-earmark-text"></i>
              <h3><a href="" class="stretched-link">Analisis Kebutuhan</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="features-item">
              <i class="bi bi-code-slash"></i>
              <h3><a href="" class="stretched-link">Pengembangan Aplikasi</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="features-item">
              <i class="bi bi-cloud"></i>
              <h3><a href="" class="stretched-link">Solusi Cloud</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="features-item">
              <i class="bi bi-person-lines-fill"></i>
              <h3><a href="" class="stretched-link">Konsultasi IT</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="features-item">
              <i class="bi bi-bar-chart"></i>
              <h3><a href="" class="stretched-link">Data Mining</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="features-item">
              <i class="bi bi-paint-bucket"></i>
              <h3><a href="" class="stretched-link">Desain UI/UX</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="features-item">
              <i class="bi bi-check-circle"></i>
              <h3><a href="" class="stretched-link">Pengujian Perangkat Lunak</a></h3>
            </div>
          </div>
          <!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
            <div class="features-item">
              <i class="bi bi-person-check"></i>
              <h3><a href="" class="stretched-link">Pelatihan dan Dukungan</a></h3>
            </div>
          </div>
          <!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
            <div class="features-item">
              <i class="bi bi-link-45deg"></i>
              <h3><a href="" class="stretched-link">Integrasi Sistem</a></h3>
            </div>
          </div>
          <!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
            <div class="features-item">
              <i class="bi bi-shield-lock"></i>
              <h3><a href="" class="stretched-link">Keamanan Siber</a></h3>
            </div>
          </div>
          <!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
            <div class="features-item">
              <i class="bi bi-clipboard-data"></i>
              <h3><a href="" class="stretched-link">Manajemen Proyek</a></h3>
            </div>
          </div>
          <!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
            <div class="features-item">
              <i class="bi bi-file-earmark-lock"></i>
              <h3><a href="" class="stretched-link">Audit TI</a></h3>
            </div>
          </div>
          <!-- End Feature Item -->

        </div>

      </div>

    </section>
    <!-- /Features Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section py-5">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center mb-4" data-aos="fade-up">
                <h2 class="fw-bold mb-3">Statistik Kami</h2>
                <p class="text-muted">Menunjukkan pencapaian dan dedikasi kami dalam memberikan layanan terbaik.</p>
            </div>

            <div class="stats-image-container">
                <!-- Tim Image Left -->
                <div class="team-image-card" data-aos="fade-right" onclick="openModal('modal1')">
                    <img src="{{ asset('landing/assets/img/frame9.jpg') }}" 
                         alt="Tim Kami" 
                         class="team-photo">
                </div>

                <!-- Tim Image Right -->
                <div class="team-image-card" data-aos="fade-left" onclick="openModal('modal2')">
                    <img src="{{ asset('landing/assets/img/frame10.jpg') }}" 
                         alt="Tim Kami" 
                         class="team-photo">
                </div>
            </div>

            <!-- Modals -->
            <div id="modal1" class="image-modal">
                <span class="close-modal" onclick="closeModal('modal1')">&times;</span>
                <div class="modal-content">
                    <img src="{{ asset('landing/assets/img/frame9.jpg') }}" alt="Tim Kami" class="modal-image">
                </div>
            </div>

            <div id="modal2" class="image-modal">
                <span class="close-modal" onclick="closeModal('modal2')">&times;</span>
                <div class="modal-content">
                    <img src="{{ asset('landing/assets/img/frame10.jpg') }}" alt="Tim Kami" class="modal-image">
                </div>
            </div>

            <!-- Stats Counter dengan gap yang lebih kecil -->
            <div class="row g-3 justify-content-center text-center mt-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="stat-card p-4 rounded-4 shadow-sm">
                        <i class="bi bi-people-fill display-4 text-primary mb-3"></i>
                        <h3 class="counter">50+</h3>
                        <p class="mb-0">Klien Puas</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-card p-4 rounded-4 shadow-sm">
                        <i class="bi bi-code-square display-4 text-success mb-3"></i>
                        <h3 class="counter">100+</h3>
                        <p class="mb-0">Proyek Selesai</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-card p-4 rounded-4 shadow-sm">
                        <i class="bi bi-award display-4 text-warning mb-3"></i>
                        <h3 class="counter">5+</h3>
                        <p class="mb-0">Tahun Pengalaman</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-card p-4 rounded-4 shadow-sm">
                        <i class="bi bi-star-fill display-4 text-danger mb-3"></i>
                        <h3 class="counter">4.9</h3>
                        <p class="mb-0">Rating Kepuasan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Stats Section -->

    <!-- Project Section -->
    <section id="projects" class="projects section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Projects</h2>
        <div class="project-count">
            <span>Check Our</span> 
            <span class="description-title">Projects</span>
            <span class="text-danger">&</span>
            <span class="text-warning mx-2">Products</span>
            <span class="project-number">{{ $projects->count() }}</span>
        </div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row" id="project-container">
            @foreach ($projects as $project)
                <div class="col-lg-6 col-md-12 mb-4 project-item">
                    <div class="project-card shadow hover-effect rounded position-relative overflow-hidden">
                        <!-- Badge dengan animasi -->
                        <span class="badge {{ $project->category == 'product' ? 'bg-primary' : 'bg-success' }} position-absolute badge-corner">
                            <i class="bi {{ $project->category == 'product' ? 'bi-box-seam' : 'bi-briefcase' }}"></i>
                            {{ $project->category == 'product' ? 'Product' : 'Project' }}
                        </span>
                        
                        <!-- Gambar dengan efek hover -->
                        <div class="image-wrapper">
                            <a href="{{ Storage::url($project->thumbnail) }}" class="glightbox" data-gallery="images-projects">
                                <img src="{{ Storage::url($project->thumbnail) }}" alt="{{ $project->name }}" 
                                     class="img-fluid rounded-top project-image">
                                <div class="image-overlay">
                                    <i class="bi bi-zoom-in overlay-icon"></i>
                                </div>
                            </a>
                        </div>

                        <!-- Konten dengan styling yang lebih baik -->
                        <div class="project-caption p-4">
                            <h4 class="project-title fw-bold mb-2">{{ Str::words($project->name, 4, '...') }}</h4>
                            
                            <div class="project-meta d-flex align-items-center mb-3">
                                <span class="date-badge">
                                    <i class="bi bi-calendar3 me-1"></i>
                                    {{ \Carbon\Carbon::parse($project->created_at)->format('d M Y') }}
                                </span>
                            </div>

                            <!-- Tambahkan bagian teknologi -->
                            <div class="project-technologies mb-3">
                                @foreach($project->technologies as $technology)
                                <span class="badge bg-primary">
                                  <i class="{{ $technology->icon }} fs-4"></i>
                              </span>
                                @endforeach
                            </div>

                            <p class="project-description mb-4">{!! Str::words($project->description, 5, '...') !!}</p>
                            
                            <div class="project-actions">
                                <a href="{{ route('landing.show', $project->id) }}" class="btn btn-primary btn-view">
                                    <i class="bi bi-eye me-2"></i>Lihat Detail
                                </a>
                                <a href="{{ $project->demo }}" class="btn btn-outline-primary ms-2 btn-demo" target="_blank">
                                    <i class="bi bi-play-circle me-2"></i>Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div id="pagination" class="mt-4"></div>

      </div>

    </section>
    <!-- /Project Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <div><span>Check Our</span> <span class="description-title">Team</span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="{{ asset('landing/assets/img/frame13.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Fadli</h4>
                <span>Chief Executive Officer</span>
                <span>Chief Executive Officer</span>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="{{ asset('landing/assets/img/frame13.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Fadli</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="{{ asset('landing/assets/img/frame13.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Fadli</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="{{ asset('landing/assets/img/frame13.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Fadli</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- End Team Member -->
        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex flex-column justify-content-center">
            <div class="content text-center mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Pertanyaan yang </span><strong>Sering Diajukan</strong></h3>
              <p>
                Berikut adalah beberapa pertanyaan yang sering diajukan oleh klien kami mengenai layanan pengembangan software dan solusi teknologi yang kami tawarkan
              </p>
            </div>

            <div class="faq-container" data-aos="fade-up" data-aos-delay="200">
              <div class="faq-item faq-active">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Berapa lama waktu yang dibutuhkan untuk mengembangkan sebuah aplikasi?</h3>
                <div class="faq-content">
                  <p>Waktu pengembangan bervariasi tergantung pada kompleksitas dan skala proyek. Untuk aplikasi sederhana bisa memakan waktu 2-3 bulan, sedangkan untuk sistem yang lebih kompleks bisa membutuhkan 6-12 bulan. Kami selalu memberikan estimasi waktu yang detail setelah melakukan analisis kebutuhan dengan klien.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Bagaimana proses pengembangan software di Innovative Tech Solutions?</h3>
                <div class="faq-content">
                  <p>Kami menggunakan metodologi Agile dalam pengembangan software dengan tahapan: 1) Analisis kebutuhan & perencanaan, 2) Desain sistem & UI/UX, 3) Pengembangan & testing berkala, 4) Quality Assurance, 5) Deployment, dan 6) Maintenance. Klien dilibatkan dalam setiap tahap untuk memastikan hasil sesuai kebutuhan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah ada layanan maintenance setelah aplikasi selesai dikembangkan?</h3>
                <div class="faq-content">
                  <p>Ya, kami menyediakan layanan maintenance dan support untuk memastikan aplikasi Anda tetap berjalan optimal. Paket maintenance kami mencakup monitoring performa, backup rutin, pembaruan keamanan, perbaikan bug, dan dukungan teknis. Kami juga menawarkan SLA (Service Level Agreement) yang dapat disesuaikan dengan kebutuhan bisnis Anda.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Bagaimana dengan keamanan data dalam aplikasi yang dikembangkan?</h3>
                <div class="faq-content">
                  <p>Keamanan adalah prioritas utama kami. Kami menerapkan standar keamanan industri terkini seperti enkripsi data, autentikasi multi-factor, regular security audit, dan kepatuhan terhadap regulasi data (seperti GDPR jika diperlukan). Tim kami juga melakukan penetration testing secara berkala untuk memastikan keamanan sistem.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah saya bisa melakukan kostumisasi setelah aplikasi selesai?</h3>
                <div class="faq-content">
                  <p>Tentu saja! Kami membangun aplikasi dengan arsitektur modular yang memungkinkan pengembangan dan kostumisasi di masa depan. Anda dapat menambah fitur baru atau memodifikasi yang ada sesuai dengan perkembangan kebutuhan bisnis Anda. Tim kami siap membantu dalam proses pengembangan berkelanjutan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Faq Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Software House</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Alamat Perusahaan</p>
            <p>Kota, Kode Pos</p>
            <p class="mt-3"><strong>Telepon:</strong> <span>+62 1234 5678</span></p>
            <p><strong>Email:</strong> <span>info@softwarehouse.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Software House</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('landing/assets/js/main.js') }}"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const itemsPerPage = 2; // Jumlah proyek per halaman
        const projectItems = document.querySelectorAll('.project-item');
        const totalPages = Math.ceil(projectItems.length / itemsPerPage);
        let currentPage = 1;

        function showPage(page) {
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            projectItems.forEach((item, index) => {
                item.style.display = (index >= start && index < end) ? 'block' : 'none';
            });

            updatePagination(page);
        }

        function updatePagination(page) {
            const paginationContainer = document.getElementById('pagination');
            paginationContainer.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.innerText = i;
                button.className = (i === page) ? 'active' : '';
                button.addEventListener('click', () => {
                    currentPage = i;
                    showPage(currentPage);
                });
                paginationContainer.appendChild(button);
            }
        }

        showPage(currentPage); // Tampilkan halaman pertama
    });

    function openModal(modalId) {
        document.getElementById(modalId).style.display = "block";
        document.body.style.overflow = "hidden"; // Prevent scrolling when modal is open
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = "none";
        document.body.style.overflow = "auto"; // Re-enable scrolling
    }

    // Close modal when clicking outside the image
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('image-modal')) {
            event.target.style.display = "none";
            document.body.style.overflow = "auto";
        }
    });

    // Close modal with escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape") {
            const modals = document.getElementsByClassName('image-modal');
            for (let modal of modals) {
                modal.style.display = "none";
            }
            document.body.style.overflow = "auto";
        }
    });
  </script>

</body>
</html>