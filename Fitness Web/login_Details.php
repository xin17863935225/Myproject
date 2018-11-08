<?php
session_start();
$user = $_POST["username"];
$pwd = $_POST["pwd"];
if ($user == "" || $pwd == "") {
	echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
	$file = fopen("textfile/abnormity.txt", "a+");
	echo fwrite($file, "某用户登录时提示：用户名或密码不能为空！<br>\n");
} else {
	include 'conn.php';
	//连接数据库
	$sql = "select username,password from user where username = '$_POST[username]' and password = md5('$_POST[pwd]')";
	$result = mysqli_query($con, $sql);
	$num = mysqli_num_rows($result);
	if ($num) {
		//		$row = mysqli_fetch_array($result);
		//		//将数据以索引方式储存在数组中
		//		echo $row[0];
		setcookie('lastlogintime', date('Y-m-d h:i:s'), time() + 3600 * 24 * 365, '/');
		if (isset($_POST['remember']) && !empty($_POST['remember'])) {
			setcookie('username', $user, time() + (3600 * 24 * 365));
			setcookie('pwd', $pwd, time() + (3600 * 24 * 365));
		} else {
			setcookie('username', $user, time() + (3600 * 24 * 365));
			setcookie('pwd', $pwd, time() - (3600 * 24 * 365));
		}
		$_SESSION['MM_Username'] = $user;
		echo "<script>alert('登陆成功！');parent.location.href='index.php';</script>";
		$file1 = fopen("textfile/action.txt", "a+");
		echo fwrite($file1, $_POST["username"]."已登录！<br>\n");
	} else {
		echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
		$file = fopen("textfile/abnormity.txt", "a+");
		echo fwrite($file, $_POST["username"]."登录时提示：用户名或密码不正确！<br>\n");
	}
}
?>