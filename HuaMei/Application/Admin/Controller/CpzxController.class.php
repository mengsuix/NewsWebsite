<?php
namespace Admin\Controller;
use Think\Controller;
class CpzxController extends Controller 
{
    public function add()
	{
		$name = $_POST["name"];
		$type = $_POST["type"];
		$picurl = upload();
		$describe = $_POST["describe"];
       //-----------------------------------------//
        $data["name"] = $name;
		$data["type"] = $type;
		$data["picurl"] = $picurl;
		$data["describe"] = $describe;
		M("products")->add($data);
        //-----------------------------------------//
		//var_dump($_POST);
		$this->see();
	}
	public function drop()
	{
		$id=$_GET["id"];
        //-----------------------------------------//
		M("products")->where("id='$id'")->delete();
        //-----------------------------------------//	
        $this->see();		
	}
	public function modify()
	{
		$id = $_POST["id"];
		$data["name"] = $_POST["name"];
		$data["type"] = $_POST["type"];
		$data["picurl"] = upload();
		$data["describe"] = $_POST["describe"];
		//-----------------------------------------//
		M("products")->where("id='$id'")->save($data);
		//-----------------------------------------//
		$this->see();	
	}
	public function see()
	{
		//-----------------------------------------//
		//-----------------------------------------//
	    $this->assign('id',1);
	    $this->assign("str",M("products")->select());
	    $this->display("Cpzx:cpzx");
	}
}