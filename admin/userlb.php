<?php


// 创建数据库连接
$connection = new mysqli($hostname, $username, $password, $dbname);

// 检查连接是否成功
if ($connection->connect_error) {
    die("连接数据库失败: " . $connection->connect_error);
}

$data = array();
$sql = "SELECT * FROM user";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// 关闭数据库连接
$connection->close();
?>