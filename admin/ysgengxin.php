<?php

include($_SERVER['DOCUMENT_ROOT'] . '/sjk/sjk.php');  

// 获取传递的参数
$id = $_POST['id'];
$zhuangtai = $_POST['zhuangtai'];


// 检查传递的值是否合法
if ($zhuangtai !== '未售' && $zhuangtai !== '已售') {
  $response = array(
    'status' => 'error',
    'message' => '传递的状态值不合法'
  );
  echo json_encode($response);
  mysqli_close($conn);
  exit;
}

// 更新状态的SQL语句
$sql = "UPDATE mi SET zhuangtai = '$zhuangtai' WHERE id = $id";









 
// 执行更新操作
if (mysqli_query($conn, $sql)) {
    // 更新成功
    mysqli_close($conn);
    echo '<script>';
    echo 'alert("状态已成功更新");';
    echo 'window.location.href = "index.php";';
    echo '</script>';
} else {
    // 更新失败
    $response = array(
        'status' => 'error',
        'message' => '更新失败: ' . mysqli_error($conn)
    );
    echo json_encode($response);
}

// 关闭数据库连接
mysqli_close($conn);















?>