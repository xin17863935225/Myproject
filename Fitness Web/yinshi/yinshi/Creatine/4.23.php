<!DOCTYPE html><html><HEAD>
<meta charset="utf-8">
<link rel="stylesheet"  href="../css/yinshi2.css">
</HEAD>
<BODY>
<div class="header">
    <div class="head-logo">
        <img id="logo1" src= "../../../images/ziLogo2.jpg" >
        <?php require_once'../../../ClassLib.php';$user= new User();$user->login_signup_subcatalog2();?>
    </div>
    <div class="biaoti">
        <ul class="biaoti1">     
        <li><a href="../../../index.php" class="shouye" target="_self">首页</a></li>
        <li><a href="../../../plan.php" class="plan" target="_self">计划</a></li>
        <li><a href="../../../qixie.php" class="qixie" target="_self">器械</a></li>
        <li><a href="../../../xiangmu.php" class="xiangmu" target="_self">项目</a></li>
        <li><a href="../../../yinshi.php" class="yinshi" target="_self">饮食</a></li>
        <?php
					$user->manage_subcatalog2();
					?></ul>
    </div>
    <div class="head-logo3">
        <img id="logo3" src= "../../../images/information4.jpg" >
    </div>
</div>
<SCRIPT>$('.yinshi').parent('li').addClass('active-page')</SCRIPT>
<DIV class="commom-width container article">
  <DIV class=article-detaile-wrap>
    <H2 class=article-title>肌酸报告:17个肌酸使用常见问题解答(3)</H2>
<TABLE>
  <TBODY>
<TR>
<TD>
<DIV style="TEXT-ALIGN: center"><IMG style="CURSOR: pointer" onClick="window.open('/uploads/allimg/151224/4_151224120231_1.jpg')" border=0 alt="" src="../../图片/57.jpg" width=557 height=250></DIV>
<P>　<STRONG>　9.什么时候、为什么我需要填充肌酸？</STRONG></P>
<P>　　填充期不是必要的。持续服用固定剂量四周后同样也能发挥很好的效果。但是若先通过填充期的话，可以缩短在两周内达到同样好的效果。</P>
<P>　　<STRONG>10.使用肌酸多久循环一次？</STRONG></P>
<P>　　大多数人不需要担心这个问题。持续使用能持续得到肌酸的效益。</P>
<P>　<STRONG>　11.肌酸会使身体储水吗？</STRONG></P>
<P>　　肌酸确实会使细胞中保留较多的水分，但是这对运动表现有正面的效果。虽然这会使你的体重增加。</P>
<P>　　所以运动选手可能循环使用肌酸，也就是需要隔一段时间停止一下肌酸的使用，最好是在比赛当天的前六周停止。</P>
<P>　<STRONG>　12.吃肌酸时应该饮用多少的水？</STRONG></P>
<P>　　根据 Antonio博士表示"研究显示，每 3g 肌酸最好配 120cc 的水。"</P>
<P style="TEXT-ALIGN: center"><IMG style="TEXT-ALIGN: center; FONT-SIZE: 14px; CURSOR: pointer" border=0 alt="" src="../../图片/58.jpg" width=501 height=337></P>
<P>　　<STRONG>13.哪一种肌酸最好？</STRONG></P>
<P>　　洛杉矶湖人队顾问、男性健康杂志（Men's Health）营养顾问 Alan Aragon 说"单一水合肌酸（creatine monohydrate）肯定是最好的。它比起其他类型的肌酸不但便宜，也是真正有较高生物利用率的肌酸。"</P>
<P>　　<STRONG>14.肌酸安全吗？</STRONG></P>
<P>　　Antonio博士说"肌酸可能是历史上被最多研究的机能增进辅助物质。科学研究结果明确的表示肌酸没有不好的副作用。没有证据显示肌酸会造成肌肉撕裂、伤害肾脏、造成脱水或各种谣传的坏处。如果有上述的副作用，请用科学证明让我知道！』</P>
<P><STRONG>　</STRONG>　<STRONG>15. 肌酸会导致抽筋吗？</STRONG></P>
<P>　　不会！Antonio 博士指出另一个对于一季的美国大学足球（NCAA）的比赛和训练的研究：</P>
<P>　　"研究发现肌酸使用者比起没有</P>
<P>　　<STRONG>16.青少年可以使用肌酸吗？</STRONG></P>
<P>　　当然，而且同样有效。研究显示肌酸对已进行相当训练且体格初具雏形的青少年，能增进力量和表现。话说回来，在使用前当然一定要看清楚罐子上的标示，了解并遵从建议的使用方法。</P>
<P>　<STRONG>　17.女性可以使用肌酸吗？</STRONG></P>
<P>　　可以。想要变得更强、练就较多肌肉（少脂肪）、运动员般体格的女性都可以安心的使用肌酸</P></TD></TR>
</TBODY>
</TABLE>
<DIV class=article_page><A>共3页: </A><A href="4.22.php">上一页</A><A href="4.21.php">1</A><A href="4.22.php">2</A><A class=thisclass href="#">3</A><A href="#">下一页</A>
 </DIV>
  </DIV>
</DIV>
<div  class="footer" style="background-color: #FAEBD7; text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
			<?php
			$file = new File();
			$file -> footer_subcatalog2();
			$file->Click_subcatalog2();
			?>
		</div>
</BODY></html>