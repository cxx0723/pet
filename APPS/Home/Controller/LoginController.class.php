<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        if(IS_GET)
    	{
    		$this->display('index');
    	}else{
    		$data = I('post.');
    		$data['pwd']  = md5($data['pwd']);
    		$res = D('User')->where($data)->find();
            if ($res) {
               Cookie('uid',$res['uid']);
               Cookie('uname',$data['uname']);
    		   $this->success('登录成功',U('Cart/index'));
            }else{
               $this->error('密码错误，请重新登录');
            }
    		
    	}
    }

    function sign()
    {   
    	if(IS_GET)
    	{
    		$this->display('sign');
    	}else{
    		$data = I('post.');
    		$data['pwd']  = md5($data['pwd']);
    		$data['time'] = time();
    		$id = D('user')->add($data);
    		Cookie('uname',$data['uname']);

            Cookie('uid',$id);
    		$this->success('注册成功',U('Cart/index'));
    	}
    	
    }

    function out()
    {
    	Cookie('uname',null);
        Cookie('uid',null);
    	$this->success('',U('Index/index'),0);
    }

   
}