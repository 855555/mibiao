<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 获取前端传递的文本数据
    $text = $_POST['text'];

    // 使用 password_hash 函数对文本进行哈希加密
    $hashed_text = password_hash($text, PASSWORD_BCRYPT);

    // 输出加密后的文本
    echo $hashed_text;
}
?>
