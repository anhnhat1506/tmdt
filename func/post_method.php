<?php
if (empty($_POST['name'] || $_POST['age'])){

        if (preg_match("/[^A-Za-z'-]/", $_POST['name'])){
            die("Bạn đã nhập sai - Vui lòng nhập lại nhé -Cảm ơn");
        }
        exit();

}


?>

<html>
<body>
    <form action="<?php $_PHP_SELF ?>" method="post">
        Họ Tên: <input name="name" type="text"/><br/><br/>
        Tuổi: <input name="age" type="text"/>
        <input type="submit" name="submit" value="Gửi"/>
    </form>

</body>


</html>
<?php
echo "Xin chào bạn ".$_POST['name']."<br/>";
echo "Tuổi của bạn là ".$_POST['age']." tuổi";
?>
