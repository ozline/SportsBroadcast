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
                    <dd><a href="./radio.php">广播统计</a></dd>
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
        <fieldset class="layui-elem-field layui-field-title">
            <legend>广播稿播放统计</legend>
        </fieldset>
        <blockquote class="layui-elem-quote layui-quote-nm">
            TIPS:<br>
            如对本班稿件有疑问，可到主席台询问广播站负责人
        </blockquote>
        <ul class="layui-timeline">
            <?php
            include_once('conf.php');
            $sql = mysqli_query($link,"select * from guangbo order by time desc");
            while($row = mysqli_fetch_array($sql)) {
            ?>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis"></i>
                <div class="layui-timeline-content layui-text">
                    <h3 class="layui-timeline-title"><?php echo $row['time'];?></h3>
                    <p>
                        班级：<?php
                        $str= str_replace('g1_','高一',$row['class']);
                        $str= str_replace('g2_','高二',$str);
                        $str= str_replace('g3_','高三',$str);
                        echo $str.'班';
                        ?><br>
                        投稿量：<?php echo $row['total'];?>
                        &nbsp;&nbsp;选播量：<?php echo $row['anno'];?>
                        &nbsp;&nbsp;违规量：<?php echo $row['error'];?><br>
                        <?php
                        if(isset($_GET['id'])){
                            $hx = $_GET['id'];
                        }
                        if(!empty($hx) && $hx=='true'){
                            echo "&nbsp;|&nbsp;&nbsp;ID:".$row['id'];
                        }
                        ?>
                    </p>
                </div>
            </li>
            <?php } ?>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis"></i>
                <div class="layui-timeline-content layui-text">
                    <div class="layui-timeline-title">到底啦</div>
                </div>
            </li>
        </ul
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