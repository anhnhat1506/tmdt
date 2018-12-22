<?php
    $con= mysqli_connect("localhost","root","","tmdt");
    mysqli_set_charset($con,"utf8");
    if (!$con){
        die("Kết nối thất bại".mysqli_connect_error());
    }
    $sql= mysqli_query($con,"select * from product;");
    var_dump(mysqli_affected_rows($con));
    var_dump(mysqli_data_seek($sql,6));
    echo "Cái này trả về số dòng có trong bảng product";
?>