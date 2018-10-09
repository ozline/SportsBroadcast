<?php
// 连主库


$link=mysqli_connect('127.0.0.1:3306','root','mima011216');

//$link=mysqli_connect('47.98.60.14:3306','bzsport','mima011216');

// 连从库
// $link=mysql_connect(SAE_MYSQL_HOST_S.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);

if($link)
{
    mysqli_select_db($link,'bzsport');
    //your code goes here
}
?>