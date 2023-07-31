<?php include('head.php'); 


?>

<style>
.hidden {
  display: none;
}
</style>

  <div style="padding: 15px;">

  <div class="layui-tab-content">
  <div class="layui-tab-item layui-show">
    <div class="layui-form">

      <div style="display: flex; align-items: flex-end;">
        <form class="layui-form layui-inline" method="post" action="search.php">
          <div class="layui-form-item">
            <div class="layui-inline">
              <input class="layui-input" name="yuming" style="width: 150px;" placeholder="输入域名">
            </div>
            <div class="layui-inline">
              <button class="layui-btn layui-btn-normal" type="submit" name="yuming-search">搜域名</button>
            </div>
          </div>
        </form>

      <div style="margin: 0 20px;"></div>

        <form class="layui-form layui-inline" method="post" action="search.php">
          <div class="layui-form-item">
            <div class="layui-inline">
              <select class="layui-input" name="zhuangtai" style="width: 150px;">
                <option value="">是否售出</option>
                <option value="已售">已售</option>
                <option value="未售">未售</option>
              </select>
            </div>
            <div class="layui-inline" style="margin-right: 10px;">
              <button class="layui-btn layui-btn-normal" type="submit" name="zhuangtai-search">筛选</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

 <br>
 
 

<div class="layui-inline">
  <a href="new.php">
       <button type="button" class="layui-btn" style="height: 38px;">新增域名</button>
  </a>
</div>
            </div>
          </form>


        </div>
      </div>
    </div>



        <script type="text/html" id="toolbar">
          <div class="layui-btn-container">
            <a class="layui-btn layui-btn-xs layui-btn-normal" lay-event="edit">编辑</a>
            <a class="layui-btn layui-btn-xs layui-btn-danger" lay-event="del">删除</a>
          </div>
        </script>

        <table class="layui-table" lay-data="{height:650,page:false,id:'id_table',toolbar:true,limit:9999}" lay-filter="test">
          <thead>
          <tr>
          <th lay-data="{field:'id',sort:true}">ID</th>
      
          <th lay-data="{field:'yuming',sort:true}">域名</th>
         
          <th lay-data="{field:'zhuangtai',sort:true,templet:'#switchTpl'}">状态</th>
          <th lay-data="{field:'',toolbar:'#toolbar',widt:100}">操作</th>
        </tr>
          </thead>
          <tbody>
       <?php
       
$sql = "SELECT * FROM mi ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$data = array(); 

if ($result) {
    while ($rows = mysqli_fetch_assoc($result)) {
        
        $data[] = $rows;
    }
} else {
    die("查询数据库失败: " . mysqli_error($conn));
}
    // 使用 $data 变量渲染数据
    foreach ($data as $row) {
      echo '<tr>';
      echo '<td>' . $row['id'] . '</td>';
      echo '<td>' . $row['yuming'] . '</td>';
      echo '<td>' . $row['zhuangtai'] . '</td>';
      echo '</tr>';
    }
  ?>
          </tbody>
        </table>
 <script type="text/html" id="switchTpl">
      <input type="checkbox" id="switchBtn{{d.id}}" name="zhuangtai" lay-skin="switch" lay-text="已售|未售" lay-filter="switchzhuangtai" value="{{d.zhuangtai}}" data-id="{{d.id}}" {{ d.zhuangtai == '已售' ? 'checked' : '' }}>
    </script>

    <script>
      layui.use(['table', 'layer', 'form'], function () {
        var table = layui.table;
        var layer = layui.layer;
        var form = layui.form;

        // 监听工具条点击事件
        table.on('tool(test)', function (obj) {
          var tr = obj.data;
          var eventName = obj.event;

          if (eventName === 'del') {
            // 删除操作
            layer.confirm("您确定删除吗?", function (index) {
              // 使用Ajax发送删除请求
              var xhr = new XMLHttpRequest();
              xhr.open('GET', "delete.php?id=" + tr.id, true);
              xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                  if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.status === 'success') {
                      alert(response.message);
                      // 执行其他操作或刷新数据列表等
                      obj.del(); // 删除表格行
                    } else {
                      alert(response.message);
                    }
                  } else {
                    alert('请求失败');
                  }
                }
              };
              xhr.send();

              layer.close(index);
            });
           } else if (eventName === 'edit') {
    // 跳转到编辑页面
    window.location.href = 'edit.php?id=' + tr.id;
  }  else if (eventName === 'switchzhuangtai') {
            // 切换状态操作
                                                      var newStatus = tr.zhuangtai === '已售' ? '未售' : '已售';

                                                       layer.confirm('确定要切换状态为' + newStatus + '吗？', function (index) {
                                                       // 使用Ajax发送更新请求
                                                            var xhr = new XMLHttpRequest();
                                                          xhr.open('POST', 'ysgengxin.php', true);
              xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
              xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                  if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.status === 'success') {
                      alert(response.message);
                      // 刷新数据列表等操作
                      obj.update({
                        zhuangtai: newStatus
                      });
                    } else {
                      alert(response.message);
                    }
                  } else {
                    alert('请求失败');
                  }
                }
              };
              xhr.send('id=' + tr.id + '&zhuangtai=' + newStatus);

              layer.close(index);
            });
          }
        });

        form.on('switch(switchzhuangtai)', function (data) {
          var newStatus = data.elem.checked ? '已售' : '未售';
          var id = data.elem.getAttribute('data-id');

          layer.confirm('确定要切换状态为' + newStatus + '吗？', function (index) {
            // 使用Ajax发送更新请求
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'ysgengxin.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
              if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                  var response = JSON.parse(xhr.responseText);
                  if (response.status === 'success') {
                    alert(response.message);
                    // 刷新数据列表等操作
                    table.reload('id_table');
                  } else {
                    alert(response.message);
                  }
                } else {
                  alert('请求失败');
                }
              }
            };
            xhr.send('id=' + id + '&zhuangtai=' + newStatus);

            layer.close(index);
          });
        });

      // 初始化表格并将实例存储在变量中
  var table = table.render({
    elem: '#id_table',
    height: 650,
    page: true,
    toolbar: '#toolbar',
    limit: 99,
    cols: [[
      { field: 'id', sort: true, title: 'ID' },
      { field: 'yuming', sort: true, title: '旺旺' },
      { field: 'zhuangtai', sort: true, title: '状态', templet: '#switchTpl' },
      { toolbar: '#toolbar', width: 100, title: '操作' }
    ]],
    data: <?php echo json_encode($data); ?>
  });
 });
    
    </script>
  </div>
</div>


<?php
include('foot.php');
?>