<?php if(!class_exists('raintpl')){exit;}?>    <div class="page-inner col-sm-12" id="admin-content">
       
      
<div class="page-title">
    <h3>New User</h3>
    <a class="btn btn-primary pull-right" href="#" onclick="javascript:ap('c=admin&a=all_users','main-panel',true)">
      <span class="glyphicon glyphicon-plus"></span> All Users
</a>    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="/admin/index?days=0">Home</a></li>
            <li class="active">New User</li>
        </ol>
    </div>
</div>
<div id="main-wrapper">
	<div class="col-lg-12 col-md-12">
	
	<div class="col-lg-12 col-md-12">
		<form role="form" class="edit_store" id="edit_store_97" enctype="multipart/form-data" action="/admin/settings/97/update_general_settings" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="_method" value="patch" />
				<br>
				<br>
				<br>
				<div class="panel panel-white">
  	<div class="panel-heading">
        <h4 class="panel-title">New User</h4>
    </div>
    <div class="panel-body">
    	

				<div class = "row">
					<div class = "col-md-12">
							    
							    <br>
							    <div class="col-md-6">
							      <div class="form-group"><label class="control-label required" for="store_name">First Name</label><input class="form-control" type="text" value="" name="store[name]" id="store_name" /></div>
							      
							      <div class="form-group"><label class="control-label" for="store_business_name">User Name</label><input class="form-control" type="text" name="store[business_name]" id="store_business_name" /></div>
							      <div class="form-group"><label class="control-label" for="store_email">Email</label><input class="form-control" type="text" name="store[email]" id="store_email" /></div>
							      
							    </div>
							    <div class="col-md-6">
							    	<div class="form-group"><label class="control-label" for="store_business_name">Last Name</label><input class="form-control" type="text" name="store[business_name]" id="store_business_name" /></div>
							    	<div class="form-group"><label class="control-label" for="store_country_id">Role</label>
								    	<select class="form-control" name="store[country_id]" id="store_country_id">
									    	<option value="1">Please select</option>
											<option value="">Admin</option>
											<option value="2">Shop Manager</option>
											<option value="3">Customer</option>
										</select>
									</div>
							    	<div class="form-group"><label class="control-label" for="store_phone">Phone</label><input class="form-control" type="text" name="store[phone]" id="store_phone" /></div>
							    	
					
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