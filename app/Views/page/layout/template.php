<!DOCTYPE html>
<html lang="id">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NHP476D');</script>
	<!-- End Google Tag Manager -->

	<!-- Etc -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?= $this->renderSection('meta') ?>

	<!-- Google Fonts -->
	<link href='//fonts.googleapis.com/css?family=Montserrat:700,400|Archivo:400,400i,700' rel='stylesheet'>

	<!-- Css -->
	<link rel="stylesheet" href="assets/css/style.min.css" />
	<link rel="stylesheet" href="assets/css/custom.css" />

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">

</head>

<body data-cookies="off" id="home" itemscope itemtype="http://schema.org/WebPage">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NHP476D"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->	

	<!-- Preloader -->
	<div class="loader-mask">
		<div class="loader">
			<img class="loader-logo logo" src="assets/img/logo/logo_white.png" srcset="assets/img/logo/logo_white.png 1x, assets/img/logo/logo_white@2x.png 2x" alt="logo"
				itemtype="http://schema.org/Organization" itemscope>
				<div class="loader-bar"><span></span></div>
			"Loading..."
		</div>
	</div>

	<!-- Header -->
	<header class="nav header" itemtype="http://schema.org/WPHeader" itemscope>

		<div class="nav__holder nav--sticky" id="nav--sticky">
			<div class="container nav__container">
				<div class="flex-parent">

					<div class="nav__header clearfix">
						<!-- Logo -->
						<div class="logo-wrap local-scroll">
							<a href="#home" class="logo__url">
								<img class="logo logo--dark" src="assets/img/logo/logo.png" srcset="assets/img/logo/logo.png 1x, assets/img/logo/logo@2x.png 2x" alt="logo" itemtype="http://schema.org/Organization" itemscope>
							</a>
						</div>

						<button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="nav__icon-toggle-bar"></span>
							<span class="nav__icon-toggle-bar"></span>
							<span class="nav__icon-toggle-bar"></span>
						</button>
					</div> <!-- end nav-header -->
					
					<!-- Navbar -->
					<nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse" itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope">              
						<ul class="nav__menu local-scroll" id="onepage-nav">
							<li>
								<a href="/" class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/' ? 'active':'') ?>">Home</a>
							</li>							
							<li class="nav__dropdown">
								<a href="#" class="nav-link 
									<?= ($_SERVER['REQUEST_URI'] == '/services-brand' ? 'active':'') ?>
									<?= ($_SERVER['REQUEST_URI'] == '/services-code' ? 'active':'') ?>
									<?= ($_SERVER['REQUEST_URI'] == '/services-creative' ? 'active':'') ?>
									<?= ($_SERVER['REQUEST_URI'] == '/services-marketing' ? 'active':'') ?>
									
									" aria-haspopup="true">Services</a>
								<i class="dorya-icon-chevron-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
								<ul class="nav__dropdown-menu">
									<li>
										<a href="services-brand">
											<span class="nav__dropdown-menu-label">Brand</span>
										</a>
									</li>
									<li>
										<a href="services-creative">
											<span class="nav__dropdown-menu-label">Creative</span>
										</a>
									</li>
									<li>
										<a href="services-code">
											<span class="nav__dropdown-menu-label">Code</span>
										</a>
									</li>
									<li>
										<a href="services-marketing">
											<span class="nav__dropdown-menu-label">Marketing</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="contact" class="nav-link <?= ($_SERVER['REQUEST_URI'] == '/contact' ? 'active':'') ?>">Contact</a>
							</li>
						</ul> <!-- end menu -->

					</nav> <!-- end nav-wrap -->

				</div> <!-- end flex-parent -->
			</div> <!-- end container -->

		</div>
	</header> <!-- end header -->

	<div class="main-wrap">

        <?= $this->renderSection('content') ?>

		<!-- Footer -->
		<footer class="footer bg-dark" itemtype="http://schema.org/WPFooter" itemscope>
			<div class="container">
				<div class="footer__cta">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="widget widget-cta text-center">
								<h3 class="widget-cta__title mb-32">Got a Project?
									<a href="contact" class="widget-cta__link">
										<span class="animate-letters">Let’s Get to Work</span>
									</a>
								</h3>								
							</div>
						</div>
					</div>					
				</div>
				<div class="footer__widgets">
					<div class="row">

						<div class="col-lg-8 col-md-6">
							<div class="widget widget-about-us">
								<address class="widget-about-us__address">Simo Rejo XV No. 7, Surabaya<br>
								East Java. Indonesia 60181</address>
								<a href="mailto:admin@pesoros.com" class="widget-about-us__email">admin@pesoros.com</a>
								<a href="tel:+628126665561" class="widget-about-us__phone">+62 812-666-556-13</a>
							</div>
						</div> <!-- end about us -->						

						<div class="col-lg-2 col-md-3">
							<div class="widget widget-nav-menu">
								<ul>

								</ul>
							</div>
						</div> <!-- end widget nav menu -->

						<div class="col-lg-2 col-md-3">
							<div class="widget widget-nav-menu">
								<ul>
									<li><a href="https://instagram.com/pesorosdev">Instagram</a></li>
									<li><a href="https://wa.me/6281266655615">Whatsapp</a></li>
								</ul>
							</div>
						</div> <!-- end widget nav menu -->

					</div>
				</div>    
			</div> <!-- end container -->

			<div class="footer__bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<a href="#home" class="logo__url">
								<img class="logo" src="assets/img/logo/logo_white.png" 
								srcset="assets/img/logo/logo_white.png 1x, img/logo/logo_white@2x.png 2x" alt="logo" itemtype="http://schema.org/Organization" itemscope>
							</a>
						</div>
						<div class="col-md-6">
							<div class="widget widget-nav-menu">
								<ul>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- end footer bottom -->

		</footer> <!-- end footer -->

		<div class="footer-placeholder"></div>

	</div> <!-- end main wrap -->
	

	<!-- JS Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/scripts.min.js"></script>
		
</body>
</html>