<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Perpustakaan TNI</title>
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

	<script>
 $(function()
    {
        $('#isbnsearchsubmit').on('click',function(e){
            //e.preventDefault(); to stop default behaviour
            //e.stopPropagation(); to stop bubbling

            var isbn = $('#isbnnumber').val();
            window.location.href = 'books/getBookDetails/'+isbn;

            // similar behavior as clicking on a link

        });
    });
base_url = <?php echo json_encode(base_url()); ?>;

function img_hl(x) {
    // return x == null ? '' : '<div class="text-center"><a href="'+site.base_url+'assets/uploads/' + x + '" data-toggle="lightbox"><img src="'+site.base_url+'assets/uploads/thumbs/' + x + '" alt="" style="width:30px; height:30px;" /></a></div>';
    if (x.substring(0, 7) == 'uploads') {
        return "<img style='width:20px; height:30px;' src=" + base_url + x +">";
        
    }else{
      return "<img style='width:20px; height:30px;' src=" + base_url + 'assets/uploads/book_covers/' + x +">";

    }


}

function isPdf(x) {
  var div = document.createElement('div');
  div.innerHTML = x // Make it a complete tag
  var link = div.firstChild.getAttribute("href");
  var title = div.firstChild.getAttribute("title");

  if (title == null || title == '') {
    return "Not Available";
  }else{
    return "<a href='"+link+"'>Read</a>";
    
  }
}
function actions(x) {
  <?php  
    if ( $this->ion_auth->in_group(array('webmaster', 'admin')) ){
  ?> 
  return x;
  <?php }else{ ?>
    return ""
  <?php } ?>
}
function bkFormat(x) {
    if (x != null) {
        var d = '', pqc = x.split("___");
        d = '<strong>' + pqc[0] + '</strong><br>';
        d += '<strong><?= lang('publisher_label'); ?>: </strong>'+pqc[1] + '<br>';
        d += '<strong><?= lang('author_label'); ?>: </strong>' + pqc[2] + '<br>';
        return d;
    } else {
        return '';
    }
}
function pqFormat(x) {
        var d = '', pqc = x.split(",");

        // for (index = 0; index < pqc.length; ++index) {
        //     var pq = pqc[index];
        //     var v = pq.split(",");
        //     d += v[0] +'<br>';
        // }
        return x;
    
}

    $(document).ready(function () {
        var oTable = $('#PRData').dataTable({
            "aaSorting": [[3, "asc"]],
            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            "iDisplayLength": 10,
            'bProcessing': true, 'bServerSide': true,
            'sAjaxSource': '<?= site_url('panel/books/getBooks') ?>',
            'fnServerData': function (sSource, aoData, fnCallback) {
                aoData.push({
                    "name": "<?= $this->security->get_csrf_token_name() ?>",
                    "value": "<?= $this->security->get_csrf_hash() ?>"
                });
                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
            }, 
            // "columnDefs": [
            //   { "width": '20%', "targets": 0 }
            // ],
            // "fixedColumns": true,
            'fnRowCallback': function (nRow, aData, iDisplayIndex) {
                var oSettings = oTable.fnSettings();
                nRow.id = aData['id'];
                nRow.className = "book_link";
                //if(aData[7] > aData[9]){ nRow.className = "product_link warning"; } else { nRow.className = "product_link"; }
                return nRow;
            },
            "aoColumns": [{
                "bSearchable_": false,
                "data": "image",
                "mRender": img_hl,
                "bSortable": false,
            }, {
                "data": "book_title",
                "name": "book_title",
                "mRender": bkFormat,

            },{
                "data": "category_name",
                "name": "category_name",
            },{
                "data": "total_quantity",
                "name": "total_quantity",

            },{
                "data": "available",
                "name": "available",

            }, {
                "data": "price",
                "name": "books.price",
            },  
            { 
                "data": "read", 
                "name": "read", 
                "bSortable": false,
                "mRender": isPdf,

             },{ 
                "data": "actions", 
                "name": "actions", 
                "bSortable": false,
                "mRender": actions,

             },
             ],
           
        });
              
    });
     
</script>
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
                        	<h2 class="bradcaump-title">Perpustakaan TNI</h2>
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
											 

											 <?php
											        if (!parse_url($book->digital_file, PHP_URL_SCHEME)) {
											            $book->digital_file = base_url().'files/'.$book->digital_file; 
											        }
											        

											?>
        								
        									

        									<p>Digital File : <a href="<?php echo base_url().'files/'.$books->digital_file;?>" target="_blank"><?php echo $books->digital_file;?></a></p>

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

		<!-- <script type="text/javascript">
$('body').on('click', '#PRData td:not(:first-child, :last-child)', function() {
    var num = $(this).closest('tr').attr('id');
    find(num);
    $('#view_book').modal('show');

});

function find(num) {
        jQuery.ajax({
            type: "POST",
            url: base_url + "panel/books/view",
            data: "id=" + escape(num),
            cache: false,
            dataType: "json",
            success: function (data) {
                if (typeof data.book_title === 'undefined') {
                    $('#view_book').modal('hide');
                } else {
                    jQuery('#title_client_view').html('Book: '+data.book_title);
                    jQuery( ".flatb.add" ).data( "name", data.book_title);
                    jQuery( ".flatb.add" ).data( "id_name", data.id);
                    jQuery( ".flatb.lista" ).data( "name", data.book_title);

                    jQuery('#v_book_title').html(data.book_title);
                    jQuery('#v_book_copies').html(data.total_quantity);
                    jQuery('#v_available').html(data.available);
                    jQuery('#v_book_publisher').html(data.book_pub);

                    if (data.image !== null && data.image !== '') {
                      document.getElementById("v_image").src="<?= base_url(); ?>assets/uploads/book_covers/"+data.image;
                    }else{
                      document.getElementById("v_image").src="<?= base_url(); ?>assets/uploads/book_covers/no_image.png";
                    }


                    if (data.digital_file !== null && data.digital_file !== '') {
                      jQuery('#v_digital_file').html('<a href="<?= base_url();?>panel/books/read/'+data.id+'" target="_black">Read</a>');
                    }else{
                      jQuery('#v_digital_file').html('Not Available');
                    }

                    jQuery('#v_isbn').html(data.isbn);
                    jQuery('#v_isbn13').html(data.isbn_13);
                    jQuery('#v_price').html(data.price);
                    jQuery('#v_copyright_year').html(data.copyright_year);
                    jQuery('#v_date_recieve').html(data.date_receive);
                    jQuery('#v_date_added').html(data.date_added);
                    jQuery('#v_description').html(data.description);
                    jQuery('#v_authors').html(data.author_name);
                    jQuery('#v_categories').html(data.category_name);
                    

                    jQuery('.show_custom').html('');

                    var IS_JSON = true;
                    try
                    {
                        var json = $.parseJSON(data.custom_fields);
                    }
                    catch(err)
                    {
                        IS_JSON = false;
                    }                

                    if(IS_JSON) 
                    {

                        $.each(json, function(id_field, val_field) {
                            jQuery('#v'+id_field).html(val_field);
                        });
                    }
                   
                    var string = "<button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-reply\"></i> Go Back</button>";

                    jQuery('#footerClient').html(string);
                }
            }
        });
    }
</script> -->



		
	</body>
	</html>