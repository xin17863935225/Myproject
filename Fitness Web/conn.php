<?php
$con = mysqli_connect('localhost', 'root', '', 'fintness_web', 3306) or die("数据库连接错误");
//连接数据库
mysqli_query($con,"set character set 'utf8'");
mysqli_query($con,"set names 'utf8'");
?>