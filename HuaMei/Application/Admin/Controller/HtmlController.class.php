<?php
namespace Admin\Controller;
use Think\Controller;
class HtmlController extends Controller 
{
   public function html()
   {
	   switch($_GET["name"])
	   {
		   case "cpzxAdd":    $this->display("Cpzx:cpzxAdd");  
		                      break;		   
		   case "cpzxModify": $id = $_GET["id"]; 
		                      $this->assign("vo",M("products")->where("id='$id'")->find());
		                      $this->display("Cpzx:cpzxModify");  
		                      break;
           case "destory" :  session_start();
		                     if( $_SESSION['user'] )
		                     {
			                      session_destroy();
			                      header("Location: http://localhost/HuaMei/index.php/Admin/Adlogin/login");
		                      }break;
           case "adminAdd" :$this->display("Admin:adminAdd");
							break;
           case "adminModify" : $id = $_GET["id"];   
	                            $this->assign("vo",M("adminers")->where("id='$id'")->find());
	                            $this->display("Admin:adminModify");
                                break;
           case "friendlinkAdd" :$this->display("FriendLink:friendlinkAdd");
							break;
           case "friendlinkModify" : $id = $_GET["id"]; 
	                            $this->assign("vo",M("friendlink")->where("id='$id'")->find());
	                            $this->display("FriendLink:friendlinkModify");
                                break;	
           case "welcome" : $id = $_GET["id"];                             
	                            $this->display("welcome:welcome");
                                break;	
           case "hjsbAdd" :     $this->display("Gyhm:hjsbAdd");
                                break;
           case "ryzzAdd" :     $this->display("Gyhm:ryzzAdd");
                                break;									
	   }
   }
}