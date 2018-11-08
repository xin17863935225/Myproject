<?php
//开启session
session_start();
// 清空session信息
$_SESSION = array();

// 如果要清理的更彻底，那么同时删除会话 cookie
// 注意：这样不但销毁了会话中的数据，还同时销毁了会话本身
if (isset($_SESSION['MM_Username'])) {
    setcookie(session_name(), '', time() - (3600 * 24 * 365),'/');
}

// 最后，销毁session
session_destroy();

echo "<script>alert('已注销！');parent.location.href='index.php';</script>";
?>