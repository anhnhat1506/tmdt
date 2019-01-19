<?php
 include "./san_pham.php";
    $sp1 = new SanPham();
    $them_sp = $sp1->fn_them_sp_moi();
    var_dump($them_sp);

 ?>