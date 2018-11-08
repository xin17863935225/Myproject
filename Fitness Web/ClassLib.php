<?php
/*
 * 类库名称：健身网
 * 版本：1.0
 * 作者：Karry
 * 最后修改时间：2017-12-
 * 最后修改内容日志：****
 */
interface ClassLib {

}

//创建User类，用户登录，注册，判断等功能
class User implements ClassLib {
	//添加方法
	//主页用户登录，注册
	public function login_signup_index() {
		session_start();
		if (isset($_SESSION['MM_Username'])) {
			echo '<a class="login3" href="login.php" target="_self">重新登录</a>
			<a class="login1" href="logout.php" target="_self">注销</a>';
			if (preg_match("/admin...OL/", $_SESSION['MM_Username'])) {
				echo '<a class="login2" href="manage.php" target="_self">尊敬的用户名：管理员 </a>';
			} else {
				echo '<a class="login2" href="service.php" target="_self">尊敬的用户名：' . $_SESSION['MM_Username'] . '</a>';
			}
		} else {
			echo '<a class="login1" href="signup.php" target="_self">注册</a>
						<a class="login2" href="login.php" target="_self">请登录！</a>';
		}
	}

	//其他页面用户登录，注册
	public function login_signup_others() {
		session_start();
		if (isset($_SESSION['MM_Username'])) {
			echo '<a class="login3" href="login.php" target="_self">重新登录</a>
			<a class="login" href="logout.php" target="_self">注销</a>';
			if (preg_match("/admin...OL/", $_SESSION['MM_Username'])) {
				echo '<a class="login" href="manage.php" target="_self">尊敬的用户名：管理员 </a>';
			} else {
				echo '<a class="login" href="service.php" target="_self">尊敬的用户名：' . $_SESSION['MM_Username'] . '</a>';
			}
		} else {
			echo '<a class="login" href="signup.php" target="_self">注册</a>
						<a class="login" href="login.php" target="_self">请登录！</a>';
		}
	}

	//子目录页面用户登录，注册
	public function login_signup_subcatalog1() {
		session_start();
		if (isset($_SESSION['MM_Username'])) {
			echo '<a class="login3" href="../login.php" target="_self">重新登录</a>
			<a class="login" href="../logout.php" target="_self">注销</a>';
			if (preg_match("/admin...OL/", $_SESSION['MM_Username'])) {
				echo '<a class="login" href="../manage.php" target="_self">尊敬的用户名：管理员 </a>';
			} else {
				echo '<a class="login" href="../service.php" target="_self">尊敬的用户名：' . $_SESSION['MM_Username'] . '</a>';
			}
		} else {
			echo '<a class="login" href="../signup.php" target="_self">注册</a>
						<a class="login" href="../login.php" target="_self">请登录！</a>';
		}
	}

	//子目录页面用户登录，注册
	public function login_signup_subcatalog2() {
		session_start();
		if (isset($_SESSION['MM_Username'])) {
			echo '<a class="login3" href="../../../login.php" target="_self">重新登录</a>
			<a class="login" href="../../../logout.php" target="_self">注销</a>';
			if (preg_match("/admin...OL/", $_SESSION['MM_Username'])) {
				echo '<a class="login" href="../../../manage.php" target="_self">尊敬的用户名：管理员 </a>';
			} else {
				echo '<a class="login" href="../../../service.php" target="_self">尊敬的用户名：' . $_SESSION['MM_Username'] . '</a>';
			}
		} else {
			echo '<a class="login" href="../../../signup.php" target="_self">注册</a>
						<a class="login" href="../../../login.php" target="_self">请登录！</a>';
		}
	}

	//管理员与普通用户的权限判断
	public function manage() {
		if (isset($_SESSION['MM_Username']) && preg_match("/admin...OL/", $_SESSION['MM_Username'])) {
			echo '<li><a href="manage.php" class="manage" target="_self">管理</a></li>';
		} else {
			echo '<li><a href="service.php" class="service" target="_self">服务</a></li>';
		}
	}

