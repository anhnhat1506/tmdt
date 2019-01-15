<?php
//include config
$root_dir = $_SERVER["DOCUMENT_ROOT"].'/tmdt';
include $root_dir."/mysqli/config.php";
function fn_lay_tat_ca_ds_san_pham($ketnoi){
    $rs_ds =[];
    $sql_ds= mysqli_query($ketnoi,"select t1.*, t2.name AS category_name, t3.name as brand_name from product as t1
                                            LEFT JOIN category as t2 on t1.category_id=t2.category_id
                                            LEFT JOIN brand as t3 on t1.brand_id=t3.brand_id ORDER BY t1.product_id ASC;");
    $total_num_rows = mysqli_num_rows($sql_ds);
    for ($i=0;$i<$total_num_rows;$i++){
        $rs_ds[]= mysqli_fetch_assoc($sql_ds);
    }
    return $rs_ds;
}


$dssp = fn_lay_tat_ca_ds_san_pham($con);
header('Content-type: application/json');
echo json_encode($dssp);
exit;
?>