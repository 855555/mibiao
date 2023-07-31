<?php include('head.php'); ?>
<style>
    .form-item-gap {
        margin-bottom: 15px; 
    }
</style>

<div style="padding: 15px;">
    <ul class="layui-nav layui-bg-gray">
        <li class="layui-nav-item"><a href="index.php">域名列表</a></li>
        <li class="layui-nav-item"><a href="">新增域名</a></li>
        <span class="layui-nav-bar" style="left: 120px; top: 57px; width: 76px; opacity: 1;"></span>
    </ul>

    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <div class="layui-row">
                <div class="layui-col-md8">
                    <form class="layui-form layui-form-pane" id="form-budan" method="post" action="save.php">



<div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        域名
      </div>
      <input type="text" name="yuming" class="layui-input">
    </div>
  </div>

<div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        备注
      </div>
      <input type="text" name="beizhu" class="layui-input">
    </div>
  </div>

<div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        价格
      </div>
      <input type="text" name="jiage" class="layui-input" style="width: 100px;">
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
      <input type="text" name="pingtai" class="layui-input">
    </div>
  </div>

         <div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        状态
      </div>
    
                                <select class="layui-input" name="zhuangtai" style="width: 150px;">
                                    <option value="未售">未售</option>
                                    <option value="已售">已售</option>
                                </select>
                           
    </div>
  </div>
                <div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        购买链接
      </div>
      <input type="text" name="link" class="layui-input" value="http://">
    </div>
  </div>


                        <style>
                            .hidden-input {
                                display: none;
                            }
                        </style>
<br>
                        <div class="layui-form-item">
                          
                                <button type="submit" class="layui-btn layui-btn-normal" id="btn-submit">立即提交</button> 
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                          
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




 


<?php
include('foot.php');
?>