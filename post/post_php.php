<?php
        include_once('../conf.php');
        $author = $_POST['author'];
        $post = $_POST['post'];
        $time = date('y-m-d h:i:s',time());
        $sql = "INSERT INTO posts (author, post, time) VALUES ('$author', '$post', '$time')";
        if(mysqli_query($link,$sql)) {
            if(mysqli_affected_rows($link))
                echo "<script>alert('发布成功！');location.href='../post.php';</script>";
            else {
                echo "<script>alert('FAILD:发布失败');location.href='../post.php';</script>";
            }
        } else {
            die(mysqli_error($link));
        }
?>