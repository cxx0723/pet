<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function __construct()
    {    
    	parent::__construct();
    	$session=session("name");
    	$cookie=cookie("name");
    	if(!empty($cookie) && empty($session))
    	{
    		
            session("name",$cookie);
            $session=session("name");
    	}
        if(empty($session))
        {
            $this->redirect("Login/index","","1","请先登录");
        }
    }

    public function upload($file,$dir="img")
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     'Uploads/';
        $upload->savePath  =      $dir.'/'; // 设置附件上传目录
        $upload->saveName  =      'time';
        $info   =   $upload->uploadOne($file);
        if(!$info)
         {
           $this->error($upload->getError());
         }
         else
         {
            return $upload->rootPath.$info['savepath'].$info['savename'];
         }
    }

}