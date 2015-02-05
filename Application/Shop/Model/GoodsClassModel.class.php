<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Shop\Model;
use Think\Model;
use Common\Logic;
/**
 * 文档基础模型
 */
class GoodsClassModel extends Model
{
	protected $tableName  = '_goods_class'; 
	// 自动验证设置
    protected $_validate = array(
		
    );
    // 自动填充设置
    protected $_auto = array(
		
    );
    
	 public function getById($id)
	 {
	 	return parent::find($id);
	 }
	 
	 public function Update($data)
	 {
	 	return $this->save($data);
	 }
	 
	 public function getFristParent()
	 {
	 	$data = $this->where("")->find();
	 }
}
