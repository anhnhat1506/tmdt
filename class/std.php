<?php
    //cu phap class cu, it su dung

    $nhat = new stdClass(); //mot class mac dinh, rong
    //$nhat = array(); //mang rong
    $nhat->ho_ten = "PHAM ANH NHAT";
    $nhat->nam_sinh = 1992;

    echo $nhat->ho_ten." - ".$nhat->nam_sinh;

?>