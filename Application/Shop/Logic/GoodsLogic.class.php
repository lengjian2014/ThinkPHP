<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Logic;
use Think\Model;
use Think\Page;

/**
 * 文档基础模型
 */
class GoodsLogic extends Model
{
	protected $tableName  = 'shop'; 
	 protected $data = array(
	
	 );	 
	 public function __construct()
	 {
	 	
	 }
	 public function __set($name, $value)
	 {
	 	
	 }
	 public function getKeys()
	 {
	 	if(empty($this->fields))
	 		$this->error = "表有问题吧（^_^）";
	 	foreach ($this->fields as $key => $val)
	 	{
	 		if(is_numeric($key))
	 		{
	 			$this->$val = $this->getDefualt($val);
	 		}
	 	}
	 	return $this;
	 }
	 
	 public function getDefualt($str)
	 {
	 	if(array_key_exists($str, $this->fields['_type']))
	 	{
	 		$value = $this->fields['_type'][$str];
	 		return $this->setValues[$value]; 
	 	}
	 	return '';
	 }
	 
	 public function setValues($val)
	 {
	 	if(strpos($val, "int"))
	 	{
	 		return 0;
	 	}
	 	if(strpos($val, "char"))
	 	{
	 		return '';
	 	}
	 	return '';
	 }
}
