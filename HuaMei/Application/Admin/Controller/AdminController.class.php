<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller 
{
   public function add()
   {
	   if( !empty($_POST["nan"]) )   $sex="男";
	   else   $sex="女";
	   $data["user"]=$_POST["user"];   
	   $data["pwd"]=$_POST["pwd"]; 
	   $data["phone"]=$_POST["phone"]; 
	   $data["email"]=$_POST["email"]; 
	   $data["role"]=$_POST["role"]; 
	   $data["sex"]=$sex; 
	   $data["time"]=date("y-m-d");
	   $data["state"]=$_POST["state"]; 
	   M("adminers")->add($data);
	   $this->see();
   }
   public function drop()
   {
	   $id=$_GET["id"];
       M("adminers")->where("id='$id'")->delete();  
       $this->see();
   }
   public function modify()
   {
	   $id=$_POST["id"];
	   $data["user"]=$_POST["user"];   
	   $data["pwd"]=$_POST["pwd"]; 
	   $data["phone"]=$_POST["phone"]; 
	   $data["email"]=$_POST["email"]; 
	   $data["role"]=$_POST["role"]; 
	   $data["time"]=$_POST["time"]; 
	   $data["state"]=$_POST["state"]; 
	   M("adminers")->where("id=$id")->save($data);
	   $this->see();
   }
   public function see()
   {
	  $this->assign('id',1);
	  $this->assign("str",M("adminers")->select());
	  $this->display("Admin:admin");
   }
}