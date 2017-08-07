<?php
namespace Home\Controller;
use Think\Controller;
class CpzxController extends Controller 
{
    public function cp()
	{
		if( empty($_GET['type']) )  $_GET['type']=10;
		if( empty($_GET['pg']) )  $_GET['pg']=1;
		if( !empty($_GET['quick']) )
		{
			switch($_GET['quick'])
			{
				case "last": if($_GET['pg'] > 1)   $_GET['pg']-=1; break;
				case "next": if( $_GET['type'] == 10 )  { if($_GET['pg'] < countPg( M('products')->count(), 6 )) $_GET['pg']+=1; }
				             else                       { if($_GET['pg'] < countPg( M('products')->where("type='{$_GET['type']}'")->count(), 6 )) $_GET['pg']+=1; } 
							 break;
				default:break;
			}
		}
//----------------------------------------------------------------//
        switch($_GET["type"])
		{
			case 10: $this->assign("link10",'link');break;
			case "全进口角膜塑形镜" : $this->assign("link1",'link');break;
			case "超声波清洗器" : $this->assign("link2",'link');break;
			case "日本进口目立康护理液" : $this->assign("link3",'link');break;
			case "美国进口博视顿护理液" : $this->assign("link4",'link');break;
			case "框架眼镜" : $this->assign("link5",'link');break;
			case "太阳镜" : $this->assign("link6",'link');break;
			case "隐形眼镜" : $this->assign("link7",'link');break;
			case "叶黄素" : $this->assign("link8",'link');break;
			case "弱视治疗仪" : $this->assign("link9",'link');break;
		}
		if( $_GET['type'] == 10 )
		{
		   $this->assign("type",10);
		   $this->assign("str", M('products')->page("{$_GET['pg']}",'6')->select() );
		   $this->assign("pages", countPg( M('products')->count(), 6 ) );	   
		}
		else
		{
		   $this->assign("type",$_GET['type']);
		   $this->assign("str", M('products')->where("type='{$_GET['type']}'")->page("{$_GET['pg']}",'6')->select() );
		   $this->assign("pages", countPg( M('products')->where("type='{$_GET['type']}'")->count(), 6 ) );			
		}
		$link = array( $_GET['pg'] => 'link');
	    $this->assign("link",$link);
		$this->assign("pg",$_GET['pg']);
		$this->display("Cpzx:cpzx");
	}
}