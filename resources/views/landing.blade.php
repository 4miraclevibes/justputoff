<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CV Innovative Tech Solutions</title>
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
    padding: 8px 16px;
    font-size: 0.85rem;
    z-index: 2;
    border-radius: 30px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: all 0.3s ease;
    min-width: 100px;
    justify-content: center;
    font-weight: 500;
    text-transform: capitalize;
    background: rgba(255, 255, 255, 0.9) !important; /* Warna background putih transparan */
}

.badge-left {
    left: 20px;
    right: auto;
}

.badge-right {
    right: 20px;
    left: auto;
}

/* Styling untuk badge product */
.badge-corner.bg-primary {
    color: #4e54c8 !important; /* Warna teks biru */
    border: none;
}

/* Styling untuk badge project */
.badge-corner.bg-success {
    color: #28a745 !important; /* Warna teks hijau */
    border: none;
}

/* Icon dalam badge */
.badge-corner i {
    font-size: 1rem;
}

/* Hover effect */
.badge-corner:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}

/* Responsif untuk mobile */
@media (max-width: 768px) {
    .badge-corner {
        min-width: 90px;
        font-size: 0.75rem;
        padding: 6px 12px;
    }
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
    background-color: #16b428;
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

/* Perbaikan styling untuk FAQ */
.faq-item {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 15px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    cursor: pointer; /* Tambahkan cursor pointer untuk seluruh item */
}

.faq-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    cursor: pointer;
}

.faq-title {
    display: flex;
    align-items: center;
    gap: 15px;
    flex: 1;
}

.faq-toggle {
    transition: transform 0.3s ease;
    color: #4e54c8;
    margin-left: 15px;
}

.faq-item.faq-active .faq-toggle {
    transform: translateY(-50%) rotate(90deg);
}

.faq-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
    margin-top: 0;
    opacity: 0;
}

.faq-item.faq-active .faq-content {
    max-height: 1000px; /* Nilai maksimum yang cukup besar */
    margin-top: 15px;
    opacity: 1;
    transition: max-height 0.3s ease-in, opacity 0.3s ease-in;
}

/* Styling untuk list dalam FAQ */
.faq-content ul {
    margin-top: 10px;
}

.faq-content ul li {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
}

.faq-content ul li i {
    flex-shrink: 0;
    margin-right: 10px;
}

.badge-left {
    left: 20px;
    right: auto;
}

.badge-right {
    right: 20px;
    left: auto;
}

