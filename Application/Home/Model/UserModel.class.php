<?php
	namespace Home\Model;
	use Think\Model;
	use Think\Model\RelationModel;
	class UserModel extends RelationModel{
		Protected $tableName = 'user';//定义主表名称
		private $denyUsernames=array(
			'admin',
			'administrator'
		);
		public $_validate=array(
			array('username','require','用户名不能为空'),
			array('password','require','密码不能为空',1,'',1),
			array('username','','用户名已经存在',0,'unique',1),
			array('password','6,20','密码长度必须在6-20',0,'length'),
			array('password','/^\w{6,20}$/','密码格式错误'),
			array('password','repassword','确认密码错误',0,'confirm',1),
			array('username','checkUsername','用户名非法',0,'callback'),
		);
		public $_auto=array(
			array('password','md5','self::MODEL_BOTH','function'),//新增或者编辑时使用md5函数
			array('create_time','time','SELF::MODEL_INSERT','function'),//新增时创建时间为当前时间戳
			array('update_time','time','SELF::MODEL_UPDATE','function')
		);
		public $_link=array(
			'Information'=>array(
				'mapping_type'=>self::BELONGS_TO,
				'class_name'=>'Information',
				'foreign_key'=>'userid',
				'mapping_name'=>'Information',
				'mapping_fields'=>'email,qq'
			)
		);
		
		//检测用户名
		public function checkUsername($username){
			foreach($this->denyUsernames as $u){
				if(strpos($username, $u)!==false){
					return false;
				}
			}
			return true;
		}
	}
?>