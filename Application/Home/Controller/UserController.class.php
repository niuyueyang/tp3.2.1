<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use Think\Model\RelationModel;
use Home\Model\UserModel;
class UserController extends Controller{
	public function loginAction(){
		echo "登录";
	}
	public function indexAction(){
		$user = new UserModel();
//		$user = new UserModel();
//		$datas=$m->query('select * from c5_user');
//		$user=D('User');
//		$guanlian=M('Guanlian');
//		$datas=$m->query('select * from c5_guanlian left join c5_user on c5_guanlian.userid=c5_user.userid');
		//关联查询
//		$list = $user->table('c5_guanlian guanlian, c5_user user')->where('guanlian.userid = user.userid')->field('guanlian.name,user.username as username,user.password as password')->order('user.id desc' )->select(); 
		//limit查询
//		$list=$user->where('status=1')->order('create_time desc')->limit(10)->select();
		//数组条件
//		$condition=array(
//			'username'=>'admin1',
//			'password'=>'123456'
//		);
//		$list=$user->where($condition)->select();
//		$arr=[];
//		array_push($arr,array('id'=>$list[0]['id'],'username'=>$list[0]['username']));
		//设置别名
		//$arr=$user->alias("a")->join('__GUANLIAN__ b on a.userid=b.userid')->select();
		//return $this->ajaxReturn($arr);
		//添加
//		$data=array(
//			'username'=>'zhangsan',
//			'password'=>'123456',
//			'status'=>1,
//			'userid'=>1,
//			'create_time'=>'2018-05-01 08:40:16'
//		);
//		$insert=$user->data($data)->add();
//		if($insert){
//			echo "success";
//		}
		//筛选
//		$list=$user->field('id,username')->select();
//		return $this->ajaxReturn($list);
		//排除
//		$list=$user->field('id,username',true)->select();
//		return $this->ajaxReturn($list);
		//order
//		$list=$user->order(array('id'=>desc))->limit(5)->select();
//		return $this->ajaxReturn($list);
		//limit
//		$list=$user->limit('0,10')->select();
//		return $this->ajaxReturn($list);
		//page
//		$list=$user->page(2,10)->select();
//		return $this->ajaxReturn($list);
		//group,count
		//$list=$user->field(array("username","password"))->where(array('userid'=>1))->group('userid')->count();
//		$list=$user->field(array("username","password"))->group('userid')->having('userid>=0')->select();
//		return $this->ajaxReturn($list);
		//联合两个查询[必须两个表中都有这个值]
//		$list=$user->field(array("userid"))->union('select userid from c5_guanlian')->select();
//		return $this->ajaxReturn($list);
		//返回不重复记录
//		$list=$user->distinct(true)->field(array('username'))->select();
//		return $this->ajaxReturn($list);
		//关联查询
		//$data=$user->relation('Information')->find();
		//return $this->ajaxReturn($data);
		//查询条件(或)
//		$condition['username | password']=array('like',"admin1%");
//		$list=$user->where($condition)->select();
//		return $this->ajaxReturn($list);
		//查询条件(且)
//		$condition['username&password']=array('admin1','123456','_multi'=>true);
//		$list=$user->where($condition)->select();
//		return $this->ajaxReturn($list);
		//查询条件条件区间(且)
//		$condition['score']=array(array('gt',300),array('elt',600));
//		$list=$user->where($condition)->select();
//		return $this->ajaxReturn($list);
		//查询条件条件区间(或)
//		$condition['score']=array(array('gt',300),array('elt',600),'or');
//		$list=$user->where($condition)->select();
//		return $this->ajaxReturn($list);
		//count,max,min,avg,sum
		//$count=$user->count();
		//$max=$user->max("score");
		//$min=$user->min("score");
		//$avg=$user->avg("score");
//		$sum=$user->sum("score");
		//$list=$user->query("select * from c5_user where userid=1");
		//$list=$user->execute();
		//return $this->ajaxReturn($list);
		//缓存
//		$lists=S('lists');                     
//      if(empty($lists)){                             
//	          $lists=$user->select();   
//	          S('lists',$lists,600);   
//	          echo '这是直接读取数据库的数据';       
//       }   
//      echo "qweqweewq";
		//分页
//		$count=$user->count();
//		$page=new \Think\Page($count,5);
//		$show=$page->show();
//		$list=$user->limit($page->firstRow.",".$page->listRows)->select();
//		$arr=array('result'=>$list,'count'=>$count,'page'=>$page,'currentPage'=>I('get.p',1),'everyRows'=>$page->{'listRows'});
//		return $this->ajaxReturn($arr);
//		$this->assign('list',$list);// 赋值数据集
//		$this->assign('page',$show);// 赋值分页输出
//		$this->display(); // 输出模板
		
	}
	public function upload(){
		$this->display();
	}
	public function doImgAction(){
		$upload = new \Think\Upload();
		$upload->maxSize=1024*1024*1024*2;
		$upload->exts=array('jpg','gif','png','jpeg');
		$upload->rootPath='./Uploads/';
		$upload->savePath='';
		$info = $upload->upload();
		if(!$info){
			$this->error($upload->getError());
		}else{
			$baseUrl='Uploads/'.$info['file']['savepath'].$info['file']['savename'];
			echo $baseUrl;
		}
	}
}
?>