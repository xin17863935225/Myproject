<?php
session_start();
$nick = $_POST["nickname"];
if ($nick == "") {
	echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
} else {
	if (isset($_SESSION['MM_Username'])) {
		include '../conn.php';
		//连接数据库
		$sql = "select username from user where username = '$_SESSION[MM_Username]'";
		//SQL语句
		$result = mysqli_query($con, $sql);
		$rows = mysqli_fetch_array($result);
		//统计执行结果影响的行数
		if ($rows)//如果已经存在该用户
		{
			$sql_insert = "update user set nickname='$_POST[nickname]' where username = '$_SESSION[MM_Username]'";
			$res_insert = mysqli_query($con, $sql_insert);
			//$num_insert = mysql_num_rows($res_insert);
			if ($res_insert) {
				echo "<script>alert('修改成功！');history.go(-1);</script>";
			} else {
				echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
			}
		} else {
			echo "<script>alert('没有用户登录！'); history.go(-1);</script>";
		}
	} else {
		echo "<script>alert('没有用户登录！'); history.go(-1);</script>";
	}
}
?>  