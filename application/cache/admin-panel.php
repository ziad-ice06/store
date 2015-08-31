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
	<link href="<?php echo $urls_base;?>cl/css/admin.css" rel="stylesheet">
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


   <style>
/*		body, div, h1, h2, h3, h4, h5, h6, p, ul, ol, li, dl, dt, dd, img, form, fieldset, input, textarea, blockquote {
			margin: 0; padding: 0; border: 0;
		}

		body {
			background: #909eab url(bg.png);
			font-family: Helvetica, sans-serif; font-size: 18px; line-height: 24px;
		}

		nav {
			margin: 100px auto; 
			text-align: center;
		}

		nav ul ul {
			display: none;
		}

			nav ul li:hover > ul {
				display: block;
			}


		nav ul {
			background: #efefef; 
			background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
			background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
			background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
			box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
			padding: 0 20px;
			border-radius: 10px;  
			list-style: none;
			position: relative;
			display: inline-table;
		}
			nav ul:after {
				content: ""; clear: both; display: block;
			}

			nav ul li {
				float: left;
			}
				nav ul li:hover {
					background: #4b545f;
					background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
					background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
					background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
				}
					nav ul li:hover a {
						color: #fff;
					}
				
				nav ul li a {
					display: block; padding: 25px 40px;
					color: #757575; text-decoration: none;
				}
					
				
			nav ul ul {
				background: #5f6975; border-radius: 0px; padding: 0;
				position: absolute; top: 100%;
			}
				nav ul ul li {
					float: none; 
					border-top: 1px solid #6b727c;
					border-bottom: 1px solid #575f6a; position: relative;
				}
					nav ul ul li a {
						padding: 15px 40px;
						color: #fff;
					}	
						nav ul ul li a:hover {
							background: #4b545f;
						}
				
			nav ul ul ul {
				position: absolute; left: 100%; top:0;
			}*/

			
	</style>
</head>
<body>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>E-Shopper</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"onclick="javascript:ap('c=admin&a=order','main-panel',true)">
									<span class="menu-icon glyphicon glyphicon-shopping-cart"></span>
									Orders</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#homepage">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<span class="menu-icon glyphicon glyphicon-home"></span>
											Homepage Setup
										</a>
									</h4>
								</div>
								<div id="homepage" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#"onclick="javascript:ap('c=admin&a=add_logo','main-panel',true)">Logo</a></li>
											<li><a href="#"onclick="javascript:ap('c=admin&a=slider_setup','main-panel',true)">Slider</a></li><li><a href="#"onclick="javascript:ap('c=admin&a=theme_setup','main-panel',true)">Theme</a></li>
											<li><a href="#"onclick="javascript:ap('c=admin&a=manage_navigation','main-panel',true)">Navigation</a></li>
											<li><a href="#"onclick="javascript:ap('c=admin&a=displayed_item_types','main-panel',true)">Item Types</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#produts">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<span class="menu-icon glyphicon glyphicon-tags"></span>
											Products
										</a>
									</h4>
								</div>
								<div id="produts" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#"onclick="javascript:ap('c=product&a=list_product','main-panel',true)">All Produts</a></li>
											<li><a href="#"onclick="javascript:ap('c=product&a=product_upload_pre','main-panel',true)">Add New product</a></li>
											<li><a href="#"onclick="javascript:ap('c=admin&a=pre_insert_cat','main-panel',true)">Product Categories</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#users">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<span class="glyphicon glyphicon-user"></span>
											Users
										</a>
									</h4>
								</div>
								<div id="users" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#"onclick="javascript:ap('c=admin&a=all_users','main-panel',true)">All Users</a></li>
											<li><a href="#"onclick="javascript:ap('c=admin&a=new_user','main-panel',true)">Add New User</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#pages">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<span class="glyphicon glyphicon-file"></span>
											Pages
										</a>
									</h4>
								</div>
								<div id="pages" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#"onclick="javascript:ap('c=admin&a=all_pages','main-panel',true)">All Pages</a></li>
											<li><a href="#"onclick="javascript:ap('c=admin&a=new_page','main-panel',true)">Add New page</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#reports">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<span class="menu-icon glyphicon glyphicon-signal"></span>
											Reports
										</a>
									</h4>
								</div>
								<div id="reports" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#"onclick="javascript:ap('c=admin&a=visitor_report','main-panel',true)">Visitors Report</a></li>
											<li><a href="#"onclick="javascript:ap('c=admin&a=customer_message_report','main-panel',true)">Customer Messages</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#settings">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<span class="menu-icon glyphicon glyphicon-wrench"></span>
											Settings
										</a>
									</h4>
								</div>
								<div id="settings" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#"onclick="javascript:ap('c=admin&a=general_settings','main-panel',true)">General Settings</a></li>
											<li><a href="#"onclick="javascript:ap('c=admin&a=payment_method','main-panel',true)">Payment Method</a></li>
											<li><a href="#"onclick="javascript:ap('c=admin&a=social_accounts','main-panel',true)">Social Accounts</a></li>
											<li><a href="#"onclick="javascript:ap('c=admin&a=tax_rates','main-panel',true)">Tax Rates</a></li>
											<li><a href="#"onclick="javascript:ap('c=admin&a=shipping_rates','main-panel',true)">Shipping Rates</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div><!--/category-products-->
					</div>
				</div>

				<div class="col-sm-9" id="main-panel">
				
				</div>
			</div>
		</div>
	</section>
	<script src="<?php echo $urls_base;?>cl/js/jquery.js"></script>
	<script src="<?php echo $urls_base;?>cl/js/bootstrap.min.js"></script>
	<script src="<?php echo $urls_base;?>cl/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo $urls_base;?>cl/js/price-range.js"></script>
    <script src="<?php echo $urls_base;?>cl/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo $urls_base;?>cl/js/main.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $urls_base;?>cl/js/jquery.form.js"></script>
    <script type="text/javascript" src="<?php echo $urls_base;?>cl/js/base.js"></script>
</body>
</html>