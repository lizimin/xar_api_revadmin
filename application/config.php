<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // +----------------------------------------------------------------------
    // | 应用设置
    // +----------------------------------------------------------------------

    // 应用命名空间
    'app_namespace'          => 'app',
    // 应用调试模式
    'app_debug'              => true,
    // 应用Trace
    'app_trace'              => false,
    // 应用模式状态
    'app_status'             => '',
    // 是否支持多模块
    'app_multi_module'       => true,
    // 入口自动绑定模块
    'auto_bind_module'       => false,
    // 注册的根命名空间
    'root_namespace'         => [],
    // 扩展函数文件
    'extra_file_list'        => [THINK_PATH . 'helper' . EXT],
    // 默认输出类型
    'default_return_type'    => 'html',
    // 默认AJAX 数据返回格式,可选json xml ...
    'default_ajax_return'    => 'json',
    // 默认JSONP格式返回的处理方法
    'default_jsonp_handler'  => 'jsonpReturn',
    // 默认JSONP处理方法
    'var_jsonp_handler'      => 'callback',
    // 默认时区
    'default_timezone'       => 'PRC',
    // 是否开启多语言
    'lang_switch_on'         => false,
    // 默认全局过滤方法 用逗号分隔多个
    'default_filter'         => '',
    // 默认语言
    'default_lang'           => 'zh-cn',
    // 应用类库后缀
    'class_suffix'           => false,
    // 控制器类后缀
    'controller_suffix'      => false,

    // +----------------------------------------------------------------------
    // | 模块设置
    // +----------------------------------------------------------------------

    // 默认模块名
    'default_module'         => 'home',
    // 禁止访问模块
    'deny_module_list'       => ['common'],
    // 默认控制器名
    'default_controller'     => 'Index',
    // 默认操作名
    'default_action'         => 'index',
    // 默认验证器
    'default_validate'       => '',
    // 默认的空控制器名
    'empty_controller'       => 'Error',
    // 操作方法后缀
    'action_suffix'          => '',
    // 自动搜索控制器
    'controller_auto_search' => false,

    // +----------------------------------------------------------------------
    // | URL设置
    // +----------------------------------------------------------------------

    // PATHINFO变量名 用于兼容模式
    'var_pathinfo'           => 's',
    // 兼容PATH_INFO获取
    'pathinfo_fetch'         => ['ORIG_PATH_INFO', 'REDIRECT_PATH_INFO', 'REDIRECT_URL'],
    // pathinfo分隔符
    'pathinfo_depr'          => '/',
    // URL伪静态后缀
    'url_html_suffix'        => 'html',
    // URL普通方式参数 用于自动生成
    'url_common_param'       => false,
    // URL参数方式 0 按名称成对解析 1 按顺序解析
    'url_param_type'         => 0,
    // 是否开启路由
    'url_route_on'           => true,
    // 路由使用完整匹配
    'route_complete_match'   => false,
    // 路由配置文件（支持配置多个）
    'route_config_file'      => ['route'],
    // 是否强制使用路由
    'url_route_must'         => false,
    // 域名部署
    'url_domain_deploy'      => false,
    // 域名根，如thinkphp.cn
    'url_domain_root'        => '',
    // 是否自动转换URL中的控制器和操作名
    'url_convert'            => false,
    // 默认的访问控制器层
    'url_controller_layer'   => 'controller',
    // 表单请求类型伪装变量
    'var_method'             => '_method',
    // 表单ajax伪装变量
    'var_ajax'               => '_ajax',
    // 表单pjax伪装变量
    'var_pjax'               => '_pjax',
    // 是否开启请求缓存 true自动缓存 支持设置请求缓存规则
    'request_cache'          => false,
    // 请求缓存有效期
    'request_cache_expire'   => null,
    // 全局请求缓存排除规则
    'request_cache_except'   => [],

    // +----------------------------------------------------------------------
    // | 模板设置
    // +----------------------------------------------------------------------

    'template'               => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'         => 'Think',
        // 模板路径
        'view_path'    => '',
        // 模板后缀
        'view_suffix'  => 'html',
        // 模板文件名分隔符
        'view_depr'    => DS,
        // 模板引擎普通标签开始标记
        'tpl_begin'    => '{',
        // 模板引擎普通标签结束标记
        'tpl_end'      => '}',
        // 标签库标签开始标记
        'taglib_begin' => '<',
        // 标签库标签结束标记
        'taglib_end'   => '>',
    ],

    // 视图输出字符串内容替换
    'view_replace_str'       => [
        '__ROOT__'    => BASE_PATH,
        '__ADDONS__'  => BASE_PATH.'/addons',
        '__PUBLIC__'  => BASE_PATH.'/public',
        '__STATIC__'  => BASE_PATH.'/public/static',
        '__AMAZEUI__' => BASE_PATH.'/public/amazeui',
    ],
    // 默认跳转页面对应的模板文件
    'dispatch_success_tmpl'  => THINK_PATH . 'tpl' . DS . 'dispatch_jump.tpl',
    'dispatch_error_tmpl'    => THINK_PATH . 'tpl' . DS . 'dispatch_jump.tpl',

    // +----------------------------------------------------------------------
    // | 异常及错误设置
    // +----------------------------------------------------------------------

    // 异常页面的模板文件
    'exception_tmpl'         => THINK_PATH . 'tpl' . DS . 'think_exception.tpl',

    // 错误显示信息,非调试模式有效
    'error_message'          => '页面错误！请稍后再试～',
    // 显示错误信息
    'show_error_msg'         => false,
    // 异常处理handle类 留空使用 \think\exception\Handle
    'exception_handle'       => '',

    // +----------------------------------------------------------------------
    // | 日志设置
    // +----------------------------------------------------------------------

    'log'                    => [
        // 日志记录方式，内置 file socket 支持扩展
        'type'  => 'File',
        // 日志保存目录
        // 'path'  => "/data/www/XAR_shop/runtime/log",
        // 日志记录级别
        'level' => ['error','sql'],
    ],

    // +----------------------------------------------------------------------
    // | Trace设置 开启 app_trace 后 有效
    // +----------------------------------------------------------------------
    'trace'                  => [
        // 内置Html Console 支持扩展
        'type' => 'Html',
    ],

    // +----------------------------------------------------------------------
    // | 缓存设置
    // +----------------------------------------------------------------------

    'cache'                  => [
        // 驱动方式
        'type'   => 'File',
        // 缓存保存目录
        'path'   => CACHE_PATH,
        // 缓存前缀
        'prefix' => 'xar_shop_',
        // 缓存有效期 0表示永久缓存
        'expire' => 0,
    ],

    // +----------------------------------------------------------------------
    // | 会话设置
    // +----------------------------------------------------------------------

    'session'                => [
        'id'             => '',
        // SESSION_ID的提交变量,解决flash上传跨域
        'var_session_id' => '',
        // SESSION 前缀
        'prefix'         => 'xar_shop_',
        // 驱动方式 支持redis memcache memcached
        'type'           => '',
        // 是否自动开启 SESSION
        'auto_start'     => true,
    ],

    // +----------------------------------------------------------------------
    // | Cookie设置
    // +----------------------------------------------------------------------
    'cookie'                 => [
        // cookie 名称前缀
        'prefix'    => 'xar_shop_',
        // cookie 保存时间
        'expire'    => 0,
        // cookie 保存路径
        'path'      => '/',
        // cookie 有效域名
        'domain'    => '',
        //  cookie 启用安全传输
        'secure'    => false,
        // httponly设置
        'httponly'  => '',
        // 是否使用 setcookie
        'setcookie' => true,
    ],

    //分页配置
    'paginate'               => [
        'type'      => 'layerui',
        'var_page'  => 'page',
        'list_rows' => 30,
    ],


    // 'api_auth' => true,  //是否开启授权认证
    // 'auth_class' => \app\index\auth\OauthAuth::class, //授权认证类
    // 'auth_config' => [
    //     'api_auth' => true,  //是否开启授权认证
    //     'api_debug'=>false,//是否开启调试
    // ],
    'token_auth_config' => [
        'api_auth'   => true,  //是否开启授权认证
        'api_debug'  => true,//是否开启调试
        'auth_class' => \org\restfulapi\OauthAuth::class, //授权认证类
    ],

    'des3_input_on' => true,
    'des3_output_on' => true,
    'des3_debug_on' => true,

    'auth_config' => [
        'auth_on'           => true,                    // 认证开关
        'auth_type'         => 1,                       // 认证方式，1为实时认证；2为登录认证。
        'auth_group'        => 'xar_shop_auth_group',        // 用户组数据表名
        'auth_group_access' => 'xar_shop_auth_group_access',     // 用户-用户组关系表
        'auth_rule'         => 'xar_shop_auth_rule',             // 权限规则表
        'auth_user'         => 'xar_shop_user'                 // 用户信息表
    ],
	//栗子书屋
    // 'wechat_config' => [
    //     'mini_program' => [
    //         'app_id'   => 'wx1b7d93b3919c35d0',
    //         'secret'   => 'c502a24e2412996ea9db715d8062e733',
    //         // token 和 aes_key 开启消息推送后可见
    //         'token'    => 'cgjwechat',
    //         'aes_key'  => 'SbzE702a2TOFoarpMGOFysrSeofrjW4z8gvcw17JSNp'
    //     ],
    //     'app_id' => 'wx24fdd5d42b2794b8',
    //     'secret' => 'c67262d03f67f047274aae992c205aea',
    //     'token'  => 'Lizibook',
    //     'aes_key'=> '072vHYArTp33eFwznlSvTRvuyOTe5YME1vxSoyZbzaV'
    // ],
    //小矮人汽车微信配置
	'wechat_config' => [
        'mini_program' => [
            'app_id'   => 'wxdb7658f71de85a76',
            'secret'   => '9efe2e46c781d8362e75e4c05209e177',
            // token 和 aes_key 开启消息推送后可见
            'token'    => 'cgjwechat',
            'aes_key'  => 'SbzE702a2TOFoarpMGOFysrSeofrjW4z8gvcw17JSNp'
        ],
        'app_id' => 'wx630c6b5030ce918b',
        'secret' => '53bcf242dd24224476de8ddfa791e11f',
        'token'  => 'Lizibook',
        'aes_key'=> '072vHYArTp33eFwznlSvTRvuyOTe5YME1vxSoyZbzaV',
        'payment' => [
            'merchant_id'        => '1352105801',
            'key'                => 'zxcvbnmasdfghjklqwertyuiop1234ys',
            'cert_path'          => SITE_PATH.'/key/apiclient_cert.pem',
            'key_path'           => SITE_PATH.'/key/apiclient_key.pem', 
        ]
    ],

    //附件上传配置
    'upload'  => [
        'upload_image_size' => 20*1024,
        'upload_file_size'  => 20*1024,
        'upload_media_size' => 20*1024,

        'upload_image_ext'  => 'jpg,png,gif,jpeg,ico',
        'upload_file_ext'   => 'doc,docx,xls,xlsx,ppt,pptx,pdf,wps,txt,rar,zip',
        'upload_media_ext'  => 'mp4'
    ],

    'OSS_CONFIG'=>array(
        'accessKeyId' => 'LTAItNkumvJgPWpD',
        'accessKeySecret' => 'yJ8P9b6CdNYKV8Ttg4Iy31RVnqrkS9',
        'endpoint' => 'http://oss-cn-shenzhen.aliyuncs.com',
        'bucket' => 'ynxarmall',
        'oss_domain' => 'http://opic.gotomore.cn/',
        'mimes'         =>  array(
            'image/jpg',
            'image/gif',
            'image/png',
            'image/jpeg',
            'application/octet-stream',//阿里云好像都是通过二进制上传
        ),
        'maxSize'       =>  4194304, //上传的文件大小限制4M (0-不做限制)
        'exts'          =>  array('jpg', 'gif', 'png', 'jpeg'), //允许上传的文件后缀
        'subName'       =>  array('date', 'Ymd'), //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        'savePath'      =>  'Uploads/', //保存路径
        'saveName'      =>  array('uniqid', ''), //上传文件命名规则，[0]-函数名，[1]-参数，多个参数使用数组,
        'domain_dir'=> array(
            'common' => 'common',
            'mall'   => 'mall',
            'ma'     => 'ma',
            'xcxcgj' => 'xcxcgj',
        )
    ),

    'data_option' => array(
        'car_type' => array(
            0 => '小型轿车',
            1 => '小型越野客车',
        ),
        'car_character' => array(
            0 => '非运营',
            1 => '运营'
        ),
        'service_type' => array(
            0 => '标准服务产品',
            1 => '多个服务产品组合'
        ),
        'acc_type' => array(
            0 => '现金',
            1 => '转账',
            2 => '转账支票',
            3 => '微信',
            4 => '支付宝',
        ),
        'acc_direction' => array(
            0 => '贷',
            1 => '借'
        )
    ),
    'wechat_pay_config' => [
        'use_sandbox' => false,
        'app_id' => 'wx630c6b5030ce918b',
        'mch_id' => '1352105801',
        'md5_key' => 'zxcvbnmasdfghjklqwertyuiop1234ys',
        'app_cert_pem' => '',
        'app_key_pem' => '',
        'sign_type' => 'MD5',
        'limit_pay' => [],
        'fee_type' => 'CNY',
        'notify_url' => 'http://xcxcgj.gotomore.cn/notice.php',
        'redirect_url' => '',
        'return_raw' => true,
    ],
    'ali_pay_config' => [
        'use_sandbox'    => false,               //是否使用沙盒模式
        'partner'        => '',                //收款支付宝用户ID(2088开头)
        'app_id'         => '2016052401437504',                //支付宝分配给开发者的应用ID
        'sign_type'      => 'RSA',            //签名方式,支持：RSA RSA2
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0dtaAS/3lujciKrMvfOcdiasaTuRmetMtMAORyQq4NNnIO2oUvB1otZGU7+8DwxP3TXMflL9u/OOT70h5K7xpbOYjYV5ABldeM1nWhytLxQF+rpvuPjwMAzrFq5vZPtgCmq0IBR9s96Tj4zmvlKy8IbTq0awc7aZNJGp6CQQ2im9f0q0yFhxhqwkMhK1AIcSaNuObOEaR+is0c16OkyeVKIro//vQc7+GAprhLjTvdClSZUdooPqA62QdHyFL8Xqu/9mI9ZSaZ/cKHO92prX4yf8ndU5ykMwIy/gFdU8UbshxO79EVXa+334X/E0r0Vfvc27YgqMwk0OV2ZB3X3XxQIDAQAB',                //支付宝的公钥内容，也支持路径
        'rsa_private_key'=> 'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCk71vl0XD/2ftSJ+qdWbcr4rCq0Br8nmKyM1nJMezH4nxuHID7aBF4pOWgLUKBachM/RO1VOY7IYSudAhnvLo+WeXKZ9ctzZDhiezfrVWAe59/0+f7//ZeUJzr7KnonAdBKnDsrnG+8/uir+L4Rw+p0i4f0x+QlG6WEu5SVj2bf7xHAEUAig35PsbqnH52Kh55Pr99dWyIDzeQMgkveTtk3OoN01soAG4si1O7SSCfU8+Mq6SWilGmkEvz6tx9iFXPBGGUqHEx3SXC3F8H/K2Fu0pV+VmYPAs37tYf82V24cPE1JMjUMVkB7UuXIz+yQgy5tQBxoniCloYwcFrWpEzAgMBAAECggEASmfEwFeMr48pxnVFbPi1HnIkmtpI4l+dTKDHx3DjTYUJ9y6arU/UWeWhxXHFh9YtyzV8N5h2SISlc4Ha7NmB93DcrkPMGdibnHN5TarHYK/kU2lIRTHCdefN8syQFeSVjTtVOCC2JZuxkEHilXiRQ14S+r5mhfXAMamWo8ROBKCQflmjPcNslSnIKUupWRqpW+6MRunxLgQ75AgXtFEBIRDT6exGuuBciifdx0oesWQYvqiBlXffLCEL0h/IpmSmiqhkEmUvRpuJjhArtLqF1JrNeFQmpT94bKW4yJnxwV5od4uzSEH67M+9hHZ/ZXnw98ZDdVCoKn0KeyktIQ6uqQKBgQDb9uWcn1/BIjdAbQmNRowTkBiDazu314S5FVPfwvhmsQ1tQavzC4ZFIWBfXgJ4Gaw2oP+6WmSDANOjXCc97DTIFLNCyoBBIK7uZztgml+MBjFTPhKoz+fMwEQNYHfAWgVg4MvGci3y1k41gWKZZMVQJyUzs8sT1Q1LdFJc64UVrwKBgQC/9JQcXtswh2qbL0GCJX66YvjXzBqVwHPTbhQraW6Oh7hF79pWQVrG5AI/66M9QFnLyy5kxpc3PPQwPdGsu2olLX97d7RwSID3wwki5EGBnpEgHjd8oqCVZtMG5g+JIhblVCGBP1ayP8WDsRAwVdTe2U7Dl94YPTVDJefg5BIhvQKBgQCRBHKW0r/nba5tjDV67aLWFu8CXYUujCkVeMkmQb1QvrOyb1R01Qk9tGZ8GVeZZJuUHIrcilGvyLC/B7dbbMnTi0ov45+w0GJkDK0p4DzT7RVB4y+cGg2hgLSc+ReaOf9Hwoy2FXrTmZRQVC/0H2qykExHjOZ6+cBdGaBfYGsKQwKBgQCzc58TdspLcA2FzoPbe9ohvW0NsU4ZObYOrxZED2i/7rmjCDyB7s9CqN5Bi7UsCgDouKZCqDWt+ln+z4w5g2wUHZjUgHA7mEyZU8gyyllDKE5cTGNrLU4a3enixSk49pmZAzHfdqtCMMQh/WI5DcTYISe1S0DiQDaO89z3LcCVsQKBgHNMCVcrz47v5PC5m9wUtJ1baGJKGCj48X3052B//qM7Mt71NuwfniKfoQan9oRz7Pd+JfqUl2a4yT0EbiTdz+j1DAd/DlucIrsrWMsPcNkrRmkNflbu6p9ip/nDfcZpdUaYBiENwdP74aIeti8A0yxDuFK5/HGLOjxdPl/rXt58',                //个人生成的私钥内容，也支持路径
        'limit_pay'      => [],                //不可使用的支付方式 取值balance: 余额 、 moneyFund: 余额宝 、debitCardExpress: 借记卡快捷、creditCard: 信用卡、 creditCardExpress: 信用卡快捷、 creditCardCartoon: 信用卡卡通 、 credit_group: 信用支付类型（包含信用卡卡通、信用卡快捷、花呗、花呗分期）
        'notify_url'     => 'http://xcxcgj.gotomore.cn/alipaynotice.php',                // 异步回调的url


        'return_url'     => '',                // 同步回调的url
        'return_raw'     => true,              //     异步回调，是否返回原始数据（payment内部处理了异步结果，如果想要处理后的结果请设置为：false）
    ],



];
