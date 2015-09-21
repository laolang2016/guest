<?php


function _alert_back($_info) {
    echo "<script type='text/javascript'>alert('".$_info."');history.back();</script>";
    exit();
}

/**
 * 核心函数库
 */
function sayHello()
{
    return 'Hello World!小代码！';
}

/**
 * _code 验证码函数
 * @access public
 * @param int $_img_width 验证码图片宽度             
 * @param int $_img_height 验证码图片高度            
 * @param int $_rnd_code 验证码字符个数            
 * @param bool $_img_border_flag 验证码是否有边框            
 * @return void 这个函数运行后产生一个验证码
 */
function _code($_img_width = 75, $_img_height = 25, $_rnd_code = 4, $_img_border_flag = false)
{
    
    // 创建随机码
    for ($i = 0; $i < $_rnd_code; $i ++) {
        $_nmsg .= dechex(mt_rand(0, 15));
    }
    
    // 保存到session中
    $_SESSION['code'] = $_nmsg;
    // echo $_SESSION['code'];
    
    // 创建图片
    $_img = imagecreatetruecolor($_img_width, $_img_height);
    
    // 图片颜色
    $_img_white_back = imagecolorallocate($_img, 255, 255, 255);
    
    // 将颜色填充到图片
    imagefill($_img, 0, 0, $_img_white_back);
    
    if ($_img_border_flag) {
        // 黑色边框
        $_img_border = imagecolorallocate($_img, 0, 0, 200);
        
        // 为图片添加边框
        imagerectangle($_img, 0, 0, $_img_width - 1, $_img_height - 1, $_img_border);
    }
    
    // 随机画出6个线条
    for ($i = 0; $i < 6; $i ++) {
        $_rmd_color = imagecolorallocate($_img, mt_rand(200, 255), mt_rand(200, 255), mt_rand(200, 255));
        imageline($_img, mt_rand(0, $_img_width), mt_rand(0, $_img_height), mt_rand(0, $_img_width), mt_rand(0, $_img_height), $_rmd_color);
    }
    
    // 随机雪花
    for ($i = 0; $i < 100; $i ++) {
        $_rnd_color = imagecolorallocate($_img, mt_rand(200, 255), mt_rand(200, 255), mt_rand(200, 255));
        imagestring($_img, 1, mt_rand(1, $_img_width), mt_rand(1, $_img_height), '*', $_rnd_color);
    }
    
    // 输机验证码
    for ($i = 0; $i < strlen($_SESSION['code']); $i ++) {
        $_rnd_color = imagecolorallocate($_img, mt_rand(0, 100), mt_rand(0, 150), mt_rand(0, 200));
        imagestring($_img, 5, $i * $_img_width / $_rnd_code + mt_rand(1, 10), mt_rand(1, $_img_height / 2), $_SESSION['code'][$i], $_rnd_color);
    }
    
    // 输出图片
    // ob_clean();
    header("Content-type:image/png");
    imagepng($_img);
    
    // 销毁图片
    imagedestroy($_img);
}