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
class GoodsModel extends Model
{
	//protected $tableName  = 'shop'; 
	// 自动验证设置
    protected $_validate = array(
        array('goods_name', 'require', '必须填写商品名称！', 1),//1为必须验证
        array('goods_name', '', '商品名称已经存在', self::EXISTS_VALIDATE, 'unique', self::MODEL_INSERT),
        array('goods_introduct', 'require', '内容必须',self::EXISTS_VALIDATE),
        array('category_id', 'require', '内容必须',self::MUST_VALIDATE),
        array('goods_detail', 'require', '内容必须',self::MUST_VALIDATE),
    );
    // 自动填充设置
    protected $_auto = array(
        array('createtime', 'time', self::MODEL_INSERT, 'function'),
        array('changetime', 'time', self::MODEL_BOTH, 'function'),
        array('goods_ico', 'null', self::MODEL_BOTH),
        array('tox_money_need', '0', self::MODEL_BOTH),
        array('goods_num', '0', self::MODEL_BOTH),
        array('status', '-1', self::MODEL_BOTH),
        array('sell_num', '0', self::MODEL_BOTH),
        array('goods_image', '0', self::MODEL_BOTH),

    );
    
	 public function getById($id)
	 {
	 	return parent::find($id);
	 }
	 
	 public function Update($data)
	 {
	 	return $this->save($data);
	 }
	 
}
