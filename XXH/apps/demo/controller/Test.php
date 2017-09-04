<?php
namespace app\demo\controller;

use think\Controller;
use think\Db;
use think\Request;

class Test extends Controller
{
    public function index($name = "World")
    {
        $this->assign("name", $name);
        return $this->fetch();
    }

    public function db()
    {
        $data = Db::name('category')->find();
        $this->assign('result', $data);
        return $this->fetch();
    }

    public function hello($name = 'World', $city = '')
    {
        $request = Request::instance();
        // 获取当前URL地址 不含域名
        echo 'url: ' . $request->url() . '<br/>';
        
        return 'Hello,' . $name . '! You come from ' . $city . '.';
    }

}
