<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title> <?= $judul_halaman ?> </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="<?= site_url('assets/DarkPan') ?>/img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
		rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= site_url('assets/DarkPan') ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= site_url('assets/DarkPan') ?>/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
		rel="stylesheet" />

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= site_url('assets/DarkPan') ?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/alerts/">
	<!-- Template Stylesheet -->
	<link href="<?= site_url('assets/DarkPan') ?>/css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid position-relative d-flex p-0">
		<!-- Sidebar Start -->
		<div class="sidebar pe-4 pb-3">
			<nav class="navbar bg-secondary navbar-dark">
				<a href="<?= base_url(); ?>" class="navbar-brand mx-4 mb-3">
					<h3 class="text-danger"><i class="fa fa-user-edit me-2"></i><?= $this->session->userdata('nama')?>
					</h3>
				</a>
				<div class="navbar-nav w-100">
					<?php $menu = $this->uri->segment(2); ?>
					<a href="<?= site_url('admin/home') ?>" class="nav-item nav-link <?php if($menu=='home'){ echo "active"; }?>"><i
							class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
					<a href="<?= site_url('admin/caraousel') ?>" class="nav-link  <?php if($menu=='caraousel'){ echo "active"; }?> "><i class="fa fa-laptop me-2"></i>Caraousel</a>
					<a href="<?= site_url('admin/kategori') ?>" class="nav-item nav-link  <?php if($menu=='kategori'){ echo "active"; }?> "><i
							class="fa fa-th me-2"></i>Kategori Konten</a>
					<a href="<?= site_url('admin/konten') ?>" class="nav-item nav-link  <?php if($menu=='konten'){ echo "active"; }?>"><i
							class="fa fa-tv me-2"></i>Konten</a>
							<?php if($this->session->userdata('level')=='Admin'){?>
								<a href="<?= site_url('admin/user') ?>" class="nav-item nav-link  <?php if($menu=='user'){ echo "active"; }?> "><i
								class="fa fa-user me-2"></i>User</a>
								<a href="<?= site_url('admin/konfigurasi') ?>" class="nav-item nav-link  <?php if($menu=='konfigurasi'){ echo "active"; }?> "><i
								class="fa fa-pen me-2"></i>Konfigurasi</a>
								<?php }else{?>
						<?php }?>
				</div>
		</div>
		</nav>
	</div>
	<!-- Sidebar End -->


	<!-- Content Start -->
	<div class="content">
		<!-- Navbar Start -->
		<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
			<a href="<?= base_url(); ?>" class="navbar-brand d-flex d-lg-none me-4">
				<h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
			</a>
			<a href="#" class="sidebar-toggler flex-shrink-0">
				<i class="fa fa-bars"></i>
			</a>
			<div class="navbar-nav align-items-center ms-auto">
				<div class="nav-item dropdown">
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
							<span class="d-none d-lg-inline-flex"> <?= $judul_halaman ?> </span>
						</a>
						<div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
							<a class="dropdown-item" href="<?= base_url('auth/logout') ?>" class="dropdown-item">Log
								Out</a>
						</div>
					</div>
				</div>
		</nav>
		<!-- Navbar End -->
		<div class="container-xxl container-p-y">
			<?= $contents; ?>
		</div>
		<!-- Footer Start -->
		<div class="container-fluid pt-4 px-4">
			<div class="bg-secondary rounded-top p-4">
				<div class="row">
					<div class="col-12 col-sm-6 text-center text-sm-start">
						&copy; <a href="#">Ivan</a>, All Right Reserved.
					</div>
					<div class="col-12 col-sm-6 text-center text-sm-end">
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						Designed By <a href="https://htmlcodex.com">Ivan</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer End -->
	</div>
	<!-- Content End -->


	<!-- Back to Top -->
	<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
	</div>

	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= site_url('assets/DarkPan') ?>/lib/chart/chart.min.js"></script>
	<script src="<?= site_url('assets/DarkPan') ?>/lib/easing/easing.min.js"></script>
	<script src="<?= site_url('assets/DarkPan') ?>/lib/waypoints/waypoints.min.js"></script>
	<script src="<?= site_url('assets/DarkPan') ?>/lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="<?= site_url('assets/DarkPan') ?>/lib/tempusdominus/js/moment.min.js"></script>
	<script src="<?= site_url('assets/DarkPan') ?>/lib/tempusdominus/js/moment-timezone.min.js"></script>
	<script src="<?= site_url('assets/DarkPan') ?>/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


	<!-- Template Javascript -->
	<script src="<?= site_url('assets/DarkPan') ?>/js/main.js"></script>
	<script>
		$('#ngilang').delay('slow').slideDown('slow').delay(10000).slideUp(600);

	</script>
</body>

</html>
