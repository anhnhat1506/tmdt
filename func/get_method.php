<?php
if($_GET['name']||$_GET['age']){
    echo "Chào mừng bạn".$_GET['name']."<br/>";
    echo "Mừng tuổi bạn ".$_GET['age'];
exit();
}
?>
<html>
    <body>
        <form action="<?php ?>" method="GET">
            Tên: <input type="text" name="name"/><br/><br/>
            Tuổi: <input type="text" name="age"/>
            <input type="submit"/>
        </form>

    </body>
</html>
