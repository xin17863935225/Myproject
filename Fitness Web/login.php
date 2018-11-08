<?php
if (isset($_COOKIE['username']) or isset($_COOKIE['password'])) {
	if (isset($_COOKIE['username']) and isset($_COOKIE['pwd'])) {
		// 读取COOKIE的用户名和密码的值即可
		$CKUNAME = $_COOKIE['username'];
		$CKPWD = $_COOKIE['pwd'];
	} else {
		$CKUNAME = $_COOKIE['username'];
		$CKPWD = '';
	}
} else {
	$CKUNAME = '';
	$CKPWD = '';
}
?>
<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>登录</title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<script src="js/denglu.js"></script>
	</head>

	<body>
		<div>
			<a href="index.php">
				<img id="img1" src="images/home.jpg" />
			</a>
			<a href="signup.php">
				<img id="img2" src="images/zhuce.jpg" />
			</a>
		</div>
		<form action="login_Details.php" method="post">
			<table border="0">
				<caption>
					用户登录
				</caption>
				<tr>
					<td width="20%" class="col1">用户名</td>
					<td width="61%">
						<input id="username" name="username" type="text" value="<?php echo $CKUNAME; ?>" placeholder="请输入用户名/手机/邮箱" onBlur="change1()" />
					</td>
					<td width="19%" class="col3"><span id="span1"></span></td>
				</tr>
				<tr>
					<td class="col1">密码</td>
					<td>
						<input id="password" name="pwd" type="password" value="<?php echo $CKPWD; ?>" placeholder="请输入密码" onBlur="change2()" />
					</td>
					<td class="col3"><span id="span2"></span></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input id="remember" type="checkbox" name="remember"
						<?php
						if ($CKPWD <> '') {
							echo 'checked="checked"';
						} else {
							echo '';
						}
						?> />
						<label for="cb2">记住密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="signup.php">
							现在注册！
						</a></label></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="登录" />
					</td>
					<td></td>
				</tr>
			</table>
		</form>
		<div  class="footer" style="background-color: #FAEBD7; text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
			<?php
			require_once 'ClassLib.php';
			$file = new File();
			$file -> footer();
			$file->Click();
			$user=new User();
			$user->history();
			?>
		</div>
	</body>

</html>