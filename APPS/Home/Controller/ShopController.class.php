<?php
namespace Home\Controller;
use Think\Controller;
class ShopController extends Controller {
    public function index(){
    	$p = isset($_GET['p'])?$_GET['p']:0;
    	$this->fenye($p,15);
        $this->display('index');
    }


    function fenye($p,$size)
    {
        $uid = Cookie('uid');
        $list = D('goods')
                ->where('goods_status=1')
                ->order('sort desc')
                ->page($p.','.$size)
                ->select();
        if($uid)
        {
           $gid = D('collect')->where('uid='.$uid)->field('gid')->select();
           foreach ($list as $key => $v) {
              foreach ($gid as $key => $value) {
                  if($v['id'] == $value['gid'])
                  {
                    $v['coll']=1;
                  }
              }
              $arr[]=$v;
           }

        }else{
            $arr=$list;
        }
        
    	$this->assign('goods',$arr);
    	// 赋值数据集

    	$goods      = D('goods')->where('goods_status=1')->select();
    	$count      = count($goods);
    	// 查询满足要求的总记录数
    	$Page       = new \Think\Page($count,$size);
    	// 实例化分页类 传入总记录数和每页显示的记录数
    	$show       = $Page->show();
    	$this->assign('page',$show);// 赋值分页输出
    }

    function add_cart()
    {   

        $uid = Cookie('uid');
        if($uid){
           $gid = I('post.gid');

            $arr['uid']  = $uid;
            $arr['gid']  = $gid;
            $arr['time'] = time();
            $arr['gnum']  = 1;
            $arr['gprice']=$price['price'];
            $arr['gstatus']=0;

            D('cart')->add($arr); 
        }else{
            $this->ajaxreturn(1);
        }
       
    }

    function add_collect()
    {
        $uid = Cookie('uid');
        if($uid)
        {
            $gid = I('post.gid');

            $arr['uid']  = $uid;
            $arr['gid']  = $gid;
            $arr['time'] = time();
            
            D('collect')->add($arr);
        }else{
            $this->ajaxreturn(1);
        }
        
    }

   
}