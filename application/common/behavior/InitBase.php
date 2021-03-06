<?php
// +----------------------------------------------------------------------
// | @Appname 应用描述：[基于ThinkPHP5开发] 
// +----------------------------------------------------------------------
// | @Copyright (c) http://www.lishaoen.com 
//+----------------------------------------------------------------------
// | @Author: lishaoenbh@qq.com
// +----------------------------------------------------------------------
// | @Last Modified by: lishaoen
// +----------------------------------------------------------------------
// | @Last Modified time: 2017-11-30 11:06:42 
// +----------------------------------------------------------------------
// | @Description 文件描述： 配置行为扩展[读取数据库的配置信息并与本地配置合并]

namespace app\common\behavior;
defined('THINK_PATH') or exit();

use think\Loader;
use think\Request;

/**
 * 初始化基础信息行为
 */
class InitBase
{
    /**
     * 行为扩展的执行入口必须是run
     */
    public function run(&$params)
    {
        // 检测是否为安装流程
        if(!defined('BIND_MODULE') || BIND_MODULE != 'install') :
            
            // 初始化常量
            $this->initConst();
            
            // 初始化插件静态资源
            $this->initAddonStatic();
            
            // 初始化配置
            //$this->initConfig();
            
            // 注册命名空间
            $this->registerNamespace();
            
            endif;
    }

     /**
     * 初始化常量
     */
    private function initConst()
    {
        
        // 初始化分层名称常量
        $this->initLayerConst();
        
        // 初始化结果常量
        $this->initResultConst();
        
        // 初始化数据状态常量
        $this->initDataStatusConst();
        
        // 初始化时间常量
        $this->initTimeConst();
        
        // 初始化系统常量
        $this->initSystemConst();
        
        // 初始化路径常量
        $this->initPathConst();
        
        // 初始化API常量
        $this->initApiConst();

        $this->initTmconfig();
    }

    /**
     * 初始化分层名称常量
     */
    private function initLayerConst()
    {
        
        define('LAYER_LOGIC_NAME'       , 'logic');
        define('LAYER_MODEL_NAME'       , 'model');
        define('LAYER_SERVICE_NAME'     , 'service');
        define('LAYER_CONTROLLER_NAME'  , 'controller');
        define('LAYER_VALIDATE_NAME'    , 'validate');
        define('LAYER_VIEW_NAME'        , 'view');
    }
    
    /**
     * 初始化结果标识常量
     */
    private function initResultConst()
    {
        
        define('RESULT_SUCCESS'         , 'success');
        define('RESULT_ERROR'           , 'error');
        define('RESULT_REDIRECT'        , 'redirect');
        define('RESULT_MESSAGE'         , 'message');
        define('RESULT_URL'             , 'url');
        define('RESULT_DATA'            , 'data');
    }
    
    /**
     * 初始化数据状态常量
     */
    private function initDataStatusConst()
    {
        
        define('DATA_STATUS_NAME'       , 'status');
        define('DATA_NORMAL'            , 1);
        define('DATA_DISABLE'           , 0);
        define('DATA_DELETE'            , -1);
        define('DATA_SUCCESS'           , 1);
        define('DATA_ERROR'             , 0);
    }
    
    /**
     * 初始化API常量
     */
    private function initApiConst()
    {
        
        define('API_CODE_NAME'          , 'code');
        define('API_MSG_NAME'           , 'msg');
    }
    
    /**
     * 初始化时间常量
     */
    private function initTimeConst()
    {
        
        define('TIME_CT_NAME'           , 'create_time');
        define('TIME_UT_NAME'           , 'update_time');
        define('TIME_NOW'               , time());
    }
    
    /**
     * 初始化路径常量
     */
    private function initPathConst()
    {
        
        define('PATH_ADDON'             , ROOT_PATH   . SYS_ADDON_DIR_NAME . DS);
        define('PATH_PUBLIC'            , ROOT_PATH   . 'public'    . DS);
        define('PATH_UPLOAD'            , PATH_PUBLIC . 'uploads'   . DS);
        define('PATH_PICTURE'           , PATH_UPLOAD . 'picture'   . DS);
        define('PATH_FILE'              , PATH_UPLOAD . 'file'      . DS);
        define('PATH_SERVICE'           , ROOT_PATH   . DS . SYS_APP_NAMESPACE . DS . SYS_COMMON_DIR_NAME . DS . LAYER_SERVICE_NAME . DS);
    }
    
    /**
     * 初始化系统常量
     */
    private function initSystemConst()
    {

        define('SYS_APP_NAMESPACE'      , config('app_namespace'));
        define('SYS_HOOK_DIR_NAME'      , 'hook');
        define('SYS_ADDON_DIR_NAME'     , 'addon');
        define('SYS_DRIVER_DIR_NAME'    , 'driver');
        define('SYS_COMMON_DIR_NAME'    , 'common');
        define('SYS_STATIC_DIR_NAME'    , 'static');
        define('SYS_VERSION'            , '1.0.0');
        define('SYS_ADMINISTRATOR_ID'   , 1);
        define('SYS_DS_PROS'            , '/');
        define('SYS_DS_CONS'            , '\\');
        
        $database_config                = config('database');
        
        //define('SYS_DB_PREFIX'          , $database_config['prefix']);
        //define('SYS_ENCRYPT_KEY'        , $database_config['sys_data_key']);
    }
    
