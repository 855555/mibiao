function encryptText() {
    const inputText = document.getElementById('inputText').value;

    // 使用AJAX向服务器提交加密请求
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'encrypt.php', true); // 修改为加密PHP文件
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                document.getElementById('resultText').innerText = xhr.responseText;
            } else {
                console.error('Error encrypting text:', xhr.status);
            }
        }
    };
    xhr.send('text=' + encodeURIComponent(inputText));
}

