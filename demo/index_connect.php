<?php
include ("connect_test.php");
?>
<?php
    $sql ="select * from sinhvien";
    foreach ($conn ->query($sql) as $item){
        echo $item["hoten"]."<br/>";
    }
?>

