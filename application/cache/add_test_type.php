<?php if(!class_exists('raintpl')){exit;}?><div class="container admin">		
	<div class="col-sm-4">
		<div class="row">
			<div class="col-sm-10">
				<form id="add_test_type"method="POST" action="<?php echo $base_url;?>index.php?c=admin&a=insert_new_test_type">
				  <label>Add Category:</label> 
				  <input type="text" name="nttype"><br>
				  <button class="btn btn-default" type="submit">
				  	Add
				  </button>
				</form>
				<script>
					af("add_test_type","main-panel");
				</script>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10">
				<form id="del_test_type" method="POST" action="<?php echo $base_url;?>index.php?c=admin&a=del_test_type">
				  <label>Select a Category to Edit or Delete or Add a Sub Category</label> 
					<select id="l_test" name="nttype">
						<?php $counter1=-1; if( isset($test) && is_array($test) && sizeof($test) ) foreach( $test as $key1 => $value1 ){ $counter1++; ?>
						
							<option value="<?php echo $key1;?>"><?php echo $key1;?>
							
							</option>
						<?php } ?>
					</select>
 					<button class="btn btn-default" type="submit">
					  	Edit
					</button>
					<button class="btn btn-default" type="submit">
				  		Delete
				  	</button>
				</form>
				<script>
					af("del_test_type","main-panel");
				</script>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="row">
			<div class="col-sm-10">
				<form id="add_cat"method="POST" action="<?php echo $base_url;?>index.php?c=admin&a=insert_new_cat">
				  <label>Add Sub Category:</label> 
				  <input type="text" name="ncategory"><br>
				  <button class="btn btn-default" type="submit">
				  	Add
				  </button>
				</form>
				<script>
					af("add_cat","main-panel");
				</script>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10">
				<form id="del_cat"method="POST" action="<?php echo $base_url;?>index.php?c=admin&a=del_cat">
				  <label>Select a Sub Category to Edit or Delete or Add a Sub Sub Category</label> 
					<select name="ncategory">
						<?php $counter1=-1; if( isset($cat) && is_array($cat) && sizeof($cat) ) foreach( $cat as $key1 => $value1 ){ $counter1++; ?>
							<option value="<?php echo $value1;?>"><?php echo $value1;?>
							
							</option>
						<?php } ?>
					</select>
				  	<button class="btn btn-default" type="submit">
					  	Edit
					</button>
					<button class="btn btn-default" type="submit">
				  		Delete
				  	</button>
				</form>
				<script>
					af("del_cat","main-panel");
				</script>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="row">
			<div class="col-sm-10">
				<form id="add_cat"method="POST" action="<?php echo $base_url;?>index.php?c=admin&a=insert_new_cat">
				  <label>Add Sub Sub Category:</label> 
				  <input type="text" name="ncategory"><br>
				  <button class="btn btn-default" type="submit">
				  	Add
				  </button>
				</form>
				<script>
					af("add_cat","main-panel");
				</script>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10">
				<form id="del_cat"method="POST" action="<?php echo $base_url;?>index.php?c=admin&a=del_cat">
				  <label>Select a Category to Edit or Delete</label> 
					<select name="ncategory">
						<?php $counter1=-1; if( isset($cat) && is_array($cat) && sizeof($cat) ) foreach( $cat as $key1 => $value1 ){ $counter1++; ?>
							<option value="<?php echo $value1;?>"><?php echo $value1;?>
							
							</option>
						<?php } ?>
					</select>
					<button class="btn btn-default" type="submit">
					  	Edit
					</button>
					<button class="btn btn-default" type="submit">
				  		Delete
				  	</button>
				</form>
				<script>
					af("del_cat","main-panel");
				</script>
			</div>
		</div>
	</div>
</div>