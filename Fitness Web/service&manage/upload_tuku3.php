<?php
$filename = $_FILES["image"]["name"];
$pathname = $_FILES["image"]["tmp_name"];
$pathupload = "../index/images/tuku3/".$filename;
if (move_uploaded_file($_FILES["image"]["tmp_name"], $pathupload)) {
	include '../conn.php';
	//连接数据库
	$sql_insert = "insert into images_tuku3 (src) values('images/tuku3/$filename')";
	$res_insert = mysqli_query($con, $sql_insert);
	//$num_insert = mysql_num_rows($res_insert);
	if ($res_insert) {
		echo "<script>alert('上传成功！');history.go(-1);</script>";
	} else {
		echo "<script>alert('上传失败！');history.go(-1);</script>";
	}
}else{
	echo "<script>alert('系统繁忙，请稍等！');history.go(-1);</script>";
}
?>