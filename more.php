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
                <a href="javascript:">更多</a>
                <dl class="layui-nav-child">
                    <dd><a href="./announce.php">稿件发布</a></dd>
                    <dd><a href="./radio.php">稿件总计</a></dd>
                    <hr>
                    <dd><a href="./index.php">最新消息</a></dd>
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

        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">全部 | 最后更新：<?php
                    echo date('m-d h:i:s',time());
                    ?>
                    &nbsp;&nbsp;<a href="javascript:document.location.reload()" class="layui-btn layui-btn-xs">立即刷新</a>
                </div>
                <div class="layui-card-body">
                    <div class="chatWrapper">
                        <ul id="chat">
                            <?php
                            include_once('conf.php');
                            $sql = mysqli_query($link,"select * from posts order by time desc limit 10");
                            while($row = mysqli_fetch_array($sql)) {
                                ?>
                                <li>
                                    <div class="userFace"><img src="./img/fzbz1.png"></div>
                                    <div class="userSay">
                                        <div class="inlineText">
                                            <?php echo str_replace(PHP_EOL,"<br>",$row['post']); ?>
                                            <br><br>
                                            发布时间：<?php echo $row['time'] ?>
                                            <?php
                                            if(isset($_GET['id'])){
                                                $hx = $_GET['id'];
                                            }
                                            if(!empty($hx) && $hx=='true'){
                                                echo "&nbsp;|&nbsp;&nbsp;ID:".$row['id'];
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
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

<script>
    setTimeout(function(){
        location.reload();
    },20000);
</script>

</body>

</html>
