<?php
namespace Home\Controller;
use Think\Controller;
class PetController extends Controller {
    public function index(){

        $types  = D('type')->where('tid = 0')->field('tid,tname')->select();
        $tid    = isset($_GET['tid']) ? $_GET['tid'] : NULL;
        $shou   = "宠物";
        $dao    = D('type')->where('pid=0')->field('tid,tname')->select();
        if($tid)
        {   
            $names = D('type')->where('tid = '.$tid)->field('tname')->find();
        	$type  = D('type')->where('status=1 and pid = '.$tid)->select();
        	$shou  = $names['tname'];
        }else{
        	$type  = D('type')->where('status=1 and pid >0')->select();
        }
        $this->assign('dao',$dao);
        $this->assign('type',$type);
        $this->assign('shou',$shou);
        $this->display('index');
    }

   
}