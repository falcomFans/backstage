<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/11
 * Time: 15:35
 */

namespace Admin\Model;
use Think\Model;

class MemberModel extends Model
{
    public function addMember($data)
    {
        $flag= D("MemberLevel")->add($data);

        if ($flag)
        {
            return true;
        }
        return false;
    }

    /*获取所有的权限，也可以传入一个具体的flag来获取
     *
     */
    public function getAll($flag="")
    {
        $flag['flag'] = "1";
        return D("MemberLevel")->where($flag)->select();
    }
}