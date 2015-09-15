<?php
//修改错误提示级别
error_reporting(E_ALL & ~E_NOTICE);

//开启session
session_start();

// 对首页授权调用includes下的文件
define('IN_TG', true);

// 引入公共文件
require dirname(__FILE__) . '/includes/common.inc.php';

_code();

?>