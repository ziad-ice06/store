<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="<?php echo $urls_base;?>cl/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $urls_base;?>cl/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $urls_base;?>cl/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo $urls_base;?>cl/css/price-range.css" rel="stylesheet">
    <link href="<?php echo $urls_base;?>cl/css/animate.css" rel="stylesheet">
	<link href="<?php echo $urls_base;?>cl/css/main.css" rel="stylesheet">
	<link href="<?php echo $urls_base;?>cl/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo $urls_base;?>cl/js/html5shiv.js"></script>
    <script src="<?php echo $urls_base;?>cl/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo $urls_base;?>cl/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $urls_base;?>cl/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $urls_base;?>cl/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $urls_base;?>cl/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $urls_base;?>cl/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="<?php echo $urls_base;?>cl/images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo $urls_base;?>cl/images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="<?php echo $urls_base;?>cl/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo $urls_base;?>cl/images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="<?php echo $urls_base;?>cl/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo $urls_base;?>cl/images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="<?php echo $urls_base;?>cl/images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="macor"><!--category-productsr-->
							<div class="panel panel-default" id="facor">
							
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="#">
											Clothing
										</a>
										<a data-toggle="collapse" data-parent="#macor" href="#clothing">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										</a>
									</h4>
								</div>
								<div id="clothing" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li>
												<a href="#">
													<div class="panel panel-default sub-category">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a href="#">
																	Men's Collection
																</a>
																<a data-toggle="collapse" data-parent="#facor" href="#men">
																	<span class="badge pull-right"><i class="fa fa-plus"></i></span>
																</a>
															</h4>
														</div>
														<div id="men" class="panel-collapse collapse">
															<div class="panel-body">
																<ul>
																	<li><a href="#">Panjabi </a></li>
																	<li><a href="#">Shirt </a></li>
																	<li><a href="#">T-shirt</a></li>
																	<li><a href="#">Pant </a></li>
																	<li><a href="#">Shoes </a></li>
																</ul>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="panel panel-default sub-category">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a href="#">
																	Women's Collection
																</a>
																<a data-toggle="collapse" data-parent="#facor" href="#women">
																	<span class="badge pull-right"><i class="fa fa-plus"></i></span>
																</a>
															</h4>
														</div>
														<div id="women" class="panel-collapse collapse">
															<div class="panel-body">
																<ul>
																	<li><a href="#">Shari </a></li>
																	<li><a href="#">3 Pieces </a></li>
																	<li><a href="#">Shoes </a></li>
																	<li><a href="#">T-shirt</a></li>
																</ul>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="panel panel-default sub-category">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a href="#">
																	Kid's Collection
																</a>
																<a data-toggle="collapse" data-parent="#facor" href="#kids">
																	<span class="badge pull-right"><i class="fa fa-plus"></i></span>
																</a>
															</h4>
														</div>
														<div id="kids" class="panel-collapse collapse">
															<div class="panel-body">
																<ul>
																	<li><a href="#">Shirt </a></li>
																	<li><a href="#">Pant </a></li>
																	<li><a href="#">Shoes </a></li>
																	<li><a href="#">T-shirt</a></li>
																</ul>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="panel panel-default sub-category">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a href="#">
																	Others
																</a>
																<a data-toggle="collapse" data-parent="#facor" href="#others">
																	<span class="badge pull-right"><i class="fa fa-plus"></i></span>
																</a>
															</h4>
														</div>
														<div id="others" class="panel-collapse collapse">
															<div class="panel-body">
																<ul>
																	<li><a href="#">Bed sheets </a></li>
																	<li><a href="#">Towels </a></li>
																</ul>
															</div>
														</div>
													</div>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="#">
											Cosmetics
										</a>
										<a data-toggle="collapse" data-parent="#macor" href="#cosmetics">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										</a>
									</h4>
								</div>
								<div id="cosmetics" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Oil </a></li>
											<li><a href="#">Shope </a></li>
											<li><a href="#">Shampoo </a></li>
											<li><a href="#">Facewash</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="#">
											Ornaments
										</a>
										<a data-toggle="collapse" data-parent="#macor" href="#ornaments">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										</a>
									</h4>
								</div>
								<div id="ornaments" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">City Gold </a></li>
											<li><a href="#">Neckles </a></li>
											<li><a href="#">Other </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="#">
											Electronics
										</a>
										<a data-toggle="collapse" data-parent="#macor" href="#electronics">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										</a>
									</h4>
								</div>
								<div id="electronics" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Mobile </a></li>
											<li><a href="#">Computer </a></li>
											<li><a href="#">Computer Accessories</a></li>
											<li><a href="#">Watch </a></li>
											<li><a href="#">Other </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Other</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->

						<div class="brands_products"><!--brands_products-->
							<h2>Stores</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="<?php echo $urls_base;?>cl/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
				<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6 single_product">
					<div class="wrapper">
						<div>
							<a href=""><img class="img-100" src="<?php echo $urls_base;?>cl/images/home/product1.jpg" alt=""></a>
						</div>
						<div class="row text-center line">
							<div class="col-xs-8">Total sale 3 times</div>
							<div class="col-xs-4 pull-right star-rating"title="Rated 4.67 out of 5"> <span style="width:93.4%"><strong class="rating">4.67</strong> out of 5</span></div>
						</div>
						<div class="row text-center line">
							<div class="col-xs-12">
								<span class="amount"><del>BDT  &#2547; 5,000</del></span>
								<span class="amount">&nbsp;&nbsp;&nbsp;BDT  &#2547; 4,500</span>
							</div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><strong>Awesome Punjabi</strong></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><span><a href="">Category</a>,</span><span>Sub Category,</span><span>Sub Sub Category</span></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center">
								<a href="#" class="btn btn-default details">Details</a>
								<a href="#" class="btn btn-default add_cart">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-lg-3 col-md-4 col-sm-6 single_product">
					<div class="wrapper">
						<div>
							<a href=""><img class="img-100" src="<?php echo $urls_base;?>cl/images/home/product2.jpg" alt=""></a>
						</div>
						<div class="row text-center line">
							<div class="col-xs-8">Total sale 3 times</div>
							<div class="col-xs-4 pull-right">Rating</div>
						</div>
						<div class="row text-center line">
							<div class="col-xs-12">
								<span class="amount"><del>BDT  &#2547; 5,000</del></span>
								<span class="amount">&nbsp;&nbsp;&nbsp;BDT  &#2547; 4,500</span>
							</div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><strong>Awesome Punjabi</strong></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><span>Category,</span><span>Sub Category,</span><span>Sub Sub Category</span></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center">
								<a href="#" class="btn btn-default details">Details</a>
								<a href="#" class="btn btn-default add_cart">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-lg-3 col-md-4 col-sm-6 single_product">
					<div class="wrapper">
						<div>
							<a href=""><img class="img-100" src="<?php echo $urls_base;?>cl/images/home/product3.jpg" alt=""></a>
						</div>
						<div class="row text-center line">
							<div class="col-xs-6">Total sale 3 times</div>
							<div class="col-xs-6 pull-right">Rating</div>
						</div>
						<div class="row text-center line">
							<div class="col-xs-12">
								<span class="amount"><del>BDT  &#2547; 5,000</del></span>
								<span class="amount">&nbsp;&nbsp;&nbsp;BDT  &#2547; 4,500</span>
							</div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><strong>Awesome Punjabi</strong></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><span>Category,</span><span>Sub Category,</span><span>Sub Sub Category</span></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center">
								<a href="#" class="btn btn-default details">Details</a>
								<a href="#" class="btn btn-default add_cart">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-lg-3 col-md-4 col-sm-6 single_product">
					<div class="wrapper">
						<div>
							<a href=""><img class="img-100" src="<?php echo $urls_base;?>cl/images/home/product4.jpg" alt=""></a>
						</div>
						<div class="row text-center line">
							<div class="col-xs-6">Total sale 3 times</div>
							<div class="col-xs-6 pull-right">Rating</div>
						</div>
						<div class="row text-center line">
							<div class="col-xs-12">
								<span class="amount"><del>BDT  &#2547; 5,000</del></span>
								<span class="amount">&nbsp;&nbsp;&nbsp;BDT  &#2547; 4,500</span>
							</div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><strong>Awesome Punjabi</strong></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><span>Category,</span><span>Sub Category,</span><span>Sub Sub Category</span></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center">
								<a href="#" class="btn btn-default details">Details</a>
								<a href="#" class="btn btn-default add_cart">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-lg-3 col-md-4 col-sm-6 single_product">
					<div class="wrapper">
						<div>
							<a href=""><img class="img-100" src="<?php echo $urls_base;?>cl/images/home/product5.jpg" alt=""></a>
						</div>
						<div class="row text-center line">
							<div class="col-xs-6">Total sale 3 times</div>
							<div class="col-xs-6 pull-right">Rating</div>
						</div>
						<div class="row text-center line">
							<div class="col-xs-12">
								<span class="amount"><del>BDT  &#2547; 5,000</del></span>
								<span class="amount">&nbsp;&nbsp;&nbsp;BDT  &#2547; 4,500</span>
							</div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><strong>Awesome Punjabi</strong></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><span>Category,</span><span>Sub Category,</span><span>Sub Sub Category</span></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center">
								<a href="#" class="btn btn-default details">Details</a>
								<a href="#" class="btn btn-default add_cart">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-lg-3 col-md-4 col-sm-6 single_product">
					<div class="wrapper">
						<div>
							<a href=""><img class="img-100" src="<?php echo $urls_base;?>cl/images/home/product6.jpg" alt=""></a>
						</div>
						<div class="row text-center line">
							<div class="col-xs-6">Total sale 3 times</div>
							<div class="col-xs-6 pull-right">Rating</div>
						</div>
						<div class="row text-center line">
							<div class="col-xs-12">
								<span class="amount"><del>BDT  &#2547; 5,000</del></span>
								<span class="amount">&nbsp;&nbsp;&nbsp;BDT  &#2547; 4,500</span>
							</div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><strong>Awesome Punjabi</strong></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><span>Category,</span><span>Sub Category,</span><span>Sub Sub Category</span></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center">
								<a href="#" class="btn btn-default details">Details</a>
								<a href="#" class="btn btn-default add_cart">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-lg-3 col-md-4 col-sm-6 single_product">
					<div class="wrapper">
						<div>
							<a href=""><img class="img-100" src="<?php echo $urls_base;?>cl/images/home/product1.jpg" alt=""></a>
						</div>
						<div class="row text-center line">
							<div class="col-xs-6">Total sale 3 times</div>
							<div class="col-xs-6 pull-right">Rating</div>
						</div>
						<div class="row text-center line">
							<div class="col-xs-12">
								<span class="amount"><del>BDT  &#2547; 5,000</del></span>
								<span class="amount">&nbsp;&nbsp;&nbsp;BDT  &#2547; 4,500</span>
							</div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><strong>Awesome Punjabi</strong></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><span>Category,</span><span>Sub Category,</span><span>Sub Sub Category</span></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center">
								<a href="#" class="btn btn-default details">Details</a>
								<a href="#" class="btn btn-default add_cart">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-lg-3 col-md-4 col-sm-6 single_product">
					<div class="wrapper">
						<div>
							<a href=""><img class="img-100" src="<?php echo $urls_base;?>cl/images/home/product2.jpg" alt=""></a>
						</div>
						<div class="row text-center line">
							<div class="col-xs-6">Total sale 3 times</div>
							<div class="col-xs-6 pull-right">Rating</div>
						</div>
						<div class="row text-center line">
							<div class="col-xs-12">
								<span class="amount"><del>BDT  &#2547; 5,000</del></span>
								<span class="amount">&nbsp;&nbsp;&nbsp;BDT  &#2547; 4,500</span>
							</div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><strong>Awesome Punjabi</strong></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><span>Category,</span><span>Sub Category,</span><span>Sub Sub Category</span></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center">
								<a href="#" class="btn btn-default details">Details</a>
								<a href="#" class="btn btn-default add_cart">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-lg-3 col-md-4 col-sm-6 single_product">
					<div class="wrapper">
						<div>
							<a href=""><img class="img-100" src="<?php echo $urls_base;?>cl/images/home/product3.jpg" alt=""></a>
						</div>
						<div class="row text-center line">
							<div class="col-xs-6">Total sale 3 times</div>
							<div class="col-xs-6 pull-right">Rating</div>
						</div>
						<div class="row text-center line">
							<div class="col-xs-12">
								<span class="amount"><del>BDT  &#2547; 5,000</del></span>
								<span class="amount">&nbsp;&nbsp;&nbsp;BDT  &#2547; 4,500</span>
							</div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><strong>Awesome Punjabi</strong></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><span>Category,</span><span>Sub Category,</span><span>Sub Sub Category</span></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center">
								<a href="#" class="btn btn-default details">Details</a>
								<a href="#" class="btn btn-default add_cart">Add to Cart</a>			
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-lg-3 col-md-4 col-sm-6 single_product">
					<div class="wrapper">
						<div>
							<a href=""><img class="img-100" src="<?php echo $urls_base;?>cl/images/home/product4.jpg" alt=""></a>
						</div>
						<div class="row text-center line">
							<div class="col-xs-6">Total sale 3 times</div>
							<div class="col-xs-6 pull-right">Rating</div>
						</div>
						<div class="row text-center line">
							<div class="col-xs-12">
								<span class="amount"><del>BDT  &#2547; 5,000</del></span>
								<span class="amount">&nbsp;&nbsp;&nbsp;BDT  &#2547; 4,500</span>
							</div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><strong>Awesome Punjabi</strong></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><span>Category,</span><span>Sub Category,</span><span>Sub Sub Category</span></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center">
								<a href="#" class="btn btn-default details">Details</a>
								<a href="#" class="btn btn-default add_cart">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-lg-3 col-md-4 col-sm-6 single_product">
					<div class="wrapper">
						<div>
							<a href=""><img class="img-100" src="<?php echo $urls_base;?>cl/images/home/product5.jpg" alt=""></a>
						</div>
						<div class="row text-center line">
							<div class="col-xs-6">Total sale 3 times</div>
							<div class="col-xs-6 pull-right">Rating</div>
						</div>
						<div class="row text-center line">
							<div class="col-xs-12">
								<span class="amount"><del>BDT  &#2547; 5,000</del></span>
								<span class="amount">&nbsp;&nbsp;&nbsp;BDT  &#2547; 4,500</span>
							</div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><strong>Awesome Punjabi</strong></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><span>Category,</span><span>Sub Category,</span><span>Sub Sub Category</span></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center">
								<a href="#" class="btn btn-default details">Details</a>
								<a href="#" class="btn btn-default add_cart">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-lg-3 col-md-4 col-sm-6 single_product">
					<div class="wrapper">
						<div>
							<a href=""><img class="img-100" src="<?php echo $urls_base;?>cl/images/home/product6.jpg" alt=""></a>
						</div>
						<div class="row text-center line">
							<div class="col-xs-6">Total sale 3 times</div>
							<div class="col-xs-6 pull-right">Rating</div>
						</div>
						<div class="row text-center line">
							<div class="col-xs-12">
								<span class="amount"><del>BDT  &#2547; 5,000</del></span>
								<span class="amount">&nbsp;&nbsp;&nbsp;BDT  &#2547; 4,500</span>
							</div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><strong>Awesome Punjabi</strong></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center"><span>Category,</span><span>Sub Category,</span><span>Sub Sub Category</span></div>
						</div>
						<div class="row line">
							<div class="col-xs-12 text-center">
								<a href="#" class="btn btn-default details">Details</a>
								<a href="#" class="btn btn-default add_cart">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
						
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-xs-8">
						<div class="slider-wrap">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#all" data-toggle="tab">All Categories</a></li>
								<li><a href="#clothing-c" data-toggle="tab">Clothing</a></li>
								<li><a href="#cosmetics-c" data-toggle="tab">Cosmetics</a></li>
								<li><a href="#ornaments-c" data-toggle="tab">Ornaments</a></li>
								<li><a href="#electronics-c" data-toggle="tab">Electronics</a></li>
								<li><a href="#households-c" data-toggle="tab">Households</a></li>
								<li><a href="#other-c" data-toggle="tab">Other</a></li>
							</ul>
						</div>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="all">
								<div class="row"></div>
								<div class="row">
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $urls_base;?>cl/images/home/gallery1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $urls_base;?>cl/images/home/gallery2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $urls_base;?>cl/images/home/gallery3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $urls_base;?>cl/images/home/gallery4.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="clothing-c">
								<div class="row">
								<div class="col-xs-4">
								<div class="dropdown">
									  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="" aria-expanded="true">
									    Sub-category
									    <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li>
												<a href="#">
													<div class="panel panel-default sub-category">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a href="#">
																	Men's Collection
																</a>
																<a data-toggle="collapse" data-parent="" href="#men-c">
																	<span class="badge pull-right"><i class="test fa fa-plus"></i></span>
																</a>
															</h4>
														</div>
														<div id="men-c" class="panel-collapse collapse">
															<div class="panel-body">
																<ul>
																	<li><a href="#">Panjabi </a></li>
																	<li><a href="#">Shirt </a></li>
																	<li><a href="#">T-shirt</a></li>
																	<li><a href="#">Pant </a></li>
																	<li><a href="#">Shoes </a></li>
																</ul>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="panel panel-default sub-category">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a href="#">
																	Women's Collection
																</a>
																<a data-toggle="collapse" data-parent="" href="#women-c">
																	<span class="badge pull-right"><i class="test fa fa-plus"></i></span>
																</a>
															</h4>
														</div>
														<div id="women-c" class="panel-collapse collapse">
															<div class="panel-body">
																<ul>
																	<li><a href="#">Shari </a></li>
																	<li><a href="#">3 Pieces </a></li>
																	<li><a href="#">Shoes </a></li>
																	<li><a href="#">T-shirt</a></li>
																</ul>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="panel panel-default sub-category">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a href="#">
																	Kid's Collection
																</a>
																<a data-toggle="collapse" data-parent="" href="#kids-c">
																	<span class="badge pull-right"><i class="test fa fa-plus"></i></span>
																</a>
															</h4>
														</div>
														<div id="kids-c" class="panel-collapse collapse">
															<div class="panel-body">
																<ul>
																	<li><a href="#">Shirt </a></li>
																	<li><a href="#">Pant </a></li>
																	<li><a href="#">Shoes </a></li>
																	<li><a href="#">T-shirt</a></li>
																</ul>
															</div>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="#">
													<div class="panel panel-default sub-category">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a href="#">
																	Others
																</a>
																<a data-toggle="collapse" data-parent="" href="#others-c">
																	<span class="badge pull-right"><i class="test fa fa-plus"></i></span>
																</a>
															</h4>
														</div>
														<div id="others-c" class="panel-collapse collapse">
															<div class="panel-body">
																<ul>
																	<li><a href="#">Bed sheets </a></li>
																	<li><a href="#">Towels </a></li>
																</ul>
															</div>
														</div>
													</div>
												</a>
											</li>
										</ul>
									</div>
								</div>
								</div>
								<div class="row">
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="cosmetics-c" >
								<div class="row">
								<div class="col-xs-4">
								<div class="dropdown">
									  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
									    Sub-category
									    <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li><a href="#">Oil </a></li>
											<li><a href="#">Shope </a></li>
											<li><a href="#">Shampoo </a></li>
											<li><a href="#">Facewash</a></li>
										</ul>
									</div>
								</div>
								</div>
								<div class="row">
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="ornaments-c" >
								<div class="row">
								<div class="col-xs-4">
								<div class="dropdown">
									  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
									    Sub-category
									    <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li><a href="#">City Gold </a></li>
											<li><a href="#">Neckles </a></li>
											<li><a href="#">Other </a></li>
										</ul>
									</div>
								</div>
								</div>
								<div class="row">
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="electronics-c" >
								<div class="row">
								<div class="col-xs-4">
								<div class="dropdown">
									  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
									    Sub-category
									    <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li><a href="#">Mobile </a></li>
											<li><a href="#">Computer </a></li>
											<li><a href="#">Computer Accessories</a></li>
											<li><a href="#">Watch </a></li>
											<li><a href="#">Other </a></li>
										</ul>
									</div>
								</div>
								</div>
								<div class="row">
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								</div>
							</div>

							<div class="tab-pane fade" id="households-c" >
								<div class="row">
								<div class="col-xs-4">
								<div class="dropdown">
								  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
								    Sub-category
								    <span class="caret"></span>
								  </button>
								  	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
										
									</ul>
									</div>
								</div>
								</div>
								<div class="row">
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $urls_base;?>cl/images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="other-c" >
								<div class="row">
								<div class="col-xs-4">
								<div class="dropdown">
									<button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
									    Sub-category
									    <span class="caret"></span>
									</button>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											
									</ul>
									</div>
								</div>
								</div>
								<div class="row">
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $urls_base;?>cl/images/home/gallery2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $urls_base;?>cl/images/home/gallery4.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $urls_base;?>cl/images/home/gallery3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $urls_base;?>cl/images/home/gallery1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $urls_base;?>cl/images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $urls_base;?>cl/images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $urls_base;?>cl/images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $urls_base;?>cl/images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $urls_base;?>cl/images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $urls_base;?>cl/images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?php echo $urls_base;?>cl/images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?php echo $urls_base;?>cl/images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?php echo $urls_base;?>cl/images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="<?php echo $urls_base;?>cl/images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="<?php echo $urls_base;?>cl/images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="<?php echo $urls_base;?>cl/js/jquery.js"></script>
	<script src="<?php echo $urls_base;?>cl/js/bootstrap.min.js"></script>
	<script src="<?php echo $urls_base;?>cl/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo $urls_base;?>cl/js/price-range.js"></script>
    <script src="<?php echo $urls_base;?>cl/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo $urls_base;?>cl/js/main.js"></script>
    <script type="text/javascript">
    	  (function(){

    	  		$('.dropdown-toggle').on('click',function(){
		    		//$('li').show();
		    		//alert(1);
		    		console.log("dropdown-toggle called");
			    		$(".dropdown").addClass("open");
			    		$(".dropdown").click(function(event){
					    // event.stopPropagation();
					    console.log("dropdown called");
					    return false;
					});
		    		
		    	});
		    	
		    	

		    	$('html').click(function() {
					$(".dropdown").removeClass("open");
					console.log("html called");
				});

				// $('.dropdown-toggle').click(function(event){
				// 	console.log("dropdown-toggle stopped called");
				//     // event.stopPropagation();
				// });
		    	

		    	$('.test').on('click',function(){
		    		
		    		console.log("test called");
		    		var oldsel=$(this).parent().parent().attr("href");
		    		$(oldsel).toggle();
		    		
		    	});
	    	})();
    </script>

    <style type="text/css">
	.slider-wrap {
	   width: 445px;
	   overflow: hidden;
	}

	ul, li {
	   margin: 0;
	   padding: 0;
	   padding-left: 20px;
	}

	.slider-wrap ul {
	   width: 10000px;
	   position: relative;
	   -webkit-animation: slide 20s;
	}

	.slider-wrap li {
	   float: left;
	   list-style: none;
	   position: relative;
	}

	.slider-wrap a {
	   text-decoration: none;
	}

	.slider-wrap ul{
	   -webkit-animation-iteration-count: infinite;
	   -webkit-animation-timing-function: ease-out;
	}

	.slider-wrap ul:hover{
	    -webkit-animation-play-state: paused;   
	}

	@-webkit-keyframes 'slide' {
	   10% {
	      left: 0;
	   }

	   15%,30% {
	      left: -120px;
	   }

	   35%,50% {
	      left: -$240*2px;
	      /*left:-200px;*/
	   }

	   55%,70% {
	      left: -360*3px;
	   }

	   75%,90% {
	      left: -470px;
	   }
	   93% { left: 0;}
	}

</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</body>
</html>


