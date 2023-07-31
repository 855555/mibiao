<?php
session_start();
// 检测是否已登录
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  // 未登录，重定向到登录页面
  header("Location: login.php");
  exit;
}
// 登录验证成功后设置会话变量
$_SESSION['logged_in'] = true;

include($_SERVER['DOCUMENT_ROOT'] . '/sjk/sjk.php');    

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>后台登录</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/layui/css/layui.css" rel="stylesheet">
  <script src="/layui/layui.js"></script>
</head>
<body>
<ul class="layui-nav layui-bg-gray">
  <li class="layui-nav-item"><a href="/admin">后台首页</a></li>

  <li class="layui-nav-item"><a href="/admin/gy.php">关于</a></li>
  <li class="layui-nav-item">
    <a href="javascript:;">设置</a>
    <dl class="layui-nav-child">
      <dd><a href="/admin/titlegx.php">网站信息</a></dd>
      <dd><a href="/admin/user.php">管理员账号</a></dd>
    </dl>
  </li>
   <li class="layui-nav-item"><a href="/admin/logout.php">退出登录</a></li>
</ul>