<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <link rel="stylesheet" href="./layui/css/layui.css">
    <link rel="stylesheet" href="./style.css">
    <title>首页 - 福州八中运动会播报系统</title>
</head>
<body class="layui-layout-body">

<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">福州八中运动会播报系统</div>
        <!-- 头部区域 -->
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">更多</a>
                <dl class="layui-nav-child">
                    <dd><a href="./announce.php">稿件发布</a></dd>
                    <hr>
                    <dd><a href="./index.php">最新消息</a></dd>
                    <dd><a href="./more.php">全部消息</a></dd>
                    <hr>
                    <dd><a href="./mark.php">比赛成绩</a></dd>
                    <hr>
                    <dd><a href="http://www.fzbz.com.cn">官网</a></dd>
                    <dd><a href="https://b.xiumi.us/board/v5/3xoF6/109817946">指南</a></dd>
                </dl>
            </li>
        </ul>
    </div>

    <div class="layui-body">
        <!-- 主体部分 -->
        <blockquote class="layui-elem-quote layui-quote-nm">
            TIPS:<br>
            按照选播量排序
        </blockquote>
        <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
            <ul class="layui-tab-title">
                <li class="layui-this">高一</li>
                <li>高二</li>
                <li>高三</li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <div class="layui-form">
                        <table class="layui-table">
                            <thead>
                            <tr>
                                <th>班级</th>
                                <th>投稿量</th>
                                <th>选播量</th>
                                <th>违规稿件量</th>
                                <th>最后更新时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include_once('conf.php');
                            $sql = mysqli_query($link,"select * from radio WHERE class LIKE 'g1_%' order by announce desc");
                            while($row = mysqli_fetch_array($sql)) {
                            ?>
                            <tr>
                                <td><?php
                                    $str= str_replace('g1_','高一',$row['class']);
                                    $str= str_replace('g2_','高二',$str);
                                    $str= str_replace('g3_','高三',$str);
                                    echo $str.'班';
                                    ?></td>
                                <td><?php echo $row['total'];?></td>
                                <td><?php echo $row['announce'];?></td>
                                <td><?php echo $row['error'];?></td>
                                <td><?php echo $row['time'];?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="layui-tab-item">
                    <div class="layui-form">
                        <table class="layui-table">
                            <thead>
                            <tr>
                                <th>班级</th>
                                <th>投稿量</th>
                                <th>选播量</th>
                                <th>违规稿件量</th>
                                <th>最后更新时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include_once('conf.php');
                            $sql = mysqli_query($link,"select * from radio WHERE class LIKE 'g2_%' order by announce desc");
                            while($row = mysqli_fetch_array($sql)) {
                                ?>
                                <tr>
                                    <td><?php
                                        $str= str_replace('g2_','高二',$row['class']);
                                        echo $str.'班';
                                        ?></td>
                                    <td><?php echo $row['total'];?></td>
                                    <td><?php echo $row['announce'];?></td>
                                    <td><?php echo $row['error'];?></td>
                                    <td><?php echo $row['time'];?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="layui-tab-item">
                    <div class="layui-form">
                        <table class="layui-table">
                            <thead>
                            <tr>
                                <th>班级</th>
                                <th>投稿量</th>
                                <th>选播量</th>
                                <th>违规稿件量</th>
                                <th>最后更新时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include_once('conf.php');
                            $sql = mysqli_query($link,"select * from radio WHERE class LIKE 'g3_%' order by announce desc");
                            while($row = mysqli_fetch_array($sql)) {
                                ?>
                                <tr>
                                    <td><?php
                                        $str= str_replace('g3_','高三',$row['class']);
                                        echo $str.'班';
                                        ?></td>
                                    <td><?php echo $row['total'];?></td>
                                    <td><?php echo $row['announce'];?></td>
                                    <td><?php echo $row['error'];?></td>
                                    <td><?php echo $row['time'];?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © ozlinex.com - 福州第八中学信息部 版权所有
    </div>
</div>
<script src="./layui/layui.js"></script>

<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>

</body>

</html>
