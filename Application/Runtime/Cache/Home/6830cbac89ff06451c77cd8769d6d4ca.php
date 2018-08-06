<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<ul>
			<?php if(is_array($list)): foreach($list as $k=>$item): ?><li><?php echo ($k); ?>--<?php echo ($item["username"]); ?></li><?php endforeach; endif; ?>
		</ul>
		<div>
			<?php echo ($page); ?>
		</div>
	</body>
</html>