<?php
// 对首页授权调用includes下的文件
define('IN_TG', true);

// 引入公共文件
require dirname(__FILE__) . '/includes/common.inc.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>多用户留言系统--首页</title>
<link rel="stylesheet" type="text/css" href="style/basic/basic.css">
<link rel="stylesheet" type="text/css" href="style/basic/index.css">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>



<body>
    <?php
    require ROOT_PATH . 'includes/header.inc.php';
    ?>
	<div id="list">
		<h2>帖子列表</h2>
	</div>
	<div id="user">
		<h2>新进用户</h2>
	</div>
	<div id="pics">
		<h2>最新图片</h2>
	</div>

	<?php
require ROOT_PATH . 'includes/footer.inc.php';
?>
</body>

</html>