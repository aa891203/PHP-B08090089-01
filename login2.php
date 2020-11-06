<?php 
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))
        echo "Welcome";//2、3行為 如果"id"為john以及"pwd"為john1234即顯示Welcome 
    else
        echo "fail login";//如果不是即顯示fail login
        
?>
