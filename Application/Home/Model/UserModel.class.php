<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/10
 * Time: 21:29
 */

namespace Home\Model;
use Think\Model;

class UserModel extends Model
{
    /**
     * @param $data 用户名和密码
     * @return array 带有错误信息或者正确信息的数组
     */
    public function checkUser($data)
    {
        $username = $data['user'];
        $password = $data["pass"];
        $info = $this->where(["username"=>$username,"password"=>$password])->find();

        if ($info==null)  return ["flag"=>"404","message"=>"账号或密码错误"];
        if ($info['flag']==1)  return ["flag"=>1,"message"=>"登录成功","user_id"=>$info['user_id']];
        if ($info["flag"]==2)  return["flag"=>2,"message"=>"暂时封印，解封时间为 ".date("Y-m-d H:i:s",$info["cold_time"])];
        if ($info["flag"]==3)  return["flag"=>3,"message"=>"您已经永久封印，请联系管理员"];
        
    }
}