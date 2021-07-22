<?= $this->extend('page/layout/template') ?>

<?= $this->section('meta') ?>

	<!-- MAIN -->
	<title>Pesoros | Contact</title>
	<meta name="keywords" content="pesoros, digital business solution"/>
	<meta name="description" content="Pesoros | Contact"/>
	<link rel="canonical" href="https://pesoros.com/contact" />
	<!-- Property -->
	<meta property="og:title" content="Pesoros | Contact"/>
	<meta property="og:keywords" content="pesoros, digital business solution"/>
	<meta property="og:description" content="Pesoros | Contact"/>
	<meta property="og:type" content="article"/>
	<meta property="og:url" content="https://pesoros.com/contact"/>
	<meta property="og:image" content="assets/img/logo.jpg"/>

<?= $this->endSection() ?>
 
<?= $this->section('content') ?>

	<main class="content-wrap">

		<!-- Page Title -->
		<section class="page-title">
			<div class="container">
				<div class="page-title__holder">
					<h1 class="page-title__title">Let’s create something awesome together</h1>
					<p class="page-title__subtitle">Thanks for stopping by! If you'd like to reach out, please send us an email below..</p>
				</div>
			</div>
		</section> <!-- end page title -->

		<!-- Contact Info -->
		<section class="section-contact-info">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="contact-info">
							<h3 class="contact-info__title">New Projects</h3>
							<a href="mailto:admin@pesoros.com" class="contact-info__email">admin@pesoros.com</a>
							<a href="tel:+628126665561" class="contact-info__phone">+62 812-666-556-13</a>								
						</div>
					</div>
					<div class="col-lg-4">
						<div class="contact-info">
						
						</div>
					</div>
					<div class="col-lg-4">
						<div class="contact-info">
							<h3 class="contact-info__title">Address</h3>
							<address class="contact-info__address">Simo Rejo XV No. 7, Surabaya<br>
							East Java. Indonesia 60181</address>				
						</div>
					</div>
				</div>
			</div>
		</section> <!-- contact info -->

		<!-- Contact Image -->
		<!-- <img src="assets/img/contact/contact_bg.jpg" alt="contact" class="section-contact-image"> -->


		<!-- Team -->
		<section class="section-team section-large-padding">
			<div class="container">
				<p class="team-subtitle">We’re honest folk that believe in hard work and building lasting relationships. We enjoy making companies look better
				with great design.</p>
				<div class="row row-50">
					<div class="col-lg-4">
						<div class="team">
							<img src="assets/img/team/team_1.jpg" class="team__img" alt="">
							<h4 class="team__name">Bayu</h4>
							<a href="mailto:bayupy@pesoros.com" class="team__email">bayupy@pesoros.com</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team">
							<img src="assets/img/team/team_2.jpg" class="team__img" alt="">
							<h4 class="team__name">Morgan</h4>
							<a href="mailto:morgan@pesoros.com" class="team__email">morgan@pesoros.com</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="team">
							<img src="assets/img/team/team_3.jpg" class="team__img" alt="">
							<h4 class="team__name">Katon</h4>
							<a href="mailto:paratonsp@pesoros.com" class="team__email">paratonsp@pesoros.com</a>
						</div>
					</div>
				</div>					
			</div>
		</section> <!-- end team -->

	</main> <!-- end content wrap -->

<?= $this->endSection() ?>