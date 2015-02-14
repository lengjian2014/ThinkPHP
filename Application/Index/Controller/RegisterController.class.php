<?php
/**
 * 登录页面
 * Enter description here ...
 * @author lengjian
 */
namespace Index\Controller;
use Think\Controller;
class RegisterController extends Controller 
{
    public function index()
    {
    	$GoodsModel = new \Common\Logic\GoodsLogic();
    	$goods = $GoodsModel->getById(14);
    	
    	layout(false);
		$this->display();
    }
    
}