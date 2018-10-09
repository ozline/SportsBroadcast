<?php
include_once('conf.php');
$id = $_POST['id'];
$sql = "DELETE FROM `mark` WHERE ID=$id";
if(mysqli_query($link,$sql)) {
    if(mysqli_affected_rows($link))
        echo "<script>alert('成绩删除成功 已删除ID：$id');location.href='./post.php';</script>";
    else {
        echo "<script>alert('成绩删除失败');location.href='./post.php';</script>";
    }
} else {
    die(mysqli_error($link));
}
?>
