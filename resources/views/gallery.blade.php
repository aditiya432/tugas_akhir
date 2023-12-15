<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Cassi</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cassi Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/elegant-icons.css"/>
	<link rel="stylesheet" href="css/fresco.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Section -->
	<div class="offcanvas-menu-wrapper">
		<div class="menu-header">
			<a href="./home" class="site-logo">
				<img src="img/logo.png" alt="">
			</a>
			<div class="menu-switch" id="menu-canvas-close">
				<i class="icon_close"></i>
			</div>
		</div>
		<ul class="main-menu">
			<li><a href="home">Home</a></li>
			<li><a href="gallery" class="active">Gallery</a></li>
			<li><a href="blog">Blog</a></li>
			<li><a href="about">About</a></li>
			<li><a href="contact">Contact</a></li>
		</ul>
		<div class="menu-footer">
			<div class="footer-social">
				<a href="#">Facebook</a>
				<a href="#">Twitter</a>
				<a href="#">Instagram</a>
			</div>
			<div class="copyright"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
		</div>
	</div>
	<!-- Offcanvas Menu Section end -->
	
	<!-- Header section -->
	<header class="header-section">
		<a href="./home" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<div class="menu-switch" id="menu-canvas-show">
			<i class="icon_menu"></i>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Gallery section -->
	<section class="gallery-section">
		<div class="row gallery-gird">
			@forelse ($posts  as $post)
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/1.jpg" data-fresco-group="projects">
					<img src="{{ asset('/storage/posts/'.$post->image) }}" alt="">
					<div class="gi-text">
						<h4>{{ $post->title }}</h4>
						<p>{!! $post->content !!}</p>
					</div>
				</a>
			</div>
			@empty
			@endforelse
			<!-- <div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/2.jpg" data-fresco-group="projects">
					<img src="img/projects/2.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/3.jpg" data-fresco-group="projects">
					<img src="img/projects/3.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/4.jpg" data-fresco-group="projects">
					<img src="img/projects/4.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/5.jpg" data-fresco-group="projects">
					<img src="img/projects/5.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/6.jpg" data-fresco-group="projects">
					<img src="img/projects/6.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/7.jpg" data-fresco-group="projects">
					<img src="img/projects/7.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/8.jpg" data-fresco-group="projects">
					<img src="img/projects/8.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/11.jpg" data-fresco-group="projects">
					<img src="img/projects/11.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/9.jpg" data-fresco-group="projects">
					<img src="img/projects/9.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/10.jpg" data-fresco-group="projects">
					<img src="img/projects/10.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/12.jpg" data-fresco-group="projects">
					<img src="img/projects/12.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/13.jpg" data-fresco-group="projects">
					<img src="img/projects/13.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/15.jpg" data-fresco-group="projects">
					<img src="img/projects/15.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/16.jpg" data-fresco-group="projects">
					<img src="img/projects/16.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-xl-3 col-sm-6">
				<a class="gallery-item fresco" href="img/projects/14.jpg" data-fresco-group="projects">
					<img src="img/projects/14.jpg" alt="">
					<div class="gi-text">
						<h4>Hutan dan Alam</h4>
						<p>Alam / Pohon</p>
					</div>
				</a>
			</div> -->
		</div>
		<div class="text-center pt-5">
			<button class="site-btn">Muat Lagi</button>
		</div>
	</section>
	<!-- Gallery section end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="footer-social">
			<a href="https://www.facebook.com/aditiyafajarna">Facebook</a>
			<a href="https://www.tiktok.com/@adt_fjr07?is_from_webapp=1&sender_device=pc">Tiktok</a>
			<a href="https://www.instagram.com/aditiyafajarnurarifin/">Instagram</a>
		</div>
		<div class="copyright"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/fresco.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
