<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/9
 * Time: 14:41
 */

namespace Admin\Controller;

use Admin\Common\AdminController;
use Admin\Common\MyPager;
use Admin\Common\Pager;
use Admin\Model\UserModel;
use Think\Page;

class UserController extends AdminController
{
    /**展示符合条件的用户
     *
     */
    public function showlist()
    {
        $User = M('User'); // 实例化User对象
        $count = $User->count();//
        $Page = new MyPager($count, 10);
        $page = $Page->show();
        $list = $User->order('user_time')->limit($Page->firstRow . ',' . $Page->listRows)->select();

        $this->assign('user', $list);// 赋值数据集
        $this->assign('page', $page);// 赋值分页输出
        $this->assignAuths();
        $this->display();
    }

    /**条件搜索用户
     *
     */
    public function search()
    {
        if(IS_POST)
        {
            $user = new UserModel();
            $data = (I("post."));
            $data =$user->search($data);
            $page = $data["show"];
            $list = $data["list"];
            session("flag",$data["flag"]);
            echo json_encode(["msg"=>$this->getSearchString($page,$list)]);
        }
        else
        {
            $User = M('User'); // 实例化User对象
            $count = $User->where(session("flag"))->count();//
            $Page = new MyPager($count, 10);
            $page = $Page->show();
            $list = $User->where(session("flag"))->order('user_time')->limit($Page->firstRow . ',' . $Page->listRows)->select();

            $this->assign('user', $list);// 赋值数据集
            $this->assign('page', $page);// 赋值分页输出
            $this->assignAuths();
            $this->display("showlist");
        }
    }

    /**
     * 冻结某个用户
     */
    public function coldUser()
    {
        if (IS_POST) {
            $user = new UserModel();
            if ($user->cold($_POST)) {
                echo json_encode(["status" => "200"]);
                exit();
            }
        }
    }

    /**
     * 奥义固有结界
     */
    protected function assignAuths()
    {
        $this->assign("authA", $this->auths["authA"]);
        $this->assign("authB", $this->auths["authB"]);
    }


    public function addSomeUser()
    {
        for ($i = 0; $i < 100; $i++) {
            $data = [];
            $data["username"] = "测试数据" . $i;
            $data["password"] = "123456";
            $data["user_time"] = time();
            $data["last_time"] = time();
            if ($i % 3 == 0) {
                $data["user_sex"] = 0;
                $data["flag"] = 1;
            } elseif ($i % 3 == 1) {
                $data["user_sex"] = 1;
                $data["flag"] = 2;
                $data["cold_time"] = time() + 86000 * $i;
            } else {
                $data["user_sex"] = 2;
                $data["flag"] = 3;
            }
            D("user")->add($data);
        }
        echo "插入成功";
    }


    /**老子为了这个ajax煞费苦心啊！！！！！！！！！！！！！！！
     * @param $show 分页字符串
     * @param $list 数据集
     */
    private function getSearchString($page, $list)
    {

        $s ="<h4>用户列表</h4>";
        $s .= <<<EOT
                        {$page}
                        <br>
                        <br>
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>序号</th>
                                    <th>账号</th>
                                    <th>邮箱</th>
                                    <th>手机</th>
                                    <th>性别</th>
                                    <th>注册时间</th>
                                    <th>当前状态</th>
                                    <th>相关操作</th>
                                </tr>
                            </thead>
                            <tbody>
EOT;

        foreach ($list as $K => $v) {
            if($K<=9){


            $s .= "<tr>";
            $s .= "<th scope='row'>" . ($K + 1) . "</th>";
            $s .= "<td>" . $v['username'] . "</td>";
            $s .= "<td>" . $v['user_email'] . "</td>";
            $s .= "<td>" . $v['user_tel'] . "</td>";
            $s .= "<td>";

            $v['user_sex'] == 0 && $s .= "女";
            $v['user_sex'] == 1 && $s .= "男";
            $v['user_sex'] == 2 && $s .= "保密";

            $s.="</td><td>";
            $s .= date("Y-m-d H:i:s",$v['user_time']);
            $s.="</td><td>";
            $v['flag'] == 0 && $s.= "注销";
            $v['flag'] == 1 && $s.= "正常";
            $v['flag'] == 2 && $s.= "有期限封印";
            $v['flag'] == 3 && $s.= "无限期封印";
            $s.="</td><td>";
            $s.="<button type=\"button\" class=\"btn btn-sm btn-primary\">查看</button>";
            $s.=" <button type=\"button\" id=";
            $s.=$v[ 'user_id'];
            $s.=" class=\"btn btn-sm btn-danger\" onclick=\"cold(this)\">封印</button>";
            $s.="   </td></tr>";
            }
        }
        $s .= "</tbody></table>{$page}";
        return $s;
    }
}