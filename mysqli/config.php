<?php
$con = mysqli_connect("localhost","root","","tmdt");
if(!$con){
    die('Ket noi that bai:'.mysqli_connect_error());
}
mysqli_set_charset($con,"utf8");
?>