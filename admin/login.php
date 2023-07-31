<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>米表管理系统1.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/layui/css/layui.css" rel="stylesheet">
 
<script src="/layui/layui.js"></script>
</head>
<body>
<style>
.demo-login-container{width: 320px; margin: 21px auto 0;}
.demo-login-other .layui-icon{position: relative; display: inline-block; margin: 0 2px; top: 2px; font-size: 26px;}
</style>
<div class="layui-container">
    <div style="height: 150px;"></div>
    <div class="layui-row">
        <div class="layui-col-md4" style="height: 50px;"></div>
        <div class="layui-col-md4" style="height: 150px;">
            <p style="text-align: center;font-size: 35px;">后台登录</p>
            <div style="height: 25px;"></div>
            <form class="layui-form" id="loginForm" action="login_check.php" method="post">
                <div class="demo-login-container">
                    <div class="layui-form-item">
                        <div class="layui-input-wrap">
                            <div class="layui-input-prefix">
                                <i class="layui-icon layui-icon-username"></i>
                            </div>
                            <input type="text" name="zhanghao" value="" lay-verify="required" placeholder="账号" lay-reqtext="请填写账号" autocomplete="off" class="layui-input" lay-affix="clear">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-wrap">
                            <div class="layui-input-prefix">
                                <i class="layui-icon layui-icon-password"></i>
                            </div>
                            <input type="password" name="password" value="" lay-verify="required" placeholder="密码" lay-reqtext="请填写密码" autocomplete="off" class="layui-input" lay-affix="eye">
                        </div>
                    </div>
                   
                    <div class="layui-form-item">
                        <button class="layui-btn layui-btn-fluid" type="submit">登陆</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
        $(document).ready(function() {
            $('#loginForm').submit(function(e) {
                e.preventDefault();

                var form = $(this);
                var url = form.attr('action');
                var formData = form.serialize();

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            alert(response.message);
                            window.location.href = 'index.php';
                        } else {
                            alert(response.message);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>

