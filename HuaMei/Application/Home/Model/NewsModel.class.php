<?php
namespace Home\Model;
use Think\Model;
class NewsModel extends Model
{
    private $_db = '';

    public function __construct()
    {
        $this->_db = M('news');

    }
    public function show(){
        return $this->_db ->where('num=1')->select();
    }
    public function shows(){
        return $this->_db ->where('num=2')->select();
    }
    public function getAdminLists($data,$page,$pageSize,$val){
//		每页起始位置
        $offset = ($page - 1) * $pageSize;
        $userLists = $this->_db->where($data)->where("title like '%$val%' or content like '%$val%'")->order('id asc')->limit($offset,$pageSize)->select();
        return $userLists;
    }
    public function getAdminCount($data){
        return $this->_db->where($data)->count();
    }
	public function showi($id){
        return $this->_db->where("id='".$id."'")->select();
    }
}