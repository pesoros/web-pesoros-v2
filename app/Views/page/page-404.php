<?= $this->extend('page/layout/template') ?>

<?= $this->section('meta') ?>

	<!-- MAIN -->
	<title>Pesoros | Digital Business Solution</title>
	<meta name="keywords" content="pesoros, digital business solution, digital marketing, branding, web development, event branding"/>
	<meta name="description" content="Pesoros is a Digital Business Solution that offers end to end solutions with regards to developing business such as Web Development, SEO, Digital Advertising, Management System Software, Accounting System Software, Marketing System Software, Social Media Management, Product Photo & Video and Event Organizer."/>
	<link rel="canonical" href="https://pesoros.com/" />
	<!-- Property -->
	<meta property="og:title" content="Pesoros | Digital Business Solution"/>
	<meta property="og:keywords" content="pesoros, digital business solution, digital marketing, branding, web development, event branding"/>
	<meta property="og:description" content="Pesoros is a Digital Business Solution that offers end to end solutions with regards to developing business such as Web Development, SEO, Digital Advertising, Management System Software, Accounting System Software, Marketing System Software, Social Media Management, Product Photo & Video and Event Organizer."/>
	<meta property="og:type" content="article"/>
	<meta property="og:url" content="https://pesoros.com/"/>
	<meta property="og:image" content="https://pesoros.com/assets/img/logo.jpg"/>

<?= $this->endSection() ?>
 
<?= $this->section('content') ?>

	<main class="content-wrap">

		<!-- Page 404 -->
		<section class="page-404-section page-404">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-6 text-center">
						<span class="page-404__number" style="background-image: url(img/404/page_404.jpg);">404</span>
						<h1 class="page-404__title">Page Not Found</h1>
						<p class="page-404__text">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
						<a href="index.html" class="btn btn--md">Take Me Back Home</a>
					</div>
				</div>
			</div>
		</section> <!-- end page 404 -->

	</main> <!-- end content wrap -->

<?= $this->endSection() ?>