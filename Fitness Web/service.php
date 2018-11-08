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
		<title>服务-健身网</title>
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
						<th colspan="3"> 信息修改 </th>
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
	var reg = /[a-zA-Z0-9]{3,20}/;
	if(pword.length == 0)
		document.getElementById("span2").innerHTML = "密码不能为空";
	else if(!reg.test(pword)) {
		document.getElementById("span2").innerHTML = "格式不对，必须3-20位,包含字母或数字";
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
						<th colspan="3">资源下载</th>
					</tr>
				</table>
				<?php
				$file = new File();
				$file -> download();
				?>
			</div>
			<div class="">
				<table class="table1">
					<tr>
						<th colspan="3">本地浏览记录</th>
					</tr>
					<tr>
						<td> <?php
						foreach ($arr as $v) {
							echo $v . '<br>';
						}
							?> </td>
					</tr>
				</table>
			</div>
			<div class="">
				<table class="table1">
					<tr>
						<th colspan="3">帮助</th>
					</tr>
				</table>
			</div>
		</div>
		<div  class="footer" style="background-color: #FAEBD7; text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
			<?php
			$file = new File();
			$file -> footer();
			$file -> Click();
			?>
		</div>
	</body>
</html>