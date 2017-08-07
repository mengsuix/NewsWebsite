<?php
namespace Admin\Model;
use Think\Model;
class NewsModel extends Model{
	private $_db = '';

	public function __construct(){
		$this->_db = M('news');

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
	
	public function getadd($pic,$time,$title,$content,$num){
		$data = array(
		
			'title' => $title,
			'pic' =>$pic,
			'num' =>$num,
			'time' => $time,
			'content' => $content,
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
	public function save($pic,$time,$title,$content,$id,$num){
//
		$data = array(
			'title'=>$title,
			'content'=>$content,
			'num' =>$num,
			'time' => $time,
			'pic' => $pic,
		);
		return $this -> _db  -> where("id = '".$id."'")->save($data);

	}
	
}