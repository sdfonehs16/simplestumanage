<?php
$servername = "localhost"; // 数据库服务器名称
$username = "students"; // 数据库用户名
$password = "123456"; // 数据库密码
$dbname = "students"; // 数据库名称

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接数据库失败: " . $conn->connect_error);
}
else
{
echo "数据库连接成功！";
}
?>
