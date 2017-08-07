<?php
namespace Admin\Model;
use Think\Model;
class CaseModel extends Model{
	private $_db = '';

	public function __construct(){
		$this->_db = M('case');

	}

	public function getAdminLists($data,$page,$pageSize){
//		每页起始位置
		$offset = ($page - 1) * $pageSize;
		$userLists = $this->_db->where($data)->order('id desc')->limit($offset,$pageSize)->select();
		return $userLists;
	}
	public function getAdminCount($data){
		return $this->_db->where($data)->count();
	}
	
	public function getadd($pic,$time,$age,$name,$school,$zl){
		$data = array(
			'school' =>$school,
			'age' => $age,
			'pic' =>$pic,

			'time' => $time,
			'name' => $name,
			'zl' =>$zl
		);
		return $this->_db->add($data);
	}
	public function del($id){
		return $this->_db-> where("id='".$id."'") -> delete();
	}
	public function getTameById($id){
		return $this->_db->where("id='".$id."'")->find();
	}
//	修改
	public function save($pic,$time,$age,$name,$school,$zl,$id){
//
		$data = array(
			'school'=>$school,
			'name'=>$name,
			'zl' => $zl,
			'time' => $time,
			'pic' => $pic,
			'age' => $age
		);
		return $this -> _db  -> where("id = '".$id."'")->save($data);

	}
	
}