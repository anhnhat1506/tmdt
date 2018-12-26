<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./layout/header.php"?>
    <link href="./css/index.css" rel="stylesheet">
</head>
<!--Chan v2xxl zzzzzzzzzzzz-->
<body>

<!-- Navigation -->
<?php include "./layout/nav.php";?>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div>

        <div class="col-lg-3">
            <?php
            /*select * from brand
            $all_brand=$db->fetch_all('brand');
            //select * from category
            $all_category=$db->fetch_all('category');
            //select * from category
            if($category_id!=-1){
                //san pham theo category
                $all_product=$db->fetch_multi_row('product',array('product_id','name','price','main_photo','category_id','brand_id','introduce'),array('category_id'=>$category_id));
            }elseif($brand_id!=-1){
                //san pham theo brand
                $all_product= $db->fetch_multi_row('product',array('product_id','name','price','main_photo','category_id','brand_id','introduce'),array('brand_id'=>$brand_id));
            }else{
                //tat ca san pham
                $all_product=$db->fetch_all('product');
            }*/
            ?>
            <?php
                function fn_ds_sp($ketnoi){
                    $rs_ds_sp=[];
                    $sql_ds_sp_test= mysqli_num_rows($ketnoi,"select * from product");
                    $tong_so_dong_dssp= mysqli_num_rows($sql_ds_sp_test);
                    var_dump($tong_so_dong_dssp);
                    for ($i=0;$i< $tong_so_dong_dssp;$i++){
                        $rs_ds_sp[]= mysqli_fetch_all($sql_ds_sp_test);
                    }
                    return $rs_ds_sp;
                }

            ?>
            <?php
            $tat_ca_dssp= fn_ds_sp($con);

            ?>
            </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row">
                <?php
                foreach ($tat_ca_dssp as $key=>$value){
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <a href="#"><img class="card-img-top" src="<?=$value['main_photo']?>" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href=""><?=$value['name']?></a>
                                </h4>
                                <h5><?=number_format($value['price'],0,"",".")?></h5>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php
include "./layout/footer.php";
?>
</body>

</html>
