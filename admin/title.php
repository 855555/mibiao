<?php
header('Content-Type: application/json; charset=utf-8'); 
include($_SERVER['DOCUMENT_ROOT'] . '/sjk/sjk.php');   

// 建立数据库连接
$connection = new mysqli($host, $username, $password, $dbname);

// 检查连接是否成功
if ($connection->connect_error) {
    die('数据库连接失败: ' . $connection->connect_error);
}

$connection->set_charset('utf8');

$sql = 'SELECT biaoti, miaoshu, guanjianci FROM title LIMIT 1'; 
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $data = [
        'biaoti' => $row['biaoti'],
        'miaoshu' => $row['miaoshu'],
        'guanjianci' => $row['guanjianci']
    ];
} else {
    $data = [
        'biaoti' => 'Default Title',
        'miaoshu' => 'Default Description',
        'guanjianci' => 'default, keywords'
    ];
}

// 关闭数据库连接
$connection->close();
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>
