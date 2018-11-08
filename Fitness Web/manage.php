<?php
//高速缓存
$mcache_validity=5;
$mfnam="textfile/cache_Cache.php";
$mread_form_cache =FALSE;
if(file_exists($mfnam)){
	$mctime =(filemtime($mfnam));
	$mtime_offset =time()-$mctime;
	if($mtime_offset<$mcache_validity*60){
		$mread_form_cache =true;
//		echo file_get_contents($mfnam);
	}else{
		unlink($mfnam);
		$mread_form_cache=true;
		ob_start();
//		echo date("D, d M Y H:i:s");
		$bufferContent = ob_get_contents();
		ob_end_flush();
		$rslt = file_put_contents($mfnam, $bufferContent);
	}
}else{
	file_put_contents($mfnam, "");
}
?>
<?php
/*******
 说明：cookie只能保存字符串 本实例中，需要保存多个URL(历史访问记录)，思路是先将URL数组转为字符串，然后保存，读取时，再循环读取
 *******/

if (isset($_COOKIE['his'])) {
	$urls = $_COOKIE['his'];
	//读取cookie
	$arr = unserialize($urls);
	//字符串转回原来的数组
	$arr[] = $_SERVER['REQUEST_URI'];
	//当前页面url添加到数组中
	$arr = array_unique($arr);
	//除去重复的
	if (count($arr) > 10) {//只保存10条访问记录
		array_shift($arr);
	}
	$urls = serialize($arr);
	//存储为字符串，
	setcookie('his', $urls);
	//保存到cookie当中
} else {
	$url = $_SEVER['REQUEST_URI'];
	//获取当前页面URL
	$arr[] = $url;
	//将当前URL保存到数组中
	$urls = serialize($arr);
	//存储为字符串
	setcookie('his', $urls);
	//保存到cookie当中
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>管理员</title>
		<link rel="stylesheet"  href="css/service&manage.css">
	</head>
	<body>
		<div class="header">
			<div class="head-logo">
				<img id="logo1" src="images\ziLogo2.jpg">
				<?php
				require_once 'ClassLib.php';
				$user = new User();
				$user -> login_signup_others();
				?>
			</div>
			<div class="biaoti">
				<ul class="biaoti1">
					<li>
						<a href="index.php" class="shouye" target="_self">
							首页
						</a>
					</li>
					<li>
						<a href="plan.php" class="plan" target="_self">
							计划
						</a>
					</li>
					<li>
						<a href="qixie.php" class="qixie" target="_self">
							器械
						</a>
					</li>
					<li>
						<a href="xiangmu.php" class="xiangmu" target="_self">
							项目
						</a>
					</li>
					<li>
						<a href="yinshi.php" class="yinshi" target="_self">
							饮食
						</a>
					</li>
					<?php
					$user -> manage();
					?>
				</ul>
			</div>
			<div class="head-logo3">
				<img id="logo3" src= "images/information3.jpg" >
			</div>
		</div>
		<div class="trunk">
			<div>
				<table class="table1">
					<tr>
						<th colspan="3">访问时间</th>
					</tr>
					<tr>
						<td> <?php
						if (empty($_COOKIE['lastlogintime'])) {
							echo '<br>您是第一次访问此网站，欢迎您！';
						} else {
							echo '<br>您上次访问该网站的时间是：' . $_COOKIE['lastlogintime'];
						}
							?> </td>
					</tr>
				</table>
				<table class="table1">
					<tr>
						<th colspan="3">信息修改 </th>
					</tr>
					<tr>
						<form class="form1" action="service&manage/update_password.php" method="post">
							<td width="25%" class="col1">密码
								<input id="password" name="pwd" type="password" placeholder="请输入密码" onBlur="change2()" />
								<span id="span2"></span> 确认密码
								<input id="cpassword" name="password" type="password" placeholder="请确认密码" onBlur="change3()" />
								<span id="span3"></span>
								<input type="submit" name="submit" value="保存" />
							</td>
						</form>
					</tr>
					<tr>
						<form class="form2" action="service&manage/update_nickname.php" method="post">
							<td width="25%" class="col1">昵称
								<input id="nickname" name="nickname" type="text" placeholder="请输入昵称" onBlur="change()" />
								<span id="span"></span>
								<input type="submit" name="submit" value="保存" />
							</td>
						</form>
					</tr>
					<form class="form3" action="service&manage/update_gender.php" method="post">
						<td class="col1">性别
							<input type="radio" name="gender" value="M" />
							男
							<input type="radio" name="gender" value="F" />
							女
							<input type="submit" name="submit" value="保存" />
						</td>
					</form></tr>
				</table>

				<script>function change() {
	var nname = document.getElementById("nickname").value;
	if(nname.length == 0)
		document.getElementById("span").innerHTML = "用户名不能为空";
	else
		document.getElementById("span").innerHTML = "用户名符合要求";
}

function change2() {
	var pword = document.getElementById("password").value;
	var reg = /[a-zA-Z0-9]{2,20}/;
	if(pword.length == 0)
		document.getElementById("span2").innerHTML = "密码不能为空";
	else if(!reg.test(pword)) {
		document.getElementById("span2").innerHTML = "格式不对，必须2-20位,包含字母或数字";
	} else
		document.getElementById("span2").innerHTML = "密码符合要求";
}

function change3() {
	var cword = document.getElementById("cpassword").value;
	var pword = document.getElementById("password").value;
	if(cword.length == 0 && pword.length == 0)
		document.getElementById("span3").innerHTML = "上边文本框没有输入密码";
	else if(pword != cword) {
		document.getElementById("span3").innerHTML = "两次密码不一致，重新输入";
	} else
		document.getElementById("span3").innerHTML = "两次密码一致，正确";
}</script>
			</div>

			<div class="">
				<table class="table1">
					<tr>
						<th colspan="3">文件上传</th>
					</tr>
					<tr>
						<form action="service&manage/upload_index.php" method="post" enctype="multipart/form-data">
							<td class="col1">播放器图片上传：
								<input type="file" name="image" id="image" value="" />
								<input type="submit" name="submit" value="上传" />
							</td>
						</form>
					</tr>
					<tr>
						<form action="service&manage/upload_tuku1.php" method="post" enctype="multipart/form-data">
							<td class="col1">图库一图片上传：
								<input type="file" name="image" id="image" value="" />
								<input type="submit" name="submit" value="上传" />
							</td>
						</form>
					</tr>
					<tr>
						<form action="service&manage/upload_tuku2.php" method="post" enctype="multipart/form-data">
							<td class="col1">图库二图片上传：
								<input type="file" name="image" id="image" value="" />
								<input type="submit" name="submit" value="上传" />
							</td>
						</form>
					</tr>
					<tr>
						<form action="service&manage/upload_tuku3.php" method="post" enctype="multipart/form-data">
							<td class="col1">图库三图片上传：
								<input type="file" name="image" id="image" value="" />
								<input type="submit" name="submit" value="上传" />
							</td>
						</form>
					</tr>
					<tr>
						<form action="service&manage/upload_tuku4.php" method="post" enctype="multipart/form-data">
							<td class="col1">图库四图片上传：
								<input type="file" name="image" id="image" value="" />
								<input type="submit" name="submit" value="上传" />
							</td>
						</form>
					</tr>
				</table>
			</div>
			<div id="content">
				<?php
				$file = new File();
				$file -> Clicknum();
				?>
			</div>
			<div id="content">
				<?php
				$user -> table1();
				?>
			</div>
			<div id="content">
				<table class="table1">
					<tr>
						<th>图片数据库</th>
					</tr>
					<tr>
						<form class="form1" action="" method="get">
							<td width="25%" class="col1">数据库选择
								<select name="condition1" class="condition1">
									<option value="opt1">请选择数据库</option>
									<option value="index">index</option>
									<option value="tuku1">tuku1</option>
									<option value="tuku2">tuku2</option>
									<option value="tuku3">tuku3</option>
									<option value="tuku4">tuku4</option>
								</select>
								数据查询条件
								<input  name="condition2" type="text" placeholder="请输入查询条件"/>
								<input type="submit" name="submit" value="查询" />
							</td>
						</form>
					</tr>
				</table>
				<?php
				if (isset($_GET['condition1'])&&isset($_GET['condition2'])){
					$condition1 = $_GET['condition1'];
					$condition2 = $_GET['condition2'];
					switch ($condition1) {
						case 'tuku1' :
							if (empty($_GET['condition2'])){
								$user -> table3();
							}else{
								include 'conn.php';
								$sql = "select id,src from images_tuku1 where $condition2";
								$res = mysqli_query($con, $sql);
								echo '<table class="table1">';
								echo '<tr><th>编号</th><th>图库一图片路径</th></tr>';
								foreach ($res as $rows) {
								echo '<tr><td>' . $rows['id'] . '</td><td>' . $rows['src'] . '</td></tr>';
								}
								echo '</table>';
							}
							break;
						case 'tuku2' :
							if (empty($_GET['condition2'])){
								$user -> table4();
							}else{
								include 'conn.php';
								$sql = "select id,src from images_tuku2 where $condition2";
								$res = mysqli_query($con, $sql);
								echo '<table class="table1">';
								echo '<tr><th>编号</th><th>图库二图片路径</th></tr>';
								foreach ($res as $rows) {
								echo '<tr><td>' . $rows['id'] . '</td><td>' . $rows['src'] . '</td></tr>';
								}
								echo '</table>';
							}
							break;
						case 'tuku3' :
							if (empty($_GET['condition2'])){
								$user -> table5();
							}else{
								include 'conn.php';
								$sql = "select id,src from images_tuku3 where $condition2";
								$res = mysqli_query($con, $sql);
								echo '<table class="table1">';
								echo '<tr><th>编号</th><th>图库三图片路径</th></tr>';
								foreach ($res as $rows) {
								echo '<tr><td>' . $rows['id'] . '</td><td>' . $rows['src'] . '</td></tr>';
								}
								echo '</table>';
							}
							break;
						case 'tuku4' :
							if (empty($_GET['condition2'])){
								$user -> table6();
							}else{
								include 'conn.php';
								$sql = "select id,src from images_tuku4 where $condition2";
								$res = mysqli_query($con, $sql);
								echo '<table class="table1">';
								echo '<tr><th>编号</th><th>图库四图片路径</th></tr>';
								foreach ($res as $rows) {
								echo '<tr><td>' . $rows['id'] . '</td><td>' . $rows['src'] . '</td></tr>';
								}
								echo '</table>';
							}
							break;
						case 'index' :
							if (empty($_GET['condition2'])){
								$user -> table2();
							}else{
								include 'conn.php';
								$sql = "select id,index_images_src,index_tuku_src from images_index where $condition2";
								$res = mysqli_query($con, $sql);
								echo '<table class="table1">';
								echo '<tr><th>编号</th><th>播放器图片路径</th><th>图库背景图片路径</th></tr>';
								foreach ($res as $rows) {
								echo '<tr><td>' . $rows['id'] . '</td><td>' . $rows['index_images_src'] . '</td><td>' . $rows['index_tuku_src'] . '</td></tr>';
								}
								echo '</table>';
							}
							break;
						default :
							echo '<table class="table1"><tr><td>查询结果不存在</td></tr>';
							break;
					}
				}else{
					echo '';
				}
				?>
				<table class="table1">
					<tr>
						<th>警告信息</th>
					</tr>
					<tr>
						<td> <?php
						$abnormity = file_get_contents('textfile/abnormity.txt');
						echo $abnormity;
					?>
						</td>
					</tr>
				</table>
				<table class="table1">
					<tr>
						<th>本地浏览记录</th>
					</tr>
					<tr>
						<td> <?php
						foreach ($arr as $v) {
							echo $v . '<br>';
						}
					?>
						</td>
					</tr>
				</table>
			</div>

			<div class="">
				<table class="table1">
					<tr>
						<th>帮助</th>
					</tr>
					<tr>
						<td>
						<?php
							$help = file_get_contents('textfile/manage_readme.txt');
							echo $help;
						?>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div>
			<?php
			if (!isset($_SESSION['MM_Username']) || !preg_match("/admin...OL/", $_SESSION['MM_Username'])) {
				//未登录就不会被设置session，就会跳回登录页。否则，继续向下执行html代码。
				echo "<script>alert('你未登录或者你不是管理员！！！');
			window.location.href = 'login.php';
			</script>";
				//  session_destroy();
			}
			?>
		</div>

		<div  class="footer" style="background-color: #FAEBD7; text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
			<?php
			$file -> footer();
			?>
		</div>
	</body>
</html>