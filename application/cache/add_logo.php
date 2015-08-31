<?php if(!class_exists('raintpl')){exit;}?>
    <div class="page-inner col-sm-12" id="admin-content">
	       
	    <div class = "page-title col-sm-12">
			<h3>Add Logo for Your Store
			</h3>
		</div>
			<div id="main-wrapper">
				<div class="col-lg-12 col-md-12">
				
				<div class="col-lg-12 col-md-12">
					<div class="panel panel-white">
			  	<div class="panel-heading">
			        <h4 class="panel-title">Logo</h4>
			    </div>
			    <div class="panel-body">
			    	
						<form role="form" class="edit_store" id="add_logo" enctype="multipart/form-data" action="/admin/logos/97/upload" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="patch" />
							<br>
							<div class="alert alert-info pull-left" role="alert">
								<strong>Choose the logo image file and then click the "Add Logo" button to upload your business logo.</strong>
							</div>
							<input type="submit" name="commit" value="Add Logo" class="btn btn-primary pull-right" />
							<div class = "row">
								<div class = "col-md-12">
									<hr>
									<div class = "col-md-6">
										<div class="form-group"><label class="control-label" for="store_logo">Upload Store Logo</label><input class="form-control" type="file" accept="image/png,image/gif,image/jpeg" label="Upload Store Logo" name="store[logo]" id="store_logo" /></div>
									</div>
									<div class = "col-md-6">
											<img src=https://s3.amazonaws.com/ep-files/defaults/your-logo-here.png class="img-thumbnail" alt="Thumbnail Image">
									</div>
								</div>
							</div>
							<hr>
							<input type="submit" name="commit" value="Add Logo" class="btn btn-primary pull-right" />
							<br>
			</form>
			    </div>
			</div>
					<div class="alert alert-info pull-left" role="alert">
					Create a unique identity of your Brand by uploading the company's logo to your Ecommerce Store. If you are not satisfied with your store logo and banners, iSolution can help you to design beautiful banners and logos with economic packages. Call us now to order your custom banners and logo package: 
					<h5 class = "text-center">01717-450375, 01710-928707</h5>
					<h5 class = "text-center">Or live chat from our Facebook page: <a href="https://www.facebook.com/isitbd" target="_blank">https://www.facebook.com/isitbd</a></h5>
					</div>
				</div>

				</div>
			</div>
    </div>  
  <script type="text/javascript">
    af("add_logo","main-panel");
  </script>