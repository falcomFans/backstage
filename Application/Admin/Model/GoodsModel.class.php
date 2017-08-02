<?php
/**
 * Created by PhpStorm.
 * User: Ai Haibara
 * Date: 2017/7/10
 * Time: 10:52
 */

namespace Admin\Model;
use Think\Image;
use Think\Model;
use Think\Upload;

class GoodsModel  extends Model
{

    /** 添加一个商品，操作goods表，goods_attr表，goods_pics表
     * @param $data POST数据
     * @param string $file 文件数据
     * @return bool 表示上传成功
     */
    public function addGoods($data,$file="")
    {
        $data["add_time"]=time();
        $data["upd_time"]= time();
        $goods_id = $this->add($data);
        if ($goods_id !== false)
        {
//            添加到商品-属性表
            $this->addAttr($data["attrs"],$goods_id);
//          更新自己的logo图片信息，这里需要对自己进行一次更新字段
            if (isset($_FILES["logo"]))
            {
                $pathinfo= $this->uploadLogo($_FILES["logo"]);
                $logoinfo["goods_big_logo"] = $pathinfo["big"];
                $logoinfo["goods_small_logo"] = $pathinfo["sm"];
                $logoinfo["goods_id"] = $goods_id;
                $this->save($logoinfo);
            }
//            添加到相册，因为这里是外表，所以不用更新本数据
            if (isset($_FILES["pics"]))
            {
                $this->uploadPics($_FILES["pics"],$goods_id);
            }
        }
        return true;
    }

    /**修改信息
     * @param $data 更新的数据
     * @param string $file  相册方面的更新
     * @return 走个样子而已
     */
    public function editGoods($data,$file="")
    {
        $data["upd_time"]= time();
        $this->save($data);
        $goods_id = $data["goods_id"];
        $this->uploadLogo($file['logo'],$goods_id);
        $this->uploadPics($file["pics"],$goods_id);
        return true;
    }


//    上传logo
/*传入单个数组，该数组是file里面提取的  也可以传入第二个参数goods_id用来更新商品的logo
 * 返回关联数组 big=> 原图路径  sm 缩略图路径
 */
    /**
     * @param $file
     * @param string $goods_id
     * @return array|void
     */
    private function uploadLogo($file, $goods_id='')
    {
        if ($file['error']!=0)  return;

//        先上传图片
        $rootPath = './Public/Uploads/goods_logo/';
        $cfg = array(
            'rootPath'      => $rootPath , //保存根路径
        );
        $up = new  Upload($cfg);
        $z = $up->uploadOne($file);
        $goods_logo = $rootPath. $z["savepath"].$z['savename'];

//      开始对上传的logo进行缩略图处理
        $im = new Image();
        $im->open($goods_logo);
        $im->thumb(150,150);
        $small = $rootPath. $z["savepath"]."small_".$z['savename'];
        $im->save($small);

//      对两个图片路径进行处理，方便前台展示
        $big = ltrim($goods_logo,".");
        $sm = ltrim($small,".");

        //        这一步执行更新 ，先删除原先的logo
        if(isset($goods_id))
        {
            $goods_info = $this->find($goods_id);
            $old_logo_big = ".".$goods_info["goods_big_logo"];
            $old_logo_small = ".".$goods_info["goods_small_logo"];
            file_exists($old_logo_big) && unlink($old_logo_big);
            file_exists($old_logo_small) && unlink($old_logo_small);
            $data["goods_big_logo"] = $big;
            $data["goods_small_logo"] = $sm;
            $data["goods_id"] = $goods_id;
            $this->save($data);
            return ;
        }

        return ["big"=>$big,"sm"=>$sm];
    }

//    上传相册，多张图片
/*传入一个复合数组，该数组是file里面提取的
 * 返回的是一个关联数组，big=>大图 mid=>中图  sm=>小图
 */
    private function uploadPics($files,$goods_id)
    {

        $rootpath = './Public/Uploads/goods_pics/';
        $cfg = array(
            'rootPath'      =>  $rootpath, //保存根路径
        );
        $up = new Upload($cfg);
        $z= $up->upload(array($files));

//        对每一个上传的图片进行缩略图处理，三种尺寸，800*600 400*300  200*150
        $im = new Image();
        foreach ($z as $k => $v)
        {
            $im->open($rootpath.$v["savepath"].$v["savename"]);


            $im->thumb(800,600);
            $pic_big =$rootpath.$v["savepath"]."big_".$v["savename"];
            $im->save($pic_big);

            $im->thumb(400,300);
            $pic_mid=$rootpath.$v["savepath"]."mid_".$v["savename"];
            $im->save($pic_mid);

            $im->thumb(200,150);
            $pic_small=$rootpath.$v["savepath"]."small_".$v["savename"];
            $im->save($pic_small);
//            过河拆桥
            unlink($rootpath.$v["savepath"].$v["savename"]);

            $data = ["goods_id"=>$goods_id,
                "pics_big"=>ltrim($pic_big,"."),
                "pics_mid"=>ltrim($pic_mid,'.'),
                "pics_sma"=>ltrim($pic_small,".")
                ];
            D("goods_pics")->add($data);
        }
    }

    /*增加商品的属性，传入一个包含了attr_id =>attrvalue的关联数组
     *这里是表单域里面的attrs字段
     */
    private function addAttr($attrs,$goods_id)
    {
        foreach ($attrs as $k => $v)
        {
            $data["attr_id"] = $k;
            $data["attr_value"] = $v;
            $data["goods_id"] = $goods_id;
            D("goods_attr")->add($data);
        }
    }

    public function getGoodsList()
    {
        $flag["flag"] = "1";

        return $this->alias("g")
            ->join("sp_type as t on g.type_id = t.type_id")
            ->field("g.*,t.type_name")
            ->where($flag)
            ->select();
    }

//    超详细的获取一个商品的所有属性
    public function getOneGoodsInfo($goods_id)
    {
        $flag["flag"] = "1";
        $flag["goods_id"] = $goods_id;
        $gt= $this->alias("g")
            ->join("sp_type as t on g.type_id = t.type_id")
            ->where($flag)
            ->find();
        $ga =    D("goods_attr")
                ->alias("ga")
                ->join("sp_attribute as a on ga.attr_id = a.attr_id ")
                ->where(["goods_id"=>$goods_id])
                ->field("goods_id,a.attr_id,attr_vals,attr_sel,attr_value")
                ->select();
        return["ga"=>$ga,"gt"=>$gt];

//       return $this->alias(g)
//            ->field("g.*,t.*, group_concat(ga.attr_value) as goods_attr,group_concat(ga.attr_id) as goods_attr_id")
//            ->join("sp_type as t on g.type_id = t.type_id left join sp_goods_attr as ga on g.goods_id = ga.goods_id")
//            ->where($flag)
//            ->find();
    }
}