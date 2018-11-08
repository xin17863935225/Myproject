<?php
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
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>健身网</title>
		<link rel="stylesheet" href="index/video/dist/plyr.css">
		<link rel="stylesheet" href="css/index.css">
		<script src="index/video/dist/plyr.js"></script>
		<script type="text/javascript" src="index/js/jquery-1.8.3.js"></script>
		<script type="text/javascript" src="index/js/galleria/galleria-1.2.8.min.js"></script>
		<script type="text/javascript">$(document).ready(function(e) {
	Galleria.loadTheme("index/js/galleria/themes/classic/galleria.classic.js");
	$("#i_galleria").galleria({
		autoplay: 1500,
		width: 1423,
		height: 520
	});
});</script>
	</head>

	<body>
		<div class="m">
			<video controls poster="images/videobody.png" loop>
				<source src="index/video/jianshenvideo.mp4" type="video/mp4">
				<!-- <source src="path/to/video.webm" type="video/webm">-->
				<!-- Captions are optional -->
			</video>
			<script>
plyr.setup();
			</script>
		</div>
		<div class="header">
			<div class="head-logo">
				<img id="logo1" src="images\ziLogo2.jpg">
				<?php
				require_once 'ClassLib.php';
				$user = new User();
				$user -> login_signup_index();
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
		</div>
		<div class="shenti">
			<div id="i_galleria">
				<?php
				$images = new Images();
				$images -> index_images_src();
				?>
			</div>
			<div class="subject">
				<div class="title">
					<span class="t1">推荐文章</span>
				</div>
				<div class="neirong">
					<a href="qixie/1.3.php" target="_blank">
						<img id="huachuan" src="qixie/images/TRX划船.jpg">
					</a>
					<div class="wenzi">
						<a href="qixie/1.3.php" target="_blank">
							<span class="top-t1">trx划船—TRX背部肌肉锻炼</span>
							<p>
								TRX悬挂式划船， 不仅是锻炼背部的选择之一，也是一个非常棒的全身性训练动作。 因为这个动作不仅可以练背，而且能锻炼核心肌群，现在这个TRX训练系统是非常受健身爱好者欢迎! 锻炼部位：背部肌群和抗屈曲核心力量。 1、动作过...
							</p>
						</a>
					</div>
				</div>
			</div>
			<div class="subject">
				<div class="title">
					<span class="t1">图库</span>
				</div>
				<div class="neirong">
					<?php
					$images->index_tuku_src();
						?>
				</div>
			</div>
		</div>

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