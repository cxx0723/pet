<?php
namespace Admin\Controller;
use Think\Controller;
class MemberController extends CommonController {
    public function list(){
        $this->display('list');
    }

}