    /**
     * 初始化配置信息
     */
    private function initConfig()
    {
        
        // 读取数据库中的配置
        $system_config = cache('db_config_data');
        if (!$system_config || config('app_debug') === true) {
            // 获取所有系统配置
            $model = model(SYS_COMMON_DIR_NAME . SYS_DS_PROS . 'Config');

            $system_config = $model->lists();
            
            // SESSION与COOKIE与前缀设置避免冲突
            $system_config['session_prefix'] = strtolower(ENV_PRE . MODULE_MARK . '_'); // Session前缀
            $system_config['cookie_prefix']  = strtolower(ENV_PRE . MODULE_MARK . '_'); // Cookie前缀

            // 加载模块标签库及行为扩展
            $system_config['template']        = config('template'); // 先取出配置文件中定义的否则会被覆盖
            
            // 获取所有安装的模块配置
            $module_config = array();
            if ($module_config) {
                // 合并模块配置
                $system_config = array_merge($system_config, $module_config);
            }
            
            // 获取所有安装的插件配置
            $addon_config = array();
            if ($addon_config) {
                // 合并模块配置
                $system_config = array_merge($system_config, $addon_config);
            }
            
            // 格式化加载标签库
            //$system_config['template']['taglib_pre_load'] = implode(',', $system_config['taglib_pre_load']);
            
            // 加载Formbuilder扩展类型
            $system_config['form_item_type'] = config('form_item_type');
            
            cache('db_config_data', $system_config, 3600); // 缓存配置
        }
        
        // 移动端强制后台传统视图
        if (request()->isMobile()) {
            $system_config['is_mobile']  = true;
        } else {
            $system_config['is_mobile'] = false;
        }
        
        // 如果是后台并且不是Admin模块则设置默认控制器层为Admin
        if (MODULE_MARK === 'Admin' && request()->module() !== '' && request()->module() !== 'admin') {
            $system_config['url_controller_layer']  = 'admin';
            $system_config['template']['view_path'] =  APP_PATH . request()->module() . '/view/admin/';
        }
        
        // 模版参数配置
        $system_config['view_replace_str']             = config('view_replace_str'); // 先取出配置文件中定义的否则会被覆盖
        
        $system_config['view_replace_str']['__MODULE__']  = BASE_PATH.'/public/' . request()->module();
        $system_config['view_replace_str']['__IMG__']     = BASE_PATH.'/public/' . request()->module() . '/img';
        $system_config['view_replace_str']['__CSS__']     = BASE_PATH.'/public/' . request()->module() . '/css';
        $system_config['view_replace_str']['__JS__']      = BASE_PATH.'/public/' . request()->module() . '/js';
        
        // 获取当前主题的名称
        //$current_theme = model('Theme')->where(array('current' => 1))->order('id asc')->getField('name');
        
        // 默认模块
        $system_config['default_module'] = !empty($system_config['default_module']) ? $system_config['default_module']: config('default_module');
        config($system_config); // 添加配置
        
    }
    
    /**
     * 初始化动态配置信息
     */
    private function initTmconfig()
    {
        
        $list_rows                  = config('list_rows');
        $api_key                    = config('api_key');
        $jwt_key                    = config('jwt_key');

        define('DB_LIST_ROWS'  , empty($list_rows)  ? 10  : $list_rows);
        define('API_KEY'       , empty($api_key)    ? ''  : $api_key);
        define('JWT_KEY'       , empty($jwt_key)    ? ''  : $jwt_key);
    }
    
    /**
     * 注册命名空间
     */
    private function registerNamespace()
    {
        
        // 注册插件根命名空间
        Loader::addNamespace(SYS_ADDON_DIR_NAME, PATH_ADDON);
    }
    
    /**
     * 初始化插件静态资源
     */
    private function initAddonStatic()
    {
        
        $regex = '/[^\s]+\.(jpg|gif|png|bmp|js|css)/i';

        $url = htmlspecialchars(addslashes(Request::instance()->url()));
        
        if(strpos($url, SYS_ADDON_DIR_NAME) !== false && preg_match($regex, $url)) :

            $url = PATH_ADDON . str_replace(SYS_DS_PROS, DS, substr($url, strlen(SYS_DS_PROS . SYS_ADDON_DIR_NAME . SYS_DS_PROS)));
        
            if(strpos($url, '?') !== false) : $url = strstr($url,"?", true); endif;
        
            !is_file($url) && exit('plugin resources do not exist.');

            $ext = pathinfo($url, PATHINFO_EXTENSION);

            $header = 'Content-Type:';

            in_array($ext, ['jpg','gif','png','bmp']) && $header .= "image/jpeg;text/html;";

            switch ($ext)
            {
                case 'css' : $header  .= "text/css;"; break;
                case 'js'  : $header  .= "application/x-javascript;"; break;
                case 'swf' : $header  .= "application/octet-stream;"; break;
            }

            $header .= "charset=utf-8";

            header($header);

            exit(file_get_contents($url));

        endif;
    }
}
