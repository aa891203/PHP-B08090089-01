<?php
    $conn = mysqli_connect("localhost", "root", "", "mydb"); //$conn為MySQL數據庫服務器的連接
    
    $result=mysqli_query($conn, "select * from user");//$result為回傳值

    $row=mysqli_fetch_array($result);//$row代表查詢數據庫裡的資料

    echo $row['id'] + " " + $row['pwd']; //顯示出數據庫裡的id以及pwd
?>