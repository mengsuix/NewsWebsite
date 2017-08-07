<?php
namespace Home\Model;
use Think\Model;
class TameModel extends Model
{
    private $_db = '';

    public function __construct()
    {
        $this->_db = M('tame');

    }
    public function show(){
        return $this->_db ->select();
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
    
    
}