<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends CommonController {
    public function news(){
        $this->display('news');
    }

}