<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $data['title'] }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="assets/css/login-register.css" rel="stylesheet" />
  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


<style>
.col-xs-5ths,
.col-sm-5ths,
.col-md-5ths,
.col-lg-5ths {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col-xs-5ths {
    width: 20%;
    float: left;
}

@media (min-width: 768px) {
    .col-sm-5ths {
        width: 20%;
        float: left;
    }
}

@media (min-width: 992px) {
    .col-md-5ths {
        width: 20%;
        float: left;
    }
}

@media (min-width: 1200px) {
    .col-lg-5ths {
        width: 20%;
        float: left;
    }
}

</style>
  <!-- =======================================================
  * Template Name: UpConstruction - v1.0.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <!-- <h1>{{ $data['title'] }}<span>.</span></h1> -->
		<img src="/images/jata.png" height="50px">
		<img src="/images/jps.png" height="50px" style="padding-right:20px;">
		<img src="/images/npis.png" height="50px">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#" class="active">Utama</a></li>
          <li><a href="#about">Pengenalan</a></li>
          <li><a href="#recent-blog-posts">Berita Terkini</a></li>
          <li><a href="#services">Modul NPIS</a></li>
          <li><a href="#contact">Hubungi Kami</a></li>
          <li><a href="javascript:void(0)" onclick="openLoginModal();">Log Masuk</a></li>
		  <!--
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
		  -->
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">{{ $data['title'] }}</h2>
            <p data-aos="fade-up">{{ $data['header'] }}, Platform pengurusan pemantauan portfolio projek yang besar dapat dijalankan dengan cekap dan membolehkan penyampaian maklumat kemajuan projek dengan lebih efektif.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Selanjutnya</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(/images/1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(/images/2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(/images/3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(/images/4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(/images/5.jpeg)"></div>
      <div class="carousel-item" style="background-image: url(/images/6.jpeg)"></div>
      <div class="carousel-item" style="background-image: url(/images/7.jpeg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">
	<section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url(images/4.jpg);"></div>

          <div class="col-lg-7">
            <h2>NPIS</h2>
            <div class="our-story">
              <h4>Est 2022</h4>
              <h3>Tentang Kami</h3>
              <p>Sistem Maklumat Projek Kebangsaan (NPIS), Jabatan Pengairan dan Saliran(JPS) boleh digunakan untuk mengurus portfolio projek yang masih aktif, merekod  status  projek,  dan  berkongsi  status  terkini  projek dengan pihak berkepentingan dalaman dan luaran. Ianya membolehkan pengurusan pemantauan portfolio projek yang besar dapat dijalankan dengan cekap dan membolehkan penyampaian maklumat kemajuan projek dengan lebih efektif.</p>
              <p>Sistem NPIS mula dibangunkan sejak tahun 2022 dan telah digunapakai pada tahun 2023.</p>

              <!--<div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
              </div> -->
            </div>
          </div>

        </div>

      </div>
    </section>
	<!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">



		<div class="section-header">
			<h2>Berita Terkini</h2>
			<p>Berita terkini di Jabatan Pengairan & Saliran Malaysia</p>
		</div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="images/post10.jpg" class="img-fluid" alt="">
              <span class="post-date">10 Jun 2022</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">4 PROJEK TEBATAN BANJIR DI PULAU PINANG SIAP</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Pentadbir</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Berita Harian</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Baca</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="images/post5.jpg" class="img-fluid" alt="">
              <span class="post-date">5 Jun 2022</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">SYOR SISTEM SALIRAN HADAPI BANJIR UNTUK 200 TAHUN</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Pentadbir</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Berita Harian</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Baca</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

            <div class="post-img position-relative overflow-hidden">
              <img src="images/post6.jpg" class="img-fluid" alt="">
              <span class="post-date">6 Jun 2022</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">	BINA RUANGAN TAKUNGAN AIR BAWAH TANAH</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Pentadbir</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Berita Harian</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Baca</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

      </div>

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->
	<!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Modul NPIS</h2>
          <p>Senarai Modul yang terkandung di dalam NPIS</p>
        </div>

        <div class="row gy-4">

			<div class="col-lg-5ths col-md-5ths" data-aos="fade-up" data-aos-delay="100">
				<div class="service-item  position-relative">
				<div class="icon">
					<i class="fa-solid fa-file-alt"></i>
				</div>
				<h3>Permohonan Projek</h3>
				<a href="service-details.html" class="readmore stretched-link">Selanjutnya <i class="bi bi-arrow-right"></i></a>
				</div>
			</div><!-- End Service Item -->

			<div class="col-lg-5ths col-md-5ths" data-aos="fade-up" data-aos-delay="200">
				<div class="service-item position-relative">
				<div class="icon">
					<i class="fa-solid fa-eye"></i>
				</div>
				<h3>Modul Pemantauan & Penilaian Projek JPS</h3>
				<a href="service-details.html" class="readmore stretched-link">Selanjutnya <i class="bi bi-arrow-right"></i></a>
				</div>
			</div><!-- End Service Item -->

			<div class="col-lg-5ths col-md-5ths" data-aos="fade-up" data-aos-delay="300">
				<div class="service-item position-relative">
				<div class="icon">
					<i class="fa-solid fa-magnifying-glass"></i>
				</div>
				<h3>Modul Pemantauan & Penilaian Projek Jabatan Bukan Teknik</h3>
				<a href="service-details.html" class="readmore stretched-link">Selanjutnya <i class="bi bi-arrow-right"></i></a>
				</div>
			</div><!-- End Service Item -->

			<div class="col-lg-5ths col-md-5ths" data-aos="fade-up" data-aos-delay="400">
				<div class="service-item position-relative">
				<div class="icon">
					<i class="fa-solid fa-file-invoice"></i>
				</div>
				<h3>Kontrak</h3>
				<a href="service-details.html" class="readmore stretched-link">Selanjutnya <i class="bi bi-arrow-right"></i></a>
				</div>
			</div><!-- End Service Item -->

			<div class="col-lg-5ths col-md-5ths" data-aos="fade-up" data-aos-delay="500">
				<div class="service-item position-relative">
				<div class="icon">
					<i class="fa-solid fa-user"></i>
				</div>
				<h3>Perunding</h3>
				<a href="service-details.html" class="readmore stretched-link">Selanjutnya <i class="bi bi-arrow-right"></i></a>
				</div>
			</div><!-- End Service Item -->

			<div class="col-lg-5ths col-md-5ths" data-aos="fade-up" data-aos-delay="600">
				<div class="service-item position-relative">
				<div class="icon">
					<i class="fa-solid fa-search-dollar"></i>
				</div>
				<h3>Value Management (VM)</h3>
				<a href="service-details.html" class="readmore stretched-link">Selanjutnya <i class="bi bi-arrow-right"></i></a>
				</div>
			</div><!-- End Service Item -->

			<div class="col-lg-5ths col-md-5ths" data-aos="fade-up" data-aos-delay="600">
				<div class="service-item position-relative">
				<div class="icon">
					<i class="fa-solid fa-file-pen"></i>
				</div>
				<h3>Notice of Change (NOC)</h3>
				<a href="service-details.html" class="readmore stretched-link">Selanjutnya <i class="bi bi-arrow-right"></i></a>
				</div>
			</div><!-- End Service Item -->

			<div class="col-lg-5ths col-md-5ths" data-aos="fade-up" data-aos-delay="600">
				<div class="service-item position-relative">
				<div class="icon">
					<i class="fa-solid fa-file-signature"></i>
				</div>
				<h3>Peruntukan di Luar Rolling Plan (RP)</h3>
				<a href="service-details.html" class="readmore stretched-link">Selanjutnya <i class="bi bi-arrow-right"></i></a>
				</div>
			</div><!-- End Service Item -->

			<div class="col-lg-5ths col-md-5ths" data-aos="fade-up" data-aos-delay="600">
				<div class="service-item position-relative">
				<div class="icon">
					<i class="fa-solid fa-chart-pie"></i>
				</div>
				<h3>Penjanaan Laporan</h3>
				<a href="service-details.html" class="readmore stretched-link">Selanjutnya <i class="bi bi-arrow-right"></i></a>
				</div>
			</div><!-- End Service Item -->

			<div class="col-lg-5ths col-md-5ths" data-aos="fade-up" data-aos-delay="600">
				<div class="service-item position-relative">
				<div class="icon">
					<i class="fa-solid fa-earth-asia"></i>
				</div>
				<h3>Geo-Board</h3>
				<a href="service-details.html" class="readmore stretched-link">Selanjutnya <i class="bi bi-arrow-right"></i></a>
				</div>
			</div><!-- End Service Item -->

        </div>

		</div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Alamat</h3>
              <p>JABATAN PENGAIRAN & SALIRAN (JPS)<br/>50626, Jalan Sultan Salahuddin, <br/>50480 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>npis@water.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Telefon</h3>
              <p> +(60) 03-2698 1711</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
            <iframe src="https://maps.google.com/maps?q=jps%20hq&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Mesej" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Hantar Maklumbalas</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
<!-- MODAL -->
<div class="container">
	 <div class="modal fade login" id="loginModal">
		  <div class="modal-dialog login animated" style="width:500px">
			  <div class="modal-content">
				 <div class="modal-header">
					<h4 class="modal-title">Log Masuk</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="box">
						 <div class="content">
							<div class="error"></div>
							<div class="form loginBox">
								<form method="post" action="/login_process" accept-charset="UTF-8">
                                    @csrf
								<input id="nokp" class="form-control" type="text" placeholder="Email" name="email">
								<input id="pwd" class="form-control" type="password" placeholder="Katalaluan" name="password">
								<!-- <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()"> -->
                                <input class="btn btn-default btn-login" value="Login" type="submit"></button>
								</form>
							</div>
						 </div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="forgot login-footer">
                        <span>
                            <a href="/register">Daftar</a> |
                       </span>
						<span>
							 <a href="#">Lupa Katalaluan</a>
						?</span>
					</div>
				</div>
			  </div>
		  </div>
	  </div>
    </div>
<!-- MODAL END-->
<style>
.hitcounter-text{
	border-style:solid;
	border-color:#fff;
	border-radius:10px;
	background:#fff;
	color:#000;
	padding:3px;
}
</style>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
		<div class="row">
				<div class="col-lg-3 col-md-3 footer-links">
				<p>Bilangan Pelawat : <span class="hitcounter-text">1000</span></p>
				</div>
				<div class="col-lg-3 col-md-3 footer-links">
				<p>Bilangan Pelawat Hari Ini : <span class="hitcounter-text">10</span></p> </p>
				</div>
				<div class="col-lg-3 col-md-3 footer-links">
				<p>Bilangan Pelawat Bulan Ini : <span class="hitcounter-text">100</span></p> </p>
				</div>
				<div class="col-lg-3 col-md-3 footer-links">
				<p>Bilangan Pelawat Tahun ini : <span class="hitcounter-text">500</span></p> </p>
				</div>
		</div>
        <div class="row">

          <div class="col-lg-2 col-md-6">
            <div class="footer-info">
              <h3>NPIS</h3>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
			   <p>
                Versi 1.0
              </p>
            </div>
          </div><!-- End footer info column-->
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Portal Rasmi KASA</h4>
            <p><a href="#"><img src="/images/jata.png" height="50px"></a></p>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Portal Rasmi JPS</h4>
            <p><a href="#"><img src="/images/jps.png" height="50px"></a></p>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>SMSA</h4>
            <p><a href="#"><img src="/images/smsa.png" height="50px"></a></p>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>SPAQS</h4>
            <p><a href="#"><img src="/images/jps.png" height="50px"></a></p>
          </div><!-- End footer links column-->

		  <div class="col-lg-2 col-md-3 footer-links">
            <h4>MyProjek, ICU JPM</h4>
            <p><a href="#"><img src="/images/myprojek.png" height="50px"></a></p>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">

          &copy; Hak Cipta Terpelihara 2023 <strong><span>© Jabatan Pengairan dan Saliran (JPS)</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Paparan terbaik menggunakan Mozilla Firefox, Chrome dan Microsoft Edge ke atas dengan Resolusi 1920 x 1080
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/login-register.js" type="text/javascript"></script>
  <script src="assets/js/jquery-3.6.0.min.js" type="text/javascript"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