/* Responsif untuk mobile */
@media (max-width: 768px) {
    .badge-corner {
        min-width: 100px;
        font-size: 0.75rem;
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
            <img src="{{ asset('assets/img/Apps.png') }}" class="img-fluid animated" alt="">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-in">
            <h1>Inovasi Digital untuk Masa Depan yang Lebih Baik</h1>
            <p class="mb-4">CV Innovative Tech Solutions adalah software house yang digerakkan oleh semangat mahasiswa dengan visi menghadirkan solusi teknologi inovatif. Kami menggabungkan kreativitas muda dengan standar profesional untuk memberikan layanan pengembangan perangkat lunak yang berkualitas.</p>
            <p class="mb-4">Dengan legalitas penuh sebagai CV dan didukung oleh tim yang berdedikasi, kami siap membantu mewujudkan transformasi digital untuk bisnis Anda.</p>
            <div class="d-flex gap-3">
              <a href="#projects" class="btn-get-started">Lihat Portfolio</a>
              <a href="#about" class="btn-get-started btn-secondary">Tentang Kami</a>
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
            <h2>CV Innovative Tech Solutions - Memimpin Inovasi Digital</h2>
            <p class="mb-4">Sebagai software house yang digerakkan oleh semangat mahasiswa berprestasi, kami menggabungkan kreativitas muda dengan standar profesional untuk menghadirkan solusi teknologi yang inovatif dan terpercaya.</p>
            <p class="mb-4">Dengan legalitas penuh sebagai CV dan didukung oleh tim yang berdedikasi, kami berkomitmen untuk:</p>
            <ul class="list-unstyled mb-4">
              <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Menghadirkan solusi teknologi berkualitas tinggi</li>
              <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Memberikan layanan yang tepat waktu dan efisien</li>
              <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Menjamin kepuasan klien dengan hasil terbaik</li>
            </ul>
            <a href="#contact" class="read-more"><span>Mulai Konsultasi Gratis</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-file-earmark-text"></i>
                  <h3>Analisis & Perencanaan</h3>
                  <p>Tim ahli kami melakukan analisis mendalam untuk memahami kebutuhan bisnis Anda dan merancang solusi yang tepat sasaran dengan metodologi Agile.</p>
                </div>
              </div>

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-code-slash"></i>
                  <h3>Pengembangan Modern</h3>
                  <p>Menggunakan teknologi terkini dan best practices dalam pengembangan aplikasi untuk menghasilkan produk yang scalable dan mudah dimaintain.</p>
                </div>
              </div>

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-shield-check"></i>
                  <h3>Keamanan & Performa</h3>
                  <p>Menerapkan standar keamanan tinggi dan optimasi performa untuk memastikan aplikasi Anda berjalan dengan aman dan efisien.</p>
                </div>
              </div>

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-headset"></i>
                  <h3>Dukungan Prima</h3>
                  <p>Menyediakan layanan support 24/7 dan maintenance berkala untuk memastikan sistem Anda selalu dalam kondisi optimal.</p>
                </div>
              </div>

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
                        <!-- Badge kategori di kiri -->
                        <span class="badge {{ $project->category == 'product' ? 'bg-primary' : 'bg-success' }} position-absolute badge-corner badge-left">
                            <i class="bi {{ $project->category == 'product' ? 'bi-box-seam' : 'bi-briefcase' }}"></i>
                            {{ $project->category == 'product' ? 'Product' : 'Project' }} <span class="text-muted"> ~ </span> <span class="badge {{ $project->status == 'done' ? 'bg-success' : 'bg-warning' }}">{{ $project->status }}</span>
                        </span>
                        <!-- Badge nama di kanan -->
                        <span class="badge {{ $project->category == 'product' ? 'bg-success' : 'bg-primary' }} position-absolute badge-corner badge-right">
                            <i class="bi {{ $project->category == 'product' ? 'bi-box-seam' : 'bi-briefcase' }}"></i>
                            {{ Str::words($project->name, 4, '...') }}
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
                            <p class="project-description">{!! Str::words($project->description, 10, '...') !!}</p>
                            <!-- Tambahkan bagian teknologi -->
                            <div class="project-technologies mb-3">
                              @foreach($project->technologies as $technology)
                              <span class="badge bg-primary">
                                <i class="{{ $technology->icon }} fs-4"></i>
                              </span>
                                @endforeach
                            </div>
                            
                            <div class="project-actions">
                                <a href="{{ route('landing.show', $project->id) }}" class="btn btn-secondary btn-view">
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
            <div class="member card">
              <div class="pic"><img src="{{ asset('assets/img/Ucok.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Kholid Hasibuan</h4>
                <span>Director / BE Dev</span>
                <div class="social">
                  <a href="https://www.linkedin.com/in/justputoff" target="_blank"><i class="bi bi-linkedin"></i></a>
                  <a href="https://www.facebook.com/justputoff" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/justputoff" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://x.com/justputoff" target="_blank"><i class="bi bi-twitter-x"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member card">
              <div class="pic"><img src="{{ asset('assets/img/Mus.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Khairul Mustafa</h4>
                <span>UI / UX Designer</span>
                <div class="social">
                  <a href="https://www.linkedin.com/in/justputoff" target="_blank"><i class="bi bi-linkedin"></i></a>
                  <a href="https://www.facebook.com/justputoff" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/justputoff" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://x.com/justputoff" target="_blank"><i class="bi bi-twitter-x"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member card">
              <div class="pic"><img src="{{ asset('assets/img/Nanda.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Gusti Nanda</h4>
                <span>Media Sosial Specialist</span>
                <div class="social">
                  <a href="https://www.linkedin.com/in/justputoff" target="_blank"><i class="bi bi-linkedin"></i></a>
                  <a href="https://www.facebook.com/justputoff" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/justputoff" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://x.com/justputoff" target="_blank"><i class="bi bi-twitter-x"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member card">
              <div class="pic"><img src="{{ asset('assets/img/Rian.png ') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Rahmad Avriantias Aulia</h4>
                <span>FE Dev / Mobile</span>
                <div class="social">
                  <a href="https://www.linkedin.com/in/justputoff" target="_blank"><i class="bi bi-linkedin"></i></a>
                  <a href="https://www.facebook.com/justputoff" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/justputoff" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://x.com/justputoff" target="_blank"><i class="bi bi-twitter-x"></i></a>
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
                Berikut adalah beberapa pertanyaan umum tentang CV Innovative Tech Solutions dan layanan pengembangan software yang kami tawarkan
              </p>
            </div>

            <div class="faq-container" data-aos="fade-up" data-aos-delay="200">
              <div class="faq-item">
                <div class="faq-header">
                    <div class="faq-title">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>Mengapa harus memilih CV Innovative Tech Solutions?</h3>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <div class="faq-content">
                    <p>Sebagai software house yang dijalankan oleh mahasiswa berprestasi, kami menawarkan:</p>
                    <ul class="list-unstyled ps-3">
                        <li><i class="bi bi-check2-circle text-primary me-2"></i>Kreativitas dan ide segar dalam pengembangan solusi digital</li>
                        <li><i class="bi bi-check2-circle text-primary me-2"></i>Harga yang lebih kompetitif dengan kualitas terjamin</li>
                        <li><i class="bi bi-check2-circle text-primary me-2"></i>Legalitas penuh sebagai CV resmi</li>
                        <li><i class="bi bi-check2-circle text-primary me-2"></i>Tim yang update dengan teknologi terkini</li>
                    </ul>
                </div>
              </div>

              <div class="faq-item">
                <div class="faq-header">
                    <div class="faq-title">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>Bagaimana proses pengembangan software di tim kami?</h3>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <div class="faq-content">
                    <p>Kami menerapkan metodologi Agile yang fleksibel dengan tahapan:</p>
                    <ul class="list-unstyled ps-3">
                        <li><i class="bi bi-1-circle text-primary me-2"></i>Konsultasi & analisis kebutuhan mendalam</li>
                        <li><i class="bi bi-2-circle text-primary me-2"></i>Perancangan UI/UX yang modern</li>
                        <li><i class="bi bi-3-circle text-primary me-2"></i>Pengembangan dengan teknologi terkini</li>
                        <li><i class="bi bi-4-circle text-primary me-2"></i>Testing & quality assurance</li>
                        <li><i class="bi bi-5-circle text-primary me-2"></i>Deployment & maintenance berkelanjutan</li>
                    </ul>
                </div>
              </div>

              <div class="faq-item">
                <div class="faq-header">
                    <div class="faq-title">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>Apakah tim mahasiswa dapat menjamin kualitas produk?</h3>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <div class="faq-content">
                    <p>Absolut! Tim kami terdiri dari mahasiswa berprestasi dengan pengalaman nyata dalam pengembangan software. Kami memiliki:</p>
                    <ul class="list-unstyled ps-3">
                        <li><i class="bi bi-shield-check text-primary me-2"></i>Portfolio proyek yang telah terbukti</li>
                        <li><i class="bi bi-shield-check text-primary me-2"></i>Sertifikasi di bidang teknologi</li>
                        <li><i class="bi bi-shield-check text-primary me-2"></i>Pengalaman magang di perusahaan teknologi</li>
                        <li><i class="bi bi-shield-check text-primary me-2"></i>Mentor profesional yang membimbing</li>
                    </ul>
                </div>
              </div>

              <div class="faq-item">
                <div class="faq-header">
                    <div class="faq-title">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>Bagaimana dengan ketersediaan tim untuk support?</h3>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <div class="faq-content">
                    <p>Meski tim kami terdiri dari mahasiswa aktif, kami memiliki sistem kerja yang terorganisir:</p>
                    <ul class="list-unstyled ps-3">
                        <li><i class="bi bi-clock text-primary me-2"></i>Dukungan teknis 12 jam setiap hari kerja</li>
                        <li><i class="bi bi-people text-primary me-2"></i>Tim yang bekerja dalam shift untuk memastikan responsivitas</li>
                        <li><i class="bi bi-chat-dots text-primary me-2"></i>Sistem ticketing untuk melacak dan menyelesaikan masalah</li>
                        <li><i class="bi bi-calendar-check text-primary me-2"></i>Maintenance terjadwal di luar jam kuliah</li>
                    </ul>
                </div>
              </div>

              <div class="faq-item">
                <div class="faq-header">
                    <div class="faq-title">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>Apa keunggulan layanan maintenance kami?</h3>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                </div>
                <div class="faq-content">
                    <p>Paket maintenance kami dirancang komprehensif namun terjangkau, mencakup:</p>
                    <ul class="list-unstyled ps-3">
                        <li><i class="bi bi-gear text-primary me-2"></i>Pemantauan performa sistem 24/7</li>
                        <li><i class="bi bi-cloud-arrow-up text-primary me-2"></i>Backup data otomatis dan terjadwal</li>
                        <li><i class="bi bi-shield text-primary me-2"></i>Update keamanan berkala</li>
                        <li><i class="bi bi-graph-up text-primary me-2"></i>Laporan performa bulanan</li>
                        <li><i class="bi bi-tools text-primary me-2"></i>Perbaikan bug dan optimasi sistem</li>
                    </ul>
                </div>
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
                <a href="/" class="logo d-flex align-items-center">
                    <span class="sitename">CV Innovative Tech Solutions</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>Jl. Sisingamangaraja No. 12</p>
                    <p>Medan, Sumatera Utara 20217</p>
                    <p class="mt-3"><strong>Telepon:</strong> <span>+62 821-6012-6862</span></p>
                    <p><strong>Email:</strong> <span>hello@innovativetech.id</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href="https://x.com/innovativetech" target="_blank"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.instagram.com/innovativetech.id" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/innovative-tech-solutions-id" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="https://github.com/innovative-tech" target="_blank"><i class="bi bi-github"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Tautan Cepat</h4>
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#features">Layanan</a></li>
                    <li><a href="#projects">Portfolio</a></li>
                    <li><a href="#team">Tim Kami</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Layanan Kami</h4>
                <ul>
                    <li><a href="#features">Pengembangan Web</a></li>
                    <li><a href="#features">Aplikasi Mobile</a></li>
                    <li><a href="#features">Desain UI/UX</a></li>
                    <li><a href="#features">Konsultasi IT</a></li>
                    <li><a href="#features">Solusi Cloud</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-newsletter">
                <h4>Newsletter Kami</h4>
                <p>Berlangganan newsletter kami untuk mendapatkan informasi terbaru tentang teknologi dan penawaran khusus!</p>
                <form action="#" method="post" class="php-email-form">
                    @csrf
                    <div class="newsletter-form">
                        <input type="email" name="email" placeholder="Masukkan email Anda">
                        <input type="submit" value="Berlangganan">
                    </div>
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Terima kasih telah berlangganan newsletter kami!</div>
                </form>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1">CV Innovative Tech Solutions</strong> <span>2024. All Rights Reserved</span></p>
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

    // Perbaikan script untuk FAQ
    document.addEventListener('DOMContentLoaded', function() {
        const faqItems = document.querySelectorAll('.faq-item');
        
        faqItems.forEach(item => {
            const header = item.querySelector('.faq-header');
            const content = item.querySelector('.faq-content');
            const toggle = item.querySelector('.faq-toggle');
            
            function toggleFaq() {
                // Tutup semua item lain
                faqItems.forEach(otherItem => {
                    if (otherItem !== item && otherItem.classList.contains('faq-active')) {
                        otherItem.classList.remove('faq-active');
                        const otherContent = otherItem.querySelector('.faq-content');
                        const otherToggle = otherItem.querySelector('.faq-toggle');
                        otherContent.style.maxHeight = '0';
                        otherContent.style.opacity = '0';
                        otherToggle.style.transform = 'rotate(0deg)';
                    }
                });
                
                // Toggle item yang diklik
                const isActive = item.classList.toggle('faq-active');
                
                if (isActive) {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    content.style.opacity = '1';
                    toggle.style.transform = 'rotate(90deg)';
                } else {
                    content.style.maxHeight = '0';
                    content.style.opacity = '0';
                    toggle.style.transform = 'rotate(0deg)';
                }
            }
            
            // Tambahkan event listener untuk seluruh item
            item.addEventListener('click', toggleFaq);
        });
    });
  </script>

</body>
</html>