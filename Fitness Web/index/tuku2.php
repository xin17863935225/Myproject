<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<title>风靡全球的腹肌女神Anella Sangra</title>
<style type="text/css">
.login{
    float: right;
    color:#4F4F4F;
    margin:10px;
    list-style:none;
    font-size: 20px;  
    font-family : 微软雅黑,宋体;
    text-decoration: none;
    text-transform:capitalize;
}
.login3{
    position: absolute;
    top:25px;
    right: 5px;
    color:#4F4F4F;
    margin:5px;
    list-style:none;
    font-size: 20px;  
    font-family : 微软雅黑,宋体;
    text-decoration: none;
}
.login:hover,.login3:hover{
    color: #FF8C00;
}
	*{
			margin: 0;
			padding: 0;
			list-style-type: none;
		}
		.banner{
			width: 100%;
			/*height: 560px;*/
			/*background: black;*/
			/*子绝父相*/
			position: relative;
			/*超出部分全部隐藏，解决横向滚动条*/
			overflow: hidden;
		}
		.banner ul{
			position: absolute;
		}
		.banner ul li{
			/*这个100%是相对于父盒子的（会把父盒子的宽度继承过来,如父盒子300%,这这里的100%就会相当于300%）*/
			width: 100%;
			height: 560px;
			float: left;
			background:  no-repeat center center;
		}
		/*.banner ul li:nth-child(1){*/
			/*background: url('./1.jpg') no-repeat center center;*/
		/*}*/
		/*.banner ul li:nth-child(2){*/
			/*background: url('./2.jpg') no-repeat center center;*/
		/*}*/
		/*.banner ul li:nth-child(3){*/
			/*background: url('./3.jpg') no-repeat center center;*/
		/*}*/
		.banner ol{
			/*width: 60px;*/
			height: 20px;
			background: rgba(0,0,0,0.5);
			position: absolute;
			left:50%;
			/*margin-left: -40px;*/
			bottom: 30px;
			padding: 0 10px;
			border-radius: 10px;
		}
		.banner ol li{
			width: 10px;
			height: 10px;
			float: left;
			margin: 5px 5px;
			background: rgba(255,255,255,0.5);
			border-radius: 50%;
			cursor: pointer;
		}
		.banner ol .current{
			background: rgba(255,255,255,1);
		}
		.banner i{
			width: 58px;
			height: 120px;
			position: absolute;
			top: 50%;
			margin-top: -60px;
			cursor: pointer;
			border-radius: 5px;
			display: none;
		}
		.banner .left{
			left: 60px;
			background: url('images/left_right.png') no-repeat 0 0px;
		}
		.banner .right{
			right: 60px;
			background: url('images/left_right.png') no-repeat 0px -120px;
		}
		.banner .left:hover , .banner .right:hover{
			background-color: rgba(0, 0, 0, 0.31);
		}
		.title{
    font-family: "Microsoft YaHei", Arial, 瀹嬩綋, sans-serif;
    display: block;
    height: 28px;
    line-height: 28px;
    font-size: 30px;
    color: #666;
    margin: 0 auto;
    width: 1200px;
    height: 50px;
    border-bottom: 2px solid #666;
}
.title{
	margin-top: 100px;
}
.banner{
	margin-top: 50px;
}
li a{   
    float: left;
    width: 150px;
    text-align: center;
    list-style:none;
    background-color: #4F4F4F;
    height: 55px;
    line-height: 55px;
    font-weight: normal;
    font-size: 20px;    
    font-family : 微软雅黑,宋体;
    color: white;
    text-decoration: none;
    text-transform:capitalize;
}
li a.shouye{
    color: #fff;
    line-height: 62px;
    margin-top: -10px;
    background: #d52f04;
    height: 65px;
        
}
li a:hover{ 
    background-color:#FAEBD7;
    color: #CE0000;
}

ul.biaoti1{
    margin: 0px;
    padding: 0px;
    display: block;
    list-style:none;
    background-color: #4F4F4F;
    margin-left:100px;
    height:55px;
}
#logo1{
    position: absolute;
    left: 50px;
    width: 170px;
}
.header{
    height: 300px;
}
.head-logo{
    height: 125px;
}
.biaoti{
    padding: 0px;
    background: #4F4F4F;
    height: 55px;
}
.head-logo3{
    height: 120px;
    background-color:#E0E0E0;
    background-repeat:repeat-x;
    margin:0px;
    text-align: center;
}
</style>

</head>
<body>
<div class="header">
    <div class="head-logo">
        <img id="logo1" src= "../images/ziLogo2.jpg" >
        <?php
					require_once'../ClassLib.php';
					$user= new User();
					$user->login_signup_subcatalog1();
					if(isset($_SESSION['MM_Username'])){
						$file1 = fopen("../textfile/action.txt", "a+");
						fwrite($file1, $_SESSION['MM_Username']."进入图库2！<br>\n");
					}else{
						echo'';
					}
					?>
    </div>
    <div class="biaoti">
        <ul class="biaoti1">     
        <li><a href="../index.php" class="shouye" target="_self">首页</a></li>
        <li><a href="../plan.php" class="plan" target="_self">计划</a></li>
        <li><a href="../qixie.php" class="qixie" target="_self">器械</a></li>
        <li><a href="../xiangmu.php" class="xiangmu" target="_self">项目</a></li>
        <li><a href="../yinshi.php" class="yinshi" target="_self">饮食</a></li>
        <?php
					$user->manage_subcatalog1();
					?>
        </ul>
    </div>
    <div class="head-logo3">
        <img id="logo3" src= "../images/information1.jpg" >
    </div>
