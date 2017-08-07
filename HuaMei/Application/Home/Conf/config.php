<?php
define('VIEW','./Application/Home/View');
return array(
	//'配置项'=>'配置值'
	'db_type' => 'mysql', 
	'db_host' => '127.0.0.1', 
	'db_user' => 'root', 
	'db_pwd' => '123', 
	'db_port' => 3306, 
	'db_name' => 'huamei', 
	'db_charset' => 'utf8',
    'TMPL_PARSE_STRING' =>array( '__VIEW__' => 'http://'.$_SERVER['HTTP_HOST'].rtrim($_SERVER['SCRIPT_NAME'],'index.php').'Application/Home/View',
	                             '__HTTP__' => 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'/Home' )
);