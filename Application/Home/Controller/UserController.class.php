<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/10
 * Time: 21:27
 */

namespace Home\Controller;
use Home\Model\UserModel;
use Org\Util\ip;
use Org\Util\oAuth;
use Org\Util\SaeClient;
use Org\Util\SaeTClientV2;
use Think\Controller;

class UserController extends Controller
{
    /**响应ajax登录，用于普通登录
     *
     */
    public function checkUser()
    {
        if (IS_POST)
        {
            $user = new UserModel();
            $data=I("post.");
            $info = $user->checkUser($data);
            $info['flag']==1 && session("username",I("post.user")) ;
            $info['flag']==1 && session("user_id",$info['user_id']);
            $info['flag']==1 && session("back_url",null);

            exit(json_encode($info));
        }
    }

    public function logout()
    {
        session("username",null);
        $this->display("Index/index");
    }

    public function register()
    {
        if (IS_AJAX)
        {
            $phone = I("post.phone");
            $code = I("post.code");
            $pass = I("post.pass");

            $result =  $this->checkCode($phone,$code);
            if ($result == true)
            {

            }
        }
        else
        {

        }
        $this->display();
    }

    /**处理微博登录的后续
     *
     */
    public function weiboLoginCallback()
    {
        $o = new oAuth(C("WB_AKEY"),C("WB_SKEY"));
        if (isset($_REQUEST['code']))
        {
            $keys = array();
            $keys['code'] = $_REQUEST['code'];
            $keys['redirect_uri'] = C("WB_CALLBACK_URL");
            $token = $o->getAccessToken( 'code', $keys ) ;

        }
        if ($token) {
            $_SESSION['token'] = $token;
            setcookie('weibojs_' . $o->client_id, http_build_query($token));
            $result = new SaeClient(C("WB_AKEY"),C("WB_SKEY"),$token['access_token']);

            $uid_get = $result->get_uid();
            dump($uid_get);
            $user_message=$result->show_user_by_id($uid_get['uid']);
            dump($user_message);
        }
        else
        {

        }
    }

    /**用来显示微博登录
     *
     */
    public function weiboLogin()
    {
        $o = new oAuth(C("WB_AKEY"),C("WB_SKEY"));
        $code_url = $o ->getAuthorizeURL(C("WB_CALLBACK_URL"));

        echo <<<EOF
        <script type='text/javascript'>
        window.location.href="$code_url";
        </script>
EOF;
    }

    /**显示普通登录界面
     *
     */
    public function login()
    {
        $this->display();
    }

    /**发送注册用的验证码，用来响应ajax
     *
     */
    public function sendRegisterSMS()
    {
        if(IS_AJAX)
        {
            $phoneNumber = I("post.phone");
            $result = $this->sendSMS($phoneNumber);
            if ($result == true) exit(json_encode(["status"=>200]));
            if($result == false) exit(json_encode(["status"=>202]));
        }
    }

    /**给特定手机发送发送验证码
     * @param $phoneNumber 要发送验证码的手机号码
     * @return bool|void    返回真假
     */
    private function sendSMS($phoneNumber)
    {
        $code = mt_rand(1000,9999);
        $result = \sendTemplateSMS($phoneNumber,array($code,'3'),"1");
        if ($result == true) {
            session($phoneNumber."code",$code);
            session($phoneNumber."time",time());
        }
        return $result;
    }

    /**对传递过来的手机验证码进行验证
     * @param $phone 手机号码
     * @param $code  手机验证码
     * @return bool
     */
    private function checkCode($phone,$code)
    {
//        验证码是否过期
        if(session($phone."time") + 1800 < time()) {
            exit(json_encode(["status"=>400,"message"=>"验证码过期,请重新验证"]));
        }
//          验证码是否错误
        if(session($phone."time") + 180 > time() && session($phone."code") != $code)
        {
            exit(json_encode(["status"=>202,"message"=>"验证码错误，请确认验证码"]));
        }
        if(session($phone."time") + 180 > time() && session($phone."code") == $code)
        {
            return true;
        }
    }

    /**发送邮件
     * @param $title  标题
     * @param $msghtml  正文
     * @param $sendAddress  发送地址
     * @return bool|string
     */
    private function sendEMail($title, $msghtml, $sendAddress)
    {
        $result = sendMail($title, $msghtml, $sendAddress);
        return $result;
    }

    /**纯粹拿来测试的方法
     *
     */
    public function test()
    {
        $ip =new ip();
        echo $ip->GetAdd();
        echo $ip->GetBrowser();
        echo $ip->GetIP();
        echo $ip->GetIsp();
        echo $ip->GetLang();
        echo $ip->GetOS();
        die;
    }
}