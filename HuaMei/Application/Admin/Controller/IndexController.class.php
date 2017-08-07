<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller 
{
	public function index()
	{
		//----------------------------------//
		$this->display("Login:login");
	}
	public function login()
	{
	 header("Content-type:text/html;charset=utf-8");
	 $user=$_POST["user"];
	 $pwd=$_POST["pwd"];
      if( !empty( M("adminers")->where("user='$user'")->getField("user") ) )
		 if( M("adminers")->where("user='$user'")->getField("pwd") == $pwd )
		 {
			 session_start();
			 $_SESSION['user']=$_POST['user'];
			 header("Location: http://localhost/HuaMei/admin.php/Home/home");
		 }
		 else
			 echo "密码错误";
	 else
		 echo "账号不存在";	
	}
}