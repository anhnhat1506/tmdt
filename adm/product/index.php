<?php
$root_dir = $_SERVER["DOCUMENT_ROOT"].'/tmdt';
$root_adm=  $root_dir."/adm";
include $root_adm."/template/header.php"; ?>
<!--CONTENT-->



    <a href="them.php">Thêm sản phẩm</a>
    <?php
    $sql = "select * from product;";
    $result = mysqli_query($con,$sql); //f5 thuc thi mot cau truy van
    $total_num_rows = mysqli_num_rows($result); //dem so luong dong sau khi da truy van sqls

    $ket_qua = []; //array();
    for($i=0;$i<$total_num_rows;$i++){
        $ket_qua[] = mysqli_fetch_assoc($result); //lay tung dong
    }
    ?>

    <table class="table table-bordered">
        <thead>
        <tr >
            <th style="text-align: center;">Mã SP</th>
            <th style="text-align: center;">Tên SP</th>
            <th style="text-align: center;">Hình Ảnh</th>
            <th style="text-align: center;">Giá</th>
            <th style="text-align: center;">Category</th>
            <th style="text-align: center;">Brand</th>
            <th style="text-align: center;">Sửa</th>
            <th style="text-align: center;">Xóa</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($ket_qua as  $key => $value){ ?>
            <tr>
                <td style="text-align: center;"><?=$value['product_id']?></td>
                <td><?=$value['name']?></td>
                <td><?=$value['main_photo']?></td>
                <td><?=$value['price']?></td>
                <td><?=$value['category_id']?></td>
                <td><?=$value['brand_id']?></td>
                <td><a class="btn btn-round btn-success" href="capnhat.php?product_id=<?=$value["product_id"]?>"><i class="fa fa-pencil"></i></a></td>
                <td><a class="btn btn-round btn-danger" href="xoa.php?product_id=<?=$value["product_id"]?>"><i class="fa fa-trash"></i></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <a href="../index.php">HOME</a>




<!--/CONTENT-->
<?php  include $root_adm."/template/footer.php"; ?>