<?php
namespace app\welfare\controller;

use app\welfare\model\Order;
use app\welfare\model\Product;
use think\Controller;

class Index extends Controller
{
    public function _initialize()
    {
        header("Content-type:text/html;charset=utf-8");
    }

    public function index()
    {
        return $this->fetch();
    }

    public function exchange()
    {
        $input    = input();
        $account  = $input['account'];
        $password = strtoupper($input['password']);
        $hash     = md5($account . md5($password));
        $order    = Order::getByHash($hash);
        if ($order) {
            $order             = $order->toArray();
            $order['account']  = $account;
            $order['password'] = $password;
            session("SESS_order", $order);
        } else {
            session("SESS_order", null);
        }

        return $order;
    }

    public function doExchange()
    {
        $order = session("SESS_order");
        //已经兑换
        if ($order['product_id']) {
            $result = [
                'error'   => 1,
                'message' => '已经兑换过，请返回登录查询！',
            ];
            return json($result);
        }

        $input      = input();
        $product_id = $input['product_id'];
        $category   = substr($order['account'], 0, 1);

        $product = Product::get(["product_id" => $product_id, "status" => 1, "category" => $category]);
        if (empty($product)) {
            $error   = 1;
            $message = "操作异常，您无法兑换此项礼品！";
        } else {
            $order['product_id'] = $product_id;
            $order['realname']   = $input['realname'];
            $order['mobile']     = $input['mobile'];
            $order['email']      = $input['email'];
            $order['address']    = $input['address'];
            $order['remark']     = $input['remark'];
            $order['created']    = date("Y-m-d H:i:s");

            $result = Order::update($order);
            if ($result) {
                $error   = 0;
                $message = "兑换成功！";

                session("SESS_order", $order);

                // 发送电子邮件
                $FromName = "四达上海";
                $From     = "noreply@chstar.com.cn|$FromName";
                $ToName   = $input['realname'];
                $To       = $input['email'];
                $Subject  = "中秋礼品兑换成功 - 四达上海";
                $Textbody = '<!DOCTYPE html>
                <html>
                <head>
                    <title>' . $Subject . '</title>
                </head>
                <body>
                    亲爱的雇员，您好！
                    　　您已兑换成功，相关信息如下。<br /><br />
                    品名: ' . $product['product_id'] . '<br />
                    姓名: ' . $input['realname'] . '<br />
                    手机: ' . $input['mobile'] . '<br />
                    邮箱: ' . $input['email'] . '<br />
                    地址: ' . $input['address'] . '<br />
                    备注: ' . $input['remark'] . '<br /><br />
                    <hr style="WIDTH: 360px; HEIGHT: 1px align="left" color="#b5c4df" size="1">
                    中国四达国际经济技术合作有限公司上海分公司<br>
                    ' . date("Y-m-d") . '
                </body>
                </html>';
                $result = smtp_mail($FromName, $From, $ToName, $To, $Subject, $Textbody);
                if (empty($result)) $message .= "兑换信息已经发往你的邮箱中，请注意查收！";
            } else {
                $error   = 1;
                $message = "发生未知错误，兑换失败！";
            }
        }

        $result = [
            'error'   => $error,
            'message' => $message,
        ];
        return json($result);
    }

    public function products()
    {
        $order = session("SESS_order");
        if ($order['product_id']) {
            return redirect('Index/order');
        }

        $category = substr($order['account'], 0, 1);
        $list     = Product::where(["status" => 1, "category" => $category])->select();
        $this->assign("list", $list);
        $this->assign("count", count($list));
        return $this->fetch();
    }

    public function product()
    {
        $order = session("SESS_order");
        if ($order['product_id']) {
            return redirect('Index/order');
        }

        $product_id = input("id");
        $product    = Product::get($product_id);
        $this->assign("order", $order);
        $this->assign("product", $product);
        return $this->fetch();
    }

    public function order()
    {
        $order      = session("SESS_order");
        $product_id = $order['product_id'];
        if ($product_id) {
            $tpl = "order_details";
        } else {
            $tpl        = "order";
            $product_id = input('pid');
        }
        $product = Product::get($product_id);
        $this->assign("product", $product);
        $this->assign("order", $order);
        return $this->fetch($tpl);
    }

    public function init_account()
    {
        $order = new Order;
        for ($i = 0; $i < 1500; $i++) {
            $account  = "1" . $this->captcha("123456789", 7);
            $password = $this->captcha("ABCDEFGHJKMNPQRSTUVWXYZ");
            $hash     = md5($account . md5($password));
            $data[]   = [
                'hash'     => $hash,
                'account'  => $account,
                'password' => $password,
            ];

            echo "<li>$account-$password";
        }
        die;

        if ($order->saveAll($data)) {
            return '卡密批量新增成功';
        } else {
            return $order->getError();
        }
    }

    public function init_product()
    {
        $product = new Product;
        for ($i = 1; $i < 13; $i++) {
            $category = 1;

            $data[] = [
                'category' => $category,
                'title'    => "中秋礼品No.$category-$i",
                'abstract' => "这是中秋礼品No.$category-$i",
                'content'  => "这是中秋礼品No.$category-{$i}，价值{$category}00元。",
                'price'    => $category * 100,
            ];
        }
        die;

        if ($product->saveAll($data)) {
            return '礼品批量新增成功';
        } else {
            return $product->getError();
        }
    }

    public function captcha($chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789", $length = 8)
    {
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }
}
