<!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>注册</title>
		<link rel="stylesheet" type="text/css" href="css/signup.css">
	</head>

	<body>
		<div>
			<a href="index.php"><img id="img1" src="images/home.jpg" /></a>
			<a href="login.php"><img id="img2" src="images/denglu.jpg" /></a>
		</div>
		<form action="signup_Details.php" method="post">
			<table>

				<caption>用户注册</caption>
				<tr>
					<td width="20%" class="col1">昵称</td>
					<td width="61%"><input id="nickname" name="nickname" type="text" placeholder="请输入昵称" onBlur="change()" /></td>
					<td width="19%" class="col3"><span id="span"></span></td>
				</tr>
				<tr>
					<td class="col1">用户名</td>
					<td><input id="username" name="username" type="text" placeholder="请输入用户名/手机/邮箱" onBlur="change1()" /></td>
					<td class="col3"><span id="span1"></span></td>
				</tr>
				<tr>
					<td class="col1">密码</td>
					<td><input id="password" name="pwd" type="password" placeholder="请输入密码" onBlur="change2()" /></td>
					<td class="col3"><span id="span2"></span></td>
				</tr>
				<tr>
					<td class="col1">确认密码</td>
					<td><input id="cpassword" name="password" type="password" placeholder="请确认密码" onBlur="change3()" /></td>
					<td class="col3"><span id="span3"></span></td>
				</tr>
				<tr>
					<td class="col1">性别</td>
					<td><input type="radio" name="gender" value="M" />男
						<input type="radio" name="gender" value="F" />女
					</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="注册" /></td>
					<td></td>
				</tr>
			</table>
		</form>
		<div  class="footer" style="background-color: #FAEBD7; text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
			<?php
			require_once'ClassLib.php';
			$file = new File();
			$file -> footer();
			$file->Click();
			$user=new User();
			$user->history();
			?>
		</div>

		<script>
			function change() {
				var nname = document.getElementById("nickname").value;
				if(nname.length == 0)
					document.getElementById("span").innerHTML = "用户名不能为空";
				else
					document.getElementById("span").innerHTML = "用户名符合要求";
			}

			function change1() {
				var uname = document.getElementById("username").value;
				var reg = /([a-zA-Z]{1,}[0-9]{1,})|([0-9]{1,}[a-zA-Z]{1,})/;
				if(uname.length == 0)
					document.getElementById("span1").innerHTML = "用户名不能为空";
				else if(!reg.test(uname)) {
					document.getElementById("span1").innerHTML = "格式不对，至少包含一个字母和数字";
				} else
					document.getElementById("span1").innerHTML = "用户名符合要求";
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
			}
		</script>

	</body>

</html>