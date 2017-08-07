<?php
namespace Admin\Controller;
use Think\Controller;
class AdloginController extends Controller 
{
	
	public function login()
	{
		//----------------------------------//
		$this->display("Login:login");
	}
	public function check()
	{
	 $user=$_POST["user"];
	 $pwd=$_POST["pwd"];
      if( !empty( M("adminers")->where("user='$user'")->getField("user") ) )
		 if( M("adminers")->where("user='$user'")->getField("pwd") == $pwd )
		 {
			 session_start();
			 $_SESSION['user']=$_POST['user'];
			 header("Location: http://localhost/HuaMei/index.php/Admin/Index/index");
		 }
		 else
			 echo "密码错误";
	 else
		 echo "账号不存在";	
	} 
}