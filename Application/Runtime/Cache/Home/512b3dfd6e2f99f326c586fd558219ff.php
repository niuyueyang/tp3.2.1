<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Demo</title>
</head>
<body>
<p>header.html</p>
<div class="content">
	
	<h2>volist</h2>
	<ul>
		<?php if(is_array($projects)): $k = 0; $__LIST__ = $projects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project): $mod = ($k % 2 );++$k;?><li><?php echo ($k); ?>-{project.name}</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<h2>foreach</h2>
	<ul>
		<?php if(is_array($projects)): foreach($projects as $k=>$project): ?><li><?php echo ($k); ?>--<?php echo ($project["name"]); ?></li><?php endforeach; endif; ?>
	</ul>
	<h2>for</h2>
	<ul>
		<?php $__FOR_START_529__=0;$__FOR_END_529__=count($projects);for($index=$__FOR_START_529__;$index < $__FOR_END_529__;$index+=1){ ?><li><?php echo ($index); ?>--<?php echo ($projects[$index]['name']); ?></li><?php } ?>
	</ul>
	<h2>eq</h2>
	<?php if(($age) == "18"): ?>18岁
		<?php else: ?>
		不是18岁<?php endif; ?>
	<h2>neq</h2>
	<?php if(($age) != "17"): ?>不是17岁
		<?php else: ?>
		是17岁<?php endif; ?>
	<h2>gt</h2>
	<?php if(($age) > "17"): ?>大于17岁
		<?php else: ?>
		不大于17岁的<?php endif; ?>
	<h2>egt</h2>
	<?php if(($age) >= "18"): ?>大于等于于18岁
		<?php else: ?>
		小于18岁的<?php endif; ?>

</div>
footer.html
</body>
</html>