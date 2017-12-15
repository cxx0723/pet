<?
   header("content-type:text/html;charset=utf8");
   //定义应用目录
   define('APP_PATH', './APPS/');
   //开启调试模式
   define("APP_DEBUG", true);
   //关闭自动生成安全文件
   define("BUILD_DIR_SECURE", false);
   //更名框架目录名称，并载入口文件
   require './ThinkPHP/ThinkPHP.php';

?>