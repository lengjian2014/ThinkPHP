<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Common\Logic;

/**
 * 文档基础模型
 */
class GoodsLogic
{
	public $data = array(
          'id' => 0,
          'goods_name' => '',
          'goods_ico' => 0,
          'goods_introduct' => '',
          'goods_detail' => '',
          'tox_money_need' => 0,
          'goods_num' => 0,
          'changetime' => 0,
          'status' => 0,
          'createtime' => 0,
          'category_id' => 0,
          'is_new' => 0,
          'sell_num' => 0
	);

	 public function __set($name, $value)
	 {
	 	$this->data [$name] = $value;
	 }
	 public function __get($key)
	 {
	 	if (isset ( $this->data [$key] ))
			return $this->data [$key];
	 }
	 public function getById($id)
	 {
	 	$goods = new \Home\Model\GoodsModel();
	 	return $goods->getById($id);
	 }
}
