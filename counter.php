<?php
    error_reporting(0);
    session_start();//啟動session
    if (!isset($_SESSION["counter1"])){
        $_SESSION["counter1"]=1;
    }else{
        $_SESSION["counter1"]++;
    }
    //判斷有多少登入人次
    echo "登入{$_SESSION["counter1"]}人次";
?>