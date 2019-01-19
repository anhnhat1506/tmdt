<?php
    require_once ("./ProductDAL.php");
    require_once ("./ProductDTO.php");
    $p = new ProductDTO();
    $p->name="san pham new 1";
    $p->price=15000;

    //goi lop DAL va truyen DTO vao ham them moi san pham
    $pdal = new ProductDAL();
    $pdal->fn_them_sp_moi($p);

?>