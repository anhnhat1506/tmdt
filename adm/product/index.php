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

    <table>
        <thead>
        <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Category</th>
            <th>Brand</th>
            <th>...</th>
            <th>...</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($ket_qua as  $key => $value){ ?>
            <tr>
                <td><?=$value['product_id']?></td>
                <td><?=$value['name']?></td>
                <td><?=$value['product_id']?></td>
                <td><?=$value['price']?></td>
                <td><?=$value['category_id']?></td>
                <td><?=$value['brand_id']?></td>
                <td><a href="capnhat.php?product_id=<?=$value["product_id"]?>">Sua</a></td>
                <td><a href="xoa.php?product_id=<?=$value["product_id"]?>">Xóa</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <a href="../index.php">HOME</a>




<!--/CONTENT-->
<?php  include $root_adm."/template/footer.php"; ?>