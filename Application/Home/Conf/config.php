<?php
return array(
	'name'=>'configname',
	//'配置项'=>'配置值'
	'DATA_CACHE_TYPE'=>'Db',
	'ACTION_SUFFIX'=>'Action',
	'URL_CASE_INSENSITIVE'=>true,//url不区分大小写
//	'TMPL_ACTION_ERROR'=>APP_PATH.'tpl/success.html',
//	'TMPL_ACTION_SUCCESS'=>APP_PATH.'tpl/error.html',
	'ADMIN'=>array(
		'username'=>'admin',
		'password'=>'123456'
	),
	'LOAD_EXT_CONFIG'=>array('ADMIN'=>'admin_user'),
	'URL_ROUTE_RULES'=>array(
		'posts/:year/:month/:day'=>'Index/index',
		'posts/:id'=>'Index/index',
		'posts/read/:id'=>'posts/:1',
	),
	'URL_MAP_RULES'=>array(
		'site/welcome'=>'Index/index?from=seo'
	)
);