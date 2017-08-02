<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/13
 * Time: 18:34
 */

namespace Home\Model;
use Think\Model;

class GoodsModel  extends Model
{
    public function getAllGoods()
    {
        return $this->field("goods_id,goods_name,goods_price,goods_small_logo")->select();
    }

    public function getAttrById($goods_id)
    {
        $goods_info = $this->field("goods_id,goods_name,goods_price,goods_big_logo")->find($goods_id);
        $goods_attr = D('GoodsAttr')
            ->alias("ga")
            ->join("sp_attribute as a on ga.attr_id = a.attr_id")
            ->field("a.attr_name,a.attr_sel,ga.*")
            ->where(['ga.goods_id'=>$goods_id])
            ->select();
        return ["gi"=>$goods_info,"ga"=>$goods_attr];
    }
}