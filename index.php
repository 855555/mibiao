<?php
include('title.php');  
?>
<!DOCTYPE HTML>

<html>
    <head>
    <meta charset="utf-8">
 
     <title><?php echo $data[0]['biaoti']; ?></title>
    <meta name="description" content="<?php echo $data[0]['miaoshu']; ?>">
    <meta name="keywords" content="<?php echo $data[0]['guanjianci']; ?>" id="keywords">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/css/mi.css" id="css-main" rel="stylesheet">
    <link href="/css/biao.css" id="css-main" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        img {
            max-width: 100%;
            height: auto;
        }
        .figure-container {
            max-width: 100%;
            margin: 0 auto;
        }

        mibutton {
        }
        ...
    </style>

 <link rel="stylesheet" href="https://cdn.staticfile.org/bootstrap/5.2.3/css/bootstrap.min.css">
<style type="text/css">
                        @font-face { font-style: normal; font-family: "HarmonyOS_M"; src: url("https://img.abohe.cn/DingTalk.woff2")
                        format("truetype"); font-display: swap; } bbutton::after { --slice-0:inset(50%
                        50% 50% 50%); --slice-1:inset(80% -6px 0 0); --slice-2:inset(50% -6px 30%
                        0); --slice-3:inset(10% -6px 85% 0); --slice-4:inset(40% -6px 43% 0); --slice-5:inset(80%
                        -6px 5% 0); content:"米表"; display:block; position:absolute; top:0;
                        left:0; right:0; bottom:0; background:linear-gradient(45deg,transparent
                        3%,#df00ff 3%,#9cc0ee 5%,#a300ff 5%); text-shadow:-3px -3px 0px #81baf5,3px
                        3px 0px #f7f7ff; clip-path:var(--slice-0);margin: 0px -10px 0px 0px; }
                </style>




<body>
  
   <style>
      
        .figure-container {
            text-align: center;
        }

  
        img {
            border-width: 6px;
            border-radius: 100px;
        }

        p {
            margin: 0;
            font-weight: bold;
        }
    </style>
 
 <div class="figure-container">
        <figure>
            <img decoding="async" src="<?php echo isset($data[0]['touxiang']) ? $data[0]['touxiang'] : ''; ?>" alt="" class="wp-image-266" width="116" height="116" srcset="<?php echo isset($data[0]['touxiang']) ? $data[0]['touxiang'] : ''; ?> 150w, <?php echo isset($data[0]['touxiang']) ? $data[0]['touxiang'] : ''; ?> 300w, <?php echo isset($data[0]['touxiang']) ? $data[0]['touxiang'] : ''; ?> 503w" sizes="(max-width: 116px) 100vw, 116px">
        </figure>

        <p><strong><?php echo isset($data[0]['qianming']) ? $data[0]['qianming'] : ''; ?></strong></p>
    </div>


  
    <div class="container" style="margin-top: 20px">
     
        <div class="row">
            <div class="col-12 applecard">
                
                <div class="row" style="border-radius: 1.0em;" id="待售">
                    <div class="col-12" style="margin-top: 20px;margin-bottom: 2px;">
                        <mibutton>
                            <b>待售</b>
                        </mibutton>
                    </div>
                    <div class="col-12 mibox"id="data-container">
                        
                    </div>
                </div>

                <div class="row" style="border-radius: 1.0em;margin-bottom: 50px;" id="已售">
                    <div class="col-12" style="margin-top: 20px;margin-bottom: 2px;">
                        <mibutton>
                            <b>已售</b>
                        </mibutton>
                    </div>
                    
                        <div class="row" id="yishou">
                            
                        </div>
                  
                </div>

    
        
  <div class="bg-body-extra-light">
        <div class="content content-full pt-7">
            <div class="py-4 text-center">
                <div class="position-relative">
                    <h2 class="fw-bold mb-2 text-center">
                        域名交易 <span class="text-primary">流程</span>
                    </h2>
                    <h5>挑选域名→联系卖家→支付费用→过户域名→完成交易🤝</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="py-5 text-center">
                <h3 class="fw-bold mb-2">坚持你的梦想</h3>
                <h4 class="fw-normal text-muted mb-4">永远相信美好的事情 即将发生</h4>
                <a class="btn btn-alt-primary" href="<?php echo isset($data[0]['zanzhu']) ? $data[0]['zanzhu'] : ''; ?>">赞助我们</a>
            </div>
        </div>
    </div>

  
<?php echo isset($data[0]['foot']) ? $data[0]['foot'] : ''; ?>
 

            </div>
        </div>
 
  </div>




    <script>
      
       var xhr = new XMLHttpRequest();
xhr.open("GET", "weishou.php", true); 
xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
        var dataContainer = document.getElementById("data-container");
        dataContainer.innerHTML = xhr.responseText;
    } else {
        // 处理其他状态或错误情况（可选）
    }
};
xhr.send();

 var xhrYs = new XMLHttpRequest();
xhrYs.open("GET", "yishou.php", true); 
xhrYs.onreadystatechange = function() {
    if (xhrYs.readyState === 4 && xhrYs.status === 200) {
        var yishouContainer = document.getElementById("yishou");
        yishouContainer.innerHTML = xhrYs.responseText;
    } else {
        // 处理其他状态或错误情况（可选）
    }
};
xhrYs.send();

    </script>
</body>
</html>