<?php
//
// +---------------------------------------------------------+
// | PHP version 
// +---------------------------------------------------------+
// | Copyright (c) kunming.cn All rights reserved.
// +---------------------------------------------------------+
// | 文件描述
// +---------------------------------------------------------+
// | Author: 曹瑞 <610756247@qq.com>
// +———————————————————+
//2017/11/23 16:54
namespace app\common\validate;
use app\common\validate\Validate;

class ShopInfo extends Validate{

    // 当前验证的规则
    protected $rule = [
        'shop_name'     => 'require|length:4,8',
        'shop_tel'     => 'require',

    ];

    // 验证提示信息
    protected $message = array(
        'shop_name.require'      => '店名不能为空',
        'shop_name.require'      => '店名长度为4到8个字',
        'shop_tel.require'      => '电话不能为空',
    );
}