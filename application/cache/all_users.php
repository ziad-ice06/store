<?php if(!class_exists('raintpl')){exit;}?>     <style type="text/css">
		.panel-title{
		    padding: 20px 0px 0px 5px;
		}
    </style>

    <div class="page-inner col-sm-12" id="admin-content">
       
      
<div class="page-title">
    <h3>Users</h3>
    <a class="btn btn-primary pull-right" href="#" onclick="javascript:ap('c=admin&a=new_user','main-panel',true)">
	  <span class="glyphicon glyphicon-plus"></span> Add New User
</a>    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="/admin/index?days=0">Home</a></li>
            <li class="active">Users</li>
        </ol>
    </div>
</div>
<div id="main-wrapper">
	<div class="col-lg-12 col-md-12">
	
	<div class="col-lg-12 col-md-12">
		<div class="panel panel-white">
		  	<div class="panel-heading">
                <h4 class="panel-title">All Users</h4>
            </div>
            <div class="panel-body">
            	<div class="table-responsive project-stats"> 
				  <table class = "table table-condensed table-hover">
				    <thead>
		    			<tr>
		    				<th>Name</th>
		    				<th class = "col-md-2 text-center">User Name</th>
		    				<th class = "col-md-3 text-center">Role</th>
		    				<th class = "col-md-1 text-center">Edit</th>
		    				<th class = "col-md-1 text-center">Remove</th>
		    			<tr>
				    </thead>
			    		<tbody>
		    					<tr>

		    						<td>Miswar Bin Ziad</td>
		    						<td class = "col-md-2 text-center">miswar</td>
		    						<td class = "col-md-3 text-center">
		    							<select name="default" id="default" class="form-control" data-remote="true" data-url="/admin/link_lists/create_from_default?list_id=219">
											<option value="3">Admin</option>
											<option value="2">Shop Manager</option>
											<option value="696">Customer</option>
										</select>
									</td>
		    						
		    						<td class = "col-md-1 text-center">
		    							<a href="/admin/products/757-Awesome-Punjabi/edit"><span class="glyphicon glyphicon-pencil"></span></a>
		    						</td>
		    						<td class = "col-md-1 text-center">
		    							<a class="text-danger" data-confirm="Are you sure you want to delete &#39;Awesome Punjabi&#39;?" data-remote="true" rel="nofollow" data-method="delete" href="/admin/products/757-Awesome-Punjabi">
		    								<i class ="fa fa-times"></i>
</a>		    						</td>
		    					</tr>

			    		</tbody>
				  </table>
				  <a class="btn btn-primary pull-right" href="#">Save Changes</a>
				</div>
			</div>
		</div>
	</div>

	</div>
</div>
    </div>  
