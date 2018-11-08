<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>饮食-健身网</title>
		<script src="yinshi/yinshi/js/jquery-2.2.3.min.js"></script>
		<link rel="stylesheet"  href="css/yinshi.css">
	</head>
	<body>
		<div style="width:100%;height:100%;">

			<!--顶部名字-->
			<div style="width:100%;height:30%;">
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
						<img id="logo3" src= "images/information4.jpg" >
					</div>
				</div>
			</div>
			<div class="main" style="width:80.1%;height:10%;left:10%;top:42.6%;background-color: ">
				<table border="0" id="Main_table1">
					<tr>
						<td style="background-color: #FF8C00">健身食谱</td>
						<td>蛋白粉</td>
						<td>增肌粉</td>
						<td>肌酸</td>
						<td>维生素</td>
					</tr>
				</table>
			</div>
			<!--健身食谱-->
			<div class="main" id="Main_div1" style="width:70%;height:100%;left:15%;top:50%;background-color:">
				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:10%;">
					<img src="yinshi/图片/1.jpg" style="width:30%;height:100%;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/Fitness diet/1.1.php" target="_blank">
						增肌、减脂、加餐，健身吃货改怎么解决吃？
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/Fitness diet/1.1.php" target="_blank">
							健身期在饮食方面要十分注意，这不能吃那不能吃。难道吃货就不能健身了？健身的就不是吃货吗？ 这里小编介绍几种健身 代餐食品及健身零食。适合 懒人、学生党、上班族、增肌加餐减脂者、代餐、不想自己做健身餐的健身者们。 可...
						</a>
					</p>
				</div>

				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:50%;">
					<img src="yinshi/图片/2.jpg" style="width:30%;height:100%;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/Fitness diet/1.21.php" target="_blank">
						鸡胸肉的花样吃法，吃出完美身材！
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/Fitness diet/1.21.php" target="_blank">
							鸡胸肉是健身达人们最喜欢的食物之一了，今天给大家推荐几道关于鸡胸肉的美食。 烤鸡肉裹芦笋 【原料】 2、3盎司鸡胸肉切片 12根芦笋 2茶勺烧烤酱 (低盐、低脂) 调味品：小茴香，辣椒，大蒜，辣椒等 1杯切块甜椒（或改成糙米）...
						</a>
					</p>
				</div>

				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:90%;">
					<img src="yinshi/图片/1.gif" style="width:30%;height:100%;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/Fitness diet/1.31.php" target="_blank">
						中国健身第一人吴龙！分享其健身饮食计划！
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/Fitness diet/1.31.php" target="_blank">
							作为中国的骄傲，在同一个赛场上他又一次刷新了中国健美健身选手在国际赛场的记录，他就是中国第一个获得IFBB职业卡的获得者--吴龙！ 吴龙是一个来自安徽淮南的帅小伙，他有着183cm的身高和80kg的体重。他在去年美国IFBB Pro职...
						</a>
					</p>
					<div style="background-color: #FAEBD7; text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
						<p>
							Copyright © 2017 健身 *************** 版权所有
						</p>
						<p>
							出品：青岛大学开源6班14组
						</p>
					</div>
				</div>

			</div>

			<!--蛋白粉-->
			<div class="main" id="Main_div2" style="width:70%;height:100%;left:15%;top:50%;background-color:;display: none;">
				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:10%;">
					<img src="yinshi/图片/26.jpg" style="width:30%;height:100%;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/Albumen powder/2.1.php" target="_blank">
						蛋白粉是如何制造的？解密蛋白粉生产过程
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/Albumen powder/2.1.php" target="_blank">
							你知道蛋白粉是怎么做出来的吗？ 相信对于广大健身爱好者来说，蛋白粉是我们最耳熟能详的运动营养品！ 关于蛋白粉，相信大家都有了解一些，但是在网络上还是有很多关于蛋白粉的各种流言蜚语 吃了蛋白粉就会长肌肉？蛋白粉是激...
						</a>
					</p>
				</div>

				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:50%;">
					<img src="yinshi/图片/27.jpg" style="width:30%;height:100%;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/Albumen powder/2.2.php" target="_blank">
						健身蛋白质：每天吃多少？
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/Albumen powder/2.2.php" target="_blank">
							健身蛋白质：每天吃多少？ 每天该吃多少蛋白质？这是大多数健身爱好者的疑问！ 充足的蛋白质能够提供肌肉生长与修复所需的原料，尤其是对於健身与大量运动者而言，每天补充蛋白质来修复受伤的肌肉组织，才能维持健美的身型并远...
						</a>
					</p>
				</div>

				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:90%;">
					<img src="yinshi/图片/28.jpg" style="width:30%;height:100%;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/Albumen powder/2.3.php" target="_blank">
						健身营养品：酪蛋白为你续航
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/Albumen powder/2.3.php" target="_blank">
							酪蛋白：提升你的续航力 有一句话是这样说的：无蛋白，不肌肉我们都是健身增肌蛋白质是十分重要的！ 通常我们所需的蛋白质来源于我们的食物中（瘦肉，奶蛋，鱼虾类）！但是对于需要大量蛋白质的健身者（健美爱好者）来说！要吃...
						</a>
					</p>
					<div style="background-color: #FAEBD7; text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
						<p>
							Copyright © 2017 健身 *************** 版权所有
						</p>
						<p>
							出品：青岛大学开源6班14组
						</p>
					</div>
				</div>

			</div>

			<!--增肌粉-->
			<div class="main" id="Main_div3" style="width:70%;height:100%;left:15%;top:50%;background-color:;display: none;">
				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:10%;">
					<img src="yinshi/图片/36.jpg" style="width:30%;height:100%;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/protein powder/3.1.php" target="_blank">
						增肌粉蛋白质含量解密
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/protein powder/3.1.php" target="_blank">
							增肌粉蛋白质含量 很多人知道了增肌粉的作用，知道增肌粉对于健身的重要意义，但是却还是有很多方面不了解 今天我们就一起来揭开他们的面纱。 什么是增肌粉？ 增肌粉也是一种高热量运动营养补剂，增肌粉是通过科学方法浓缩的提...
						</a>
					</p>
				</div>

				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:50%;">
					<img src="yinshi/图片/37.jpg" style="width:30%;height:100%;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/protein powder/3.2.php" target="_blank">
						康比特健肌粉二代大解密
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/protein powder/3.2.php" target="_blank">
							康比特健肌粉二代 康比特增肌粉是康比特公司重点推出的一款增肌粉，目前已经更新为健肌粉二代。 那么这款增肌粉的效果如何，我们先来看他的营养成分。 主要成份为乳清浓缩蛋白、低聚麦芽糖、葡萄糖、抗性糊精、山药粉、牛磺酸...
						</a>
					</p>
				</div>

				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:90%;">
					<img src="yinshi/图片/38.jpg" style="width:30%;height:100%;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/protein powder/3.31.php" target="_blank">
						该选增肌粉还是蛋白粉
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/protein powder/3.31.php" target="_blank">
							这是我们经常收到的顾客问题：该选增肌粉还是蛋白质奶粉？ 增肌粉也叫做增重粉 首先，两种补充品的最主要分别，是增肌粉的总体热量比蛋白质奶粉高。而成分方面，增肌粉其实如蛋白质奶粉一样含有蛋白质，但增肌粉为了提高热量，...
						</a>
					</p>
					<div style="background-color: #FAEBD7; text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
						<p>
							Copyright © 2017 健身 *************** 版权所有
						</p>
						<p>
							出品：青岛大学开源6班14组
						</p>
					</div>
				</div>

			</div>

			<!--肌酸-->
			<div class="main" id="Main_div4" style="width:70%;height:100%;left:15%;top:50%;background-color:;display: none;">
				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:10%;">
					<img src="yinshi/图片/48.jpg" style="width:30%;height:100%;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/Creatine/4.1.php" target="_blank">
						健身好帮手——肌酸
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/Creatine/4.1.php" target="_blank">
							健身好帮手 肌酸 除了蛋白补充剂之外，肌酸(Creatine)可算是最出名的健身补充用品。为什么呢？进来看看介绍吧！ 肌酸的功用 1. 增加肌肉量 肌酸补充剂在健美界及运动界广受欢迎，因为肌酸能够提高细胞中的水份，让肌肉增大，此...
						</a>
					</p>
				</div>

				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:50%;">
					<img src="yinshi/图片/49.jpg" style="width:30%;height:100%;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/Creatine/4.21.php" target="_blank">
						肌酸报告:17个肌酸使用常见问题解答
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/Creatine/4.21.php" target="_blank">
							尽管有广泛的科学证明，人们依旧对于肌酸有无数的疑问。 让我们一起来听听 《肌酸报告》 的作者 Nick Tumminello 教练特别为此澄清这些问题。 从1832年 起就有许多关于肌酸的疑问，那年有一个疯狂的法国化学家 Michael Cheveul...
						</a>
					</p>
				</div>

				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:90%;">
					<img src="yinshi/图片/50.jpg" style="width:30%;height:100%;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/Creatine/4.31.php" target="_blank">
						最彻底的健身补剂——肌酸！
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/Creatine/4.31.php" target="_blank">
							最彻底的健身补剂肌酸！ 即使你不是一个运动员，但你肯定听说过肌酸它被称为最彻底的补剂 肌酸是人体中一种含氮的有机酸，能够辅助为肌肉和神经细胞提供能量。正是因为肌酸是机体中固有的物质，所以它不存在任何副作用。任何国...
						</a>
					</p>
					<div style="background-color: #FAEBD7; text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
						<p>
							Copyright © 2017 健身 *************** 版权所有
						</p>
						<p>
							出品：青岛大学开源6班14组
						</p>
					</div>
				</div>

			</div>

			<!--维生素-->
			<div class="main" id="Main_div5" style="width:70%;height:100%;left:15%;top:50%;background-color:;display: none;">
				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:10%;">
					<img src="yinshi/图片/67.jpg" style="width:30%;height:100%;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/Vitamins/5.1.php" target="_blank">
						有利于肌肉生长的几种维生素
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/Vitamins/5.1.php" target="_blank">
							许多人都知道，身体长肌肉要靠蛋白质，蛋白质还是运动的主要燃料来源，但是肌肉并不是光靠多吃牛肉和鸡胸脯就能形成的。肌肉组织的生长是一个完整的过程，它包括无数的步骤和上百次不同的化学反应，如果这些步骤中的某一个环节...
						</a>
					</p>
				</div>

				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:50%;">
					<img src="yinshi/图片/68.jpg" style="width:30%;height:100%;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/Vitamins/5.2.php" target="_blank">
						增肌锻炼必不可少的元素:维生素B2
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/Vitamins/5.2.php" target="_blank">
							锻炼一身结实的肌肉是每个男人的梦想。人们都知道，身体长肌肉要靠摄入蛋白质，但是如果光补蛋白，没有维生素B2，补再多蛋白也是白搭。 这是因为在众多维生素中，维生素B2最容易缺乏，它参与机体蛋白质的合成代谢，维护皮肤及...
						</a>
					</p>
				</div>

				<div class="main" id="list" style="width:90%;height:30%;left:5%; top:90%;">
					<img src="yinshi/图片/69.jpg" style="width:30%;height:100%;color:;"/>
					<h2 style="position:absolute;width:50%；height:10%;top:10%;left:40%">
					<a href="yinshi/yinshi/Vitamins/5.3.php" target="_blank">
						维生素a在体内具有多种重要功能
					</a></h2>
					<p style="position:absolute;width:50%；height:30%;top:40%;left:40%">
						<a href="yinshi/yinshi/Vitamins/5.3.php" target="_blank">
							维生素a在体内具有多种重要功能。 它对视网膜的功能起着重要的作用。 它对上皮组织的生长和分化显然是必需的。 也为骨生长，生殖和胚胎发育所需要。 它还对各种细胞膜具有稳定的作用。 从而对膜的通透性起调节作用。 胡萝卜、...
						</a>
					</p>
					<div  class="footer" style="background-color: #FAEBD7; text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
			<?php
			$file = new File();
			$file -> footer();
			$file->Click();
			$user->history();
			?>
		</div>
				</div>

			</div>

		</div>

		<script>function hide() {
	$("#Main_div1").css("display", "none");
	$("#Main_div2").css("display", "none");
	$("#Main_div3").css("display", "none");
	$("#Main_div4").css("display", "none");
	$("#Main_div5").css("display", "none");
}

$("#Main_table1 tr:eq(0) td:eq(0)").mouseover(function() {
	hide();
	$("#Main_div1").css("display", "block");
})
$("#Main_table1 tr:eq(0) td:eq(1)").mouseover(function() {
	hide();
	$("#Main_div2").css("display", "block");
})
$("#Main_table1 tr:eq(0) td:eq(2)").mouseover(function() {
	hide();
	$("#Main_div3").css("display", "block");
})
$("#Main_table1 tr:eq(0) td:eq(3)").mouseover(function() {
	hide();
	$("#Main_div4").css("display", "block");
})
$("#Main_table1 tr:eq(0) td:eq(4)").mouseover(function() {
	hide();
	$("#Main_div5").css("display", "block");
})

$("#Main_table1 tr td").mouseover(function() {
	$("#Main_table1 tr td").css("background-color", " #808080");
	$(this).css("background-color", "#FF8C00");
});</script>

	</body>
</html>
