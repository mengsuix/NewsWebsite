<?php
    function upload()
	{ 
		$upload = new \Think\Upload();// 实例化上传类 
		$upload->maxSize = 6000000 ;// 设置附件上传大小 
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 
		$upload->rootPath = './Application/Home/Image/'; // 设置附件上传根目录 
		$upload->savePath = ''; // 设置附件上传（子）目录 		 
		$info = $upload->upload();  // 上传文件 
		if(!$info) 
		{			
			echo "上传错误！"; // 上传错误提示错误信息
            exit;			
		}
		else
	      {
            $picUrl=$info["picture"]["savepath"].$info["picture"]["savename"];	//文件相对路径	
			$picUrl = 'http://'.$_SERVER["HTTP_HOST"].'/HuaMei/Application/Home/Image/'.$picUrl;					
			return $picUrl;
		  } 
	} 