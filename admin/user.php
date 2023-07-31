<?php
include('head.php');
include('userlb.php');

?>



    <div style="padding: 15px;">
        <ul class="layui-nav layui-bg-gray">
          
            <li class="layui-nav-item"><a href="">账号信息</a></li>
           
        </ul>

   

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
