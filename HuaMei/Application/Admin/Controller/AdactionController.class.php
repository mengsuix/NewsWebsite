<?php
namespace Home\Controller;
use Think\Controller;
class AdactionController extends Controller 
{
   public function action($action,$type)
   {
	   switch($action)
	   {	   
		   case "add" :  A("Add")->add($type);       A("See")->see($type);      break;
		   case "drop":  A("Drop")->drop($type);     A("See")->see($type);      break;
		   case "modify":A("Modify")->modify($type); A("See")->see($type);      break;
		   case "see":   A("See")->see($type);       break;
		   default:$this->display('./Application/Home/View/index.html');break;
	   }
   }
}