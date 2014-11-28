<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->title='peifei';
        $fun = M('Fun');
        $this->list=$fun->order('id desc')->select();
        //trace($fun->order('id desc')->select());
        $this->display();
    }
}