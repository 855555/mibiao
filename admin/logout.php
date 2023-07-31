<?php
// 登出
session_start(); // 确保调用 session_start()
include($_SERVER['DOCUMENT_ROOT'] . '/sjk/sjk.php');  

// 清空所有会话变量
$_SESSION = array();

// 销毁会话
session_destroy();

// 重定向到登录页面
header('Location: login.php');
exit(); // 确保之后的代码不会执行
?>
