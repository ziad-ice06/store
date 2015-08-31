<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		InvisMVC
 * @author		iSolution
 */

class Admin_Controller extends iController
{	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load('RainTPL');		
		$this->RainTPL->assign('urls_base',$this->base_url);
		$this->RainTPL->draw('admin-panel');
	}

	function pre_insert_cat()
	{
		// var_dump($_GET);
		$flag1=0;$flag2=0;
		$this->load("RainTPL");
		$this->load('Json_helper','libraries');
		$cat=(array)$this->Json_helper->get_cat_list();
		//var_dump($cat);
		foreach ($cat as $key => $value) {
			$catlist[]=$key;
			if (isset($_GET['scat']) && $key==$_GET['scat']) {
				$flag1=1;
				$sc=(array)$value;
				foreach ($sc as $key => $value) {
					$scatlist[]=$key;
					if (isset($_GET['sscat']) && $key==$_GET['sscat']) {
						$flag2=1;
						$sscatlist=$value;
						
					}
				}
			}
		}


		if($flag1==0)
		{
			reset($cat);
			$sc=(array)$cat[key($cat)];
				foreach ($sc as $key => $value) {
					$scatlist[]=$key;											
				}
				$sscatlist=$sc[$scatlist[0]];
				$_GET['scat']=key($cat);
				$_GET['sscat']=key($sc);
		}

		if($flag2==0)
		{
			reset($sc);
			$sscatlist=$sc[key($sc)];
			$_GET['sscat']=key($sc);
		}

		// var_dump($catlist);
		// var_dump($scatlist);
		// var_dump($sscatlist);
		$this->RainTPL->assign('cat',$cat);
		$this->RainTPL->assign('catlist',$catlist);
		$this->RainTPL->assign('scatlist',$scatlist);
		$this->RainTPL->assign('sscatlist',$sscatlist);
		$this->RainTPL->assign('selected_cat',$_GET['scat']);
		$this->RainTPL->assign('selected_scat',$_GET['sscat']);
		// $this->RainTPL->assign('selected_sub_cat',$selected_sub_cat);
		// $this->RainTPL->assign('selected_sub_sub_cat',$selected_sub_sub_cat);
		$this->RainTPL->draw("add_new_cat");	
	}

	function insert_new_cat()
	{
		$this->load('Json_helper','libraries');
		$rt=$this->Json_helper->add_new_cat($_POST['ncategory']);
		// echo $_POST['ncategory'];
		if($rt)
		echo 'Entry Succesful';
		else
		echo 'Already exist';
		$this->pre_insert_cat();
	}
	
	function get_cat()
	{
		$this->load('Json_helper','libraries');
		$cat=$this->Json_helper->get_cat_list();
		$this->load("RainTPL");
		$this->RainTPL->assign('cat',$cat);
		$this->RainTPL->draw("get_cat");
	}
	
	function pre_del_cat()
	{
		$this->load("RainTPL");
		$this->get_cat();
		$this->RainTPL->draw("delete_cat");
	}

	function del_cat()
	{
		var_dump($_GET);
		$this->load('Json_helper','libraries');
		echo $_GET['scat'];
		$this->Json_helper->del_cat_list($_GET['scat']);
		$this->pre_insert_cat();
	}

	function insert_new_sub_cat()
	{
		$this->load('Json_helper','libraries');
		$rt=$this->Json_helper->add_new_sub_cat($_POST['selcategory'],$_POST['nscategory']);
		if($rt)
		echo 'Entry Succesful';
		else
		echo 'Already exist';
		$this->pre_insert_cat();
	}

	function insert_new_sub_sub_cat()
	{
		$this->load('Json_helper','libraries');
		$rt=$this->Json_helper->add_new_sub_sub_cat($_POST['selcategory'],$_POST['selscategory'],$_POST['nsscategory']);
		if($rt)
		echo 'Entry Succesful';
		else
		echo 'Already exist';
		$this->pre_insert_cat();
	}




	// function pre_insert_test_type()
	// {
	// 	$this->load("RainTPL");
	// 	$this->RainTPL->draw("add_test_type");
	// }
	
	// function insert_new_test_type()
	// {
	// 	$this->load("RainTPL");
	// 	$this->load('Json_helper','libraries');
	// 	$this->Json_helper->add_new_test($_POST);
	// 	$this->pre_insert_test_type();
	// }
	
	// function pre_insert_new_test()
	// {
	// 	$this->load("RainTPL");
	// 	$this->load('Json_helper','libraries');
	// 	$test=(array)$this->Json_helper->get_test_list();
	// 	$this->RainTPL->assign('test',$test);
	// 	$keys =array_keys($test);
	// 	$k=isset($_GET['ttype'])? $_GET['ttype']:$keys[0];
	// 	$this->RainTPL->assign('atest',$test[$k]);
	// 	$this->RainTPL->draw("add_new_test");
		
	// }
	// function insert_new_test()
	// {
	// 	$this->load('Json_helper','libraries');
	// 	$this->Json_helper->add_new_test($_POST);
	// 	$this->pre_insert_new_test();
		
	// }
	// function get_test()
	// {
	// 	$this->load('Json_helper','libraries');
	// 	$test=(array)$this->Json_helper->get_test_list();
	// 	$this->load("RainTPL");
	// 	$this->RainTPL->assign('test',$test);
	// 	$this->RainTPL->draw("get_test");
	// }
	
	// function get_test_type()
	// {
	// 	$this->load('Json_helper','libraries');
	// 	$test=(array)$this->Json_helper->get_test_list();
	// 	$this->load("RainTPL");
	// 	$this->RainTPL->assign('test',$test);
	// 	$keys =array_keys($test);
	// 	$k=isset($_GET['ttype'])? $_GET['ttype']:$keys[0];
	// 	$this->RainTPL->assign('atest',$test[$k]);
	// 	//var_dump($test);
	// 	$this->RainTPL->draw("get_test_type");
	// }
	// function get_test_list()
	// {
	// 	$this->load('Json_helper','libraries');
	// 	$test=(array)$this->Json_helper->get_test_list();
	// 	$this->load("RainTPL");
	// 	$keys =array_keys($test);
	// 	$k=isset($_GET['ttype'])? $_GET['ttype']:$keys[0];
	// 	$this->RainTPL->assign('atest',$test[$k]);
	// 	//var_dump($test);
	// 	$this->RainTPL->draw("get_test_list");
	// }
	
	// function pre_del_test_type()
	// {
	// 	$this->load("RainTPL");
	// 	$this->load('Json_helper','libraries');
	// 	$test=(array)$this->Json_helper->get_test_list();
	// 	$this->RainTPL->assign('test',$test);
	// 	$this->RainTPL->draw("del_test_type");
	// }
	// function del_test_type()
	// {
	// 	$this->load('Json_helper','libraries');
	// 	$this->Json_helper->del_test_type_list($_POST['nttype']);
	// 	$this->pre_del_test_type();
	
	// }
	
	// function pre_del_test()
	// {
	// 	$this->load("RainTPL");
	// 	$this->load('Json_helper','libraries');
	// 	$test=(array)$this->Json_helper->get_test_list();
	// 	$this->RainTPL->assign('test',$test);
	// 	$keys =array_keys($test);
	// 	$k=isset($_GET['ttype'])? $_GET['ttype']:$keys[0];
	// 	$this->RainTPL->assign('atest',$test[$k]);
	// 	$this->RainTPL->draw("del_test");
	// }
	// function del_test()
	// {
	// 	$this->load('Json_helper','libraries');
	// 	$this->Json_helper->del_test_list($_POST['nttype'],$_POST['ntest']);
	// 	$this->pre_del_test();
	
	// }


	function add_logo()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("add_logo");
	}

	function manage_navigation()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("manage_navigation");
	}

	function displayed_item_types()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("displayed_item_types");
	}

	function slider_setup()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("slider_setup");
	}

	function theme_setup()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("theme_setup");
	}

	function all_pages()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("all_pages");
	}

	function new_page()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("new_page");
	}

	function visitor_report()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("visitor_report");
	}

	function customer_message_report()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("customer_message_report");
	}

	function order()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("order");
	}

	function all_users()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("all_users");
	}

	function new_user()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("new_user");
	}

	function general_settings()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("general_settings");
	}

	function payment_method()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("payment_method");
	}

	function social_accounts()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("social_accounts");
	}

	function tax_rates()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("tax_rates");
	}

	function shipping_rates()
	{
		$this->load("RainTPL");
		$this->RainTPL->draw("shipping_rates");
	}

	
}

?>
