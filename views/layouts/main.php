<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('/images/LOGOTERACONT.png')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
     <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>teratrack</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->

		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="/css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="/css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="/css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="/css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="/css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="/css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="/css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="/css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/style.css">
        <link rel="stylesheet" href="/css/responsive.css">
		<style>
	.row p{
		text-align:justify;
	}

    /* Hide top bar in mobile view */
    @media (max-width: 767px) {
        .topbar {
            display: none;
        }
    }

 /* Custom styles for the logo */
 .logo img {
        max-width: 100%; /* Ensure the logo scales within its container */
        height: auto; /* Preserve the aspect ratio */
    }

    /* Adjust logo size in mobile view */
    @media (max-width: 767px) {
        .logo img {
            max-width: 70%; /* Reduce the logo size */
        }
    }
</style>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="header">
  <!-- Topbar -->
  <div class="topbar" style="background-color: black; color: white;">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li>Dar es salaam: +255754247576, Dodoma: +255625754078</li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li style="color: white;"><i class="fa fa-phone"></i>Tel/Fax: +255222701612</li>
								<li style="color: white;"><i class="fa fa-envelope"></i><a href="mailto:info@teratech.co.tz">info@teratech.co.tz</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
            	<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="/"><img src="/images/LOGOTERACONT.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class=""><a href="/">Home </a>
			
											</li>
											<li><a href="#">Products <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="/fleet">Fleet Management</a></li>
													<li><a href="/equipment">Equipment Tracking</a></li>
													<li><a href="/family">Family Tracking</a></li>
													<li><a href="/school">School Bus Tracking</a></li>

												</ul>
											</li>
											<li><a href="features">Features</a></li>
											<li><a href="/aboutus">About Us </a></li>
											
											<li><a href="/contactus">Contact Us</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<!--/ End Header Inner -->
</header>


  
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
   


	
		<!-- Footer Area -->
		<footer class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Tera Technologies :Speed, Quality and Integrity</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="https://www.instagram.com/tera_track_tz/"><i class="icofont-instagram"></i></a></li>
									<li><a href="https://www.youtube.com/@teratechnologiesandenginee5484"><i class="icofont-youtube"></i></a></li>
									
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="/"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="/aboutus"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="/features"><i class="fa fa-caret-right" aria-hidden="true"></i>Feature</a></li>
											<li><a href="/contactus"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>
											<li><a href="/fleet"><i class="fa fa-caret-right" aria-hidden="true"></i>Fleet Management</a></li>
											<li><a href="/family"><i class="fa fa-caret-right" aria-hidden="true"></i>Family Tracking</a></li>
											<li><a href="/school"><i class="fa fa-caret-right" aria-hidden="true"></i>School Bus Tracking</a></li>
											
											
										</ul>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Offices Open Hours</p>
								<ul class="time-sidual">
									<li class="day">Monday - Saturday <span>8.00-17.00</span></li>
									
									
								</ul>
							</div>
						</div>
					
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2023  |  All Rights Reserved by <a href="https://teratech.co.tz" target="_blank">teratech</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		

		<!-- jquery Min JS -->
        <script src="/js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="/js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="/js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="/js/easing.js"></script>
		<!-- Color JS -->
		<script src="/js/colors.js"></script>
		<!-- Popper JS -->
		<script src="/js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="/js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="/js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="/js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="/js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="/js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="/js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="/js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="/js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="/js/steller.js"></script>
		<!-- Wow JS -->
		<script src="/js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="/js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="/js/main.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
