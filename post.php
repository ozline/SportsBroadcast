<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <link rel="stylesheet" href="./layui/css/layui.css">
    <title>系统后台 - 福州八中运动会播报系统</title>
</head>
<body class="layui-layout-body">

<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">福州八中运动会播报系统</div>
        <!-- 头部区域 -->
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">关于</a>
                <dl class="layui-nav-child">
                    <dd><a href="http://www.fzbz.com.cn">八中官网</a></dd>
                    <hr>
                    <dd><a href="">待添加</a></dd>
                    <dd><a href="">待添加</a></dd>
                </dl>
            </li>
        </ul>
    </div>

    <div class="layui-body">
        <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
            <ul class="layui-tab-title">
                <li class="layui-this">发布播报</li>
                <li>删除播报</li>
                <li>发布成绩</li>
                <li>删除成绩</li>
            </ul>


            <div class="layui-tab-content" >
                <div class="layui-tab-item layui-show">
                    <form class="layui-form" action="./post_php.php" method="post">
                        <div class="layui-form-item">
                            <label class="layui-form-label">作者：</label>
                            <div class="layui-input-inline">
                                <input value="fzbz" id="author" type="text" name="author" required  lay-verify="required" placeholder="请输入姓名" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">TIPS:不想改的话不需要改，统一用学校的名字</div>
                        </div>
                        <div class="layui-form-item layui-form-text">
                            <label class="layui-form-label">内容：</label>
                            <div class="layui-input-block">
                                <textarea id="post" name="post" placeholder="请输入内容" class="layui-textarea"></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">操作：</label>
                            <button tpye="submit" class="layui-btn layui-btn-lg layui-btn-normal" >立即发布</button>
                        </div>
                    </form>
                </div>
                <div class="layui-tab-item">
                    <form class="layui-form" action="./delete.php" method="post">
                        <div class="layui-form-item">
                            <label class="layui-form-label">消息ID：</label>
                            <div class="layui-input-inline">
                                <input id="id" type="text" name="id" required  lay-verify="required" placeholder="请输入ID" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">TIPS:消息的ID，显示在发布时间的后面</div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">操作：</label>
                            <button tpye="submit" class="layui-btn layui-btn-lg layui-btn-normal" >删除</button>
                        </div>
                    </form>
                </div>
                <div class="layui-tab-item">
                    <form class="layui-form" action="./post_mark.php" method="post">
                        <div class="layui-form-item">
                            <label class="layui-form-label">比赛名称</label>
                            <div class="layui-input-block">
                                <input id="name" type="text" name="name" required  lay-verify="required" placeholder="请输入" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                <label class="layui-form-label">冠军姓名</label>
                                <div class="layui-input-inline">
                                    <input id="A_name" type="tel" name="A_name" required lay-verify="required" autocomplete="off"  placeholder="请输入..." class="layui-input">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">班级</label>
                                <div class="layui-input-inline">
                                    <input id="A_class" type="text" name="A_class" required lay-verify="required" autocomplete="off"  placeholder="请输入..." class="layui-input">
                                </div>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                <label class="layui-form-label">亚军姓名</label>
                                <div class="layui-input-inline">
                                    <input id="B_name" type="tel" name="B_name" required lay-verify="required" autocomplete="off"  required placeholder="请输入..." class="layui-input">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">班级</label>
                                <div class="layui-input-inline">
                                    <input id="B_class" type="text" name="B_class" required lay-verify="required" autocomplete="off"  placeholder="请输入..." class="layui-input">
                                </div>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                <label class="layui-form-label">季军姓名</label>
                                <div class="layui-input-inline">
                                    <input id="C_name" type="tel" name="C_name" required lay-verify="required" autocomplete="off"  placeholder="请输入..." class="layui-input">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">班级</label>
                                <div class="layui-input-inline">
                                    <input id="C_class" type="text" name="C_class" required lay-verify="required" autocomplete="off"  placeholder="请输入..." class="layui-input">
                                </div>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">操作：</label>
                            <button tpye="submit" class="layui-btn layui-btn-lg layui-btn-normal" >发表</button>
                        </div>
                    </form>
                </div>
                <div class="layui-tab-item">
                    <form class="layui-form" action="./delete_mark.php" method="post">
                        <div class="layui-form-item">
                            <label class="layui-form-label">成绩ID：</label>
                            <div class="layui-input-inline">
                                <input id="id" type="text" name="id" required  lay-verify="required" placeholder="请输入ID" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">TIPS:成绩的ID，显示在发布时间的下一行</div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">操作：</label>
                            <button tpye="submit" class="layui-btn layui-btn-lg layui-btn-normal" >删除</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © ozlinex.com - 福州第八中学信息组 版权所有 - Powered by OZLINE
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