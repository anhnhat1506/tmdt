<?php
$root_dir = $_SERVER["DOCUMENT_ROOT"].'/tmdt';
$root_adm=  $root_dir."/adm";
$TPL_TITLE = "Quản lý sản phẩm";
include $root_adm."/template/header.php"; ?>
<!--CONTENT-->
<?php
    $all_product= fn_lay_tat_ca_ds_san_pham($con);

?>


    <a href="them.php">Thêm sản phẩm</a>


    <table class="table table-bordered">
        <thead>
        <tr >
            <th style="text-align: center;">Mã SP</th>
            <th style="text-align: center;">Tên SP</th>
            <th style="text-align: center;">Hình Ảnh</th>
            <th style="text-align: center;">Giá</th>
            <th style="text-align: center;">Category</th>
            <th style="text-align: center;">Brand</th>
            <th style="text-align: center;">Label</th>

            <th style="text-align: center;">Sửa</th>
            <th style="text-align: center;">Xóa</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($all_product as  $key => $value){ ?>
            <tr>
                <td style="text-align: center;"><?=$value['product_id']?></td>
                <td><?=$value['name']?></td>
                <td><img src="<?=$value['main_photo']?>" alt="img"/></td>
                <td><?=$value['price']?></td>
                <td><?=$value['category_name']?></td>
                <td><?=$value['brand_name']?></td>
                <td>
                    <?php
                        $all_label_of_current_product = fn_lay_tat_ca_label_of_product($con,$value['product_id']);
                      foreach ($all_label_of_current_product as $key_label=>$value_label){
                          echo $value_label['label_name'].", ";
                      }

                    ?>

                </td>
                <td><a class="btn btn-round btn-success" href="capnhat.php?product_id=<?=$value["product_id"]?>"><i class="fa fa-pencil"></i></a></td>
                <td><a class="btn btn-round btn-danger" href="xoa.php?product_id=<?=$value["product_id"]?>"><i class="fa fa-trash"></i></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <a href="../index.php">HOME</a>




<!--/CONTENT-->
<?php  include $root_adm."/template/footer.php"; ?>