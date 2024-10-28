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
        // 从表单获取学生姓名
        $name = $_POST["name"];

        // 构建查询SQL语句
        $sql = "SELECT * FROM student_info WHERE name='$name'";

        // 执行查询操作
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // 输出查询结果和编辑按钮
            while ($row = $result->fetch_assoc()) {
                echo "<br>";
                echo "ID: " . $row["id"] . "<br>";
                echo "姓名: " . $row["name"] . "<br>";
                echo "年龄: " . $row["age"] . "<br>";
                echo "性别: " . $row["gender"] . "<br>";
            }
        } else {
            echo "<br>没有找到相关学生信息";
        }
    }

    // 关闭数据库连接
    $conn->close();
    ?>