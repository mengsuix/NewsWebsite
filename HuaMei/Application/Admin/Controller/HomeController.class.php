<?php
namespace Admin\Controller;
use Think\Controller;
class HomeController extends Controller 
{
   public function home()
   {	
       $this->display('./Application/Admin/View/index.html');     
   }
}