<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/7
 * Time: 10:13
 */

/**盐值加密算法
 * @param $pwd 原本的密码
 * @param $salt 盐值
 * @return string 经过盐值加密后的密码字段，用于存储到数据库，不影响用户登录
 */
function  getSalt($pwd,$salt)
{
    return md5($pwd.substr(md5($salt),0,8));
}

/**无限级分类用于获取权限
 *
 */

/***********递归方式获取上下级权限信息****************/
function generateTree($data){
    $items = array();
    foreach($data as $v){
        $items[$v['auth_id']] = $v;
    }
    $tree = array();
    foreach($items as $k => $item){
        if(isset($items[$item['auth_pid']])){
            $items[$item['auth_pid']]['son'][] = &$items[$k];
        }else{
            $tree[] = &$items[$k];
        }
    }
    return getTreeData($tree);
}
function getTreeData($tree,$level=0){
    static $arr = array();
    foreach($tree as $t){
        $tmp = $t;
        unset($tmp['son']);
        $tmp['level'] = $level;
        $arr[] = $tmp;
        if(isset($t['son'])){
            getTreeData($t['son'],$level+1);
        }
    }
    return $arr;
}
/***********递归方式获取上下级权限信息****************/

/**
  * 发送模板短信
  * @param to 手机号码集合,用英文逗号分开
  * @param datas 内容数据 格式为数组 例如：array('Marry','Alon')，如不需替换请填 null
  * @param $time $tempId 模板Id,测试应用和未上线应用使用测试模板请填写1
  */       
function sendTemplateSMS($to,$datas,$tempId)
{

//主帐号,对应开官网发者主账号下的 ACCOUNT SID
$accountSid= C("ACCOUNT_SID");

//主帐号令牌,对应官网开发者主账号下的 AUTH TOKEN
$accountToken= C("AUTH_TOKEN");

//应用Id，在官网应用列表中点击应用，对应应用详情中的APP ID
//在开发调试的时候，可以使用官网自动为您分配的测试Demo的APP ID
$appId=C("APP_ID");

//请求地址
//沙盒环境（用于应用开发调试）：sandboxapp.cloopen.com
//生产环境（用户应用上线使用）：app.cloopen.com
$serverIP='sandboxapp.cloopen.com';

//请求端口，生产环境和沙盒环境一致
$serverPort='8883';

//REST版本号，在官网文档REST介绍中获得。
$softVersion='2013-12-26';
vendor("SMS.CCPRestSmsSDK");
     // 初始化REST SDK
     $rest = new REST($serverIP,$serverPort,$softVersion);
     $rest->setAccount($accountSid,$accountToken);
     $rest->setAppId($appId);
    
     // 发送模板短信
     $result = $rest->sendTemplateSMS($to,$datas,$tempId);
     if($result == NULL ) {
         return false;
     }
     if($result->statusCode!=0) {
         return false;
     }else{
        return true;
     }
}


//mail发送方法
function sendMail($title, $msghtml, $sendAddress) {
    //引入发送类phpmailer.php
    vendor('PHPMailer.phpmailer');
    //实列化对象
    $mail = new PHPMailer();
    /*服务器相关信息*/
    $mail->IsSMTP(); //设置使用SMTP服务器发送
    $mail->SMTPAuth = true; //开启SMTP认证
    $mail->Host = 'smtp.163.com'; //设置 SMTP 服务器,自己注册邮箱服务器地址
    $mail->Username = '15708329495@163.com'; //发信人的邮箱用户名
    $mail->Password = 'v849110018'; //发信人的邮箱密码
    /*内容信息*/
    $mail->IsHTML(true); //指定邮件内容格式为：html
    $mail->CharSet = "UTF-8"; //编码
    $mail->From = '15708329495@163.com'; //发件人完整的邮箱名称
    $mail->FromName = "Ai Haibara"; //发信人署名
    $mail->Subject = $title; //信的标题
    $mail->MsgHTML($msghtml); //发信主体内容
    // $mail->AddAttachment("fish.jpg");      //附件
    /*发送邮件*/
    $mail->AddAddress($sendAddress); //收件人地址
    //使用send函数进行发送
    if ($mail->Send()) {
        //发送成功返回真
        return true;
        // echo '您的邮件已经发送成功！！！';
    } else {
        return $mail->ErrorInfo; //如果发送失败，则返回错误提示
    }
}

//curl类
function request($url, $https = true, $method = 'get', $data = null) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    if ($https === true) {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    }
    if ($method == 'post') {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $str = curl_exec($ch);
    curl_close($ch);
    return $str;
}
