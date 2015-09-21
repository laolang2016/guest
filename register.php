<?php
// 修改错误提示级别
error_reporting(E_ALL & ~ E_NOTICE);

session_start();

// 对首页授权调用includes下的文件
define('IN_TG', true);

// 本页常量
define('SCRIPT', 'register');

// 引入公共文件
require dirname(__FILE__) . '/includes/common.inc.php';
// echo sayHello();

if ('register' == $_GET['action']) {
    if (! ($_POST['yzm'] == $_SESSION['code'])) {
        _alert_back('验证码不正确！');
    }
    
    //引入验证文件
    include ROOT_PATH.'includes/register.func.php';
    
    // 创建一个空数组，用来存放提交过来的合法数据
    $_clean = array();
    $_clean['username'] = _check_username($_POST['username'],2,20);
    $_clean['password'] = $_POST['password'];
    print_r($_clean);
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>多用户留言系统--注册</title>
<script type="text/javascript" src="js/face.js"></script>
<?php
require ROOT_PATH . 'includes/title.inc.php';
?>
</head>

<body>
        <?php
        require ROOT_PATH . 'includes/header.inc.php';
        ?>

    </body>

<div id="register">
	<h2>注册</h2>
	<form method="post" name="register"
		action="register.php?action=register">
		<dl>
			<dt>请认真填写以下内容</dt>
			<dd>
				用 户 名 ： <input type="text" name="username" class="text" />(*必填，至少两位)
			</dd>
			<dd>
				密 码：<input type="password" name="userpwd" class="text" />(*必填，至少六位)
			</dd>
			<dd>
				确认密码：<input type="password" name="notuserpwd" class="text" />(*必填，同上)
			</dd>
			<dd>
				密码提示：<input type="text" name="pwdt" class="text" />(*必填，至少两位)
			</dd>
			<dd>
				密码回答：<input type="text" name="pwdd" class="text" />(*必填，至少两位)
			</dd>
			<dd>
				性 别：<input type="radio" name="sex" value="男" checked="checked" />男 <input
					type="radio" name="sex" value="女" />女
			</dd>
			<dd class="face">
				<input type="hidden" name="face" value="face/m01.gif" /><img
					src="face/m01.gif" alt="头像选择" id="faceimg" />
			</dd>
			<dd>
				电子邮件：<input type="text" name="email" class="text" />
			</dd>
			<dd>
				Q Q ：<input type="text" name="qq" class="text" />
			</dd>
			<dd>
				个人主页：<input type="text" name="personpage" value="http://"
					class="text" />
			</dd>
			<dd>
				验 证 码： <input type="text" name="yzm" class="text yzm" /><img
					id="code" src="code.php" />
			</dd>
			<dd>
				<input type="submit" value="注册" class="submit" />
			</dd>
		</dl>
	</form>

</div>

    <?php
    require ROOT_PATH . 'includes/footer.inc.php';
    ?>
</html>