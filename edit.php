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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 从表单获取学生信息
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    // 构建更新SQL语句
    $sql = "UPDATE student_info SET age=$age, gender='$gender' WHERE name='$name'";

    // 执行更新操作
    if ($conn->query($sql) === TRUE) {
        echo "学生信息修改成功";
    } else {
        echo "修改学生信息时出现错误: " . $conn->error;
    }
}

// 关闭数据库连接
$conn->close();
?>
