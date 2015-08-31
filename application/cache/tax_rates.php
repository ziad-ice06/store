<?php if(!class_exists('raintpl')){exit;}?><div class="page-inner col-sm-12" id="admin-content">
       
      <div class = "page-title">
	<h3>Tax Rates
	</h3>
</div>
<div id="main-wrapper">
	<div class="col-lg-12 col-md-12">
	
	<div class="col-lg-12 col-md-12">
		<div class="panel panel-white">
  	<div class="panel-heading">
        <h4 class="panel-title">Tax rate</h4>
    </div>
    <div class="panel-body">
    	
			<form role="form" class="form-inline" id="new_tax_rate" action="/admin/tax_rates" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
				<div class="form-group"><label class="control-label required" for="tax_rate_name">Name</label><input placeholder="Standard tax" class="form-control" type="text" name="tax_rate[name]" id="tax_rate_name" /></div>
				<div class="form-group"><label class="control-label required" for="tax_rate_rate">Rate</label><input placeholder="For example 5" min="0" step="0.01" class="form-control" type="number" name="tax_rate[rate]" id="tax_rate_rate" /></div>
				<input type="submit" name="commit" value="Add New Tax Rate" class="btn btn-primary" />
</form>
    </div>
</div>
		<br>
		<div class="panel panel-white">
  	<div class="panel-heading">
        <h4 class="panel-title"> All Tax rate</h4>
    </div>
    <div class="panel-body">
    	
			<div class = "table-responsive">
				<table class = "table table-condensed table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Rate</th>
							<th></th>
							<th></th>
						<tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>

    </div>
</div>	</div>

	</div>
</div>

    </div>  