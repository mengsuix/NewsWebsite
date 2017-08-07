<?php
namespace Admin\Controller;
use Think\Controller;
class QtController extends Controller 
{
   public function see()
   {
	   
	  $this->assign("huamei","http://localhost/HuaMei/Application/Home/View/huamei");
	  $this->assign("str",M("friendlink")->select());
	  $this->display("huamei:index");
   }
}