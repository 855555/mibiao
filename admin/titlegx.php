<?php
include('head.php');
include('btgx.php');

?>

<style>
    .form-item-gap {
        margin-bottom: 15px; 
    }
</style>

    <div style="padding: 15px;">
        <ul class="layui-nav layui-bg-gray">
          
            <li class="layui-nav-item"><a href="">网站信息</a></li>
           
        </ul>


 <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <div class="layui-row">
                    <div class="layui-col-md8">
                        <form class="layui-form-itom" method="post" action="btgxx.php">
<div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        标题
      </div>
    <input type="text" name="biaoti" class="layui-input" value="<?php echo isset($data[0]['biaoti']) ? $data[0]['biaoti'] : ''; ?>" style="width: 300px;">
    </div>
  </div>                   

<div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        描述
      </div>
    <textarea name="miaoshu" placeholder="" class="layui-textarea" style="width: 300px;"><?php echo isset($data[0]['miaoshu']) ? $data[0]['miaoshu'] : ''; ?></textarea>
    
    </div>
  </div>   
        
                            
             
<div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        关键词
      </div>
      <textarea name="guanjianci" placeholder="" class="layui-textarea" style="width: 290px;"><?php echo isset($data[0]['guanjianci']) ? $data[0]['guanjianci'] : ''; ?></textarea>
      
    </div>
  </div>               
                  
                            
                            
                            
       <div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        底部代码
      </div>
      <textarea name="foot" placeholder="" class="layui-textarea" style="width: 290px;"><?php echo isset($data[0]['foot']) ? $data[0]['foot'] : ''; ?></textarea>
      
    </div>
  </div>               
                                       
                            
                   
<div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        头像url
      </div>
    
      <input type="text" name="touxiang" class="layui-input" value="<?php echo isset($data[0]['touxiang']) ? $data[0]['touxiang'] : ''; ?>" style="width: 300px;">
    </div>
  </div>                        
                            
        <div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        签名
      </div>
      <textarea name="qianming" placeholder="" class="layui-textarea" style="width: 290px;"><?php echo isset($data[0]['qianming']) ? $data[0]['qianming'] : ''; ?></textarea>
      
    </div>
  </div>                        
                               
        <div class="layui-form-item">
    <div class="layui-input-group">
      <div class="layui-input-split layui-input-prefix">
        赞助url
      </div>
   
      <input type="text" name="zanzhu" class="layui-input" value="<?php echo isset($data[0]['zanzhu']) ? $data[0]['zanzhu'] : ''; ?>" style="width: 300px;">
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
