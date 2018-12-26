
<html>
    <body>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            Tên: <input type="text" name="name"/><br/><br/>
            Email: <input type="text" name="email"/><br/>
            <input type="submit" value="Submit" name="submit"/>
        </form>

    </body>
</html>
<?php

if(isset($_GET['name'])||isset($_GET['email'])){
    echo "Xin chào ".$_GET['name']."<br/>";
    echo "Email của bạn là ".$_GET['email']."<br/>";
}
?>