<?php
    session_start();
    if (isset($_SESSION['counter'])){
        $_SESSION['counter'] +=1;
    }
    else{
        $_SESSION['counter']=1;
    }
    $msg="Bạn đã truy cập trang này".$_SESSION['counter'];
    $msg.=" lần trong session này"


?>
<html>
    <head>
        <title>Thiết lập SESSION trong PHP</title>
    </head>
    <body>
        <?php
            echo $msg();
        ?>
    </body>
</html>
