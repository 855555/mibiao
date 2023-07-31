<?php
include($_SERVER['DOCUMENT_ROOT'] . '/sjk/sjk.php');

$id = 1;
$zhanghao = $_POST['zhanghao'];
$password = $_POST['password'];

// 获取原始数据
$sql = "SELECT * FROM user WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// 判断是否有实际修改
$isModified = false;
$updateFields = array();

if ($row['zhanghao'] != $zhanghao) {
    $isModified = true;
    $updateFields[] = "zhanghao = '$zhanghao'";
}

if ($row['password'] != $password) {
    $isModified = true;
    $updateFields[] = "password = '$password'";
}

// 如果没有实际修改，则不执行更新操作
if (!$isModified) {
    echo '<script>alert("没有进行任何修改"); window.location.href = "index.php";</script>';
    exit;
}

// 构建更新数据的 SQL 语句
$updateFieldsStr = implode(", ", $updateFields);
$sql = "UPDATE user SET $updateFieldsStr WHERE id = $id";

$rs = mysqli_query($conn, $sql);

if ($rs) {
    echo '<script>alert("修改成功"); window.location.href = "index.php";</script>';
} else {
    $error_message = mysqli_error($conn);
    echo '<script>alert("修改失败: ' . $error_message . '"); window.location.href = "index.php";</script>';
}

$conn->close();
?>
