<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/sjk/sjk.php');  

$zhanghao = $_POST['zhanghao'];
$password = $_POST['password'];

if (strlen($zhanghao) < 2) {
    $response = array('success' => false, 'message' => '账号不能少于2个字');
    echo json_encode($response);
    exit();
}

$sql = "SELECT * FROM user WHERE zhanghao = ? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $zhanghao);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['zhanghao'] = $zhanghao;
        $_SESSION['logged_in'] = true;
        $response = array('success' => true, 'message' => '登录成功');
        echo json_encode($response);
        exit();
    }
}

$response = array('success' => false, 'message' => '账号或密码错误');
echo json_encode($response);
?>


