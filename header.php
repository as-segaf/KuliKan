<!DOCTYPE html>
	<html lang="zxx" class="no-js">
		<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>KuliKan</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">					
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/main.css">


		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.html">Home</a></li>
				          <li><a href="about-us.php">Tentang kami</a></li>
				          <li><a href="category.php">Pilihan Jasa</a></li>
				          <li><a href="partner-kami.php">Partner Kami</a></li>
				          <li><a href="blog-home.php">Blog</a></li>
				          <li><a href="contact.php">Kontak</a></li>
				          <li class="menu-has-children"><a href="">Pages</a>
				            <ul>
								<li><a href="elements.html">elements</a></li>
								<li><a href="search.html">search</a></li>
								<li><a href="single.html">single</a></li>
				            </ul>
				          </li>
				          <li><a class="ticker-btn" href="#" data-toggle="modal" data-target="#modalLRForm">Gabung</a></li>
				          <!-- <li><a class="ticker-btn" href="#" data-toggle="modal" data-target="#modalLRForm">Login</a></li>	 -->			          				          
				        </ul>
				      </nav><!-- #nav-menu-container -->
			    	</div>
			    </div>
			    
			  </header><!-- #header -->


			  <!--Modal: Login / Register Form-->
				<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog cascading-modal" role="document">
				    <!--Content-->
				    <div class="modal-content">

				      <!--Modal cascading tabs-->
				      <div class="modal-c-tabs">

				        <!-- Nav tabs -->
				        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
				          <li class="nav-item">
				            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user fa-lg mr-1"></i>
				              Login</a>
				          </li>
				          <li class="nav-item">
				            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus fa-lg mr-1"></i>
				              Daftar</a>
				          </li>
				        </ul>

				        <!-- Tab panels -->
				        <div class="tab-content">
				          <!--Panel 7-->
				          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

				            <!--Body-->
				            <div class="modal-body mb-1">
				              <div class="md-form form-sm mb-5">
				                <i class="fas fa-envelope fa-lg prefix mb-2"></i>
				                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
				                <label data-error="wrong" data-success="right" for="modalLRInput10">Masukan e-mail</label>
				              </div>

				              <div class="md-form form-sm mb-4">
				                <i class="fas fa-lock fa-lg prefix mb-2"></i>
				                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
				                <label data-error="wrong" data-success="right" for="modalLRInput11">Masukan password</label>
				              </div>
				              <div class="text-center mt-2">
				                <button class="btn btn-info">Masuk<i class="fas fa-sign-in-alt ml-1"></i><!--  <i class= "fas fa-sign-in ml-1"></i> --></button>
				              </div>
				            </div>
				            <!--Footer-->
				            <div class="modal-footer">
				              <div class="options text-center text-md-right mt-1">
				                <p>Belum punya akun? <a href="#" class="blue-text">Daftar</a></p>
				                <p>Lupa <a href="#" class="blue-text">Password?</a></p>
				              </div>
				              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Tutup</button>
				            </div>

				          </div>
				          <!--/.Panel 7-->

				          <!--Panel 8-->
				          <div class="tab-pane fade" id="panel8" role="tabpanel">

				            <!--Body-->
				            <div class="modal-body">
				              <div class="md-form form-sm mb-5">
				                <i class="fas fa-envelope fa-lg prefix"></i>
				                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
				                <label data-error="wrong" data-success="right" for="modalLRInput12">Masukan e-mail</label>
				              </div>

				              <div class="md-form form-sm mb-5">
				                <i class="fas fa-lock fa-lg prefix"></i>
				                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
				                <label data-error="wrong" data-success="right" for="modalLRInput13">Masukan password</label>
				              </div>

				              <div class="md-form form-sm mb-4">
				                <i class="fas fa-lock fa-lg prefix"></i>
				                <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
				                <label data-error="wrong" data-success="right" for="modalLRInput14">Ulangi password</label>
				              </div>

				              <div class="text-center form-sm mt-2">
				                <button class="btn btn-info">Sign up <i class="fas fa-sign-in-alt ml-1"></i></button>
				              </div>

				            </div>
				            <!--Footer-->
				            <div class="modal-footer">
				              <div class="options text-right">
				                <p class="pt-1">Sudah punya akun? <a href="#" class="blue-text">Log In</a></p>
				              </div>
				              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Tutup</button>
				            </div>
				          </div>
				          <!--/.Panel 8-->
				        </div>

				      </div>
				    </div>
				    <!--/.Content-->
				  </div>
				</div>
				<!--Modal: Login / Register Form-->