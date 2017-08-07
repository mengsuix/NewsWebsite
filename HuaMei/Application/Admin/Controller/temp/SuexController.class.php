<?php
namespace Home\Controller;
use Think\Controller;
class SuexController extends Controller 
{
   public function add($name,$age,$school,$describe)
   {
	   $str=array("name"=>$name,"age"=>$age,"school"=>$school,"describe"=>$describe);
	   M("Suex")->add($str);
   }
   public function drop($nameId)
   {
	   M("Suex")->where("nameId=$nameId")->d();
   }
   public function modify($nameId,$type,$content)
   {
	   M("Suex")->where("nameId=$nameId")->update("$type=$content");
   }
   public function see()
   {
	   M("Suex")->select();
   }   
}