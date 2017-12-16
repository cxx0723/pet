<?php
namespace Admin\Controller;
use Think\Controller;
class MemberController extends Controller {
    public function list(){
        $this->display('list');
    }

}