	//子目录管理员与普通用户的权限判断
	public function manage_subcatalog1() {
		if (isset($_SESSION['MM_Username']) && preg_match("/admin...OL/", $_SESSION['MM_Username'])) {
			echo '<li><a href="../manage.php" class="manage" target="_self">管理</a></li>';
		} else {
			echo '<li><a href="../service.php" class="service" target="_self">服务</a></li>';
		}
	}

	//子目录管理员与普通用户的权限判断
	public function manage_subcatalog2() {
		if (isset($_SESSION['MM_Username']) && preg_match("/admin...OL/", $_SESSION['MM_Username'])) {
			echo '<li><a href="../../../manage.php" class="manage" target="_self">管理</a></li>';
		} else {
			echo '<li><a href="../../../service.php" class="service" target="_self">服务</a></li>';
		}
	}

	public function table1() {
		include 'conn.php';
		//连接数据库
		//索引并传递数据
		$res = mysqli_query($con, '
           select nickname,username,password,gender from user');
		//建表
		echo '<table class="table1">';
		echo '<tr><th colspan=4>查看用户信息</th></tr>';
		echo '<tr><th>昵称</th><th>用户名</th><th>密码</th><th>性别</th></tr>';
		foreach ($res as $rows) {
			echo '<tr><td>' . $rows['nickname'] . '</td><td>' . $rows['username'] . '</td><td>' . $rows['password'] . '</td><td>' . $rows['gender'] . '</td></tr>';
		}
		echo '</table>';
	}

	public function table2() {
		include 'conn.php';
		//连接数据库
		//索引并传递数据
		$res = mysqli_query($con, '
           select id,index_images_src,index_tuku_src from images_index');
		//建表
		echo '<table class="table1">';
		echo '<tr><th>编号</th><th>播放器图片路径</th><th>图库背景图片路径</th></tr>';
		foreach ($res as $rows) {
			echo '<tr><td>' . $rows['id'] . '</td><td>' . $rows['index_images_src'] . '</td><td>' . $rows['index_tuku_src'] . '</td></tr>';
		}
		echo '</table>';
	}

	public function table3() {
		include 'conn.php';
		//连接数据库
		//索引并传递数据
		$res = mysqli_query($con, '
           select id,src from images_tuku1');
		//建表
		echo '<table class="table1">';
		echo '<tr><th>编号</th><th>图库一图片路径</th></tr>';
		foreach ($res as $rows) {
			echo '<tr><td>' . $rows['id'] . '</td><td>' . $rows['src'] . '</td></tr>';
		}
		echo '</table>';
	}

	public function table4() {
		include 'conn.php';
		//连接数据库
		//索引并传递数据
		$res = mysqli_query($con, '
           select id,src from images_tuku2');
		//建表
		echo '<table class="table1">';
		echo '<tr><th>编号</th><th>图库二图片路径</th></tr>';
		foreach ($res as $rows) {
			echo '<tr><td>' . $rows['id'] . '</td><td>' . $rows['src'] . '</td></tr>';
		}
		echo '</table>';
	}

	public function table5() {
		include 'conn.php';
		//连接数据库
		//索引并传递数据
		$res = mysqli_query($con, '
           select id,src from images_tuku3');
		//建表
		echo '<table class="table1">';
		echo '<tr><th>编号</th><th>图库三图片路径</th></tr>';
		foreach ($res as $rows) {
			echo '<tr><td>' . $rows['id'] . '</td><td>' . $rows['src'] . '</td></tr>';
		}
		echo '</table>';
	}

	public function table6() {
		include 'conn.php';
		//连接数据库
		//索引并传递数据
		$res = mysqli_query($con, '
           select id,src from images_tuku4');
		//建表
		echo '<table class="table1">';
		echo '<tr><th>编号</th><th>图库四图片路径</th></tr>';
		foreach ($res as $rows) {
			echo '<tr><td>' . $rows['id'] . '</td><td>' . $rows['src'] . '</td></tr>';
		}
		echo '</table>';
	}

	public function history() {
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
			$url = $_SERVER['REQUEST_URI'];
			//获取当前页面URL
			$arr[] = $url;
			//将当前URL保存到数组中
			$urls = serialize($arr);
			//存储为字符串
			setcookie('his', $urls);
			//保存到cookie当中
		}
	}

}

class Images implements ClassLib {
	public function index_tuku_src() {
		//提取图片路径
		include 'conn.php';
		//连接数据库
		$sql = "select index_tuku_src from images_index where id=1";
		$result = mysqli_query($con, $sql);
		while ($rows = mysqli_fetch_array($result))
			echo '<a href="index/tuku1.php" target="_blank">
						<img src="' . $rows['index_tuku_src'] . '">
					</a>';
		$sql = "select index_tuku_src from images_index where id=2";
		$result = mysqli_query($con, $sql);
		while ($rows = mysqli_fetch_array($result))
			echo '<a href="index/tuku2.php" target="_blank">
						<img src="' . $rows['index_tuku_src'] . '">
					</a>';
		$sql = "select index_tuku_src from images_index where id=3";
		$result = mysqli_query($con, $sql);
		while ($rows = mysqli_fetch_array($result))
			echo '<a href="index/tuku3.php" target="_blank">
						<img src="' . $rows['index_tuku_src'] . '">
					</a>';
		$sql = "select index_tuku_src from images_index where id=4";
		$result = mysqli_query($con, $sql);
		while ($rows = mysqli_fetch_array($result))
			echo '<a href="index/tuku4.php" target="_blank">
						<img src="' . $rows['index_tuku_src'] . '">
					</a>';

	}

	public function index_images_src() {
		//提取图片路径
		include 'conn.php';
		//连接数据库
		$sql = "select index_images_src from images_index";
		$result = mysqli_query($con, $sql);
		while ($rows = mysqli_fetch_array($result))
			echo '<img src="' . $rows['index_images_src'] . '">';

	}

	public function images_tuku1_src() {
		//提取图片路径
		include 'conn.php';
		//连接数据库
		$sql = "select src from images_tuku1";
		$result = mysqli_query($con, $sql);
		while ($rows = mysqli_fetch_array($result))
			echo "'" . $rows['src'] . "',";

	}

	public function images_tuku2_src() {
		//提取图片路径
		include 'conn.php';
		//连接数据库
		$sql = "select src from images_tuku2";
		$result = mysqli_query($con, $sql);
		while ($rows = mysqli_fetch_array($result))
			echo "'" . $rows['src'] . "',";
	}

	public function images_tuku3_src() {
		//提取图片路径
		include 'conn.php';
		//连接数据库
		$sql = "select src from images_tuku3";
		$result = mysqli_query($con, $sql);
		while ($rows = mysqli_fetch_array($result))
			echo "'" . $rows['src'] . "',";

	}

	public function images_tuku4_src() {
		//提取图片路径
		include 'conn.php';
		//连接数据库
		$sql = "select src from images_tuku4";
		$result = mysqli_query($con, $sql);
		while ($rows = mysqli_fetch_array($result))
			echo "'" . $rows['src'] . "',";

	}

}

class File implements ClassLib {
	public function Click() {
		$file = 'textfile/tongji.db';
		//$data = unserialize(file_get_contents($file));
		$fp = fopen($file, 'r+');
		$content = '';

		if (flock($fp, LOCK_EX)) {
			while (($buffer = fgets($fp, 1024)) != false) {
				$content = $content . $buffer;
			}
			$data = unserialize($content);

			//设置记录键值
			$total = 'total';
			$month = date('Ym');
			$today = date('Ymd');
			$yesterday = date('Ymd', strtotime("-1 day"));
			$tongji = array();
			// 总访问增加
			$tongji[$total] = $data[$total] + 1;
			// 本月访问量增加
			$tongji[$month] = $data[$month] + 1;
			// 今日访问增加
			$tongji[$today] = $data[$today] + 1;
			//保持昨天访问
			$tongji[$yesterday] = $data[$yesterday];

			//保存统计数据
			ftruncate($fp, 0);
			// 将文件截断到给定的长度
			rewind($fp);
			// 倒回文件指针的位置
			fwrite($fp, serialize($tongji));
			flock($fp, LOCK_UN);
			fclose($fp);
		}
	}

	public function Click_subcatalog1() {
		$file = '../textfile/tongji.db';
		//$data = unserialize(file_get_contents($file));
		$fp = fopen($file, 'r+');
		$content = '';

		if (flock($fp, LOCK_EX)) {
			while (($buffer = fgets($fp, 1024)) != false) {
				$content = $content . $buffer;
			}
			$data = unserialize($content);

			//设置记录键值
			$total = 'total';
			$month = date('Ym');
			$today = date('Ymd');
			$yesterday = date('Ymd', strtotime("-1 day"));
			$tongji = array();
			// 总访问增加
			$tongji[$total] = $data[$total] + 1;
			// 本月访问量增加
			$tongji[$month] = $data[$month] + 1;
			// 今日访问增加
			$tongji[$today] = $data[$today] + 1;
			//保持昨天访问
			$tongji[$yesterday] = $data[$yesterday];

			//保存统计数据
			ftruncate($fp, 0);
			// 将文件截断到给定的长度
			rewind($fp);
			// 倒回文件指针的位置
			fwrite($fp, serialize($tongji));
			flock($fp, LOCK_UN);
			fclose($fp);
		}
	}

	public function Click_subcatalog2() {
		$file = '../../../textfile/tongji.db';
		//$data = unserialize(file_get_contents($file));
		$fp = fopen($file, 'r+');
		$content = '';

		if (flock($fp, LOCK_EX)) {
			while (($buffer = fgets($fp, 1024)) != false) {
				$content = $content . $buffer;
			}
			$data = unserialize($content);

			//设置记录键值
			$total = 'total';
			$month = date('Ym');
			$today = date('Ymd');
			$yesterday = date('Ymd', strtotime("-1 day"));
			$tongji = array();
			// 总访问增加
			$tongji[$total] = $data[$total] + 1;
			// 本月访问量增加
			$tongji[$month] = $data[$month] + 1;
			// 今日访问增加
			$tongji[$today] = $data[$today] + 1;
			//保持昨天访问
			$tongji[$yesterday] = $data[$yesterday];

			//保存统计数据
			ftruncate($fp, 0);
			// 将文件截断到给定的长度
			rewind($fp);
			// 倒回文件指针的位置
			fwrite($fp, serialize($tongji));
			flock($fp, LOCK_UN);
			fclose($fp);
		}
	}

	public function Clicknum() {
		$file = 'textfile/tongji.db';
		//$data = unserialize(file_get_contents($file));
		$fp = fopen($file, 'r+');
		$content = '';

		if (flock($fp, LOCK_EX)) {
			while (($buffer = fgets($fp, 1024)) != false) {
				$content = $content . $buffer;
			}
			$data = unserialize($content);

			//设置记录键值
			$total = 'total';
			$month = date('Ym');
			$today = date('Ymd');
			$yesterday = date('Ymd', strtotime("-1 day"));
			$tongji = array();
			// 总访问增加
			$tongji[$total] = $data[$total] + 1;
			// 本月访问量增加
			$tongji[$month] = $data[$month] + 1;
			// 今日访问增加
			$tongji[$today] = $data[$today] + 1;
			//保持昨天访问
			$tongji[$yesterday] = $data[$yesterday];

			//保存统计数据
			ftruncate($fp, 0);
			// 将文件截断到给定的长度
			rewind($fp);
			// 倒回文件指针的位置
			fwrite($fp, serialize($tongji));
			flock($fp, LOCK_UN);
			fclose($fp);

			//输出数据
			$total = $tongji[$total];
			$month = $tongji[$month];
			$today = $tongji[$today];
			$yesterday = $tongji[$yesterday] ? $tongji[$yesterday] : 0;
			echo '<table class="table1">';
			echo '<tr><th colspan=2>点击量</th></tr><tr><td width=30%>访问总量</td><td>' . $total . '</td></tr><tr><td>本月 </td><td>' . $month . '</td></tr><tr><td>昨日</td><td>' . $yesterday . '</td></tr><tr><td>今日</td><td>' . $today . '</td></tr>';
			echo '</table>';
		}
	}

	//Footer版权信息读取
	public function footer() {
		$footerfile = fopen('textfile/Footer.txt', 'r') or die("Unable to open file!");
		while (!feof($footerfile)) {
			echo '<p>' . fgets($footerfile) . '</p>';
		}
	}

	//子目录Footer版权信息读取
	public function footer_subcatalog1() {
		$footerfile = fopen('../textfile/Footer.txt', 'r') or die("Unable to open file!");
		while (!feof($footerfile)) {
			echo '<p>' . fgets($footerfile) . '</p>';
		}
	}

	//子目录Footer版权信息读取
	public function footer_subcatalog2() {
		$footerfile = fopen('../../../textfile/Footer.txt', 'r') or die("Unable to open file!");
		while (!feof($footerfile)) {
			echo '<p>' . fgets($footerfile) . '</p>';
		}
	}

	public function download() {
		$outFile = "download/video.zip";
		$zip = new ZipArchive();
		$zip -> open($outFile, ZipArchive::CREATE);
		$zip -> addFile("index/video/jianshenvideo.mp4");
		$zip -> close();
		echo '<a class="outfile" href="' . $outFile . '">视频下载</a>';
		$outFile = "download/tuku1.zip";
		$zip = new ZipArchive();
		$zip -> open($outFile, ZipArchive::CREATE);
		$zip -> addFile("index/images/tuku1/1.jpg");
		$zip -> addFile("index/images/tuku1/2.jpg");
		$zip -> addFile("index/images/tuku1/3.jpg");
		$zip -> addFile("index/images/tuku1/4.jpg");
		$zip -> addFile("index/images/tuku1/5.jpg");
		$zip -> addFile("index/images/tuku1/6.jpg");
		$zip -> addFile("index/images/tuku1/7.jpg");
		$zip -> addFile("index/images/tuku1/88.jpg");
		$zip -> close();
		echo '<a class="outfile" href="' . $outFile . '">图库一下载</a>';
		$outFile = "download/tuku2.zip";
		$zip = new ZipArchive();
		$zip -> open($outFile, ZipArchive::CREATE);
		$zip -> addFile("index/images/tuku2/1.jpg");
		$zip -> addFile("index/images/tuku2/2.jpg");
		$zip -> addFile("index/images/tuku2/3.jpg");
		$zip -> addFile("index/images/tuku2/4.jpg");
		$zip -> addFile("index/images/tuku2/5.jpg");
		$zip -> addFile("index/images/tuku2/6.jpg");
		$zip -> addFile("index/images/tuku2/7.jpg");
		$zip -> close();
		echo '<a class="outfile" href="' . $outFile . '">图库二下载</a>';
		$outFile = "download/tuku3.zip";
		$zip = new ZipArchive();
		$zip -> open($outFile, ZipArchive::CREATE);
		$zip -> addFile("index/images/tuku3/1.jpg");
		$zip -> addFile("index/images/tuku3/2.jpg");
		$zip -> addFile("index/images/tuku3/3.jpg");
		$zip -> addFile("index/images/tuku3/4.jpg");
		$zip -> addFile("index/images/tuku3/5.jpg");
		$zip -> addFile("index/images/tuku3/6.jpg");
		$zip -> addFile("index/images/tuku3/7.jpg");
		$zip -> addFile("index/images/tuku3/88.jpg");
		$zip -> close();
		echo '<a class="outfile" href="' . $outFile . '">图库三下载</a>';
		$outFile = "download/tuku4.zip";
		$zip = new ZipArchive();
		$zip -> open($outFile, ZipArchive::CREATE);
		$zip -> addFile("index/images/tuku4/1.jpg");
		$zip -> addFile("index/images/tuku4/2.jpg");
		$zip -> addFile("index/images/tuku4/3.jpg");
		$zip -> addFile("index/images/tuku4/4.jpg");
		$zip -> addFile("index/images/tuku4/5.jpg");
		$zip -> addFile("index/images/tuku4/6.jpg");
		$zip -> addFile("index/images/tuku4/7.jpg");
		$zip -> addFile("index/images/tuku4/88.jpg");
		$zip -> close();
		echo '<a class="outfile" href="' . $outFile . '">图库四下载</a>';
	}

}
?>