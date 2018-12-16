<?php
include "config.php";


$rs=$db->fetch_single_row('product','product_id',1);
var_dump($rs);

?>