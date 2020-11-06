<?php
    error_reporting(0);
    
    $conn = mysqli_connect("localhost","root","", "mydb");//連接到localhost裡的root裡的mydb
    if (mysqli_connect_error($conn))//mysqli_connect_error顯示錯誤訊息
        die("資料庫連線錯誤");//輸出訊息並結束程式

    mysqli_set_charset($conn, "utf8");//使用utf8編碼
    $result=mysqli_query($conn, "select * from user");//回傳先前$conn裡的值
    while ($row=mysqli_fetch_array($result)) {
        echo $row[id];
        echo " ";
        echo $row[pwd];
        echo "<br>"; //當數據庫裡的值等於回傳的值 顯示id以及pwd
    }
?>
