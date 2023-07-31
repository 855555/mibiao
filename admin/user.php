<?php
include('head.php');
include('userlb.php');

?>

<style>
    .form-item-gap {
        margin-bottom: 15px;
    }
</style>


    <div style="padding: 15px;">
        <ul class="layui-nav layui-bg-gray">
          
            <li class="layui-nav-item"><a href="">账号信息</a></li>
           
        </ul>
<fieldset class="layui-elem-field">
  <legend>提示</legend>
  <div class="layui-field-box">
    <P>以下密码显示的是哈希加密字符，<br>如果需要修改密码请先在下面输入明文密码进行加密，<br>然后填上加密后的哈希字符，<br>在登陆页面正常使用明文密码登陆</P>
                            
    <label for="inputText">输入要加密的明文密码：</label><br>
 <input type="text" id="inputText" class="layui-input"  style="width: 200px;">

    <button type="button" class="layui-btn layui-bg-red" onclick="encryptText()">加密</button>
 <div class="layui-panel" style="width: 200px;">
  <div style="padding: 32px; word-wrap: break-word;">
    <p id="resultText"></p>
  </div>
</div>

  </div>
</fieldset>
   

    <script src="script.js"></script>

 <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <div class="layui-row">
                    <div class="layui-col-md8">
                        <form class="layui-form-itom" method="post" action="userxg.php">
                          
                          
                          
       
<div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        账号
      </div>
    <input type="text" name="zhanghao" class="layui-input" value="<?php echo isset($data[0]['zhanghao']) ? $data[0]['zhanghao'] : ''; ?>" style="width: 300px;">
    </div>
  </div>                   
                          
        
<div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        密码
      </div>
    <textarea name="password" placeholder="" class="layui-textarea" style="width: 300px;"><?php echo isset($data[0]['password']) ? $data[0]['password'] : ''; ?></textarea>
    
    </div>
  </div>   
        

 
<style>
    .hidden-input {
        display: none;
    }
</style>


   <br>  
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                  
                               
                                    <input type="submit" name="submit" class="layui-btn layui-btn-normal" value="立即修改">
    

                                </div>
                            </div>

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>


<?php
include('foot.php');
?>
