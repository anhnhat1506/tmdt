<?php
$con = mysqli_connect("localhost","root","","tmdt");
var_dump(mysqli_autocommit($con,true));
?>