<?php
define('WWWROOT',__DIR__.DIRECTORY_SEPARATOR);
define("APP_PATH", WWWROOT."../app/");
header("Content-Type:text/html; charset=utf-8");   
require WWWROOT.'../../initphp/initphp.php'; //导入配置文件-必须载入
require APP_PATH . 'conf/comm.conf.php'; //公用配置
InitPHP::init();