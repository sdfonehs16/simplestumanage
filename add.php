<?php
$servername = "localhost"; // 数据库服务器名称
$username = "students"; // 数据库用户名
$password = "123456"; // 数据库密码
$dbname = "students"; // 数据库名称

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 从表单获取学生信息
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    // 构建插入SQL语句
    $sql = "INSERT INTO student_info (name, age, gender)
    VALUES ('$name', $age, '$gender')";

    // 执行插入操作
    if ($conn->query($sql) === TRUE) {
        echo "学生信息添加成功";
    } else {
        echo "添加学生信息时出现错误: " . $conn->error;
    }
}

// 关闭数据库连接
$conn->close();
?>
