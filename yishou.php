<?php
header('Access-Control-Allow-Origin: *');
include($_SERVER['DOCUMENT_ROOT'] . '/sjk/sjk.php');   
// 执行查询操作
$sql = "SELECT yuming, beizhu, jiage, pingtai, link FROM mi WHERE zhuangtai = '已售'"; // 添加WHERE条件来筛选未售数据
$result = $conn->query($sql);

// 检查查询结果
if ($result->num_rows > 0) {
    // 输出数据
    while ($row = $result->fetch_assoc()) {
        echo '
            <div class="col-6 col-md-3 misbox">
								<div class="acard">
									<div class="acard-img">
										<button data-text="Awesome" class="abutton">
											<!-- 域名动画部分，仅修改域名 -->
											<span class="actual-text">
												&nbsp;' . $row["yuming"] . '&nbsp;
											</span>
											<!-- 可加链接跳转 -->
											<a href="#" target="_blank" style="height: 20px;display: flex;">
												<span class="ahover-text" aria-hidden="true">
													&nbsp;' . $row["yuming"] . '&nbsp;
												</span>
											</a>
										</button>
									</div>
									<div class="acard-info">
										<!-- 域名含义 -->
										<p class="atext-title">
											 ' . $row["beizhu"] . '
										</p>
										<!-- 域名所在地 -->
										<p class="atext-body">
											' . $row["pingtai"] . '
										</p>
									</div>
									<div class="acard-footer">
										<!-- 域名价格 -->
										<span class="stext-title">
											<del>￥' . $row["jiage"] . '</del>
										</span>
									
									</div>
								</div>
							</div>  
              ';
    }
} else {
    echo "没有找到已售数据";
}

// 关闭数据库连接
$conn->close();
?>
