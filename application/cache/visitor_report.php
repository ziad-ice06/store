<?php if(!class_exists('raintpl')){exit;}?><div class="page-inner col-sm-12" id="admin-content">
       
      <div class="page-title">
    <h3>Visitor Report</h3>
    <div class = "pull-right">
    	<div class = "form-group">
			<select name="time_length" id="time_length" class="form-control" data-remote="true" data-url="/admin/reports/visitor_report"><option value="0">Today</option>
<option value="7">Last 7 Days</option>
<option value="30">Last 30 Days</option></select>
		</div>
    </div>
    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="/admin/index?days=0">Home</a></li>
            <li class="active">Visitor report</li>
        </ol>
    </div>    
</div>
<div id="main-wrapper">
	<div class="col-lg-12 col-md-12">
	    <div class="panel panel-white">
	        <div class="panel-heading">
	            <h4 class="panel-title">Visitor Report</h4>
	        </div>
	    <div id = "visitor_table" class="panel-body">
	        <div class="table-responsive project-stats"> 
				<table class = "table">
					<thead>
						<tr>
						<th>Country</th>
						<th>Region</th>
						<th>City</th>
						<th>Device</th>
						<th>Referrer</th>
						<th>Visited at</th>
						</tr>
					</thead>
					<tbody>
							<tr>
								<td>Bangladesh</td>
								<td></td>
								<td></td>
								<td>Desktop</td>
								<td></td>
								<td>about 3 hours ago</td>
							</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
    </div>  