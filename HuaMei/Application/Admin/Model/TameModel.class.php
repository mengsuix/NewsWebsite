<?php
namespace Admin\Model;
use Think\Model;
class TameModel extends Model{
	private $_db = '';

	public function __construct(){
		$this->_db = M('tame');

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
	
	public function getadd($pic,$time,$position,$name,$introduce,$fl){
		$data = array(
			'position' =>$position,
			'introduce' => $introduce,
			'pic' =>$pic,

			'time' => $time,
			'name' => $name,
			'fl' =>$fl
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
	public function save($pic,$time,$position,$name,$introduce,$fl,$id){
//
		$data = array(
			'position'=>$position,
			'name'=>$name,
			'fl' => $fl,
			'time' => $time,
			'pic' => $pic,
			'introduce' => $introduce
		);
		return $this -> _db  -> where("id = '".$id."'")->save($data);

	}
	
}