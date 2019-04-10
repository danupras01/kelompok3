<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Perpustakaan Puspen TNI</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url().'assets/home/images/favicon.ico'?>">
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
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		
		<!-- Header -->
		<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-7 col-lg-2">
						<div class="logo">
<!-- 							<a href="<?php //echo base_url()?>">
								<img src="<?php// echo base_url().'assets/home/images/logo/logo.png'?>" alt="logo images">
							</a> -->
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
								<li><a href="contact.html">Contact</a></li>
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
                        	<h2 class="bradcaump-title">Perpustakaan Puspen TNI</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Shop Page -->
        <div class="maincontent bg--white pt--80 pb--55">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-9 col-12">
        				<div class="wn__single__product">
        					<div class="row">
        						<div class="col-lg-6 col-12">
        							<div class="wn__fotorama__wrapper">
	        							<div class="fotorama wn__fotorama__action" data-nav="thumbs">
		        							  <a href="#">
		        							  <img src="<?= base_url(); ?>assets/uploads/book_covers/<?= $books->image; ?>" alt="<?= ($books->book_title); ?>">
		        							  </a>
	        							</div>
        							</div>
        						</div>
        						<div class="col-lg-6 col-12">
        							<div class="product__info__main">
        								<h1><?php echo $books->book_title;?></h1>
										<div class="product__overview">
        									<p>Jumlah Buku : <?php echo $books->book_copies;?></p>
        									<p>Penerbit : <?php echo $books->book_pub;?></p>
        									<p>Digital File : <?php echo $books->digital_file;?></p>
        									<p>Penulis : <?php echo $books->author_name;?></p>
        									<p>Copyright : <?php echo $books->copyright_year;?></p>
        									<p>Jumlah Halaman : <?php echo substr($books->custom_fields,25,-2);?> </p>
        									<p>ISBN : <?php echo $books->isbn;?> </p>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="product__info__detailed">
							<div class="pro_details_nav nav justify-content-start" role="tablist">
	                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Details</a>
	                        </div>
	                        <div class="tab__container">
	                        	<!-- Start Single Tab Content -->
	                        	<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
									<div class="description__attribute">
										<p><?php echo $books->description;?></p>
									</div>
	                        	</div>
	                        	<!-- End Single Tab Content -->
	                        </div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					 <aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Pencarian</h3>
								<form action="<?= base_url();?>home/search" method="get">
									
				        						<div class="input_box">
				        							
				        							<input type="text" placeholder="<?= lang('book_title_name'); ?>" name="book_title"  style="height:28px; width: 100%">
				        						</div>
				        						
				        						<br>
				        					
				        						<select class="shot__byselect sel" name="author_id" style="width: 100%">
														<option value="0" ><?= lang('select_author'); ?></option>
						                                <?php foreach ($authors as $author): ?>
						                                    <option value="<?= $author->id; ?>"><?= $author->author_name ?></option>
						                                <?php endforeach; ?>
				        						</select>
				        						<br>
				        						<br>
				        						

				        						<select class="shot__byselect sel" style="width: 100%;">
														<option value="0" ><?= lang('select_category'); ?></option>
						                                <?php foreach ($categories as $category): ?>
						                                    <option value="<?= $category->id; ?>"><?= $category->category_name ?></option>
						                                <?php endforeach; ?>
				        						</select>
				        						<br>
				        						<br>
				        						<button type="submit" class="btn btn-default"><?= lang('search'); ?></button>
			        			
								</form>
        					</aside>
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title"><?= lang('menu_categories'); ?></h3>
        						<ul>
			        			<?php if ($categories): ?>
			                        <?php foreach ($categories as $category): ?>
			                            <li><a href="<?= base_url(); ?>home/search/?category_id=<?= $category->id; ?>"><?= $category->category_name ?><span>(<?php echo count($this->home_model->count_category($category->id))?>)</span></a></li>
			                        <?php endforeach; ?>
			                    <?php endif; ?>
			                	</ul>
        					</aside>
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title"><?= lang('menu_authors'); ?></h3>
				                <select id="authors" style="width: 100%;" class="shot__byselect">
				                    <option><?= lang('select_author'); ?></option>
				                    <?php if ($authors): ?>
				                        <?php foreach ($authors as $author): ?>
				                            <option value="<?= base_url(); ?>home/search/?author_id=<?= $author->id; ?>"><?= $author->author_name ?></option>
				                        <?php endforeach; ?>
				                    <?php endif; ?>
				                </select>
        					</aside>

        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Tags <?= lang('menu_categories'); ?></h3>
        						<ul>
	        						<?php if ($categories): ?>
				                        <?php foreach ($categories as $category): ?>
				                            <li><a href="<?= base_url(); ?>home/search/?category_id=<?= $category->id; ?>"><?= $category->category_name ?></a></li>
				                        <?php endforeach; ?>
				                    <?php endif; ?>
        						</ul>
        					</aside> 
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        
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
		<script src="<?php echo base_url().'assets/home/js/active.js'?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


		<script type="text/javascript">
			$('.sel').select2();
		    $('#authors').select2();
		    $('#authors').on('change', function() {
		        var url = $(this).val();
		        window.location.href=url;
		    });

		    $( "#scrollUp" ).remove();
	
		</script>



		
	</body>
	</html>