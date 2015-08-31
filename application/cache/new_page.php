<?php if(!class_exists('raintpl')){exit;}?><div class="page-inner col-sm-12" id="admin-content">
       
      
<div class = "page-title">
	<h3>Pages for Your Store
		<a class="btn btn-primary pull-right" update="admin-content" href="#"onclick="javascript:ap('c=admin&a=all_pages','main-panel',true)">
	  		<span class="glyphicon glyphicon-gift"></span> Go to Pages
</a>	</h3>
</div>
<div id="main-wrapper">
	<div class="col-lg-12 col-md-12">
	
	<div class="panel panel-white">
  	<div class="panel-heading">
        <h4 class="panel-title">New Page</h4>
    </div>
    <div class="panel-body">
    	
		<form role="form" class="new_page" id="new_page" action="/admin/pages" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
			<input type="submit" name="commit" value="Create New Page" class="btn btn-primary pull-right" />
			<br>
			<input value="97" type="hidden" name="page[store_id]" id="page_store_id" />
<div class="form-group"><label class="control-label required" for="page_title">Page title</label><input class="form-control" type="text" name="page[title]" id="page_title" /></div>
<label>Content</label>
<textarea rows="25" name="page[content]" id="page_content">
</textarea><script>
//<![CDATA[
(function() { if (typeof CKEDITOR != 'undefined') { if (CKEDITOR.instances['page_content'] == undefined) { CKEDITOR.replace('page_content', {"toolbar":"mini"}); } } else { setTimeout(arguments.callee, 50); } })();
//]]>
</script>
<br>
<!--
<div class="panel panel-white">
  	<div class="panel-heading">
        <h4 class="panel-title">Provide search engine optimization (SEO) information here</h4>
    </div>
    <div class="panel-body">
    	
	<div class = "row">
		<div class = "col-md-12"><hr></div>
		<div class = "col-md-6">
			<div class="form-group"><label class="control-label" for="page_meta_title">Meta title</label><input class="form-control" type="text" name="page[meta_title]" id="page_meta_title" /></div>
			<div class="form-group"><label class="control-label" for="page_meta_description">Meta description</label><textarea rows="6" class="form-control" name="page[meta_description]" id="page_meta_description">
</textarea></div>
		</div>
		<div class = "col-md-6">
			<div class="form-group"><label class="control-label" for="page_meta_keywords">Meta keywords</label><input class="form-control" type="text" name="page[meta_keywords]" id="page_meta_keywords" /></div>
		</div>
	</div>

    </div>
</div>-->
			<input type="submit" name="commit" value="Create New Page" class="btn btn-primary pull-right" />
			<br>
</form>
    </div>
</div>
	</div>
</div>
</div>