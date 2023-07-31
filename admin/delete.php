<?php
include($_SERVER['DOCUMENT_ROOT'] . '/sjk/sjk.php');  

$id = $_GET['id'];
$sql = "DELETE FROM mi WHERE id = $id";
$rs = mysqli_query($conn, $sql);

if ($rs) {
    $response = array('status' => 'success', 'message' => '删除成功');
} else {
    $response = array('status' => 'error', 'message' => '删除失败');
}

header('Content-Type: application/json');
echo json_encode($response);
?>
