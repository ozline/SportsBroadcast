<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body class="layui-layout-body">

<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">福州八中运动会播报系统</div>
        <!-- 头部区域 -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item">
                <a href="javascript:;">关于</a>
                <dl class="layui-nav-child">
                    <dd><a href="http://www.fzbz.com.cn">八中官网</a></dd>
                    <hr>
                    <dd><a href="">待添加</a></dd>
                    <dd><a href="">待添加</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">后台</a>
                <dl class="layui-nav-child">
                    <dd><a href="http://www.fzbz.com.cn">发布</a></dd>
                    <dd><a href="">待添加</a></dd>
                    <dd><a href="">待添加</a></dd>
                </dl>
            </li>
        </ul>
    </div>

    <div class="layui-col-md12">
        <div class="layui-card">
            <div class="layui-card-header">登录</div>
            <div class="layui-card-body">
                <form class="layui-form" action="">
                    <div class="layui-form-item">
                        <label class="layui-form-label">账号:</label>
                        <div class="layui-input-inline">
                            <input id="username" type="text" name="title" required  lay-verify="required" placeholder="请输入账号" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">密码:</label>
                        <div class="layui-input-inline">
                            <input id="passwd" type="password" name="password" required  lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit lay-filter="formDemo">登录</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置输入</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    function btnClick(){
        var txtName = $('#txt_name').val();
        var txtAge = $('#txt_age').val();
        dataVal={txt_name:txtName,txt_age:txtAge};
        $.ajax({
            type: "GET",
            url: "a.php",
            data:dataVal,
            // data: "name=John&location=Boston",
            success: function(msg){
                alert(msg);
            }
        });
    }
</script>



<script src="./layui/layui.all.js"></script>

</body>
</html>