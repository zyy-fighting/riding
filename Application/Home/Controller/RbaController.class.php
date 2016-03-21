<?php
namespace Home\Controller;
use Think\Controller;

class RbaController extends Controller{
	function __construct(){
		parent::__construct();
		if(!session('?uid')){
			
		}
		else{
			echo "<script> alert('先登录别瞎填');location='".U("Index/index","","")."'</script>";
			die;
		}
	}
}