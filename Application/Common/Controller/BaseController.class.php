<?php
/**
 * 基类
 */
namespace Common\Controller;
use Think\Controller;
class BaseController extends Controller
{
	public function _initialize()
    {
	      $uid = intval($_REQUEST['uid']) ? intval($_REQUEST['uid']) : is_login();
	      $uid = 1;
	      if (!$uid) {
	            $this->error('需要登录', "/index/login");
	      }
	      C("uid",$uid);
	      $this->assign('uid', $uid);
	      $this->mid = is_login();
    }
}
