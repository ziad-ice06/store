<?php if(!class_exists('raintpl')){exit;}?><div id="add_and_del_test">
</div>

<form id="add_test"method="POST" action="<?php echo $base_url;?>index.php?c=admin&a=insert_new_test">
  <label>Test Type:</label>
	<select id="l_test" name="nttype" width="300" style="width: 300px"onChange="load_test()">
	
	<?php $counter1=-1; if( isset($test) && is_array($test) && sizeof($test) ) foreach( $test as $key1 => $value1 ){ $counter1++; ?>
	
		<option value="<?php echo $key1;?>"><?php echo $key1;?>
		
		</option>
	<?php } ?>
	</select>

	<div id="test_list">
	<select id="a_test" name="ntest" style="position: relative;top: -22px;right: 440px;width: 300px">
		<?php $counter1=-1; if( isset($atest) && is_array($atest) && sizeof($atest) ) foreach( $atest as $key1 => $value1 ){ $counter1++; ?>
			<option value="<?php echo $value1;?>"><?php echo $value1;?>
			
			</option>
		<?php } ?>
		
	</select>
	</div>
	Add Test: <input type="text" name="ntest"><br>
	<input type="submit" value="Submit"> 
	  
</form>
<script>
	af("add_test","main-panel");
</script>
<script>
	function load_test()
	{
		//alert($("#l_test").val());
		ap("c=admin&a=get_test_list&ttype="+encodeURIComponent($("#l_test").val()),"test_list",true);
	}

</script>

