<?php
namespace Admin\Controller;
use Think\Controller;
class RyzzController extends Controller 
{
   public function add()
   {
	   $data["type"] = "ryzz";
	   $data["picurl"] = upload(); 
	   M("gyhm")->add($data);
	   $this->see();
   }
   public function drop()
   {
       M("gyhm")->where("id='{$_GET['id']}'")->delete();  
       $this->see();
   }
   public function see()
   {
	  $this->assign('id',1);
	  $this->assign("str",M("gyhm")->where("type='ryzz'")->select());
	  $this->display("Gyhm:ryzz");
   }
}