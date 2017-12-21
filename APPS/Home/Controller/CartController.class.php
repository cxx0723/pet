<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends Controller {
    public function index(){
    	$uid = Cookie('uid');
    	$cart = D('cart')->where("uid = $uid")->select();
        foreach ($cart as $key => $value) {

          $a= D("goods")->where('id='.$value['gid'])->field('name,describe,img_suo,price')->find();
       
          $value['price']    = $a['price'];
          $value['img']      = $a['img_suo'];
          $value['gname']    = $a['name'];
          $value['describe'] = $a['describe'];
          $arr[]=$value;
        }
        
    	  $this->assign("cart",$arr);
        $this->display('index');
    }

    function detail()
    {   
    	$gid = $_GET['gid'];
    	$res = D('goods')->where("id=$gid")->find();
    	$t   = D('type')->where('tid='.$res['tid'])->field('tname')->find();
    	$res['tname']=$t['tname'];
    	//var_dump($res);die;
    	$this->assign('res',$res);
    	$this->display('detail');
    }

    function del(){
      $id=I('post.gid');

      D('cart')->delete($id);
    }

   
}