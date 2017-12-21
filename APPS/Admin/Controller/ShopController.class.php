<?php
namespace Admin\Controller;
use Think\Controller;
class ShopController extends CommonController {

	public function index(){
        $goods = D('goods')
                 ->join('type on goods.tid = type.tid')
                 ->select();
        $this->assign('goods',$goods);

		$this->display('list');
	}
    
    //修改排序
    function save_sort()
    {
        $id  = I('post.gid');
        $num = I('post.num');
        D('goods')->where('id = '.$id)->setField('sort',$num);
    }
    //审核商品
    function save_status()
    {
        $id     = I('post.gid');
        $status = D('goods')->where("id = ".$id)->field('goods_status')->find();

        if($status['goods_status']==1)
        {
            $flag=0;
        }else{
            $flag=1;
        }
        D('goods')->where('id = '.$id)->setField('goods_status',$flag);
    }

    public function type(){
        if (IS_POST) {
           $data = I("post.");
           //修改
           if($data['ss'] == 1)
           {  
              $id = $data['tid'];
              unset($data['tid']);

              D("type")->where('tid = '.$id)->save($data);
           }elseif($data['tid'])
           {
              $id = I('post.tid');

              $save = D('type')->where('tid = '.$id)->find();
              $save['pname'] = D('type')->where('tid = '.$save['pid'])->field('tname')->find();
             // $this->assign('save',$save);
              $this->ajaxReturn($save);
           }else{
             $file = $_FILES['img'];
            $img = $this->upload($file);
            $data['img']  = $img;
            $data['time'] = time();
            $data['tnum'] = 0;
            D("type")->add($data);
           }
            
          
        }
         $type = D('type')->select();
         $types = get_type($type);
         $this->assign('types',$types);

         $this->display('type');
    }
    public function add(){
        $type = D('type')->select();
        $types = get_type($type);
        $this->assign('type',$types);
        if (IS_POST) {
            $data = I('post.');

            //缩略图
            $image    = new \Think\Image(); 
            $file     = $_FILES['img'];
            $img      = $this->upload($file);
            $imgs      = substr($img, 8);
            $image->open($img);
            $suo      = time().".jpg";
            $thumb    = './uploads/'.$suo;
            $image->thumb(150, 150)->save($thumb);
            $data['img_suo'] = $suo;
            $data['time']    = time();
            $data['img']     =$imgs;
            D('goods')->add($data);   
        }
        $this->display('add');
    }
    public function review(){
        $this->display('review');
    }
    public function recycle(){
    	$this->display('recycle');
    }
    public function repertory(){
    	$this->display('repertory');
    }
    
    //删除种类
    function del()
    {
      $tid=I('post.tid');
      D('type')->delete($tid);
    }
    
    //删除商品
    function goods_del()
    {
      $gid=I('post.gid');
      D('goods')->delete($gid);
    }

 
}