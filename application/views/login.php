<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>DarkPan - Bootstrap 5 Admin Template</title>
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

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= site_url('assets/DarkPan') ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= site_url('assets/DarkPan') ?>/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
		rel="stylesheet" />

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= site_url('assets/DarkPan') ?>/css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= site_url('assets/DarkPan') ?>/css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid position-relative d-flex p-0">
		<!-- Sign In Start -->
		<div class="container-fluid">
			<div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
				<div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
					<div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
						<div class="d-flex align-items-center justify-content-between mb-3">
							<a href="index.html" class="">
								<h3 class="text-white"><i class="fa fa-user-edit me-2"></i>Selamat Datang di CMS</h3>
							</a>

						</div>
						<form action="<?= base_url('auth/login') ?>" method="post">
						<div class="form-floating mb-3" action="" method="POST">
							<input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">
							<label for="floatingInput">Username</label>
						</div>
						<div class="form-floating mb-4">
							<input type="password" name="password" class="form-control" placeholder="Password">
							<label for="floatingPassword">Password</label>
						</div>
						<div class="d-flex align-items-center justify-content-between mb-4">
						</div>
						<button type="submit" class="btn btn-info py-3 w-100 mb-4">Login</button>
						<div id="ngilang">
							<?= $this->session->flashdata('alert')?>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Sign In End -->
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
	<script src="<?= site_url('assets/DarkPan') ?>	/js/main.js"></script>
</body>

</html>
