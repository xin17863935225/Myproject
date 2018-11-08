<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>项目-健身网</title>
		<link rel="stylesheet"  href="css/xiangmu.css">
	</head>

	<body>
		<div class="header">
			<div class="head-logo">
				<img id="logo1" src="images\ziLogo2.jpg">
					<?php
					require_once'ClassLib.php';
					$user= new User();
					$user->login_signup_others();
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
					$user->manage();
					?>
				</ul>
			</div>
			<div class="head-logo3">
				<img id="logo3" src= "images/information2.jpg" >
			</div>
		</div>
		<iframe src="xiangmu/till框架/6yue19ri.html" width="100%" height="1300">
		<div  class="footer" style="background-color: #FAEBD7; text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
			<?php
			$file = new File();
			$file -> footer();
			$file->Click();
			$user->history();
			?>
		</div>
	</body>
</html>
