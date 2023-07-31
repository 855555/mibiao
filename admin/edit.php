<?php
include('head.php');
include('mbgx.php');
?>

<style>
    .form-item-gap {
        margin-bottom: 15px; 
</style>


    <div style="padding: 15px;">
        <ul class="layui-nav layui-bg-gray">
            <li class="layui-nav-item"><a href="index.php">域名列表</a></li>
            <li class="layui-nav-item"><a href="">更改域名</a></li>
            <span class="layui-nav-bar" style="left: 120px; top: 57px; width:76px; opacity: 1;"></span>
        </ul>


 <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <div class="layui-row">
                    <div class="layui-col-md8">
                        <form class="layui-form-itom" method="post" action="gengxin.php">
                          
                          
                          
       
<div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        ID
      </div>
     <input type="text" name="id" class="layui-input" value="<?php echo $id; ?>" readonly style="width: 100px;">
    </div>
  </div>                   
                          
                          

<div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        域名
      </div>
       <input type="text" name="yuming" class="layui-input" value="<?php echo $yuming; ?>">
    </div>
  </div>


<div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        备注
      </div>
        <input type="text" name="beizhu" class="layui-input"value="
<?php echo $beizhu; ?>">
    </div>
  </div>

                   

<div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        价格
      </div>
      <input type="text" name="jiage" class="layui-input" value="<?php echo $jiage; ?>" style="width: 100px;">
      <div class="layui-input-split layui-input-suffix">
        元
      </div>
    </div>
  </div>


<div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        平台
      </div>
       <input type="text" name="pingtai" class="layui-input" value="<?php echo $pingtai; ?>">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        购买链接
      </div>
       <input type="text" name="link" class="layui-input" value="<?php echo $link; ?>">
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


