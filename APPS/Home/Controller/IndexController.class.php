<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$type = D('type')->where('pid=0')->select();
        $this->assign('type',$type);
        $this->display('index');
    }

    function show()
    {
    	$this->display('show');
    }

   
}