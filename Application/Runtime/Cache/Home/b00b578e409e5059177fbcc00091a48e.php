<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<!--server变量：<?php echo ($_SERVER['REQUEST_URI']); ?><br />
		get变量:<?php echo ($_GET['name']); ?><br />
		cookie变量:<?php echo (cookie('name')); ?><br />
		输出配置变量:<?php echo (C("name")); ?>-->
		<!--参数大于一个函数:<?php echo (date('Y-m-d H:i:s',$now)); ?><br />
		参数等于一个函数：<?php echo (strtoupper($name)); ?><br />
		函数嵌套：<?php echo (substr(md5($name),0,16)); ?>-->
		<?php echo ($userobj->age*2); ?>
	</body>
</html>