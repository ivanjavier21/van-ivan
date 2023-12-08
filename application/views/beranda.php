<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?= $judul; ?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url('assets/front/BizPage/'); ?>img/favicon.png" rel="icon">
	<link href="<?= base_url('assets/front/BizPage/'); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets/front/BizPage/'); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/BizPage/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/BizPage/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css"
		rel="stylesheet">
	<link href="<?= base_url('assets/front/BizPage/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css"
		rel="stylesheet">
	<link href="<?= base_url('assets/front/BizPage/'); ?>assets/vendor/glightbox/css/glightbox.min.css"
		rel="stylesheet">
	<link href="<?= base_url('assets/front/BizPage/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url('assets/front/BizPage/'); ?>assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: BizPage
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex align-items-center ">
		<div class="container-fluid">

			<div class="row justify-content-center align-items-center">
				<div class="col-xl-11 d-flex align-items-center justify-content-between">
					<h1 class="logo"><a href="<?= base_url(); ?>"><?= $konfig->judul_website; ?></a></h1>
					<!-- Uncomment below if you prefer to use an image logo -->
					<!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

					<nav id="navbar" class="navbar col-md-8">
						<ul>
							<li><a class="nav-link scrollto" href="<?= base_url() ?>">Home</a></li>
							<?php foreach ($kategori as $kate){ ?>
							<li><a class="nav-link scrollto"
									href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
									<?= $kate['nama_kategori'] ?>
								</a></li>
							<?php } ?>
							</li>
						</ul>
						<a href="<?= base_url('auth') ?>" class="btn btn-primary px-4 ">Login</a>
					</nav><!-- .navbar -->
				</div>
			</div>

		</div>
	</header><!-- End Header -->

	<main id="main">

		<!-- ======= Breadcrumbs ======= -->
		<section id="breadcrumbs" class="breadcrumbs">
			<div class="container">
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<?php $s=1; $i=0; foreach ($caraousel as $c) : ?>
						<button type="button" data-bs-target="#carouselExampleIndicators"
							data-bs-slide-to="<?= $i++; ?>" class="active" aria-current="true"
							aria-label="Slide <?= $s++; ?>"></button>
						<?php endforeach; ?>
					</div>
					<div class="carousel-inner">
						<?php foreach ($caraousel as $c) : ?>
						<div class="carousel-item active">
							<img src="<?= base_url('assets/upload/caraousel/' . $c['foto']) ?>" class="d-block w-100"
								alt="...">
						</div>
						<?php endforeach; ?>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
						data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
						data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</section><!-- End Breadcrumbs -->

		<!-- ======= Blog Section ======= -->
		<section id="blog" class="blog">
			<header class="section-header">
				<h3>Welcome To vanivan land</h3>
				<p>Latest Articles our Blog</p>
			</header>
			<div class="container" data-aos="fade-up">

				<div class="row">
					<?php foreach ($konten as $uu) {?>
					<div class="col-lg-4 col-md-4">
						<article class="entry">
							<div class="entry-img">
								<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>" class="img-fluid"
									style="height:400px; width:400px; object-fit:cover;">
							</div>
							<h2 class="entry-title">
								<a href="blog-single.html"><?= $uu['judul'] ?></a>
							</h2>

							<div class="entry-meta">
								<ul>
									<li class="d-flex align-items-center"><i class="bi bi-person"></i>
										<?= $uu['nama'] ?></li>
									<li class="d-flex align-items-center"><i class="bi bi-person"></i>
										<?= $uu['nama_kategori'] ?></li>
								</ul>
							</div>

							<div class="entry-content">

								<div class="read-more">
									<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>">Baca Selengkapnya</a>
								</div>
							</div>
						</article>
					</div>
					<?php }?>
				</div>
			</div>
			</div><!-- End blog entries list -->

			

				</div><!-- End sidebar recent posts-->

			</div><!-- End sidebar tags-->

			</div><!-- End sidebar -->

			</div><!-- End blog sidebar -->

			</div>

			</div>
		</section><!-- End Blog Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-info">
						<h3><?= $konfig->judul_website; ?></h3>
						<p><?= $konfig->profil_website; ?></p>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bi bi-chevron-right"></i> <a href="<?= base_url() ?>">Home</a></li>
							<?php foreach ($kategori as $kate){ ?>
							<li>
								<!-- <i class="bi bi-chevron-right"></i>  -->
								<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
									<i class="bi bi-chevron-right"></i>
									<?= $kate['nama_kategori'] ?>
							</li>
							</a>
							<?php } ?>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-contact">
						<h4>Contact Us</h4>
						<p>
							<strong>Alamat: <br> </strong><?= $konfig->alamat; ?><br>
							<strong>Phone: <br> </strong><?= $konfig->no_wa; ?><br>
							<strong>Email: <br> </strong><?= $konfig->email; ?><br>
						</p>

						<div class="social-links">
							<a href="<?= $konfig->facebook; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
							<a href="<?= $konfig->instagram; ?>" class="instagram"><i class="bi bi-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><?= $konfig->judul_website; ?></strong>. All Rights Reserved
			</div>
			<div class="credits">
				<!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>
	<!-- Uncomment below i you want to use a preloader -->
	<!-- <div id="preloader"></div> -->

	<!-- Vendor JS Files -->
	<script src="<?= base_url('assets/front/BizPage/'); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="<?= base_url('assets/front/BizPage/'); ?>assets/vendor/aos/aos.js"></script>
	<script src="<?= base_url('assets/front/BizPage/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/front/BizPage/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?= base_url('assets/front/BizPage/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url('assets/front/BizPage/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?= base_url('assets/front/BizPage/'); ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="<?= base_url('assets/front/BizPage/'); ?>assets/vendor/php-email-form/validate.js"></script>


	<!-- Template Main JS File -->
	<script src="<?= base_url('assets/front/BizPage/'); ?>assets/js/main.js"></script>

</body>

</html>
