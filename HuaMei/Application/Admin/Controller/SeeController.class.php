<?php
namespace Home\Controller;
use Think\Controller;
class SeeController extends Controller 
{

   public function clisee()
   {
	   $this->see($_GET["type"]);
   }
   public function see($type)
   {
	  $this->assign( "str" , M($type)->select() );
	  $this->display("./Application/Home/View/$type.html");
   }   
}