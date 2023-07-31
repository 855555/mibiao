<?php
include($_SERVER['DOCUMENT_ROOT'] . '/sjk/sjk.php');  

$biaoti = $_POST['biaoti'];
$miaoshu = $_POST['miaoshu'];
$guanjianci = $_POST['guanjianci'];
$foot = $_POST['foot'];
$touxiang = $_POST['touxiang'];
$qianming = $_POST['qianming'];
$zanzhu = $_POST['zanzhu'];
$id = 1; 

// 更新数据
$sql = "UPDATE title SET
        biaoti = '$biaoti',
        miaoshu = '$miaoshu',
        guanjianci = '$guanjianci',
        foot = '$foot',
        touxiang = '$touxiang',
        qianming = '$qianming',
        zanzhu = '$zanzhu'
        WHERE id = $id";

$rs = mysqli_query($conn, $sql);

if ($rs) {
    echo '<script>alert("修改成功"); window.location.href = "/admin/index.php";</script>';
} else {
    $error_message = mysqli_error($conn);
    echo '<script>alert("修改失败: ' . $error_message . '"); window.location.href = "/admin/index.php";</script>';
}

$conn->close();
?>
