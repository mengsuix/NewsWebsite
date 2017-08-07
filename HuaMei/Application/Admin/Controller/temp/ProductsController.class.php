<?php
namespace Home\Controller;
use Think\Controller;
class ProductsController extends Controller 
{
   public function add($name,$picture)
   {
	   $str=array("name"=>$name,"picture"=>$picture);
	   M("Suex")->add($str);	   
   }
   public function drop($productId)
   {
	   M("Suex")->where("productId=$productId")->d();
   }
   public function modify($productId,$type,$content)
   {
	    M("Suex")->where("productId=$productId")->update("$type=$content");
   }
   public function see()
   {
	   M("Suex")->select();
   }   
}