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
/**
 * 文档基础模型
 */
class StoreModel extends Model
{
	//protected $tableName  = 'shop'; 
	// 自动验证设置
    protected $_validate = array(
        array('store_name', 'require', '必须填写店铺名称！', self::MUST_VALIDATE),//1为必须验证
        array('gc_id', 'require', '请选择主营类型',self::MUST_VALIDATE),
        array('store_logo', 'require', '请上传店铺标志',self::MUST_VALIDATE),
        array('area_id', 'require', '请选择所在地',self::MUST_VALIDATE),
        array('store_address', '1,100', '请填写详细地址',self::MUST_VALIDATE,'length'),
        array('store_tel', 'contact', '请填写联系电话',self::MUST_VALIDATE),
        array('description', '50,250', '请填写店铺简介',self::MUST_VALIDATE,'length'),
        array('store_zip', 'zip', '请填写邮编',self::VALUE_VALIDATE),
        array('store_qq', 'number', '请填写联系电话',self::VALUE_VALIDATE),
    );
    // 自动填充设置
    protected $_auto = array(
        array('createtime', 'time', self::MODEL_INSERT, 'function'),
        array('changetime', 'time', self::MODEL_BOTH, 'function'),
        array('uid', 'get_uid', self::MODEL_INSERT,'function'),
//        array('store_qq', '', self::MODEL_BOTH),
//        array('store_keywords', '', self::MODEL_BOTH),
//        array('store_description', '', self::MODEL_BOTH),
         array('grade_id', '', self::MODEL_INSERT),

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
