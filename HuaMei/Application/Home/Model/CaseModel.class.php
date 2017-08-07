<?php
namespace Home\Model;
use Think\Model;
class CaseModel extends Model
{
    private $_db = '';

    public function __construct()
    {
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
    public function shows(){
        return $this->_db ->select();
    }
    public function sho($id){
		return $this ->_db ->where("id='".$id."'") ->select();
	}
    
}