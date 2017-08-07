<?php
namespace Home\Controller;
use Think\Controller;
class DropController extends Controller 
{
   public function drop()
   {
	   $id=$_GET["id"];
       M($_GET["type"])->where("id=$id")->delete();  
       A("See")->see($_GET["type"]);  	   
   }
}