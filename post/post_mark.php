<?php
/**
 * Created by PhpStorm.
 * User: ozline
 * Date: 2018/10/9
 * Time: 7:26 PM
 */
        include_once('../conf.php');
        //$author = $_POST['author'];
        $name = $_POST['name'];
        $A_class = $_POST['A_class'];
        $A_name = $_POST['A_name'];
        $A_mark = $_POST['A_mark'];
        $B_class = $_POST['B_class'];
        $B_name = $_POST['B_name'];
        $B_mark = $_POST['B_mark'];
        $C_class = $_POST['C_class'];
        $C_name = $_POST['C_name'];
        $C_mark = $_POST['C_mark'];
        $D_class = $_POST['D_class'];
        $D_name = $_POST['D_name'];
        $D_mark = $_POST['D_mark'];
        $E_class = $_POST['E_class'];
        $E_name = $_POST['E_name'];
        $E_mark = $_POST['E_mark'];
        $F_class = $_POST['F_class'];
        $F_name = $_POST['F_name'];
        $F_mark = $_POST['F_mark'];
        $time = date('y-m-d H:i:s',time());
        $sql = "INSERT INTO mark (name, time , A_class, A_name , B_class , B_name , C_class , C_name , D_class , D_name , E_class , E_name , F_class , F_name , A_mark, B_mark, C_mark, D_mark, E_mark, F_mark) VALUES ('$name', '$time' , '$A_class', '$A_name' , '$B_class' , '$B_name' , '$C_class' , '$C_name' , '$D_class' , '$D_name' , '$E_class' , '$E_name' , '$F_class' , '$F_name', '$A_mark', '$B_mark', '$C_mark', '$D_mark', '$E_mark', '$F_mark')";
        if(mysqli_query($link,$sql)) {
            if(mysqli_affected_rows($link))
                echo "<script>alert('发布成功！');location.href='../post.php';</script>";
            else {
                echo "<script>alert('FAILD:发布失败');location.href='../post.php';</script>";
            }
        } else {
            die(mysqli_error($link));
        }