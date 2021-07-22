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
	<meta property="og:image" content="https://pesoros.com/img/logo.jpg"/>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<main class="content-wrap">
	<!-- Hero -->
	<section class="section-hero hero">
		<div class="container hero__container">
			<div class="row">
				<div class="col-md-6">
					<div class="hero__text-content-wrap">
						<div class="hero__text-content">
							<h1 class="hero__title">PESOROS</h1>
							<h2 class="hero__subtitle">We aren't just</h2>
							<h2 class="hero__subtitle">Developing</h2>
						</div>
					</div>
				</div>
				<div class="col-md-6 d-md-block d-none">
					<div class="hero__img">
						<div class="hero__img-svg-container">
							<svg class="hero__img-svg" viewBox="0 0 319 639" preserveAspectRatio="xMinYMin meet" data-image-flick-speed="600">
								<path fill-rule="evenodd" fill="url(#hero__img-pattern)"
								d="M-0.000,638.993 L-0.000,512.000 C106.039,512.000 192.000,426.038 192.000,320.000 C192.000,213.961 106.039,128.000 -0.000,128.000 L-0.000,0.006 C176.224,0.277 319.000,143.212 319.000,319.500 C319.000,495.788 176.224,638.723 -0.000,638.993 Z"/>

								<defs>
									<pattern id="hero__img-pattern" patternUnits="userSpaceOnUse" width="319" height="639">
										<image xlink:href="assets/img/hero/hero_img-1.jpg" x="0" y="0" width="319" height="639"></image>
									</pattern>
								</defs>
							</svg>
						</div>
					</div>

				</div>

			</div>
			<div class="row hero__bottom-row">
				<div class="col d-md-block d-none">
					<div class="hero__scroll-down local-scroll">
						<a href="#intro" class="hero__scroll-down-link title-link animate-letters">Scroll Down</a>
					</div>
				</div>
				<div class="col">
					<div class="hero__socials">
						<div class="socials">
							<a href="https://instagram.com/pesorosdev" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="dorya-icon-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- end hero -->			

	<!-- Intro -->
	<section id="intro" class="section-intro intro">	
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
			
					<div class="animate">
						<h3 class="intro__subtitle">PESOROS — Digital Business Solution</h3>
					</div>
					<div class="animate">
						<p class="intro__text">Pesoros is a Digital Business Solution that offers end to end solutions with regards to 
							developing business such as Web Development, SEO, Digital Advertising, Management System Software, 
							Accounting System Software, Marketing System Software, Social Media Management, Product Photo & Video 
							and Event Organizer. Our holistic services include right from giving your company to helping 
							you market it digitally. We ensure that irrespective of the size of your business, you get exactly 
							what you envision for your company. With our vast array of expertise you are sure to discover powerful 
							solutions that help you tackle business challenges. We offer customized solutions as well that gives 
							you a service specific to your needs and relevant to your business.</p>
					</div>
				</div>
			</div>
		</div>			
	</section> <!-- end intro -->

	<!-- Services -->
	<section class="section-services pt-40" id="services">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="services js-services-01">

						<ul class="services-list">
							<li class="services-list__item services-list__item--is-active">
								<span class="services-list__label">Brand</span>
							</li>
							<li class="services-list__item services-list__item--is-active"">
								<span class="services-list__label">Creative</span>
							</li>
							<li class="services-list__item services-list__item--is-active"">
								<span class="services-list__label">Code</span>
							</li>
							<li class="services-list__item services-list__item--is-active"">
								<span class="services-list__label">Marketing</span>
							</li>
						</ul>

						<ul class="services-content">
							<li class="services-content__item services-content__item--is-active">
								Branding • Visual Identity • Company Profile
							</li>
							<li class="services-content__item services-content__item--is-active">
								Graphic Design • Product Photo & Video • Print Campaigns • Merchandising
							</li>
							<li class="services-content__item services-content__item--is-active">
								Website App • Mobile App • Office System App • Ecommerce • Landing Page
							</li>
							<li class="services-content__item services-content__item--is-active">
								Event Branding • Social Media Management • SEO • Content • Advertising Media • Digital Marketing
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</section> <!-- end services -->	

	<!-- From Blog -->
	<!-- <section class="section-from-blog" id="news">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="title-row">
						<h2 class="section-title">Latest Project</h2>
					</div>
				</div>
			</div>

		</div>

		<div class="slick-slider blog-slider">
			<div class="slick-slider-item">
				<article class="entry hover-shrink" itemscope itemtype="http://schema.org/Article">
					<div class="entry__body">
						<a href="single-post.html" class="entry__url"></a>
						<figure class="entry__img-holder bg-gradient-bottom hover-shrink--shrink">	
							<img src="assets/img/blog/blog_preview_2.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
						</figure>

						<div class="entry__info-holder">
							<h4 class="entry__title title-underline" itemprop="headline">
								The Hyper Flexible Seamlessly Connected Modern Working
							</h4>
							<div class="entry__meta">
								<span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2020-25-8">August 25, 2020</span>             
							</div>
						</div>
					</div>
				</article>
			</div>
			
			<div class="slick-slider-item">
				<article class="entry hover-shrink" itemscope itemtype="http://schema.org/Article">
					<div class="entry__body">
						<a href="single-post.html" class="entry__url"></a>
						<figure class="entry__img-holder bg-gradient-bottom hover-shrink--shrink">	
							<img src="assets/img/blog/blog_preview_3.jpg" class="entry__img hover-shrink--zoom" itemprop="image" alt="">
						</figure>

						<div class="entry__info-holder">
							<h4 class="entry__title title-underline" itemprop="headline">
								How to generate leads with PPC in your business?
							</h4>
							<div class="entry__meta">
								<span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="2020-25-8">August 25, 2020</span>             
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>
	</section>  -->
	<!-- end from blog -->

</main> <!-- end content wrap -->

<?= $this->endSection() ?>
