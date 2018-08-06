<?php
	namespace Home\Controller;
	use Think\Controller;
	class TestController extends Controller{
		public function testAction(){
			echo '您访问了home/test/test';
		}
		public function listAction(){
			echo '您访问了home/test/list';
		}
		//绑定id
		public function bindAction($id){
			echo U('Blog/view',array('id'=>$id),3,'请登录');
		}
		//ajax返回
		public function indexAction(){
			$data=array("status"=>1,'data'=>'data');
			$this->ajaxReturn($data);
		}
		//重定向
		public function redirectAction(){
			$this->redirect('login');
		}
		public function loginAction(){
			echo "这是登录页";
		}
		//成功页
		public function buyAction(){
			//redirect配置
			$this->redirect("index",array("id"=>1,"name"=>"admin"),3,"success");
			//$this->success('购买成功，3秒后跳回首页',U('index'),3);
		}
		//失败页
		public function errorAction(){
			$this->error("你尚未登录,3秒后返回",U("user/login"),3);
		}
		//判断get,post
		public function isAction(){
			if(IS_POST){
				echo "post";
			}
			else if(IS_GET){
				echo "get";
			}
			else{
				echo "feifa";
			}
		}
		//获取请求值
		public function postAction(){
			if(IS_POST){
				echo I('post.user','admin');
			}
		}
		//空操作[找不到方法时执行的操作]
		public function _empty($name){
			$this->view($name);
		}
		public function view($name){
			echo 'name:'.$name;
		}
	}
?>