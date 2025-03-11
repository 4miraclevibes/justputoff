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
  .project-detail {
  padding: 60px 0;
}

.project-images-slider {
  border-radius: 8px;
  overflow: hidden;
}

.project-info {
  background: #f8f9fa;
  padding: 30px;
  border-radius: 8px;
}

.project-info ul {
  list-style: none;
  padding: 0;
}

.project-info ul li {
  margin-bottom: 15px;
}

.tech-tags .badge {
  margin: 0 5px 5px 0;
  padding: 8px 15px;
}

.feature-item {
  background: #fff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
}

.feature-item i {
  font-size: 32px;
  color: #0ea2bd;
  margin-bottom: 20px;
}
</style>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: #10058c;">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/img/logo-white.png') }}" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('landing') }}" class="active">Beranda</a></li>
          <li><a href="{{ route('landing') }}#about">Tentang Kami</a></li>
          <li><a href="{{ route('landing') }}#features">Layanan</a></li>
          <li><a href="{{ route('landing') }}#projects">Projects</a></li>
          <li><a href="{{ route('landing') }}#team">Tim Kami</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">
    <!-- Detail Project Section -->
    <section id="project-detail" class="project-detail section-bg" style="margin-top: 80px;">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8">
            <!-- Project Images Gallery -->
            <div class="swiper project-images-slider">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide card">
                  <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->name }}" class="img-fluid">
                </div>
                @foreach($project->projectImages as $image)
                <div class="swiper-slide">
                  <img src="{{ asset('storage/' . $image->image) }}" alt="Project Image" class="img-fluid">
                </div>
                @endforeach
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="project-info">
              <h3>Informasi Project</h3>
              <ul>
                <li><strong>Nama Project</strong>: {{ $project->name }}</li>
                <li><strong>Kategori</strong>: {{ $project->category }}</li>
                <li><strong>Status</strong>: <span class="badge {{ $project->status == 'done' ? 'bg-success' : 'bg-warning' }}">{{ ucfirst($project->status) }}</span></li>
                <li><strong>Client</strong>: {{ $project->user->name }}</li>
                @if($project->demo)
                <li><strong>Demo URL</strong>: <a href="{{ $project->demo }}" target="_blank">Lihat Demo</a></li>
                @endif
              </ul>

              <!-- Technologies Used -->
              <div class="technologies mt-4">
                <h4>Teknologi yang Digunakan:</h4>
                <div class="tech-tags">
                  @foreach($project->technologies as $tech)
                  <span class="badge bg-primary"><i class="{{ $tech->icon }} fs-4"></i><span class="fs-6">{{ $tech->name }}</span></span>
                  @endforeach
                </div>
              </div>
            </div>
          </div>

          <!-- Project Description -->
          <div class="col-lg-12 mt-5">
            <div class="project-description">
              <div class="content">
                {!! $project->description !!}
              </div>
            </div>
          </div>

          <!-- Project Details -->
          @if($project->projectDetails->count() > 0)
          <div class="col-lg-12 mt-5">
            <div class="project-features">
              <h3>Fitur Project</h3>
              <div class="row gy-4">
                @foreach($project->projectDetails as $detail)
                <div class="col-md-6">
                  <div class="feature-item" data-aos="fade-up">
                    <i class="bi bi-check-circle"></i>
                    <h4>{{ $detail->title }}</h4>
                    <p>{!! $detail->description !!}</p>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
    </section>
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
</body>
</html>