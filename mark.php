<?php
/**
 * Created by PhpStorm.
 * User: ozline
 * Date: 2018/10/8
 * Time: 10:09 PM
 */

include_once('conf.php');
?>


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
                    <dd><a href="./more.php">全部消息</a></dd>
                    <dd><a href="./index.php">最新消息</a></dd>
                    <hr>
                    <dd><a href="http://www.fzbz.com.cn">官网</a></dd>
                    <dd><a href="https://b.xiumi.us/board/v5/3xoF6/109817946">指南</a></dd>
                </dl>
            </li>
        </ul>
    </div>

    <div class="layui-body">
        <fieldset class="layui-elem-field layui-field-title">
            <legend>运动会成绩表&nbsp;&nbsp;<a href="javascript:document.location.reload()" class="layui-btn layui-btn-xs">立即刷新</a></legend>
        </fieldset>
<!--                开始获取-->
                <?php
                    $sql = mysqli_query($link,"select * from mark order by time desc");
                    while($row = mysqli_fetch_array($sql)) {
                ?>
        <div class="layui-collapse" lay-accordion="">
            <div class="layui-colla-item">
                <h2 class="layui-colla-title"><?php echo $row['name'] ?></h2>
                <div class="layui-colla-content">
                    <p>发布时间：<?php
                        echo $row['time'];
                        if(isset($_GET['id'])){
                            $hx = $_GET['id'];
                        }
                        if(!empty($hx) && $hx=='true'){
                            echo "<br>ID:".$row['ID'];
                        }
                        ?>
                    </p>
                    <table class="layui-table">
                        <thead>
                        <tr>
                            <th>排名</th>
                            <th>姓名</th>
                            <th>班级</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><span class="layui-badge">冠军</span></td>
                            <td><?php echo $row['A_name'] ?></td>
                            <td><?php echo $row['A_class'] ?></td>
                        </tr>
                        <tr>
                            <td><span class="layui-badge layui-bg-blue">亚军</span></td>
                            <td><?php echo $row['B_name'] ?></td>
                            <td><?php echo $row['B_class'] ?></td>
                        </tr>
                        <tr>
                            <td><span class="layui-badge layui-bg-green">季军</span></td>
                            <td><?php echo $row['C_name'] ?></td>
                            <td><?php echo $row['C_class'] ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                    <?php } ?>
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

<!--<script>-->
<!--    setTimeout(function(){-->
<!--        location.reload();-->
<!--    },20000);-->
<!--</script>-->

</body>

</html>
