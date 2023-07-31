<?php
include($_SERVER['DOCUMENT_ROOT'] . '/sjk/sjk.php');  
$yuming = mysqli_real_escape_string($conn, $_POST['yuming']);
$beizhu = mysqli_real_escape_string($conn, $_POST['beizhu']);
$jiage = mysqli_real_escape_string($conn, $_POST['jiage']);
$pingtai = mysqli_real_escape_string($conn, $_POST['pingtai']);
$zhuangtai = mysqli_real_escape_string($conn, $_POST['zhuangtai']);
$link = mysqli_real_escape_string($conn, $_POST['link']);

// 检查是否有字段为空
if (empty($yuming) || empty($beizhu) || empty($jiage) || empty($pingtai) || empty($zhuangtai) || empty($link)) {
    echo '<script>alert("请填写完整的信息"); window.location.href = "new.php";</script>';
    exit();
}

// 检查域名是否已存在
$checkSql = "SELECT * FROM mi WHERE yuming = '$yuming'";
$checkResult = mysqli_query($conn, $checkSql);
if (mysqli_num_rows($checkResult) > 0) {
    // 域名已存在
    echo '<script>alert("该域名已存在，请重新输入"); window.location.href = "new.php";</script>';
    exit();
}

$sql = "INSERT INTO mi (yuming, beizhu, jiage, pingtai, zhuangtai, link) VALUES ('$yuming', '$beizhu', '$jiage', '$pingtai', '$zhuangtai', '$link')";
$rs = mysqli_query($conn, $sql);

if ($rs) {
    echo '<script>alert("新增成功"); window.location.href = "index.php";</script>';
} else {
    $error_message = mysqli_error($conn);
    echo '<script>alert("新增失败: ' . $error_message . '"); window.location.href = "new.php";</script>';
}

$conn->close();
?>
