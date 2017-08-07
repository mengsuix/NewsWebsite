<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller 
{
		public function upload()
		{ 
		$upload = new \Think\Upload();// 实例化上传类 
		$upload->maxSize = 3145728 ;// 设置附件上传大小 
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 
		$upload->rootPath = './upload/'; // 设置附件上传根目录 
		$upload->savePath = ''; // 设置附件上传（子）目录 		 
		$info = $upload->upload();  // 上传文件 
		if(!$info) 
		{			
			$this->error($upload->getError()); // 上传错误提示错误信息 
		}
		else
	      {
            $picUrl=$info["photo"]["savepath"].$info["photo"]["savename"];	//文件相对路径	
			$picUrl = 'http://'.$_SERVER["HTTP_HOST"].'/HuaMei/upload/'.$picUrl;
            echo $picUrl;			
		  } 
		}
}