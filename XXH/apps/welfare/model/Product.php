<?php
namespace app\welfare\model;

use think\Model;

class Product extends Model
{
    protected $connection = [
        'prefix' => 'welfare_',
    ];
    
    // 定义自动完成的属性
    protected $insert = ['status' => 1];

}
