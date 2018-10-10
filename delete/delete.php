<?php
include_once('../conf.php');
$id = $_POST['id'];
$sql = "DELETE FROM `posts` WHERE id=$id";
if(mysqli_query($link,$sql)) {
    if(mysqli_affected_rows($link))
        echo "<script>alert('播报删除成功 已删除ID：$id');location.href='../post.php';</script>";
    else {
        echo "<script>alert('播报删除失败');location.href='../post.php';</script>";
    }
} else {
    die(mysqli_error($link));
}
?>
