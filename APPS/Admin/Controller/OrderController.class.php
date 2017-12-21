<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends CommonController {
    public function list(){
        $this->display('list');
    }

}