<?php
//空控制器
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller{
	public function indexAction(){
		$name=CONTROLLER_NAME;
		$this->view($name);
	}
	public function view($name){
		echo "name:".$name;
	}
}
?>