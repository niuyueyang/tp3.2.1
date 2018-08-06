<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<p>val:<?php echo ($val); ?></p>
		<p>array1:<?php echo ($array1['name']); ?></p>
		<p>array2:<?php echo ($array2[0]['name']); ?></p>
		<p>obj:<?php echo ($obj->name); ?></p>
	</body>
</html>