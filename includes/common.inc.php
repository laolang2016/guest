<?php
if( !defined('IN_TG')){
    exit('Access Defined!');
}

header("Content-type: text/html; charset=utf-8");

//转换硬路常量
define('ROOT_PATH', substr(dirname(__FILE__), 0,-8));


//拒绝PHP低版本
if (PHP_VERSION < '4.1.0') {
    exit('Version is to Low!');
}

//引入核心函数库
require ROOT_PATH.'includes/gloab.func.php'
?>
