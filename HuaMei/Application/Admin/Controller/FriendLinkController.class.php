<?php
namespace Admin\Controller;
use Think\Controller;
class FriendLinkController extends Controller 
{
   public function add()
   {
	   $data["name"]=$_POST["name"];
       $data["link"]=$_POST["link"];   	   
	   $data["picUrl"]=$_POST["picUrl"]; 
	   $data["describe"]=$_POST["describe"]; 
	   M("friendlink")->add($data);
	   $this->see();
   }
   public function drop()
   {
	   $id=$_GET["id"];
       M("friendlink")->where("id='$id'")->delete();  
       $this->see();
   }
   public function modify()
   {
	   $id=$_POST["id"];
	   $data["name"]=$_POST["name"];   
	   $data["link"]=$_POST["link"];  
	   $data["picUrl"]=$_POST["picUrl"]; 
	   $data["describe"]=$_POST["describe"]; 
	   M("friendlink")->where("id='$id'")->save($data);
	   $this->see();
   }
   public function see()
   {
	  $this->assign('id',1);
	  $this->assign("str",M("friendlink")->select());
	  $this->display("FriendLink:friendlink");
   }
}