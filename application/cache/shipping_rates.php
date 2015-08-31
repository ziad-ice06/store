<?php if(!class_exists('raintpl')){exit;}?>    <div class="page-inner col-sm-12" id="admin-content">
       
      <div class = "page-title">
	<h3>
		Shipping Rates
		<div class = "pull-right">
			<a class="btn btn-primary" href="/admin/shipping_rates/new">Add New Shipping Rate</a>
		</div>
	</h3>
</div>
<div id="main-wrapper">
	<div class="col-lg-12 col-md-12">
	
	<div class="col-lg-12 col-md-12">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "row">
					<div class = "col-md-6"><h4>Specify minimum purchase amount for free shipping</h4></div>
					<div class = "col-md-6">
							<form role="form" class="edit_store" id="edit_store_97" action="/admin/shipping_rates/97/update_free_shipping_threshold" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="patch" />
								<div class="form-group"><label class="control-label" for="store_free_shipping_threshold">Free shipping threshold</label><div class="input-group"><input min="0" class="form-control" type="number" name="store[free_shipping_threshold]" id="store_free_shipping_threshold" /></div></div>
								
											
					</div>
				</div>

				<hr>
		<div class = "row">
			<div class = "col-md-6"><h4>Specify shipping rate for each Region</h4></div>
			<div class = "col-md-6">
				<div class="form-group">
					<label class="control-label" for="within_city">Within City</label>
					<div class="input-group">
						<input min="0" class="form-control" type="number" name="store[free_shipping_threshold]" id="within_city" />
					</div>
					<label class="control-label" for="dhaka">Dhaka</label>
					<div class="input-group">
						<input min="0" class="form-control" type="number" name="store[free_shipping_threshold]" id="dhaka" />
					</div>
					<label class="control-label" for="within_country">Within Country</label>
					<div class="input-group">
						<input min="0" class="form-control" type="number" name="store[free_shipping_threshold]" id="within_country" />
					</div>
				</div>
				<input type="submit" name="commit" value="Update Store" class="btn btn-primary pull-right" />
				</form>	
			</div>
		</div>
		<hr>
			</div>
		</div>
		<div class = "row">
			<div class = "col-md-12">
			</div>
		</div>
</div>

	</div>
</div>
    </div>