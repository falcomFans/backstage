<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/9
 * Time: 22:51
 */

namespace Admin\Model;
use Think\Model;

class AttributeModel extends Model
{
    /**获取所有的属性，也可以传入type值来获取某一个类型的属性
     *
     */
    public function getAllAttribute($type_id="")
    {
        $flag="";
        if (!empty($type_id))
        {
            $flag["type_id"]=$type_id;
        }
        $info =   $this->alias("a")
//                ->join("__TYPE__ t on a.type_id = t.type_id")
                ->where($flag)
                ->select();
        return $info;
    }
}