</div>
<div class="title">
            <span class="t1">风靡全球的腹肌女神Anella Sangra</span>
        </div>
<div class="banner">
	<ul></ul>
	<ol></ol>
	<i class="left"></i><i class="right"></i>
</div>

<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function(){ //页面加载完毕才执行

		//=========设置参数==========
		//图片统一高度：
		var images_height = '560px';
		//图片路径/链接(数组形式):
		var images_url = [
			<?php
$images=new Images();
$images->images_tuku2_src();
?>
		];
		var images_count = images_url.length;
		//console.log(images_count);

		//创建节点
		//图片列表节点
		for(var j=0;j<images_count+1;j++){
			$('.banner ul').append('<li></li>')
		}
		//轮播圆点按钮节点
		for(var j=0;j<images_count;j++){
			if(j==0){
				$('.banner ol').append('<li class="current"></li>')
			}else{
				$('.banner ol').append('<li></li>')
			}
		}

		//载入图片
		$('.banner ul li').css('background-image','url('+images_url[0]+')');
		$.each(images_url,function(key,value){
			$('.banner ul li').eq(key).css('background-image','url('+value+')');
		});

		$('.banner').css('height',images_height);

		$('.banner ul').css('width',(images_count+1)*100+'%');

		$('.banner ol').css('width',images_count*20+'px');
		$('.banner ol').css('margin-left',-images_count*20*0.5-10+'px');

		//=========================

		var num = 0;
		//获取窗口宽度
		var window_width = $(window).width();
		$(window).resize(function(){
			window_width = $(window).width();
			$('.banner ul li').css({width:window_width});
			clearInterval(timer);
			nextPlay();
			timer = setInterval(nextPlay,2000);
		});
		//console.log(window_width);
		$('.banner ul li').width(window_width);
		//轮播圆点
		$('.banner ol li').mouseover(function(){//用hover的话会有两个事件(鼠标进入和离开)
			$(this).addClass('current').siblings().removeClass('current');
			//第一张图： 0 * window_width
			//第二张图： 1 * window_width
			//第三张图： 2 * window_width
			//获取当前编号
			var i = $(this).index();
			//console.log(i);
			$('.banner ul').stop().animate({left:-i*window_width},500);
			num = i;
		});
		//自动播放
		var timer = null;
		function prevPlay(){
			num--;
			if(num<0){
				//悄悄把图片跳到最后一张图(复制页,与第一张图相同),然后做出图片播放动画，left参数是定位而不是移动的长度
				$('.banner ul').css({left:-window_width*images_count}).stop().animate({left:-window_width*(images_count-1)},500);
				num=images_count-1;
			}else{
				//console.log(num);
				$('.banner ul').stop().animate({left:-num*window_width},500);
			}
			if(num==images_count-1){
				$('.banner ol li').eq(images_count-1).addClass('current').siblings().removeClass('current');
			}else{
				$('.banner ol li').eq(num).addClass('current').siblings().removeClass('current');

			}
		}
		function nextPlay(){
			num++;
			if(num>images_count){
				//播放到最后一张(复制页)后,悄悄地把图片跳到第一张,因为和第一张相同,所以难以发觉,
				$('.banner ul').css({left:0}).stop().animate({left:-window_width},500);
				//css({left:0})是直接悄悄改变位置，animate({left:-window_width},500)是做出移动动画
				//随后要把指针指向第二张图片,表示已经播放至第二张了。
				num=1;
			}else{
				//在最后面加入一张和第一张相同的图片，如果播放到最后一张，继续往下播，悄悄回到第一张(肉眼看不见)，从第一张播放到第二张
				//console.log(num);
				$('.banner ul').stop().animate({left:-num*window_width},500);
			}
			if(num==images_count){
				$('.banner ol li').eq(0).addClass('current').siblings().removeClass('current');
			}else{
				$('.banner ol li').eq(num).addClass('current').siblings().removeClass('current');

			}
		}
		timer = setInterval(nextPlay,2000);
		//鼠标经过banner，停止定时器,离开则继续播放
		$('.banner').mouseenter(function(){
			clearInterval(timer);
			//左右箭头显示(淡入)
			$('.banner i').fadeIn();
		}).mouseleave(function(){
			timer = setInterval(nextPlay,2000);
			//左右箭头隐藏(淡出)
			$('.banner i').fadeOut();
		});
		//播放下一张
		$('.banner .right').click(function(){
			nextPlay();
		});
		//返回上一张
		$('.banner .left').click(function(){
			prevPlay();
		});
	});
</script>
		<div  class="footer" style="background-color: #FAEBD7; text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
			<?php
			$file = new File();
			$file -> footer_subcatalog1();
			$file -> Click_subcatalog1();
			?>
		</div>
</body>
</html>