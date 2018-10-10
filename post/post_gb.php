<?php
include_once('../conf.php');
$class = $_POST['class'];
$tougao = $_POST['tougao'];
$xuanbo = $_POST['xuanbo'];
$weigui = $_POST['weigui'];
$time = date('y-m-d H:i:s',time());
if($class=="-1"){
    echo "<script>alert('请选择班级！');location.href='../post.php';</script>";
}
$sql = "UPDATE `radio` SET `total`=$tougao,`announce`=$xuanbo,`error`=$weigui,`time`='$time' WHERE `class`='$class';";
if(mysqli_query($link,$sql)) {
    if(mysqli_affected_rows($link))
        echo "<script>alert('发布成功！');location.href='../post.php';</script>";
    else {
        echo "<script>alert('发布失败');location.href='../post.php';</script>";
    }
} else {
    die(mysqli_error($link));
}
?>