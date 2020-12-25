<?php
    session_start();//啟動session
if (!isset($_SESSION['id'])){   //判斷session的id是否可以連線
    echo "請登入系統";
    echo "<meta http-equiv='refresh' content='3;url=index.html''>"; 
}else{
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    if (mysqli_connect_error($conn))
      die("無法連線資料庫");
    $sql = "update bulletin set title='{$_POST['title']}', content='{$_POST['content']}', type={$_POST['type']}, time='{$_POST['time']}' where bid={$_POST['bid']}"; 
    //echo $sql;
    if (!mysqli_query($conn, $sql)){//判斷查詢是否成功
     echo("Error description: " . mysqli_error($conn));   
    }
    else  
       echo "修改成功";   
    mysqli_close($conn);
    echo "<meta http-equiv='refresh' content='3;url=bulletin.php''>"; 
}
?>
