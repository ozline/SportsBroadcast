<?php
/**
 * Created by PhpStorm.
 * User: ozline
 * Date: 2018/10/9
 * Time: 7:26 PM
 */
        include_once('conf.php');
        //$author = $_POST['author'];
        $name = $_POST['name'];
        $A_class = $_POST['A_class'];
        $A_name = $_POST['A_name'];
        $B_class = $_POST['B_class'];
        $B_name = $_POST['B_name'];
        $C_class = $_POST['C_class'];
        $C_name = $_POST['C_name'];
        $time = date('y-m-d h:i:s',time());
        $sql = "INSERT INTO mark (name, time , A_class, A_name , B_class , B_name , C_class , C_name) VALUES ('$name', '$time' , '$A_class', '$A_name' , '$B_class' , '$B_name' , '$C_class' , '$C_name')";
        if(mysqli_query($link,$sql)) {
            if(mysqli_affected_rows($link))
                echo "<script>alert('发布成功！');location.href='./post.php';</script>";
            else {
                echo "<script>alert('FAILD:发布失败');location.href='./post.php';</script>";
            }
        } else {
            die(mysqli_error($link));
        }