<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	if (IS_GET) {
    		 $this->display('login');
    	}else{
    		$data = I();
    		$res = D("admin")->where('name = "'.$data['name'].'" and pwd = "'.md5($data['pwd']).'"')->find();
    		if($res)
    		{
               cookie("name",$data['name'],3600*24*7);
               $this->success('登陆成功',U('Index/index'));
    		}else{
    			$this->error('密码错误。');
    		}

    	}
       
    }

    //退出
    function out()
    {
        cookie('name',null);
        session('name',null);
        $this->success('退出成功',U('Login/login'));

    }


}