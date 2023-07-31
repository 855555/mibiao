<?php
include($_SERVER['DOCUMENT_ROOT'] . '/sjk/sjk.php');  
$id = $_POST['id'];
$yuming = $_POST['yuming'];
$jiage = $_POST['jiage'];
$pingtai = $_POST['pingtai'];
$beizhu = $_POST['beizhu'];
$link = $_POST['link'];
if (!isset($id) || empty($id)) {
    echo '<script>alert("无效的 ID"); window.location.href = "index.php";</script>';
    exit;
}

// 获取原始数据
$sql = "SELECT * FROM mi WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// 判断是否有实际修改
if ($row['yuming'] == $yuming && $row['beizhu'] == $beizhu && $row['jiage'] == $jiage && $row['pingtai'] == $pingtai && $row['link'] == $link) {
    echo '<script>alert("没有进行任何修改"); window.location.href = "index.php";</script>';
    exit;
}

// 更新数据
$sql = "UPDATE mi SET
        yuming = '$yuming',
        beizhu = '$beizhu',
        jiage = '$jiage',
        pingtai = '$pingtai',
        link = '$link'
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


