<?php if(!class_exists('raintpl')){exit;}?><div class="page-inner col-sm-12" id="admin-content">
       
      <div class = "page-title">
	<h3>General Settings
	</h3>
</div>
<div id="main-wrapper">
	<div class="col-lg-12 col-md-12">
	
	<div class="col-lg-12 col-md-12">
		<form role="form" class="edit_store" id="edit_store_97" enctype="multipart/form-data" action="/admin/settings/97/update_general_settings" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="patch" />
				<input type="submit" name="commit" value="Save Changes" class="btn btn-primary pull-right" />
				<br>
				<br>
				<br>
				<div class="panel panel-white">
  	<div class="panel-heading">
        <h4 class="panel-title">Genenal Settings</h4>
    </div>
    <div class="panel-body">
    	

				<div class = "row">
					<div class = "col-md-12">
							    
							    <br>
							    <div class="col-md-6">
							      <div class="form-group"><label class="control-label required" for="store_name">Online Store name</label><input class="form-control" type="text" value="Odama Shopping Complex" name="store[name]" id="store_name" /></div>
							      <div class="form-group"><label class="control-label" for="store_business_name">Business name</label><input class="form-control" type="text" name="store[business_name]" id="store_business_name" /></div>
							      <div class="form-group"><label class="control-label" for="store_email">Email</label><input class="form-control" type="text" name="store[email]" id="store_email" /></div>
							      <div class="form-group"><label class="control-label" for="store_phone">Phone</label><input class="form-control" type="text" name="store[phone]" id="store_phone" /></div>
							      <div class="form-group"><label class="control-label" for="store_street">Street</label><input class="form-control" type="text" name="store[street]" id="store_street" /></div>
							      <div class="form-group"><label class="control-label" for="store_city">City</label><input class="form-control" type="text" name="store[city]" id="store_city" /></div>
							    </div>
							    <div class="col-md-6">
							    	<div class="form-group"><label class="control-label" for="store_country_id">Country</label><select class="form-control" name="store[country_id]" id="store_country_id"><option value="">Please select</option>
<option value="1">Bangladesh</option>
<option value="2">India</option></select></div>
							      <div class="form-group"><label class="control-label" for="store_province">Province</label><input class="form-control" type="text" name="store[province]" id="store_province" /></div>
							      <div class="form-group"><label class="control-label" for="store_postal_code">Postal code</label><input class="form-control" type="text" name="store[postal_code]" id="store_postal_code" /></div>
							      <div class="form-group"><label class="control-label" for="store_currency">Currency</label><input class="form-control" type="text" name="store[currency]" id="store_currency" /></div>
							      <div class="form-group"><label class="control-label" for="store_locale">Locale</label><select class="form-control" name="store[locale]" id="store_locale"><option value="en">English</option>
<option value="bn">বাংলা</option></select></div>
							      <div class="form-group"><label class="control-label" for="store_per_page">Display products per page</label><input min="1" class="form-control" type="number" value="12" name="store[per_page]" id="store_per_page" /></div>
							      <div class="checkbox"><label for="store_active"><input name="store[active]" type="hidden" value="0" /><input type="checkbox" value="1" checked="checked" name="store[active]" id="store_active" /> Online?</label></div>
							    </div>
					</div>
				</div>

    </div>
</div>			
			<input type="submit" name="commit" value="Save Changes" class="btn btn-primary pull-right" />
</form>	</div>

	</div>
</div>

    </div>  