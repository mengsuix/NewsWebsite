<?php
namespace Home\Controller;
use Think\Controller;
class LiufanController extends Controller {
	public function index(){
		$tame = D('tame')  ->show();
		$this ->assign('tame',$tame);
		$case = D('case') ->shows();
		$this ->assign('case',$case);

		$dt = D('news') ->shows();
		$this ->assign('dt',$dt);
		$this -> display();

	}
	public function zjtd(){
		$data = array(
//			'status' => '1',
		);
		$pageSize = 3;
//		当前页
		$page = $_GET['p']?$_GET['p']:1;
		$zjtd = D('tame')->getAdminLists($data,$page,$pageSize);
		$userCount = D('tame')->getAdminCount($data);
//		传入总数和页大小
		$Page       = new \Think\Page($userCount,$pageSize);
		$show       = $Page->show();
		$this->assign('zjtd',$zjtd);
		$this->assign('show',$show);
		$this->display();
		
	
	}
	
//	成功案例
	public function cgal(){

		// if( empty($_GET['type']) )  $_GET['type']=1;
		// if( empty($_GET['pg']) )  $_GET['pg']=1;
		// if( !empty($_GET['quick']) )
		// {
			// switch($_GET['quick'])
			// {
				// case "last": if($_GET['pg'] > 1)   $_GET['pg']-=1; break;
				// case "next": if($_GET['pg'] < $this->countPg( M('products')->where("type='{$_GET['type']}'")->count(), 6 )) $_GET['pg']+=1; break;
				// default:break;
			// }
		// }
		// $this->assign('link'.$_GET['type'],'link');
		// $this->assign("str", M('products')->where("type='{$_GET['type']}'")->page("{$_GET['pg']}",'6')->select() );
		// $this->assign("pages", $this->countPg( M('products')->where("type='{$_GET['type']}'")->count(), 6 ) );
		// $link = array( $_GET['pg'] => 'link');
		// $this->assign('link',$link);
		// $this->assign("pg",$_GET['pg']);
		// $this->display("Cpzx:cpzx");
		
		// 分页
		$data = array(
//			'status' => '1',
		);
		$pageSize = 3;
//		当前页
		$page = $_GET['p']?$_GET['p']:1;
		$userLists = D('case')->getAdminLists($data,$page,$pageSize);
		$userCount = D('case')->getAdminCount($data);
//		传入总数和页大小
		$Page       = new \Think\Page($userCount,$pageSize);
		$show       = $Page->show();
		$this->assign('userLists',$userLists);
		$this->assign('show',$show);
		$this->display();
		
		// 分页
		

//		$cgal= D('case') ->shows();
//		$this ->assign('cgal',$cgal);
//		$this -> display();
	}
	public function cgal_xq(){
		
	    $id = $_GET['id'];
		
		$al = D('case') -> sho($id);
		$this -> assign('al',$al);
		//$this -> display();
		//--------------------------------//
		$str = M("case")->select();
		for($i=0,$j=1; $i < count($str); $i++,$j++)
		{	 
			if( $str[$i]["id"] == $id )
			{
				if( $j>1 )$tempL = $str[ $i-1 ]; else $tempL = $str[$i];
				$temp  = $str[$i];	
				if( $j< count($str) )$tempN = $str[ $i+1 ]; else $tempN = $str[$i];
			}
		}
		//--------------------------------//
        $this->assign("tempL",$tempL);
		$this->assign("tempN",$tempN);
		$this -> display("Liufan:cgal_xq");
	}
	public function xwlb(){
		$val = $_POST['textfield'];
		// $data = array(
			// 'num' => '1',
		// );
		$pageSize = 3;
//		当前页
		$page = $_GET['p']?$_GET['p']:1;
		$userLists = D('news')->getAdminLists($data,$page,$pageSize,$val);
		$userCount = D('news')->getAdminCount($data);
//		传入总数和页大小
		$Page       = new \Think\Page($userCount,$pageSize);
		$show       = $Page->show();
		$this->assign('userLists',$userLists);
		$this->assign('show',$show);
		$this->display();
		
		// $xw= D('news') ->show();
		// $this ->assign('xw',$xw);
		// $this -> display();
	}
	public function xwlb_xq(){
		
		//--------------------------------//
		$id = $_GET['id'];
		$xw= D('news') ->showi($id);
		$str = M("news")->select();
		for($i=0,$j=1; $i < count($str); $i++,$j++)
		{	 
			if( $str[$i]["id"] == $id )
			{
				if( $j>1 )$tempL = $str[ $i-1 ]; else $tempL = $str[$i];
				$temp  = $str[$i];	
				if( $j< count($str) )$tempN = $str[ $i+1 ]; else $tempN = $str[$i];
			}
		}
		//--------------------------------//
		$this ->assign('xw',$xw);	
        $this->assign("tempL",$tempL);
		$this->assign("tempN",$tempN);
		$this -> display();
	}


}