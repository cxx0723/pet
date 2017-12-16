<?php
namespace Admin\Controller;
use Think\Controller;
class ShopController extends Controller {
	public function list(){
		$this->display('list');
	}
    public function class(){
        $this->display('class');
    }
    public function add(){
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
}