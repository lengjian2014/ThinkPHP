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
class GoodsTypeModel extends Model
{
	protected $tableName  = 'goods_type'; 
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
	 //返回所有的类型
	 public function getAll()
	 {
	 	$data = $this->cache("goods_type",3600*24)->where("1=1")->order('type_sort')->select();

	 	return $data;
	 }
	 //生产option返回
	 public function returnSelectOption()
	 {
	 	$info = $this->getAll();
	 	$data = '';
	 	foreach ($info as $key => $val)
	 	{
	 		$data .= '<option value="'.$val["type_id"].'">'.$val["type_name"].'</option>';
	 	}

	 	return $data;
	 }
}
