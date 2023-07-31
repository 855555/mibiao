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
if ($row['zhanghao'] == $zhanghao && password_verify($password, $row['password'])) {
    echo '<script>alert("没有进行任何修改"); window.location.href = "index.php";</script>';
    exit;
}

// 哈希加密密码
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// 更新数据
$sql = "UPDATE user SET
        zhanghao = '$zhanghao',
        password = '$hashedPassword'
        WHERE id = $id";

$rs = mysqli_query($conn, $sql);

if ($rs) {
    echo '<script>alert("修改成功"); window.location.href = "index.php";</script>';
} else {
    $error_message = mysqli_error($conn);
    echo '<script>alert("修改失败: ' . $error_message . '"); window.location.href = "index.php";</script>';
}

$conn->close();
?>
