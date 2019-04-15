<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>PERPUSTAKAAN MABES TNI</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
	<link rel="apple-touch-icon" href="<?php echo base_url().'assets/home/images/icon.png'?>">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!-- Stylesheets -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url().'assets/home/css/bootstrap.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/home/css/plugins.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/home/css/style.css'?>">

	<!-- Cusom css -->
   <link rel="stylesheet" href="<?php echo base_url().'assets/home/css/custom.css'?>">

	<!-- Modernizer js -->
	<script src="<?php echo base_url().'assets/home/js/vendor/modernizr-3.5.0.min.js'?>"></script>
</head>
<body >
	
	<div class="wrapper" id="wrapper">
				<!-- Header -->
		<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-7 col-lg-2">
						<div class="logo">
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="<?php echo base_url()?>">Home</a></li>

								<li><a href="<?php echo base_url().'contact'?>">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-8 col-sm-8 col-5 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Pustakawan</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="<?php echo base_url().'panel/login'?>">Login</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="<?php echo base_url()?>">Home</a></li>
								<li><a href="<?php echo base_url().'contact'?>">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->	
			</div>		
		</header>
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="<?= base_url();?>home/search" method="get">
				<div class="field__search">
					<input type="text" placeholder="<?= lang('book_title_name'); ?>">
					<div class="action">
						<button type="submit" class="btn btn-default"><i class="zmdi zmdi-search"></i></button>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">PERPUSTAKAAN MABES TNI</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<!-- Start Contact Area -->
        <section class="wn_contact_area bg--white pt--80 pb--80">
        	<div class="container">
        		<div class="row">
        			<!-- <div class="col-lg-8 col-12">
        				<div class="contact-form-wrap">
        					<h2 class="contact__title">Tetap terhubung</h2>
        					<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. </p>
                            <form id="contact-form" action="#" method="post">
                                <div class="single-contact-form space-between">
                                    <input type="text" name="firstname" placeholder="First Name*">
                                    <input type="text" name="lastname" placeholder="Last Name*">
                                </div>
                                <div class="single-contact-form space-between">
                                    <input type="email" name="email" placeholder="Email*">
                                    <input type="text" name="website" placeholder="Website*">
                                </div>
                                <div class="single-contact-form">
                                    <input type="text" name="subject" placeholder="Subject*">
                                </div>
                                <div class="single-contact-form message">
                                    <textarea name="message" placeholder="Type your message here.."></textarea>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit">Send Email</button>
                                </div>
                            </form>
                        </div> 
                        <div class="form-output">
                            <p class="form-messege">
                        </div>
        			</div> -->
        			<div class="col-lg-8 col-12 md-mt-40 sm-mt-40">
        				<div class="wn__address"> 
        				<h2 class="contact__title">MABES TNI</h2>       					
        					<p><b><h4>"Tunaikan Sumpah dan tugas kewajiban sebagai prajurit Negara Republik Indonesia, yang sanggup menjamin keamanan dan keselamatan nusa dan bangsanya"</h4></b></p>
        					<b>Panglima Besar Jenderal Sudirman </p>
        					<h2 class="contact__title">Contact Form.</h2>
        					<div class="wn__addres__wreapper">
        						<div class="single__address">
        							<i class="icon-location-pin icons"></i>
        							<div class="content">
        								<span>Alamat:</span>
        								<p>Mabes TNI Cilangkap, Jakarta timur</p>
        							</div>
        						</div>

        						<div class="single__address">
        							<i class="icon-phone icons"></i>
        							<div class="content">
        								<span>Phone Number:</span>
        								<p>(021)84595576</p>
        							</div>
        						</div>

        						<div class="single__address">
        							<i class="icon-envelope icons"></i>
        							<div class="content">
        								<span>Email address:</span>
        								<p>ppidtni@puspen.tni.mil.id</p>
        							</div>
        						</div>

        						<div class="single__address">
        							<i class="icon-globe icons"></i>
        							<div class="content">
        								<span>website address:</span>
        								<p>https://tni.mil.id/contact.htm</p>
        							</div>
        						</div>

        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!-- End Contact Area -->


		<!-- Footer Area -->
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="index.html">
										<img src="<?php echo base_url($this->config->item("theme_admin")."/assets/home/images/logo/AD6.png"); ?>" alt="IMG"> 
					                    <img src="<?php echo base_url($this->config->item("theme_admin")."/assets/home/images/logo/AL6.png"); ?>" alt="IMG">  
					                    <img src="<?php echo base_url($this->config->item("theme_admin")."/assets/home/images/logo/AU5.png"); ?>" alt="IMG">
									</a>
									<p>Perpustakaan adalah tempat untuk memenuhi dahaga ilmu pengetahuan
										<b>Abdurahman Wahid<b></p>
								</div>
								<div class="footer__content">
									<ul class="mainmenu d-flex justify-content-center">
										<li><a href="<?php echo base_url()?>">Home</a></li>
										<li><a href="<?php echo base_url().'contact'?>">Contact</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Copyright <i class="fa fa-copyright"></i> <a href="#">Mabes TNI.</a> All Rights Reserved</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- //Footer Area -->
		</div>
		<!-- //Main wrapper -->

		<!-- JS Files -->

		<script src="<?php echo base_url().'assets/home/js/vendor/jquery-3.2.1.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/home/js/popper.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/home/js/bootstrap.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/home/js/plugins.js'?>"></script>
		 <!-- Google Map js -->
	    <script>
	         $( "#scrollUp" ).remove();
	    </script>
		<script src="<?php echo base_url().'assets/home/js/active.js'?>"></script>





		
	</body>
	</html>