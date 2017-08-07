<?php
namespace Home\Controller;
use Think\Controller;
class GyhmController extends Controller 
{
    public function gsjj()
	{
		$this->display("Gyhm:gyhm");
	}
	public function hjsb()
	{		
		if( empty($_GET['pg']) )  $_GET['pg']=1;
		if( !empty($_GET['quick']) )
		{
			switch($_GET['quick'])
			{
				case "last": if($_GET['pg'] > 1)   $_GET['pg']-=1; break;
				case "next": if($_GET['pg'] < countPg( M('gyhm')->where("type='hjsb'")->count(), 6 )) $_GET['pg']+=1; break;
				default:break;
			}
		}
		$this->assign("str", M('gyhm')->where("type='hjsb'")->page("{$_GET['pg']}",'6')->select() );
		$this->assign("pages", countPg( M('gyhm')->where("type='hjsb'")->count(), 6 ) );
		$link = array( $_GET['pg'] => 'link');
		$this->assign('link',$link);
		$this->assign("pg",$_GET['pg']);
		$this->display("Gyhm:hjsb");
	}
	public function ryzz()
	{
		if( empty($_GET['pg']) )  $_GET['pg']=1;
		if( !empty($_GET['quick']) )
		{
			switch($_GET['quick'])
			{
				case "last": if($_GET['pg'] > 1)   $_GET['pg']-=1; break;
				case "next": if($_GET['pg'] < countPg( M('gyhm')->where("type='ryzz'")->count(), 6 )) $_GET['pg']+=1; break;
				default:break;
			}
		}
		$this->assign("str", M('gyhm')->where("type='ryzz'")->page("{$_GET['pg']}",'6')->select() );
		$this->assign("pages", countPg( M('gyhm')->where("type='ryzz'")->count(), 6 ) );
		$link = array( $_GET['pg'] => 'link');
		$this->assign('link',$link);
		$this->assign("pg",$_GET['pg']);
		$this->display("Gyhm:ryzz");
	}
}