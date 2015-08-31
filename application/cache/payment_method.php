<?php if(!class_exists('raintpl')){exit;}?><div class="page-inner col-sm-12" id="admin-content">
       
      <div class = "page-title">
	<h3>Payment Methods</h3>
</div>

<div id="main-wrapper">
	<div class="col-lg-12 col-md-12">
	
	<div class="col-lg-12 col-md-12">
			<div class="alert alert-success" role="alert">
				<strong>Your store accepts payments with:</strong>
				<ul>
						<li>Storea payments</li>
						<li>Cash on delivery</li>
				</ul>
			</div>

		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "row">
					<div class = "col-md-4">
						<h4>iSolution Payments</h4>
					</div>
					<div class = "col-md-8">
						<p>Your store accepts credit cards directly through EP.</p>
						<p>Before we can transfer money from your sales to your bank account, we need you to provide us with additional details by completing the setup of your account.
						</p>
						<hr>
						<div class = "pull-right">
								<a class="btn btn-primary" href="/admin/store_payment_methods/deactivate_ep">Deactivate</a>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = row>
					<div class = "col-md-4">
						<h4>Cash on Delivery</h4>
					</div>
					<div class = "col-md-8">
						<p>Provide customers with instructions to pay outside of your web store.</p>
						<hr>
						<div class = "pull-right">
								<a class="btn btn-primary" data-remote="true" href="/admin/store_payment_methods/edit_cod">Save Changes</a>
								<a class="btn btn-primary" href="/admin/store_payment_methods/deactivate_cod">Deactivate</a>
						</div>
						<div id= "edit-cod-form"></div>
					</div>
				</div>
			</div>
		</div>

		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = row>
					<div class = "col-md-4">
						<h4>Bkash</h4><br><br><br>
						<label>Enter Bkash Number:</label> 
					  	<input type="text" name="bkash" value="01717450375">
					</div>
					<div class = "col-md-8">
						<p>Provide customers with instructions to pay outside of your web store.</p>
						<hr><br>
						<div class = "pull-right">
								<a class="btn btn-primary" data-remote="true" href="/admin/store_payment_methods/edit_cod">Save Changes</a>
								<a class="btn btn-primary" href="/admin/store_payment_methods/deactivate_cod">Deactivate</a>
						</div>
						<div id= "edit-cod-form"></div>
					</div>
				</div>
			</div>
		</div>

		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = row>
					<div class = "col-md-4">
						<h4>DBBL Mobile Bank</h4><br><br><br>
						<label>Enter DBBL Mobile Bank Acconunt Number:</label> 
					  	<input type="text" name="dbbl">
					</div>
					<div class = "col-md-8">
						<p>Provide customers with instructions to pay outside of your web store.</p>
						<hr>
						<br><br>
						<div class = "pull-right">
								<a class="btn btn-primary" href="/admin/store_payment_methods/deactivate_cod">Activate</a>
						</div>
						<div id= "edit-cod-form"></div>
					</div>
				</div>
			</div>
		</div>

		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = row>
					<div class = "col-md-4">
						<h4>Direct Bank Transfer</h4><br><br><br>
						<h4>Enter Account Details</h4><br><br>
						<label>Account Holder Name:</label> 
					  	<input type="text" name="acc_name">
						<label>Account Number:</label> 
					  	<input type="text" name="acc_number">
						<label>Bank Name:</label> 
					  	<input type="text" name="bank_name">
						<label>Bank Swift Code:</label> 
					  	<input type="text" name="s_code">
					</div>
					<div class = "col-md-8">
						<p>Provide customers with instructions to pay outside of your web store.</p>
						<hr>
						<br><br><br><br><br><br><br><br><br><br><br><br>
						<div class = "pull-right">
								<a class="btn btn-primary" href="/admin/store_payment_methods/deactivate_cod">Activate</a>
						</div>
						<div id= "edit-cod-form"></div>
					</div>
				</div>
			</div>
		</div>

		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = row>
					<div class = "col-md-4">
						<h4>Debit Card Payment</h4><br><br><br>
						<h4>Enter Account Details</h4><br><br>
						<label>Account Holder Name:</label> 
					  	<input type="text" name="acc_name">
						<label>Account Number:</label> 
					  	<input type="text" name="acc_number">
						<label>Bank Name:</label> 
					  	<input type="text" name="bank_name">
						<label>Bank Swift Code:</label> 
					  	<input type="text" name="s_code">
					</div>
					<div class = "col-md-8">
						<p>Provide customers with instructions to pay outside of your web store.</p>
						<hr>
						<br><br><br><br><br><br><br><br><br><br><br><br>
						<div class = "pull-right">
								<a class="btn btn-primary" href="/admin/store_payment_methods/deactivate_cod">Activate</a>
						</div>
						<div id= "edit-cod-form"></div>
					</div>
				</div>
			</div>
		</div>
</div>

	</div>
</div>
    </div>  