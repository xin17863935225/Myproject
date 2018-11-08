<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>健身计划-健身网</title>
		<link rel="stylesheet" href="css/plan.css">
		<script src="plan/js/jquery-2.2.3.min.js"></script>
		<script>$(function() {
	// 计划选项卡切换
	$('.plan .article-nav li').click(function() {
			$(this).addClass('article-nav-active').siblings().removeClass('article-nav-active')
			var $index = $(this).index()
			$('.plan-wrap').children().eq($index).show().siblings().hide()
		}) &&
		$(window).scroll(function(event) {
			if($('.bell-plan').is(':visible')) {
				return false
			}
			var scrollTop = $(this).scrollTop()
			console.log(scrollTop)
			if(scrollTop > 880) {
				$('.event_year').css({
					position: 'fixed',
					top: '20px'
				})
			} else {
				$('.event_year').css({
					position: 'initial',
					top: 'initial'
				})
			}
		})

})</script>

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
				<img id="logo3" src="plan/images/information1.jpg">
			</div>
		</div>

		<!-- 计划页主体 -->
		<div class="commom-width plan">
			<div class="article-nav-wrap">
				<ul class="article-nav">
					<li class="article-nav-active">
						一周三练
					</li>
					<li>
						一周六练A
					</li>
					<li>
						一周六练B
					</li>
					<li>
						哑铃健身计划</a>
					</li>
				</ul>
			</div>
			<!-- 内容      -->
			<div class="plan-wrap ">
				<!-- 一周三练 -->
				<div class="three-of-week">
					<div class="plan-summary-wrap">
						<img src="plan/images/three-of-week.jpg" class="model-man">
						<div class="plan-summary">
							<div class="plan-name">
								一周三练
							</div>
							<div class="plan-introduction">
								适合初级、中级健身爱好者。
							</div>
							<dl>
								<div class="column-paln">
									<dt>
									训练天数
									</dt>
									<dd>
										<span>3</span>天
									</dd>
								</div>
								<div class="column-paln">
									<dt>
									训练部位
									</dt>
									<dd>
										<span>7</span>个
									</dd>
								</div>
								<div class="column-paln training-time">
									<dt>
									训练时长
									</dt>
									<dd>
										<span>60</span>分钟
									</dd>
								</div>
							</dl>
						</div>
					</div>
					<!-- 计划开始 -->
					<div id="content">

						<table cellspacing="0">
							<tr>
								<th colspan="2">周一计划 . 胸部 + 肱三头肌 + 腹部</th>
							</tr>
							<tr>
								<td>胸部</td>
								<td>1.杠铃卧推：12次 × 3组</td>
							</tr>
							<tr>
								<td>胸部</td>
								<td>2.哑铃飞鸟：12次 × 3组</td>
							</tr>
							<tr>
								<td>胸部</td>
								<td>3.俯卧撑：12次 × 3组</td>
							</tr>
							<tr>
								<td>肱三头肌</td>
								<td>1.仰卧撑：12次 × 3组</td>
							</tr>
							<tr>
								<td>肱三头肌</td>
								<td>2.哑铃颈后屈臂：12次 × 3组</td>
							</tr>
							<tr>
								<td>肱三头肌</td>
								<td>3.重锤下压：12次 × 3组</td>
							</tr>
							<tr>
								<td>腹部</td>
								<td>1.仰卧起坐：20次 × 3组</td>
							</tr>
							<tr>
								<td>腹部</td>
								<td>2.仰卧举腿：20次 × 3组</td>
							</tr>
							<tr>
								<th colspan="2">周二休息</th>
							</tr>
							<tr>
								<th colspan="2">周三计划 . 背部 + 肱二头肌 + 腹部</th>
							</tr>
							<tr>
								<td>背部</td>
								<td>1.引体向上：12次 × 3组</td>
							</tr>
							<tr>
								<td>背部</td>
								<td>2.颈前下拉：12次 × 3组</td>
							</tr>
							<tr>
								<td>背部</td>
								<td>3.坐姿划船：12次 × 3组</td>
							</tr>
							<tr>
								<td>肱二头肌</td>
								<td>1.杠铃弯举：12次 × 3组</td>
							</tr>
							<tr>
								<td>肱二头肌</td>
								<td>2.斜板弯举：12次 × 3组</td>
							</tr>
							<tr>
								<td>肱二头肌</td>
								<td>3.哑铃正手弯举：12次 × 3组</td>
							</tr>
							<tr>
								<td>腹部</td>
								<td>1.仰卧起坐：20次 × 3组</td>
							</tr>
							<tr>
								<td>腹部</td>
								<td>2.仰卧举腿：20次 × 3组
							</tr>
							<tr>
								<th colspan="2">周四休息</th>
							</tr>
							<tr>
								<th colspan="2">周五计划 . 腿部 + 肩部 + 腹部</th>
							</tr>
							<tr>
								<td>腿部</td>
								<td>1.杠铃深蹲：12次 × 3组</td>
							</tr>
							<tr>
								<td>腿部</td>
								<td>2.俯身屈腿：12次 × 3组</td>
							</tr>
							<tr>
								<td>腿部</td>
								<td>3.坐姿挑腿：12次 × 3组</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>1.哑铃坐姿推举：12次 × 3组</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>2.杠铃颈后推举：12次 × 3组</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>3.哑铃侧平举：12次 × 3组</td>
							</tr>
							<tr>
								<td>腹部</td>
								<td>1.仰卧起坐：20次 × 3组</td>
							</tr>
							<tr>
								<td>腹部</td>
								<td>2.仰卧举腿：20次 × 3组
							</tr>
							<tr>
								<th colspan="2">周六休息</th>
							</tr>
							<tr>
								<th colspan="2">周日休息</th>
							</tr>
						</table>

					</div>
					<!-- 计划开始end -->
				</div>
				<!--一周三练end -->
				<!--   一周六练A   -->
				<div class="six-of-weekA hide">
					<div class="plan-summary-wrap">
						<img src="plan/images/six-of-weekA.jpg" class="model-man">
						<div class="plan-summary">
							<div class="plan-name">
								一周六练A
							</div>
							<div class="plan-introduction">
								适合有一定基础的狂热健美爱好者
							</div>
							<dl>
								<div class="column-paln">
									<dt>
									训练天数
									</dt>
									<dd>
										<span>6</span>天
									</dd>
								</div>
								<div class="column-paln">
									<dt>
									训练部位
									</dt>
									<dd>
										<span>6</span>个
									</dd>
								</div>
								<div class="column-paln training-time">
									<dt>
									训练时长
									</dt>
									<dd>
										<span>90</span>分钟
									</dd>
								</div>
							</dl>
						</div>
					</div>
					<!-- 计划开始 -->
					<div id="content">

						<table cellspacing="0">
							<tr>
								<th colspan="2">周一计划 . 练胸部</th>
							</tr>
							<tr>
								<td>胸部</td>
								<td>1.平板杠铃卧推：10次 × 3组</td>
							</tr>
							<tr>
								<td>胸部</td>
								<td>2.下斜板杠铃卧推：10次 × 3组</td>
							</tr>
							<tr>
								<td>胸部</td>
								<td>3.上斜板哑铃推举(30度角)：10次 × 3组</td>
							</tr>
							<tr>
								<td>胸部</td>
								<td>4.平板哑铃飞鸟：10次 × 3组</td>
							</tr>
							<tr>
								<td>胸部</td>
								<td>5.器械夹胸：10次 × 3组</td>
							</tr>
							<tr>
								<th colspan="2">周二计划 . 背部</th>
							</tr>
							<tr>
								<td>背部</td>
								<td>1.引体向上：10次 × 3组(上背部)</td>
							</tr>
							<tr>
								<td>背部</td>
								<td>2.杠铃划船：10次 × 3组(下背部)</td>
							</tr>
							<tr>
								<td>背部</td>
								<td>3.坐姿划船：10次 × 3组（下背部）</td>
							</tr>
							<tr>
								<td>背部</td>
								<td>4.窄握距下拉：10次 × 3组(上背部)</td>
							</tr>
							<tr>
								<th colspan="2">周三计划 . 肩部</th>
							</tr>
							<tr>
								<td>肩部</td>
								<td>1.坐姿杠铃推举：10次 × 3组(整个肩部)</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>2.坐姿哑铃推举：10次 × 3组(整个肩部)</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>3.直立杠铃上拉 (窄握距)：10次 × 3组(三角肌前中束肌)</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>4.哑铃侧平举：10次 × 3组(三角肌前中束肌)</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>5.反向坐姿夹胸：10次 × 3组(三角肌后束肌)</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>6.哑铃俯卧飞鸟：10次 × 3组(三角肌后束肌)</td>
							</tr>
							<tr>
								<th colspan="2">周四计划 . 肱三头肌</th>
							</tr>
							<tr>
								<td>肱三头肌</td>
								<td>1.窄握卧推：10次 × 4组</td>
							</tr>
							<tr>
								<td>肱三头肌</td>
								<td>2.仰卧臂屈伸：10次 × 3组(肱三头肌)</td>
							</tr>
							<tr>
								<td>肱三头肌</td>
								<td>3.器械下压：10次 × 3组(肱三头肌)</td>
							</tr>
							<tr>
								<td>肱三头肌</td>
								<td>4.站立哑铃托举：10次 × 3组(肱三头肌)</td>
							</tr>
							<tr>
								<th colspan="2">周五计划 . 肱二头肌</th>
							</tr>
							<tr>
								<td>肱二头肌</td>
								<td>1.杠铃弯举：10次 × 3组(肱二头肌)</td>
							</tr>
							<tr>
								<td>肱二头肌</td>
								<td>2.哑铃弯举：10次 × 3组</td>
							</tr>
							<tr>
								<td>肱二头肌</td>
								<td>3.托板弯举：10次 × 3组(肱二头肌)</td>
							</tr>
							<tr>
								<th colspan="2">周六计划 . 腿部</th>
							</tr>
							<tr>
								<td>腿部</td>
								<td>1.杠铃深蹲：10次 × 3组(股四头肌)</td>
							</tr>
							<tr>
								<td>腿部</td>
								<td>2.器械蹬腿：10次 × 3组(股四头肌)</td>
							</tr>
							<tr>
								<td>腿部</td>
								<td>3.腿屈伸 (窄握距)：10次 × 3组(股四头肌)</td>
							</tr>
							<tr>
								<td>腿部</td>
								<td>4.腿弯举：10次 × 3组(股二头肌)</td>
							</tr>
							<tr>
								<td>腿部</td>
								<td>5.器械小腿提踵：20次 × 3组(小腿肌肉)</td>
							</tr>
							<tr>
								<th colspan="2">周日休息</th>
							</tr>
						</table>

					</div>

					<!-- 计划开始end -->
				</div>
				<!--    一周六练Aend  -->
				<!--    一周六练B  -->
				<div class="six-of-weekB hide">
					<div class="plan-summary-wrap">
						<img src="plan/images/six-of-weekB.jpg" class="model-man">
						<div class="plan-summary">
							<div class="plan-name">
								一周六练B
							</div>
							<div class="plan-introduction">
								适合专业健美人士
							</div>
							<dl>
								<div class="column-paln">
									<dt>
									训练天数
									</dt>
									<dd>
										<span>6</span>天
									</dd>
								</div>
								<div class="column-paln">
									<dt>
									训练部位
									</dt>
									<dd>
										<span>12</span>个
									</dd>
								</div>
								<div class="column-paln training-time">
									<dt>
									训练时长
									</dt>
									<dd>
										<span>120</span>分钟
									</dd>
								</div>
							</dl>
						</div>
					</div>
					<!-- 计划开始 -->
					<div id="content">

						<table cellspacing="0">
							<tr>
								<th colspan="2">周一计划 . 胸、前臂外侧、腹部</th>
							</tr>
							<tr>
								<td>胸部</td>
								<td>1.卧推：8、6、6、8</td>
							</tr>
							<tr>
								<td>胸部</td>
								<td>2.上斜哑铃飞鸟：12、10、12</td>
							</tr>
							<tr>
								<td>胸部</td>
								<td>3.蝴蝶夹胸：15、12、15</td>
							</tr>
							<tr>
								<td>前臂外侧</td>
								<td>1.杠铃反弯举：12、10、10、12</td>
							</tr>
							<tr>
								<td>前臂外侧</td>
								<td>2.哑铃腕屈伸：25、20、20、25</td>
							</tr>
							<tr>
								<td>腹肌</td>
								<td>1.负重斜板卷腹：25、20、20、25</td>
							</tr>
							<tr>
								<td>腹肌</td>
								<td>2.拉力转体腹压缩：25、20、20</td>
							</tr>
							<tr>
								<td>腹肌</td>
								<td>3.肘撑屈膝举腿：25、20、20</td>
							</tr>
							<tr>
								<th colspan="2">周二计划 .背、肱二头肌、前臂内侧</th>
							</tr>
							<tr>
								<td>背部</td>
								<td>1.负重引体向上：8、6、6、8</td>
							</tr>
							<tr>
								<td>背部</td>
								<td>2.俯立划船：10、6、6、8</td>
							</tr>
							<tr>
								<td>背部</td>
								<td>3.胸前下拉：10、12、10</td>
							</tr>
							<tr>
								<td>背部</td>
								<td>4.单手哑铃划船：15、12、15</td>
							</tr>
							<tr>
								<td>肱二头肌</td>
								<td>1.弯举：8、6、6、8</td>
							</tr>
							<tr>
								<td>肱二头肌</td>
								<td>2.单臂斜托弯举：12、10、12</td>
							</tr>
							<tr>
								<td>肱二头肌</td>
								<td>3.拉力侧平举：15、20、15</td>
							</tr>
							<tr>
								<td>前臂内侧</td>
								<td>1.杠铃腕弯举：15、12、15
							</tr>
							<tr>
								<td>前臂内侧</td>
								<td>2.哑铃单手腕弯举：15、20、15</td>
							</tr>
							<tr>
								<td>下背</td>
								<td>1.屈膝硬拉：8、6、8</td>
							</tr>
							<tr>
								<td>下背</td>
								<td>2.负重伸背：12、10、10、12
							</tr>
							<tr>
								<th colspan="2">周三计划 . 肩、肱三头肌、腹肌</th>
							</tr>
							<tr>
								<td>肩部</td>
								<td>1.颈后推举：8、6、8、8</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>2.前平举：12、10、10、12</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>3.拉力侧平举：15、15、15</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>4.提肘拉：10、8、8、10</td>
							</tr>
							<tr>
								<td>肱三头肌</td>
								<td>1.双杠臂屈伸：10、8、10</td>
							</tr>
							<tr>
								<td>肱三头肌</td>
								<td>2.头后臂屈伸：10、8、10</td>
							</tr>
							<tr>
								<td>肱三头肌</td>
								<td>3.拉力下压臂屈伸：15、12、12</td>
							</tr>
							<tr>
								<td>肱三头肌</td>
								<td>4.俯立单臂屈伸：15、20、20、15
							</tr>
							<tr>
								<td>腹部</td>
								<td>1.坐姿屈膝收腹：25、20、20</td>
							</tr>
							<tr>
								<td>腹部</td>
								<td>2.下斜仰卧起坐：25、20、20
							</tr>
							<tr>
								<th colspan="2">周四计划 . 股四头肌、股二头肌、小腿</th>
							</tr>
							<tr>
								<td>股四头肌</td>
								<td>1.深蹲：8、6、6、8</td>
							</tr>
							<tr>
								<td>股四头肌</td>
								<td>2.腿举：12、10、10</td>
							</tr>
							<tr>
								<td>股四头肌</td>
								<td>3.腿屈伸：15、15、15</td>
							</tr>
							<tr>
								<td>股四头肌</td>
								<td>4.箭步蹲：15、10、10</td>
							</tr>
							<tr>
								<td>股四头肌</td>
								<td>5.肩托斜深蹲：8、6、8</td>
							</tr>
							<tr>
								<td>股二头肌</td>
								<td>1.坐姿下压腿弯举：15、12、10</td>
							</tr>
							<tr>
								<td>小腿</td>
								<td>1.立式举踵：10、12、12、10</td>
							</tr>
							<tr>
								<td>小腿</td>
								<td>2.单腿举踵：15、20、15
							</tr>
							<tr>
								<th colspan="2">周五计划 . 进入循环练星期一内容</th>
							</tr>
							<tr>
								<td>循环星期一</td>
								<td>1.重复星期一锻炼内容。。。此处省略70字。</td>
							</tr>
							<tr>
								<td>此训练计划需注意</td>
								<td>2.第一组采用10RM以上的负荷重量，正是训练前需要安排有一组约15RM的预热。 各动作最后1-2组试举允许采用助力次数，也可以采用强迫次数。负重训练结束后，一定要进行目标肌群的牵张伸展练习已经安排15-20分钟的有氧练习。</td>
							</tr>
							<tr>
								<th colspan="2">周六计划 . 重复星期二锻炼内容</th>
							</tr>
							<tr>
								<td>小腿</td>
								<td>1.重复星期二锻炼内容。。。此处省略80字。</td>
							</tr>
							<tr>
								<td>小腿</td>
								<td>2.星期日休息一天，下礼拜星期一应该充分的是星期三的锻炼内容。如此类推。。。 每个人的实际锻炼情况不一样，欢迎网友分享你的健身计划。</td>
							</tr>
							<tr>
								<th colspan="2">周日休息</th>
							</tr>
						</table>

					</div>

					<!-- 计划开始end -->
				</div>
				<!--    一周六练B end  -->
				<!--   哑铃健身计划 -->
				<div class="bell-plan hide">
					<div class="plan-summary-wrap">
						<img src="plan/images/bell-plan.jpg" class="model-man">
						<div class="plan-summary">
							<div class="plan-name">
								哑铃健身计划
							</div>
							<div class="plan-introduction">
								哑铃是肌肉力量锻炼中最重要、最方便、最常用的健身器械, 经常更换哑铃动作，能更加全面的激活各个部位的肌肉。让肌肉得到全面发展。
							</div>
							<dl>
								<div class="column-paln">
									<dt>
									训练天数
									</dt>
									<dd>
										<span>4</span>天
									</dd>
								</div>
								<div class="column-paln">
									<dt>
									训练部位
									</dt>
									<dd>
										<span>9</span>个
									</dd>
								</div>
								<div class="column-paln training-time">
									<dt>
									训练时长
									</dt>
									<dd>
										<span>60</span>分钟
									</dd>
								</div>
							</dl>
						</div>
					</div>
					<!-- 计划部分 -->
					<div id="content">

						<table cellspacing="0">
							<tr>
								<th colspan="2">周一计划 . 肩部 + 肱三头肌</th>
							</tr>
							<tr>
								<td>肩部</td>
								<td>1.推举：8~12次 × 4组</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>2.侧平举：8次 × 3组</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>3.俯身侧平举：10次 × 3组</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>4.耸肩：10次 × 4组</td>
							</tr>
							<tr>
								<td>肱三头肌</td>
								<td>1.颈后臂屈伸：8~12次 × 4组</td>
							</tr>
							<tr>
								<td>肱三头肌</td>
								<td>2.俯身臂屈伸：12次 × 4组</td>
							</tr>
							<tr>
								<th colspan="2">周二休息</th>
							</tr>
							<tr>
								<th colspan="2">周三计划 . 背部 + 腹部</th>
							</tr>
							<tr>
								<td>背部</td>
								<td>1.俯身双臂划船：8~12次 × 4组</td>
							</tr>
							<tr>
								<td>背部</td>
								<td>2.俯身单臂划船：10次 × 4组</td>
							</tr>
							<tr>
								<td>背部</td>
								<td>3.直腿硬拉：12次 × 3组</td>
							</tr>
							<tr>
								<td>腹部</td>
								<td>1.仰卧举腿：15次 × 3组</td>
							</tr>
							<tr>
								<td>腹部</td>
								<td>2.仰卧起坐：15次 × 3组</td>
							</tr>
							<tr>
								<th colspan="2">周四计划 . 胸部 + 肱二头肌</th>
							</tr>
							<tr>
								<td>胸部</td>
								<td>1.上斜推举：12次 × 3组</td>
							</tr>
							<tr>
								<td>胸部</td>
								<td>2.平卧推举：10次 × 4组</td>
							</tr>
							<tr>
								<td>胸部</td>
								<td>3.平卧飞鸟：12次 × 3组</td>
							</tr>
							<tr>
								<td>肱二头肌</td>
								<td>1.交替弯举：12次 × 3组</td>
							</tr>
							<tr>
								<td>肱二头肌</td>
								<td>2.意念弯举：12次 × 3组</td>
							</tr>
							<tr>
								<td>肱二头肌</td>
								<td>3.侧弯举：12次 × 3组</td>
							</tr>
							<tr>
								<th colspan="2">周五休息</th>
							</tr>
							<tr>
								<th colspan="2">周六计划 . 大腿 + 小腿 + 腹部</th>
							</tr>
							<tr>
								<td>腿部</td>
								<td>1.深蹲：8~12次 × 5组</td>
							</tr>
							<tr>
								<td>腿部</td>
								<td>2.箭步蹲：12次 × 3组</td>
							</tr>
							<tr>
								<td>腿部</td>
								<td>3.俯卧腿弯举：12次 × 3组</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>1.站立提踵：15次 × 5组</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>1.仰卧举腿：15次 × 3组</td>
							</tr>
							<tr>
								<td>肩部</td>
								<td>2.仰卧起坐：15次 × 3组</td>
							</tr>
							<tr>
								<th colspan="2">周日休息</th>
							</tr>
						</table>

					</div>

					<!-- 计划部分end -->
				</div>
				<!--   哑铃健身计划end -->
			</div>
		</div>
		<!-- 计划页主体end -->
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