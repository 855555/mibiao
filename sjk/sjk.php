<?php
$servername = "localhost";
$username = "mi"; //数据库账号
$password = "mibiao";//数据库密码
$dbname = "mi";//数据库名字
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("连接数据库失败: " . mysqli_connect_error());
}
function execute_query($sql) {
    global $conn;
    $result = $conn->query($sql);
    return $result;
}

header('Content-Type: text/html; charset=utf-8');
?>