<?php
session_start();
//msx
if ($_SERVER["REQUEST_URI"] == '/HuaMei/admin.php' or $_SERVER["REQUEST_URI"] == '/HuaMei/admin.php/Index/login') ;
else   if( empty( $_SESSION["user"] ) )  { header("Location: http://localhost/HuaMei/admin.php"); exit; }
//msx
define('BIND_MODULE','Admin');
define('APP_PATH','./Application/');
define('APP_DEBUG',True);
require './ThinkPHP/ThinkPHP.php';