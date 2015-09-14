<?php
// 对首页授权调用includes下的文件
define('IN_TG', true);

//表明本页
define('SCRIPT', 'face');
// 引入公共文件
require dirname(__FILE__) . '/includes/common.inc.php';
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>多用户留言系统--头像选择</title>
<?php
    require ROOT_PATH.'includes/title.inc.php';
?>
</head>

    <body>
        <div id="face">
            <h3>选择头像</h3>
            <dl>
                <?php foreach(range(1, 9) as $number){?>
                <dd><img alt="头像<?php echo $number?>" src="face/m0<?php echo $number?>.gif"></dd>
                <?php }?>
                
            </dl>
            
            <dl>
                <?php foreach(range(10, 64) as $number){?>
                <dd><img alt="头像<?php echo $number?>" src="face/m<?php echo $number?>.gif"></dd>
                <?php }?>
                
            </dl>
        </div>
        
        
    </body>

</html>