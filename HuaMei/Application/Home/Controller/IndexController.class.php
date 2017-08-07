<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller 
{
    public function index()
	{	
	    //-------------------------------//
		$view = VIEW;
		//-------------------------------//
		$this->assign("cpzx", M("products")->select() );
		$this->assign("host", $_SERVER["HTTP_HOST"]);
		$this->assign("cgal", M("case")->select() );
		$this->assign("zjtd", M("tame")->select() );
		$this->assign("news", M("news")->limit(4)->select() );
		$this->assign("friendlink", M("friendlink")->select() );
		$this->display("$view/index.html");
	}
}