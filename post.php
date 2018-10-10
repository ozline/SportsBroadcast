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
                <a href="javascript:;">系统后台</a>
            </li>
        </ul>
    </div>

    <div class="layui-body">
        <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
            <ul class="layui-tab-title">
                <li class="layui-this">播报</li>
                <li>成绩</li>
                <li>稿件</li>
                <li>查看</li>
            </ul>


            <div class="layui-tab-content" >
                <div class="layui-tab-item layui-show">
                    <div class="layui-collapse" lay-accordion="">
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">发布播报</h2>
                            <div class="layui-colla-content layui-show">
                                <form class="layui-form" action="post/post_php.php" method="post" accept-charset=UTF-8">
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
                                        <button tpye="submit" class="layui-btn" >立即发布</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">删除播报</h2>
                            <div class="layui-colla-content">
                                <form class="layui-form" action="delete/delete.php" method="post">
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">消息ID：</label>
                                        <div class="layui-input-inline">
                                            <input id="id" type="text" name="id" required  lay-verify="required" placeholder="请输入ID" autocomplete="off" class="layui-input">
                                        </div>
                                        <div class="layui-form-mid layui-word-aux">TIPS:消息的ID，显示在发布时间的后面</div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">操作：</label>
                                        <button tpye="submit" class="layui-btn" >删除</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">如何获取ID</h2>
                            <div class="layui-colla-content">
                                访问网页[点击直接打开]：<a href="./index.php?id=true">http://sport.ozlinex.com/?id=true</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layui-tab-item">
                    <div class="layui-collapse" lay-accordion="">
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">发布成绩</h2>
                            <div class="layui-colla-content layui-show">
                                <form class="layui-form" action="post/post_mark.php" method="post">
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">比赛名称</label>
                                        <div class="layui-input-block">
                                            <input id="name" type="text" name="name" required placeholder="请输入" autocomplete="off" class="layui-input">
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <div class="layui-inline">
                                            <label class="layui-form-label">冠军姓名</label>
                                            <div class="layui-input-inline">
                                                <input id="A_name" type="text" name="A_name" required autocomplete="off"  placeholder="请输入..." class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">班级</label>
                                            <div class="layui-input-inline">
                                                <input id="A_class" type="text" name="A_class" required autocomplete="off"  placeholder="请输入..." class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">成绩</label>
                                            <div class="layui-input-inline">
                                                <input id="A_mark" type="text" name="A_mark" required autocomplete="off"  placeholder="请输入..." class="layui-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <div class="layui-inline">
                                            <label class="layui-form-label">亚军姓名</label>
                                            <div class="layui-input-inline">
                                                <input id="B_name" type="text" name="B_name" required  autocomplete="off"  required placeholder="请输入..." class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">班级</label>
                                            <div class="layui-input-inline">
                                                <input id="B_class" type="text" name="B_class" required  autocomplete="off"  placeholder="请输入..." class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">成绩</label>
                                            <div class="layui-input-inline">
                                                <input id="B_mark" type="text" name="B_mark" required autocomplete="off"  placeholder="请输入..." class="layui-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <div class="layui-inline">
                                            <label class="layui-form-label">季军姓名</label>
                                            <div class="layui-input-inline">
                                                <input id="C_name" type="text" name="C_name" required autocomplete="off"  placeholder="请输入..." class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">班级</label>
                                            <div class="layui-input-inline">
                                                <input id="C_class" type="text" name="C_class" required autocomplete="off"  placeholder="请输入..." class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">成绩</label>
                                            <div class="layui-input-inline">
                                                <input id="C_mark" type="text" name="C_mark" required autocomplete="off"  placeholder="请输入..." class="layui-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <div class="layui-inline">
                                            <label class="layui-form-label">第4名</label>
                                            <div class="layui-input-inline">
                                                <input id="D_name" type="text" name="D_name" autocomplete="off"  placeholder="可空" class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">班级</label>
                                            <div class="layui-input-inline">
                                                <input id="D_class" type="text" name="D_class" autocomplete="off"  placeholder="可空" class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">成绩</label>
                                            <div class="layui-input-inline">
                                                <input id="D_mark" type="text" name="D_mark" autocomplete="off"  placeholder="可空" class="layui-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <div class="layui-inline">
                                            <label class="layui-form-label">第5名</label>
                                            <div class="layui-input-inline">
                                                <input id="E_name" type="text" name="E_name" autocomplete="off"  placeholder="可空" class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">班级</label>
                                            <div class="layui-input-inline">
                                                <input id="E_class" type="text" name="E_class" autocomplete="off"  placeholder="可空" class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">成绩</label>
                                            <div class="layui-input-inline">
                                                <input id="E_mark" type="text" name="E_mark" autocomplete="off"  placeholder="可空" class="layui-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <div class="layui-inline">
                                            <label class="layui-form-label">第6名</label>
                                            <div class="layui-input-inline">
                                                <input id="F_name" type="text" name="F_name" autocomplete="off"  placeholder="可空" class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">班级</label>
                                            <div class="layui-input-inline">
                                                <input id="F_class" type="text" name="F_class" autocomplete="off"  placeholder="可空" class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">成绩</label>
                                            <div class="layui-input-inline">
                                                <input id="F_mark" type="text" name="F_mark" autocomplete="off"  placeholder="可空" class="layui-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">操作：</label>
                                        <button tpye="submit" class="layui-btn" >发表</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">删除成绩</h2>
                            <div class="layui-colla-content">
                                <form class="layui-form" action="delete/delete_mark.php" method="post">
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">成绩ID：</label>
                                        <div class="layui-input-inline">
                                            <input id="id" type="text" name="id" required  lay-verify="required" placeholder="请输入ID" autocomplete="off" class="layui-input">
                                        </div>
                                        <div class="layui-form-mid layui-word-aux">TIPS:成绩的ID，显示在发布时间的下一行</div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">操作：</label>
                                        <button tpye="submit" class="layui-btn" >删除</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">如何获取ID</h2>
                            <div class="layui-colla-content">
                                访问网页[点击直接打开]：<a href="./mark.php?id=true">http://sport.ozlinex.com/mark.php?id=true</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layui-tab-item">
                    <div class="layui-collapse" lay-accordion="">
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">稿件数据更新[表格]</h2>
                            <div class="layui-colla-content layui-show">
                                <form class="layui-form" action="post/post_gb.php" method="post"> <!-- 提示：如果你不想用form，你可以换成div等任何一个普通元素 -->
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">班级</label>
                                        <div class="layui-input-block">
                                            <select name="class" lay-filter="class" lay-search>
                                                <option value="-1">请选择</option>
                                                <optgroup label="高一">
                                                    <option value="g1_01">高一1班</option>
                                                    <option value="g1_02">高一2班</option>
                                                    <option value="g1_03">高一3班</option>
                                                    <option value="g1_04">高一4班</option>
                                                    <option value="g1_05">高一5班</option>
                                                    <option value="g1_06">高一6班</option>
                                                    <option value="g1_07">高一7班</option>
                                                    <option value="g1_08">高一8班</option>
                                                    <option value="g1_09">高一9班</option>
                                                    <option value="g1_10">高一10班</option>
                                                    <option value="g1_11">高一11班</option>
                                                    <option value="g1_12">高一12班</option>
                                                    <option value="g1_13">高一13班</option>
                                                    <option value="g1_14">高一14班</option>
                                                    <option value="g1_15">高一15班</option>
                                                </optgroup>
                                                <optgroup label="高二">
                                                    <option value="g2_01">高二1班</option>
                                                    <option value="g2_02">高二2班</option>
                                                    <option value="g2_03">高二3班</option>
                                                    <option value="g2_04">高二4班</option>
                                                    <option value="g2_05">高二5班</option>
                                                    <option value="g2_06">高二6班</option>
                                                    <option value="g2_07">高二7班</option>
                                                    <option value="g2_08">高二8班</option>
                                                    <option value="g2_09">高二9班</option>
                                                    <option value="g2_10">高二10班</option>
                                                    <option value="g2_11">高二11班</option>
                                                    <option value="g2_12">高二12班</option>
                                                    <option value="g2_13">高二13班</option>
                                                    <option value="g2_14">高二14班</option>
                                                    <option value="g2_15">高二15班</option>
                                                </optgroup>
                                                <optgroup label="高三">
                                                    <option value="g3_01">高三1班</option>
                                                    <option value="g3_02">高三2班</option>
                                                    <option value="g3_03">高三3班</option>
                                                    <option value="g3_04">高三4班</option>
                                                    <option value="g3_05">高三5班</option>
                                                    <option value="g3_06">高三6班</option>
                                                    <option value="g3_07">高三7班</option>
                                                    <option value="g3_08">高三8班</option>
                                                    <option value="g3_09">高三9班</option>
                                                    <option value="g3_10">高三10班</option>
                                                    <option value="g3_11">高三11班</option>
                                                    <option value="g3_12">高三12班</option>
                                                    <option value="g3_13">高三13班</option>
                                                    <option value="g3_14">高三14班</option>
                                                    <option value="g3_15">高三15班</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <div class="layui-inline">
                                            <label class="layui-form-label">投稿量</label>
                                            <div class="layui-input-inline">
                                                <input id="xuanbo" name="tougao" required autocomplete="off" class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">选播量</label>
                                            <div class="layui-input-inline">
                                                <input id="xuanbo" name="xuanbo" required autocomplete="off" class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">违规量</label>
                                            <div class="layui-input-inline">
                                                <input id="weigui" name="weigui" required autocomplete="off" class="layui-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <div class="layui-input-block">
                                            <button class="layui-btn" lay-submit lay-filter="*">立即提交</button>
                                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">稿件统计发布[时间线](会同步到表格中)</h2>
                            <div class="layui-colla-content">
                                <form class="layui-form" action="post/post_radio.php" method="post"> <!-- 提示：如果你不想用form，你可以换成div等任何一个普通元素 -->
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">班级</label>
                                        <div class="layui-input-block">
                                            <select name="class" lay-filter="class" lay-search>
                                                <option value="-1">请选择</option>
                                                <optgroup label="高一">
                                                    <option value="g1_01">高一1班</option>
                                                    <option value="g1_02">高一2班</option>
                                                    <option value="g1_03">高一3班</option>
                                                    <option value="g1_04">高一4班</option>
                                                    <option value="g1_05">高一5班</option>
                                                    <option value="g1_06">高一6班</option>
                                                    <option value="g1_07">高一7班</option>
                                                    <option value="g1_08">高一8班</option>
                                                    <option value="g1_09">高一9班</option>
                                                    <option value="g1_10">高一10班</option>
                                                    <option value="g1_11">高一11班</option>
                                                    <option value="g1_12">高一12班</option>
                                                    <option value="g1_13">高一13班</option>
                                                    <option value="g1_14">高一14班</option>
                                                    <option value="g1_15">高一15班</option>
                                                </optgroup>
                                                <optgroup label="高二">
                                                    <option value="g2_01">高二1班</option>
                                                    <option value="g2_02">高二2班</option>
                                                    <option value="g2_03">高二3班</option>
                                                    <option value="g2_04">高二4班</option>
                                                    <option value="g2_05">高二5班</option>
                                                    <option value="g2_06">高二6班</option>
                                                    <option value="g2_07">高二7班</option>
                                                    <option value="g2_08">高二8班</option>
                                                    <option value="g2_09">高二9班</option>
                                                    <option value="g2_10">高二10班</option>
                                                    <option value="g2_11">高二11班</option>
                                                    <option value="g2_12">高二12班</option>
                                                    <option value="g2_13">高二13班</option>
                                                    <option value="g2_14">高二14班</option>
                                                    <option value="g2_15">高二15班</option>
                                                </optgroup>
                                                <optgroup label="高三">
                                                    <option value="g3_01">高三1班</option>
                                                    <option value="g3_02">高三2班</option>
                                                    <option value="g3_03">高三3班</option>
                                                    <option value="g3_04">高三4班</option>
                                                    <option value="g3_05">高三5班</option>
                                                    <option value="g3_06">高三6班</option>
                                                    <option value="g3_07">高三7班</option>
                                                    <option value="g3_08">高三8班</option>
                                                    <option value="g3_09">高三9班</option>
                                                    <option value="g3_10">高三10班</option>
                                                    <option value="g3_11">高三11班</option>
                                                    <option value="g3_12">高三12班</option>
                                                    <option value="g3_13">高三13班</option>
                                                    <option value="g3_14">高三14班</option>
                                                    <option value="g3_15">高三15班</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <div class="layui-inline">
                                            <label class="layui-form-label">投稿量</label>
                                            <div class="layui-input-inline">
                                                <input id="xuanbo" name="tougao" required autocomplete="off" class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">选播量</label>
                                            <div class="layui-input-inline">
                                                <input id="xuanbo" name="xuanbo" required autocomplete="off" class="layui-input">
                                            </div>
                                        </div>
                                        <div class="layui-inline">
                                            <label class="layui-form-label">违规量</label>
                                            <div class="layui-input-inline">
                                                <input id="weigui" name="weigui" required autocomplete="off" class="layui-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <div class="layui-input-block">
                                            <button class="layui-btn" lay-submit lay-filter="*">立即提交</button>
                                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">删除稿件统计消息[时间线]</h2>
                            <div class="layui-colla-content">
                                <form class="layui-form" action="delete/delete_radio.php" method="post">
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">成绩ID：</label>
                                        <div class="layui-input-inline">
                                            <input id="id" type="text" name="id" required  lay-verify="required" placeholder="请输入ID" autocomplete="off" class="layui-input">
                                        </div>
                                        <div class="layui-form-mid layui-word-aux">TIPS:显示在违规量的下面</div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">操作：</label>
                                        <button tpye="submit" class="layui-btn" >删除</button>
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">使用方法</h2>
                            <div class="layui-colla-content">
                                如何获取ID：点击链接：<a href="./announce.php?id=true">http://sport.ozlinex.com/announce.php?id=true</a><br>
                                <br>
                                稿件数据更新[表格]，只会更新表格中的数据，不会在时间线中发布一则新的<br><br>
                                第二个发布到时间线，这个不仅会发布到时间线中，而且会更新表格中的数据
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layui-tab-item">
                    播报消息：<a href="./index.php?id=true">点击打开</a><br><br>
                    全部播报：<a href="./more.php?id=true">点击打开</a><br><br>
                    成绩显示：<a href="./mark.php?id=true">点击打开</a><br><br>
                    广播稿统计[表格]：<a href="./radio.php">点击打开</a><br><br>
                    广播稿统计[时间线]：<a href="./announce.php?id=true">点击打开</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });
</script>

</body>

</html>