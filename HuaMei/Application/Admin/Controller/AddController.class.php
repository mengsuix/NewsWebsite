<?php
namespace Home\Controller;
use Think\Controller;
class AddController extends Controller 
{
   public function add()
   {
	   switch($_POST["type"])
	   {
		case "News" :   $data["title"]=$_POST["title"]; $data["content"]=$_POST["content"];
	                    M("News")->add($data);
						break;
	    case "Expert":  $data["name"]=$_POST["name"];   $data["photoUrl"]=$this->upload(); $data["position"]=$_POST["position"];  $data["describe"]=$_POST["describe"];
	                    M("Expert")->add($data);
						break;
		case "Products":$data["name"]=$_POST["name"];   $data["picUrl"]=$this->upload();   $data["describe"]=$_POST["describe"];
	                    M("Products")->add($data);
						break;
		case "Suex":	$data["name"]=$_POST["name"];   $data["photoUrl"]=$this->upload(); $data["age"]=$_POST["age"]; $data["school"]=$_POST["school"]; $data["describe"]=$_POST["describe"]; 
		                upload();
	                    M("Suex")->add($data);
						break;	   
	   }
     // A("See")->see($_POST["type"]);
   }
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
			echo $picUrl;
			$picUrl = 'http://'.$_SERVER["HTTP_HOST"].'/HuaMei/upload/'.$picUrl;		
			
			return $picUrl;
		  } 
	}
}