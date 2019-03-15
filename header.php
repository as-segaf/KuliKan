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
			          <li><a class="ticker-btn" href="#" data-toggle="modal" data-target="#modalLRForm">Signup</a></li>
			          <li><a class="ticker-btn" href="#" data-toggle="modal" data-target="#exampleModalScrollable">Login</a></li>
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
					            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
					              Login</a>
					          </li>
					          <li class="nav-item">
					            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
					              Register</a>
					          </li>
					        </ul>

					        <!-- Tab panels -->
					        <div class="tab-content">
					          <!--Panel 7-->
					          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

					            <!--Body-->
					            <div class="modal-body mb-1">
					              <div class="md-form form-sm mb-5">
					                <i class="fas fa-envelope prefix"></i>
					                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
					                <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
					              </div>

					              <div class="md-form form-sm mb-4">
					                <i class="fas fa-lock prefix"></i>
					                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
					                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
					              </div>
					              <div class="text-center mt-2">
					                <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
					              </div>
					            </div>
					            <!--Footer-->
					            <div class="modal-footer">
					              <div class="options text-center text-md-right mt-1">
					                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
					                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
					              </div>
					              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
					            </div>

					          </div>
					          <!--/.Panel 7-->

					          <!--Panel 8-->
					          <div class="tab-pane fade" id="panel8" role="tabpanel">

					            <!--Body-->
					            <div class="modal-body">
					              <div class="md-form form-sm mb-5">
					                <i class="fas fa-envelope prefix"></i>
					                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
					                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
					              </div>

					              <div class="md-form form-sm mb-5">
					                <i class="fas fa-lock prefix"></i>
					                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
					                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
					              </div>

					              <div class="md-form form-sm mb-4">
					                <i class="fas fa-lock prefix"></i>
					                <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
					                <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
					              </div>

					              <div class="text-center form-sm mt-2">
					                <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
					              </div>

					            </div>
					            <!--Footer-->
					            <div class="modal-footer">
					              <div class="options text-right">
					                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
					              </div>
					              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
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
				  
				  <!-- Modal -->
					<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-scrollable" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        ...sajkdfhlajsdhfkjsdbflkajdfjasdfhkdbflkwqherlkqjwebrlkeqfblksjdfljakdshf
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="button" class="btn btn-primary">Save changes</button>
					      </div>
					    </div>
					  </div>
					</div>