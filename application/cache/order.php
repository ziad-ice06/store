<?php if(!class_exists('raintpl')){exit;}?> <div class="page-inner col-sm-12" id="admin-content">
       
      <div class="page-title">
    <h3>Orders</h3>
    <div class = "pull-right">
    	<div class = "form-group">
			<select name="order_status" id="order_status" class="form-control" data-remote="true" data-url="/admin/orders"><option value="">Select Order Status</option><option value="received">Received</option>
<option value="accepted">Accepted</option>
<option value="rejected">Rejected</option>
<option value="shipped">Shipped</option></select>
	</div>
    </div>
    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="/admin/index?days=0">Home</a></li>
            <li class="active">Orders</li>
        </ol>
    </div>
    
</div>
<div id="main-wrapper">
	<div class="col-lg-12 col-md-12">
	    <div class="panel panel-white">
	        <div class="panel-heading">
	            <h4 class="panel-title">Recent Orders</h4>
	        </div>
	    <div id = "order_table" class="panel-body">
	        <div class="table-responsive project-stats"> 
				<table class = "table">
					<thead>
						<tr>
							<th>Order ID</th>
							<th>Customer</th>
							<th>Phone number</th>
							<th>Status</th>
							<th>Total</th>
							<th>Updated at</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
    </div>  