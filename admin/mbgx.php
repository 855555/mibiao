<?php


// 获取 ID 参数
$id = $_GET['id'];
// 查询数据库
$sql = "SELECT * FROM mi WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $yuming = $row['yuming'];
    $beizhu = $row['beizhu'];
    $jiage = $row['jiage'];
    $pingtai = $row['pingtai'];
    $zhuangtai = $row['zhuangtai'];
    $link = $row['link'];
    
    
} else {
    $yuming = ""; // 如果没有查询到结果，则设置为空字符串
}



?>