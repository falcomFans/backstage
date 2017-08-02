<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/9
 * Time: 14:57
 */

namespace Admin\Model;
use Admin\Common\MyPager;
use Think\Model;
use Think\Page;

class UserModel  extends Model
{


    /**获取所有的用户，默认所有用户资料
     * @param array $flag  可以传入flag来获取相对应的用户群体(0,1,2,3);
     * @return mixed
     */
    public function getAllUser($flag='')
    {
        if (!empty($flag))
        {
            return $this->where(["flag"=>"$flag"])->select();
        }
        else
        {
            return $this->select();
        }
    }


    public function search($data)
    {
//        疯狂的判断
         isset($data["flag"]) && $data["flag"] != 5 && $where["flag"] = $data["flag"];
         isset($data['username']) && $where["username"]=["like","%".$data['username']."%"];
         $data["user_time_start"] != 0 && $data["user_time_end"] ==0 && $where["user_time"]=["GT",strtotime($data["user_time_start"])];
         $data["user_time_end"] !=0 && $data["user_time_start"] ==0 && $where["user_time"]=["LT",strtotime($data["user_time_end"]+86400)];
         $data["user_time_end"] !=0 && $data["user_time_start"] != 0 && $where["user_time"]
             =["BETWEEN",array(strtotime($data["user_time_start"]),strtotime($data["user_time_end"])+86400)];

//       进入组装分页模式
         $count = $this->where($where)->count();
         $page = new MyPager($count,10);
         $show = $page->show();
         $list = $this->where($where)->order('user_time')->limit($Page->firstRow.','.$Page->listRows)->select();

//         返回去，包含了分页的,并且包含查询条件，这里是为了让二次访问的时候，带着查询条件去查询
         return ["show"=>$show,"list"=>$list,"flag"=>$where];
    }
    
    /**
     * @param $data冻结条件
     * @return bool 冻结成功
     */
    public function cold($data)
    {
        $flag=$data['flag'];
        if ($flag == 3)
        {
            $this->save($data);
            return true;
        }
        elseif ($flag==2)
        {
            $user = $this->find($data['user_id']);
            $user_flag= $user['flag'];
            if ($user_flag == 1)
            {
                $time = time() + $data["date"] * 86400;
            }
            elseif ($user_flag == 2)
            {
                $time = $user['cold_time'] + $data["date"] * 86400;
            }

            $data["cold_time"] = $time;
            $this->save($data);
            return true;
        }
    }
}