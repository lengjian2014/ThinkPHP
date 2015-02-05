<?php
/**
 * 店铺管理
 * Enter description here ...
 * @author lengjian
 */
namespace Shop\Controller;
use Common\Controller\BaseController;
use Think\Controller;
class IndexController extends BaseController
{
	//店铺设置
    public function index()
    {
    	if(IS_POST)
    	{
    		$this->save();
    	}
    	$goodstype_model = D("GoodsType");
    	$this->assign("goodstype",$goodstype_model->returnSelectOption());
		$this->display();
    }
    //保存
    public function save()
    {
    	$store_model = D("Store");
	    if ($store_model->create()) 
	    {
		        if (false !== $store_model->add()) 
		        {
		                $this->success('数据添加成功！');
		        }else{
		             $this->error('数据写入错误');
		         }
		  }else{
		      // 字段验证错误
		          $this->error($store_model->getError());
		   }
    }
    
    //认证设置
    public function verified()
    {
    	$this->display();
    }
}