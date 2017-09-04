<?php
return [
    // 打开调试模式
    'app_debug'      => true,
    // 关闭URL自动转换（支持驼峰访问控制器）
    'url_convert'    => false,
    // 按照参数顺序获取
    //'url_param_type' => 1,
    
    // 视图输出字符串内容替换
    'view_replace_str' => [
        '__PUBLIC__' => '/public',
        '__ROOT__'   => $_SERVER['DOCUMENT_ROOT'],
    ],
];
