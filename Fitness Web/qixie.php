<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>器械-健身网</title>
		<link rel="stylesheet"  href="css/qixie.css">
		<link rel="stylesheet"  href="qixie/css/qixie.css">
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
				<img id="logo3" src= "images/information3.jpg" >
			</div>
		</div>
		<div class="training-tool-main commom-width">
			<div class="training-tool-list">
				<h5>分类器械</h5>
				<div class="free-tool">
					<h6>自由器械</h6>
					<ul>

						<li>
							哑铃
						</li>
						<li >
							杠铃
						</li>
						<li>
							壶铃
						</li>
						<li>
							弹力球
						</li>
						<li>
							哑铃
						</li>
						<li>
							TRX绳
						</li>
						<li>
							战绳
						</li>
						<li>
							药球
						</li>
						<li>
							瑞士球
						</li>
						<li>
							波速球
						</li>
						<li>
							泡沫轴
						</li>

					</ul>

				</div>

				<div class="fixed-tool">
					<h6>固定器械</h6>

					<ul>
						<li>
							龙门架
						</li>
						<li>
							史密斯机
						</li>
						<li>
							推胸机
						</li>
						<li>
							悍马机
						</li>
						<li>
							夹胸器
						</li>

						<li>
							划船机
						</li>
						<li>
							下拉机
						</li>
						<li>
							推肩器
						</li>
						<li>
							倒蹬机
						</li>
						<li>
							哈克机
						</li>
						<li>
							腿弯举机
						</li>
						<li>
							腿屈伸机
						</li>
						<li>
							提踵机
						</li>
						<li>
							单杠
						</li>
						<li>
							双杠
						</li>
						<li>
							仰卧板
						</li>
						<li>
							罗马椅
						</li>
						<li>
							牧师凳
						</li>
						<li>
							有氧器械
						</li>
					</ul>
				</div>

			</div>
		</div>

		<hr>
		<div class="carousel-1">
			<marquee direction=down behavior=scroll loop=-1 scrollamount=5 scrolldelay=10  bgcolor=#ffffff height=1250 width=400 hspace=20 vspace=10 onmouseover=this.stop() onmouseout=this.start()>
				<img  src="qixie/qixiephoto/哑铃.jpg" width="400" height="300" />
				<img  src="qixie/qixiephoto/波速球.jpg"width="400" height="300" />
				<img  src="qixie/qixiephoto/瑞士球.jpg"width="400" height="300" />
				<img  src="qixie/qixiephoto/药球.jpg"width="400" height="300" />
				<img  src="qixie/qixiephoto/战绳.jpg"width="400" height="300" />
				<img  src="qixie/qixiephoto/TRX绳.jpg"width="400" height="300" />
				<img  src="qixie/qixiephoto/弹力绳.jpg"width="400" height="300" />
				<img  src="qixie/qixiephoto/壶铃.jpg"width="400" height="300" />
				<img  src="qixie/qixiephoto/杠铃.jpg"width="400" height="300" />
				<img  src="qixie/qixiephoto/泡沫轴.jpg"width="400" height="300" />
			</marquee>
		</div>

		<div class="article-list">
			<a target="_blank"   href="qixie/1.1.php">
				<img   src="qixie/images/负重耸肩.gif" class="article-list-pic">
				<div class="article-list-detaile">
					<h2 class="article-list-title">负重耸肩：杠铃负重耸肩动作图解教程</h2>
					<p class="article-list-summary">
						负重耸肩：杠铃负重耸肩动作图解教程 健美爱好者无不希翼着能够拥有足以撑起衬衫的、强健的肌肉块。这不仅需要有发达的胸...
					</p>

				</div>
			</a>

		</div>
		<div class="article-list">
			<a target="_blank"  href="qixie/1.2.php">
				<img   src="qixie/images/健身利器划船机.jpg" class="article-list-pic">
				<div class="article-list-detaile">
					<h2 class="article-list-title">“健身利器”划船机的好处以及使用方法</h2>
					<p class="article-list-summary">
						提到划船可能不会陌生，尽管没亲自上阵操作过，也看过一个个肌肉男挥舞着船桨。划船是一项可以锻炼到全身的有氧运动，可是遇到坏天气划船选手也不能天天在船上训练。 所以，为因应器材及场地的不便，解决选手的练习问题，也让...
					</p>

				</div>
			</a>
		</div>
		<div class="article-list">
			<a target="_blank" href="qixie/1.3.php">
				<img  src="qixie/images/TRX划船.jpg" class="article-list-pic">
				<div class="article-list-detaile">
					<h2 class="article-list-title">trx划船—TRX背部肌肉锻炼</h2>
					<p class="article-list-summary">
						TRX悬挂式划船， 不仅是锻炼背部的选择之一，也是一个非常棒的全身性训练动作。 因为这个动作不仅可以练背，而且能锻炼核心肌群，现在这个TRX训练系统是非常受健身爱好者欢迎! 锻炼部位：背部肌群和抗屈曲核心力量。 1、动作过...
					</p>

				</div>
			</a>
		</div>
		<div class="article-list">
			<a target="_blank" href="qixie/1.4.php">
				<img  src="qixie/images/7ef24f3a6b89cf56.jpg" class="article-list-pic">
				<div class="article-list-detaile">
					<h2 class="article-list-title">壶铃和哑铃哪种好 壶铃的优势细节</h2>
					<p class="article-list-summary">
						因为形状与哑铃不同，所以壶铃在爆发力训练（抓举，挺举，摆）和耐力有氧训练（摆，抓举）方面有更好的效果。壶铃或者哑铃，我们不需要争论谁更好；这两种训练器械都很好，只是针对不同训练有不同的优势 。 壶铃训练的优势： 1...
					</p>
				</div>

		</div>
		<div class="article-list">
			<a target="_blank"  href="qixie/1.5.php">
				<img  src="qixie/images/无氧器材.jpg" class="article-list-pic">
				<div class="article-list-detaile">
					<h2 class="article-list-title">健身房常见无氧器械介绍</h2>
					<p class="article-list-summary">
						健身房常见无氧器械介绍 1、杠铃 杠铃有标准杠铃和非标准杠铃两种：标准杠铃由横杠、杠铃片和卡箍三部分组成。比赛用的是国际标准杠铃，按规定横杠总长度不超过入20米，直径0．28米，两个内卡箍之间的距离为1．31米，最大的杠...
					</p>
				</div>
			</a>
		</div>
		<div class="article-list">
			<a target="_blank" href="qixie/1.6.php">
				<img src="qixie/images/哑铃健身三个误区.jpg" class="article-list-pic">
				<div class="article-list-detaile">
					<h2 class="article-list-title">哑铃健身的三个误区,你知道吗</h2>
					<p class="article-list-summary">
						众所周知，哑铃是一种简单、经济的健身器材，但是很少有人深究其健身的原理。现在大众对哑铃健身作用的认识仍有不少误区，哑铃的健身功效，远远没有得到充分的发挥。 误区一：用哑铃锻炼，既可增加力量，又可健美形体 科学地使...
					</p>
				</div>
			</a>
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