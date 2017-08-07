<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {
	public function index(){	


		$data = array(
//			'status' => '1',
		);
		$pageSize = 5;
//		当前页
		$page = $_GET['p']?$_GET['p']:1;
		$userLists = D('news')->getAdminLists($data,$page,$pageSize);
		$userCount = D('news')->getAdminCount($data);
//		传入总数和页大小
		$Page       = new \Think\Page($userCount,$pageSize);
		$show       = $Page->show();
		$this->assign('userLists',$userLists);
		$this->assign('id',1);
		$this->assign('show',$show);
		
		$this->display();

	}
	public function upload()
	{
		$title = $_POST['title'];
		$content = $_POST['content'];
		$num = $_POST['num'];
		$time = time();
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath  =      '/Uploads/'; // 设置附件上传目录// 上传文件
		$info   =   $upload->upload();
		if(!$info)
		{// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{
			// 上传成功 获取上传文件信息
			foreach($info as $file){
				$pic = $file['savepath'].$file['savename'];
			}
			$cc = D('news') ->getadd($pic,$time,$title,$content,$num);
			if($cc){
				$this->success('上传成功！');
				$this->redirect('news/index');
			}
		}
	}

	public function del(){
		$id = $_POST['id'];
		D('news') -> del($id);
		echo 1;
	}

	public function save(){
		$id = $_GET['id'];
		$save = D('news')->getTameById($id);
		$this->assign('save',$save);
		$this->display();

	}

	public function sav()
	{
		$id = $_POST['id'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		$num = $_POST['num'];
		$time = time();
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath  =      '/Uploads/'; // 设置附件上传目录// 上传文件
		$info   =   $upload->upload();
		if(!$info)
		{// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{
			// 上传成功 获取上传文件信息
			foreach($info as $file){
				$pic = $file['savepath'].$file['savename'];
			}
			$cc = D('news') ->save($pic,$time,$title,$content,$id,$num);
			if($cc){
				$this->success('上传成功！');
				$this->redirect('news/index');
			}
		}
	}	




}