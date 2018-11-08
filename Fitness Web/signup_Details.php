<?php
$nick = $_POST["nickname"];
$user = $_POST["username"];
$pwd = $_POST["pwd"];
$password = $_POST["password"];
if ($nick == "" || $user == "" || $pwd == "" || $password == "" || empty($_POST["gender"])) {
	echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
	$file = fopen("textfile/abnormity.txt", "a+");
	echo fwrite($file, "某用户注册时提示：注册信息不能为空！<br>\n");
} else {
	if ($pwd == $password) {
		include 'conn.php';
		//连接数据库
		$sql = "select username from user where username = '$_POST[username]'";
		//SQL语句
		$result = mysqli_query($con, $sql);
		$num = mysqli_num_rows($result);
		//统计执行结果影响的行数
		if ($num)//如果已经存在该用户
		{
			echo "<script>alert('用户名已存在'); history.go(-1);</script>";
		} else//不存在当前注册用户名称
		{
			$sql_insert = "insert into user (nickname,username,password,gender) values('$_POST[nickname]','$_POST[username]',md5('$_POST[pwd]'),'$_POST[gender]')";
			$res_insert = mysqli_query($con, $sql_insert);
			//$num_insert = mysql_num_rows($res_insert);
			if ($res_insert) {
				echo "<script>alert('注册成功！');parent.location.href='login.php';</script>";
				$file1 = fopen("textfile/action.txt", "a+");
				echo fwrite($file1, "某用户注册成功！<br>\n");
			} else {
				echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
				$file = fopen("textfile/abnormity.txt", "a+");
				echo fwrite($file, "某用户注册时提示：注册失败！<br>\n");
			}
		}
	} else {
		echo "<script>alert('密码不一致！'); history.go(-1);</script>";
		$file = fopen("textfile/abnormity.txt", "a+");
		echo fwrite($file, "某用户注册时提示：密码不一致！<br>\n");
	}
}
?>  