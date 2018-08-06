<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //echo 'username:'.C('ADMIN.username').',password:'.C('ADMIN.password').','.C('DATA_CACHE_TYPE');
        //print_r(C('ADMIN'));
        //echo "1";
        //echo 'year:'.$_GET['year'].",month:".$_GET['month'].",day:".$_GET['day'];
        echo $_GET['from'];
    }
	public function playAction(){
		$val='name';
		$array1=[
			'name'=>'admin1'
		];
		$array2=[
			['name'=>'admin'],
			['name'=>'admin2']
		];
//		//对象
		$obj=new \stdClass();
		$obj->name='admin';
		//模板赋值
		$this->assign('val',$val);
		$this->assign("array1",$array1);
		$this->assign("array2",$array2);
		$this->assign('obj',$obj);
		$this->display();
	}
	public function viewAction(){
//		$this->assign('name','test');
//		$this->assign('now',time());
		$userobj=new \stdClass();
		$userobj->age=100;
		$this->assign('userobj',$userobj);
		$this->display();
	}
} 