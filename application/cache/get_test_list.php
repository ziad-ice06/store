<?php if(!class_exists('raintpl')){exit;}?>
<select id="a_test" name="ntest" style="position: relative;top: -24px;right: -400px;width: 300px">
	<?php $counter1=-1; if( isset($atest) && is_array($atest) && sizeof($atest) ) foreach( $atest as $key1 => $value1 ){ $counter1++; ?>
		<option value="<?php echo $value1;?>"><?php echo $value1;?>
		
		</option>
	<?php } ?>
	
</select>
