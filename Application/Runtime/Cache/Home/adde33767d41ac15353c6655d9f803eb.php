<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="/think/index.php/home/user/doImg" enctype="multipart/form-data" method="post">
			<input type="file" name="file" />
			<button>上传</button>
		</form>
	</body>
</html>